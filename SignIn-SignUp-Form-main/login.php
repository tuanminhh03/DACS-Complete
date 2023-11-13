<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "dacs";


  $conn = new mysqli($servername, $username, $password, $database);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  $username = $_POST["username"];
  $password = $_POST["password"];


  $sql = "SELECT * FROM taikhoannguoidung WHERE tknguoidung = ? AND mknguoidung = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $username, $password);

  if ($stmt->execute()) {
    $result = $stmt->get_result();
    if ($result->num_rows === 1) {
      echo "<script>alert('Đăng nhập thành công.');</script>";
      session_start();
      $_SESSION["username"] = $username;
      header("Location: ../web-user/index.php");
      exit();
    } else {
      echo "<script>alert('Đăng nhập thất bại. Vui lòng kiểm tra tên người dùng và mật khẩu.');</script>";
      echo "<script>window.location = 'index.html';</script>";
    }
  } else {
    echo "<script>alert('Đăng nhập thất bại: " . $stmt->error . "');</script>";
  }

  $stmt->close();
  $conn->close();
}
?>
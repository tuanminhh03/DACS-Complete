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


    $tknguoidung = $_POST["username"];
    $mail = $_POST["email"];
    $mknguoidung = $_POST["password"];

    $checkSql = "SELECT * FROM taikhoannguoidung WHERE tknguoidung = ?";
    $checkStmt = $conn->prepare($checkSql);
    $checkStmt->bind_param("s", $tknguoidung);

    $checkStmt->execute();
    $checkResult = $checkStmt->get_result();

    if ($checkResult->num_rows > 0) {

        echo "<script>alert('Tên tài khoản đã tồn tại. Hãy chọn tên tài khoản khác');</script>";
        echo "<script>window.location = 'index.html';</script>";
        exit();
    }


    $sql = "INSERT INTO taikhoannguoidung (tknguoidung, mail, mknguoidung) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $tknguoidung, $mail, $mknguoidung);

    if ($stmt->execute()) {

        echo "<script>alert('Đăng ký thành công.');</script>";

        echo "<script>window.location = 'index.html';</script>";
    } else {
        echo "<script>alert('Đăng ký thất bại: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
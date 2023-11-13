<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dacs"; // Điền tên database của bạn

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $hoTen = $_POST["hoTen"];
    $soDienThoai = $_POST["soDienThoai"];
    $ngheNghiep = $_POST["ngheNghiep"];
    $email = $_POST["email"];
    $ngaySinh = $_POST["ngaySinh"];
    $gioiTinh = $_POST["gioiTinh"];
    $soCMND = $_POST["soCMND"];
    $danToc = $_POST["danToc"];
    $diaChi = $_POST["diaChi"];
    $tinhThanh = $_POST["tinhThanh"];
    $phuongXa = $_POST["phuongXa"];
    $quanHuyen = $_POST["quanHuyen"];

    // Lấy idnguoidung từ bảng taikhoannguoidung dựa trên username
    session_start();
    $usernameSession = $_SESSION["username"];
    $getIdQuery = "SELECT idnguoidung FROM taikhoannguoidung WHERE tknguoidung = ?";
    $getIdStmt = $conn->prepare($getIdQuery);
    $getIdStmt->bind_param("s", $usernameSession);
    $getIdStmt->execute();
    $getIdResult = $getIdStmt->get_result();
    $row = $getIdResult->fetch_assoc();
    $idNguoiDung = $row["idnguoidung"];

    // Thêm thông tin bệnh nhân vào bảng benhnhan
    $sql = "INSERT INTO taikhoannguoidung (hoTen, soDienThoai, ngheNghiep, email, ngaySinh, gioiTinh, soCMND, danToc, diaChi, tinhThanh, phuongXa, quanHuyen, idnguoidung)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssssi", $hoTen, $soDienThoai, $ngheNghiep, $email, $ngaySinh, $gioiTinh, $soCMND, $danToc, $diaChi, $tinhThanh, $phuongXa, $quanHuyen, $idNguoiDung);

    if ($stmt->execute()) {
        echo "<script>alert('Cập nhật thông tin thành công.');</script>";
    } else {
        echo "<script>alert('Cập nhật thông tin thất bại: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
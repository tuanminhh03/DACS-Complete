<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ten_cua_database"; // Thay "ten_cua_database" bằng tên thực tế của cơ sở dữ liệu

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
    $username = $_SESSION["username"]; // Lấy tên tài khoản từ session

    $insertSql = "INSERT INTO benhnhan (idnguoidung, hoTen, soDienThoai, ngheNghiep, email, ngaySinh, gioiTinh, soCMND, danToc, diaChi, tinhThanh, phuongXa, quanHuyen) 
                  VALUES ((SELECT idnguoidung FROM taikhoannguoidung WHERE tknguoidung=?), ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $insertStmt = $conn->prepare($insertSql);
    $insertStmt->bind_param("ssssssssssss", $username, $hoTen, $soDienThoai, $ngheNghiep, $email, $ngaySinh, $gioiTinh, $soCMND, $danToc, $diaChi, $tinhThanh, $phuongXa, $quanHuyen);

    if ($insertStmt->execute()) {
        echo "<script>alert('Cập nhật thông tin thành công.');</script>";
    } else {
        echo "<script>alert('Cập nhật thông tin thất bại: " . $insertStmt->error . "');</script>";
    }

    $insertStmt->close();
    $conn->close();
}
?>
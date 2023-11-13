<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "ten_cua_database"; // Điền tên database của bạn

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

    $sql = "INSERT INTO benhnhan (hoTen, soDienThoai, ngheNghiep, email, ngaySinh, gioiTinh, soCMND, danToc, diaChi, tinhThanh, phuongXa, quanHuyen)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssss", $hoTen, $soDienThoai, $ngheNghiep, $email, $ngaySinh, $gioiTinh, $soCMND, $danToc, $diaChi, $tinhThanh, $phuongXa, $quanHuyen);

    if ($stmt->execute()) {
        echo "<script>alert('Cập nhật thông tin thành công.');</script>";
    } else {
        echo "<script>alert('Cập nhật thông tin thất bại." . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
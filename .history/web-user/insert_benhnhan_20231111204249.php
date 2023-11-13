<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION["username"])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dacs"; // Thay "ten_cua_database" bằng tên thực tế của cơ sở dữ liệu

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
    $username = $_SESSION["username"];

    // Lấy thông tin hiện tại từ bảng taikhoannguoidung
    $getCurrentInfoSql = "SELECT hoTen, soDienThoai, ngheNghiep, email, ngaySinh, gioiTinh, soCMND, danToc, diaChi, tinhThanh, phuongXa, quanHuyen FROM taikhoannguoidung WHERE tknguoidung = ?";
    $getCurrentInfoStmt = $conn->prepare($getCurrentInfoSql);
    $getCurrentInfoStmt->bind_param("s", $username);
    $getCurrentInfoStmt->execute();
    $getCurrentInfoResult = $getCurrentInfoStmt->get_result();

    if ($getCurrentInfoResult->num_rows > 0) {
        $row = $getCurrentInfoResult->fetch_assoc();

        // Kiểm tra từng trường và cập nhật nếu có sự khác biệt
        if ($hoTen !== $row["hoTen"]) {
            $row["hoTen"] = $hoTen;
        }
        // Tiếp tục kiểm tra và cập nhật cho các trường khác

        // Cập nhật thông tin trong bảng taikhoannguoidung
        $updateSql = "UPDATE taikhoannguoidung SET hoTen=?, soDienThoai=?, ngheNghiep=?, email=?, ngaySinh=?, gioiTinh=?, soCMND=?, danToc=?, diaChi=?, tinhThanh=?, phuongXa=?, quanHuyen=? WHERE tknguoidung=?";
        $updateStmt = $conn->prepare($updateSql);
        $updateStmt->bind_param("ssssssssssss", $row["hoTen"], $soDienThoai, $ngheNghiep, $email, $ngaySinh, $gioiTinh, $soCMND, $danToc, $diaChi, $tinhThanh, $phuongXa, $quanHuyen, $username);

        if ($updateStmt->execute()) {
            echo "<script>alert('Cập nhật thông tin thành công.');</script>";
            header("Location: ./updatehosobenhnhan.php");
            exit();
        } else {
            echo "<script>alert('Cập nhật thông tin thất bại, vui lòng thử lại sau." . $updateStmt->error . "');</script>";
            header("Location: ./updatehosobenhnhan.php");
            exit();
        }
    } else {
        echo "<script>alert('Không tìm thấy thông tin người dùng.');</script>";
    }

    $getCurrentInfoStmt->close();
    $conn->close();
}
?>
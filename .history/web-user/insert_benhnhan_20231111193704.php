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

    // Lấy idnguoidung từ bảng taikhoannguoidung dựa trên tknguoidung
    $getIdSql = "SELECT idnguoidung FROM taikhoannguoidung WHERE tknguoidung = ?";
    $getIdStmt = $conn->prepare($getIdSql);
    $getIdStmt->bind_param("s", $username);
    $getIdStmt->execute();
    $getIdResult = $getIdStmt->get_result();

    if ($getIdResult->num_rows > 0) {
        $row = $getIdResult->fetch_assoc();
        $idnguoidung = $row["idnguoidung"];

        // Cập nhật thông tin trong bảng taikhoannguoidung
        $updateSql = "UPDATE taikhoannguoidung SET hoTen=?, soDienThoai=?, ngheNghiep=?, email=?, ngaySinh=?, gioiTinh=?, soCMND=?, danToc=?, diaChi=?, tinhThanh=?, phuongXa=?, quanHuyen=? WHERE idnguoidung=?";
        $updateStmt = $conn->prepare($updateSql);
        $updateStmt->bind_param("ssssssssssssi", $hoTen, $soDienThoai, $ngheNghiep, $email, $ngaySinh, $gioiTinh, $soCMND, $danToc, $diaChi, $tinhThanh, $phuongXa, $quanHuyen, $idnguoidung);

        if ($updateStmt->execute()) {
            echo "<script>alert('Cập nhật thông tin thành công.');</script>";
        } else {
            echo "<script>alert('Cập nhật thông tin thất bại: " . $updateStmt->error . "');</script>";
        }

        $updateStmt->close();
    } else {
        echo "<script>alert('Không tìm thấy thông tin người dùng.');</script>";
    }

    $getIdStmt->close();
    $conn->close();
}
?>
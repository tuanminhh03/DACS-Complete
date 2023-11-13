<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION["username"])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dacs";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_SESSION["username"];

    $getCurrentInfoSql = "SELECT hoTen, soDienThoai, ngheNghiep, email, ngaySinh, gioiTinh, soCMND, danToc, diaChi, tinhThanh, phuongXa, quanHuyen FROM taikhoannguoidung WHERE tknguoidung = ?";
    $getCurrentInfoStmt = $conn->prepare($getCurrentInfoSql);
    $getCurrentInfoStmt->bind_param("s", $username);
    $getCurrentInfoStmt->execute();
    $getCurrentInfoResult = $getCurrentInfoStmt->get_result();

    if ($getCurrentInfoResult->num_rows > 0) {
        $row = $getCurrentInfoResult->fetch_assoc();

        $updateFields = ["hoTen", "soDienThoai", "ngheNghiep", "email", "ngaySinh", "gioiTinh", "soCMND", "danToc", "diaChi", "tinhThanh", "phuongXa", "quanHuyen"];
        $updateSql = "UPDATE taikhoannguoidung SET ";
        $needUpdate = false;

        foreach ($updateFields as $field) {
            if (isset($_POST[$field]) && $_POST[$field] != $row[$field]) {
                $updateSql .= "$field=?, ";
                $needUpdate = true;
            }
        }

        $updateSql = rtrim($updateSql, ", ");

        if ($needUpdate) {
            $updateSql .= " WHERE tknguoidung=?";
            $updateStmt = $conn->prepare($updateSql);

            $bindParams = "ssssssssssss"; // Điền giá trị phù hợp với kiểu dữ liệu của từng trường

            $updateValues = [];

            foreach ($updateFields as $field) {
                if (isset($_POST[$field]) && $_POST[$field] != $row[$field]) {
                    $updateValues[] = $_POST[$field];
                }
            }

            $updateValues[] = $username;

            $updateStmt->bind_param($bindParams, ...$updateValues);

            if ($updateStmt->execute()) {
                echo "<script>alert('Cập nhật thông tin thành công.');</script>";
                echo "<script>window.location = './updatehosobenhan.php';</script>";
                exit();
            } else {
                echo "<script>alert('Cập nhật thông tin thất bại, vui lòng thử lại sau." . $updateStmt->error . "');</script>";
                echo "<script>window.location = './updatehosobenhan.php';</script>";
                exit();
            }
        } else {

            echo "<script>window.location = './updatehosobenhan.php';</script>";
        }
    } else {
        echo "<script>alert('Không tìm thấy thông tin người dùng.');</script>";
    }

    $getCurrentInfoStmt->close();
    $conn->close();
}
?>
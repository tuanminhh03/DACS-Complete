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

    $username = $_SESSION["username"];

    // Lấy thông tin hiện tại từ bảng taikhoannguoidung
    $getCurrentInfoSql = "SELECT hoTen, soDienThoai, ngheNghiep, email, ngaySinh, gioiTinh, soCMND, danToc, diaChi, tinhThanh, phuongXa, quanHuyen FROM taikhoannguoidung WHERE tknguoidung = ?";
    $getCurrentInfoStmt = $conn->prepare($getCurrentInfoSql);
    $getCurrentInfoStmt->bind_param("s", $username);
    $getCurrentInfoStmt->execute();
    $getCurrentInfoResult = $getCurrentInfoStmt->get_result();

    if ($getCurrentInfoResult->num_rows > 0) {
        $row = $getCurrentInfoResult->fetch_assoc();

        // Kiểm tra và cập nhật thông tin
        $updateFields = ["hoTen", "soDienThoai", "ngheNghiep", "email", "ngaySinh", "gioiTinh", "soCMND", "danToc", "diaChi", "tinhThanh", "phuongXa", "quanHuyen"];
        $updateSql = "UPDATE taikhoannguoidung SET ";

        foreach ($updateFields as $field) {
            if (isset($_POST[$field]) && $_POST[$field] != $row[$field]) {
                $updateSql .= "$field=?, ";
            }
        }

        // Loại bỏ dấu ',' cuối cùng
        $updateSql = rtrim($updateSql, ", ");

        $updateSql .= " WHERE tknguoidung=?";
        $updateStmt = $conn->prepare($updateSql);

        // Bind các giá trị cần thiết
        $bindParams = "";
        $updateValues = [];

        foreach ($updateFields as $field) {
            if (isset($_POST[$field]) && $_POST[$field] != $row[$field]) {
                $bindParams .= "s";
                $updateValues[] = $_POST[$field];
            }
        }

        $bindParams .= "s"; // Cho giá trị của WHERE
        $updateValues[] = $username;

        // Nếu có ít nhất một trường được cập nhật
        if (!empty($updateValues)) {
            // Thêm các giá trị vào bind_param
            $updateStmt->bind_param($bindParams, ...$updateValues);

            if ($updateStmt->execute()) {
                echo "<script>alert('Cập nhật thông tin thành công.');</script>";
                header("Location: ./updatehosobenhan.php");
                exit();
            } else {
                echo "<script>alert('Cập nhật thông tin thất bại, vui lòng thử lại sau." . $updateStmt->error . "');</script>";
                header("Location: ./updatehosobenhan.php");
                exit();
            }
        } else {
            echo "<script>alert('Không có thông tin nào được cập nhật.');</script>";
        }
    } else {
        echo "<script>alert('Không tìm thấy thông tin người dùng.');</script>";
    }

    $getCurrentInfoStmt->close();
    $conn->close();
}
?>
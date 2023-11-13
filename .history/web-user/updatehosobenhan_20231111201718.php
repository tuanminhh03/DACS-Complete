<?php
session_start();

// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$database = "dacs"; // Thay thế bằng tên database của bạn

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION["username"])) {
    // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
    header("Location: ../SignIn-SignUp-Form-main/index.html");
    exit();
}

// Lấy thông tin từ cơ sở dữ liệu
$username = $_SESSION["username"];
$selectSql = "SELECT hoTen, soDienThoai, ngheNghiep, email, ngaySinh, gioiTinh, soCMND, danToc, diaChi, tinhThanh, phuongXa, quanHuyen FROM taikhoannguoidung WHERE tknguoidung = ?";
$selectStmt = $conn->prepare($selectSql);
$selectStmt->bind_param("s", $username);
$selectStmt->execute();
$selectStmt->bind_result($hoTen, $soDienThoai, $ngheNghiep, $email, $ngaySinh, $gioiTinh, $soCMND, $danToc, $diaChi, $tinhThanh, $phuongXa, $quanHuyen);
$selectStmt->fetch();
$selectStmt->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./assest/img/icon_2.svg">
    <link rel="stylesheet" href="./assest/font/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="./boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="./assest/css/updatehosobenhnhan.css">
    <link rel="stylesheet" href="./jquery/script.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <header class="doccure_header">
        <div class="doccure_header-mid">
            <div class="container-fluid">
                <div class="navbar">
                    <div class="doccure_logo">
                        <div class="logo_wrap">
                            <a href="#" rel="home">
                                <img src="./assest/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <ul id="menu_primary_menu" class="navbar-nav">
                        <li class="menu_item">
                            <a href="./index.php">Trang chủ</a>
                        </li>
                        <li class="menu_item">
                            <a href="./service.php">Dịch vụ y tế<i class="fa-solid fa-angle-down"></i></a>
                            <div class="subnav" style="width: 160px;">
                                <a href="./service.php">Đặt khám tại cơ sở</a>
                                <a href="./service2.php">Đặt khám theo bác sĩ</a>
                                <a href="">Tư vấn khám bệnh từ xa</a>
                                <a href="./service3.php">Đặt lịch xét nghiệm</a>
                                <a href="#">Y tế tại nhà</a>
                            </div>
                        </li>
                        <li class="menu_item">
                            <a href="./medical.php">Cơ sở y tế<i class="fa-solid fa-angle-down"></i></a>
                            <div class="subnav" style="width: 160px;">
                                <a href="#">Bệnh viện công</a>
                                <a href="#">Bệnh viện tư </a>
                                <a href="#">Phòng khám </a>
                                <a href="#">Phònh mạch</a>
                            </div>
                        </li>
                        <li class="menu_item">
                            <a href="./doctor.php">Bác sĩ</a>
                        </li>
                        <li class="menu_item">
                            <a href="./news.php">Tin Tức</a>
                        </li>
                    </ul>
                    <div class="doccure_info">
                        <div class="nav-item d-flex">
                            <div class="headder-contact-img pt-2">
                                <i class="fa-regular fa-hospital" style="font-size: 30px;"></i>
                            </div>
                            <div class="header_contact_detail">
                                <p class="conact_header">Contact</p>
                                <p class="contact_info_header"><b>+1 123 4567456</b></p>
                            </div>
                            <div class="style_user">
                                <button class="user">
                                    <?php
                                    session_start();
                                    if (isset($_SESSION["username"])) {
                                        echo $_SESSION["username"];
                                    } else {
                                        echo "None";
                                    }
                                    ?>
                                </button>
                                <div class="subnav">
                                    <a href="./hosobenhnhan.php"><i class="fa-solid fa-address-card"
                                            style="margin-right: 15px;"></i>Hồ Sơ Bệnh Nhân</a>
                                    <a href="./xacnhan.php"><i class="fa-solid fa-calendar-days"
                                            style="margin-right: 15px;"></i>Lịch Khám Bệnh</a>
                                    <a href="#"><i class="fa-solid fa-bell" style="margin-right: 15px;"></i>Thông
                                        báo</a>
                                    <a href="./updatehosobenhan.php"><i class="fa-solid fa-pen-to-square"
                                            style="margin-right: 15px;"></i>Cập nhập hồ sơ</a>
                                    <a href="../web/index.html" style="color: #e10e0e;"><i
                                            class="fa-solid fa-right-from-bracket"
                                            style="color: #e10e0e;margin-right: 15px;"></i>Đăng xuất</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="style_main">
        <div class="style_header">
            <div class="content-introduce mt-4 p-5">
                <div class="map container">
                    <a href="./index.html">TRANG CHỦ</a>
                    <i class="fa-solid fa-angle-right"></i>
                    <p class="cl-brown">Cập Nhập Thông Tin Tài Khoản</p>
                </div>
            </div>
            <div class="style-body">
                <div class="text_title m-4" style="text-align: center;color: rgb(58, 148, 231);">
                    <h1>
                        <?php
                        if (isset($_SESSION["username"])) {
                            echo $_SESSION["username"];
                        } else {
                            echo "None";
                        }
                        ?>
                    </h1>
                    <P>ID:</P>
                </div>
                <div class="btn-box" style="justify-content: center; margin-left: 65px;">
                    <button id="btn1" class="tab-btn" onclick="openTab('content1')">Đã từng khám</button>
                    <button id="btn2" class="tab-btn" onclick="openTab('content2')">Chưa từng khám</button>
                </div>
                <div id="content1" class="content d-flex">
                    <!-- Content for "Đã từ khám" tab -->
                    <div class="content_left">
                        <div class="content-title mt-3" style="margin-left: 85px;">
                            <h5>NHẬP MÃ SỐ BỆNH NHÂN/MÃ BHYT</h5>
                        </div>
                        <div class="style_content_id">
                            <div class="content_til d-flex">
                                <p>Mã thuộc cơ sở y tế</p>
                                <div class="ic_sao" style="color: red;">*</div>
                                :
                            </div>
                            <div class="custom-select mt-1">
                                <select>
                                    <option value="">Mã số thuộc cơ sở y tế</option>
                                    <option value="">bệnh viện Trung Ương</option>
                                    <option value="">bệnh viện Y Dược Thủ Đô HN</option>
                                    <option value="">bệnh viện Tim Mạch</option>
                                </select>
                            </div>
                        </div>
                        <div class="style_content_id mt-3">
                            <div class="content_til d-flex">
                                <p>Mã bệnh nhân thuộc sở Y tế trên</p>
                                <div class="ic_sao" style="color: red;">*</div>
                                :
                            </div>
                            <div class="custom-input mt-1">
                                <input type="text">
                            </div>
                        </div>
                        <div class="style_button mt-4" style="margin-left: 80px;">
                            <button class="button_dlk">Tìm Kiếm</button>
                        </div>
                    </div>
                    <div class="content-right" style="margin-left: 60px;">
                        <div class="title_head m-3">
                            <h4>Bạn chưa có thông tin phiếu khám</h4>
                            <div class="img_errol">
                                <img src="./assest/img/img_null.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="content2" class="content">
                    <!-- Content for "Chưa từng khám" tab -->
                    <div class="title_chuatungkham">
                        <h4>Nhập thông tin bệnh nhân</h4>
                    </div>
                    <div class="khung-vien">
                        Vui lòng cung cấp thông tin chính xác để được phục vụ tốt nhất. Trong trường hợp cung cấp sai
                        thông tin bệnh nhân & điện thoại, việc xác nhận cuộc hẹn sẽ không hiệu lực trước khi đặt khám.
                    </div>
                    <br>
                    <div class="container">
                        <form method="POST" action="insert_benhnhan.php">
                            <p style="color:red; font-weight:500;">(*)Thông tin bắt buộc nhập</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div style="width:460px;" class="mt-3">
                                        <label for="hoTen" class="form-label" style="font-weight: 500;">Họ và tên (có
                                            dấu)
                                            <span class="ic_sao" style="color: red;">*</span></label>
                                        <input type="text" class="form-control" id="hoTen" name="hoTen"
                                            placeholder="VÍ DỤ: NGUYỄN VĂN BẢO">
                                    </div>
                                    <div style="width:460px;" class="mt-3">
                                        <label for="soDienThoai" class="form-label" style="font-weight: 500;">Số điện
                                            thoại
                                            <span class="ic_sao" style="color: red;">*</span></label>
                                        <input type="text" class="form-control" id="soDienThoai" name="soDienThoai"
                                            placeholder="Vui lòng nhập số điện thoại...">
                                    </div>
                                    <div style="width:460px" class="mt-3">
                                        <label for="ngheNghiep" class="form-label" style="font-weight:500">Nghề nghiệp
                                            <span class="ic_sao" style="color: red;">*</span>
                                        </label>
                                        <select class="form-control" id="ngheNghiep" name="ngheNghiep">
                                            <option value="" selected disabled hidden>Chọn nghề nghiệp</option>
                                            <option value="Option1">Option 1</option>
                                            <option value="Option2">Option 2</option>
                                            <option value="Option3">Option 3</option>
                                        </select>
                                    </div>
                                    <div style="width:460px;" class="mt-3">
                                        <label for="email" class="form-label" style="font-weight: 500;">Địa chỉ email
                                            <span class="ic_sao" style="color: red;">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            placeholder="Nhập địa chỉ email">
                                    </div>

                                    <div style="width:460px" class="mt-3">
                                        <label for="tinhThanh" class="form-label" style="font-weight:500">Tỉnh/Thành
                                            <span class="ic_sao" style="color: red;">*</span>
                                        </label>
                                        <select class="form-control" id="tinhThanh" name="tinhThanh">
                                            <option value="" selected disabled hidden>Chọn tỉnh thành</option>
                                            <option value="Option1">Option 1</option>
                                            <option value="Option2">Option 2</option>
                                            <option value="Option3">Option 3</option>
                                        </select>
                                    </div>

                                    <div style="width:460px" class="mt-3">
                                        <label for="phuongXa" class="form-label" style="font-weight:500">Phường/Xã
                                            <span class="ic_sao" style="color: red;">*</span>
                                        </label>
                                        <select class="form-control" id="phuongXa" name="phuongXa">
                                            <option value="" selected disabled hidden>Chọn xã phường</option>
                                            <option value="Option1">Option 1</option>
                                            <option value="Option2">Option 2</option>
                                            <option value="Option3">Option 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="width:460px" class="mt-3">
                                        <label for="ngaySinh" class="form-label" style="font-weight: 500;">Năm
                                            sinh-tháng sinh-ngày sinh
                                            <span class="ic_sao" style="color: red;">*</span></label>
                                        <input type="text" class="form-control" id="ngaySinh" name="ngaySinh"
                                            placeholder="Nhập ngày/tháng/năm sinh của bạn">
                                    </div>
                                    <div style="width:460px" class="mt-3">
                                        <label for="gioiTinh" class="form-label" style="font-weight:500">Giới tính
                                            <span class="ic_sao" style="color: red;">*</span>
                                        </label>
                                        <select class="form-control" id="gioiTinh" name="gioiTinh">
                                            <option value="" selected disabled hidden>Chọn giới tính</option>
                                            <option value="Nam">Nam</option>
                                            <option value="Nữ">Nữ</option>
                                            <option value="Khác">Khác</option>
                                        </select>
                                    </div>
                                    <div style="width:460px;" class="mt-3">
                                        <label for="soCMND" class="form-label" style="font-weight: 500;">Số
                                            CMND/Passport
                                            <span class="ic_sao" style="color: red;">*</span></label>
                                        <input type="text" class="form-control" id="soCMND" name="soCMND"
                                            placeholder="Vui lòng nhập số CMND...">
                                    </div>
                                    <div style="width:460px" class="mt-3">
                                        <label for="danToc" class="form-label" style="font-weight:500">Dân tộc
                                            <span class="ic_sao" style="color: red;">*</span>
                                        </label>
                                        <select class="form-control" id="danToc" name="danToc">
                                            <option value="" selected disabled hidden>Chọn dân tộc</option>
                                            <option value="Kinh">Kinh</option>
                                            <option value="Khác">Khác</option>
                                            <!-- Thêm các dân tộc khác nếu cần -->
                                        </select>
                                    </div>
                                    <div style="width:460px" class="mt-3">
                                        <label for="quanHuyen" class="form-label" style="font-weight:500">Quận/Huyện
                                            <span class="ic_sao" style="color: red;">*</span>
                                        </label>
                                        <select class="form-control" id="quanHuyen" name="quanHuyen">
                                            <option value="" selected disabled hidden>Chọn quận huyện</option>
                                            <option value="Option1">Option 1</option>
                                            <option value="Option2">Option 2</option>
                                            <option value="Option3">Option 3</option>
                                            <!-- Thêm các quận/huyện khác nếu cần -->
                                        </select>
                                    </div>
                                    <div style="width:460px;" class="mt-3">
                                        <label for="diaChi" class="form-label" style="font-weight: 500;">Địa chỉ
                                            <span class="ic_sao" style="color: red;">*</span></label>
                                        <input type="text" class="form-control" id="diaChi" name="diaChi"
                                            placeholder="Nhập địa chỉ...">
                                    </div>

                                </div>
                            </div>
                            <div class="button_chuatungkham">
                                <button type="submit" class="btn btn-primary"
                                    style="background-color:#d79b42; border-color:#d79b42">Nhập lại</button>
                                <button type="submit" class="btn btn-primary"
                                    style="background-color:rgb(58, 178, 247); border-color: rgb(58, 178, 247);">Cập
                                    nhật</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="inline"></div>
    <div class="doccure-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-system">
                    <img src="./assest/img/logo.png" alt="">
                    <div class="row">
                        <div class="col-4">
                            <div class="doccure-address-block">
                                <div class="doccure-address-title">
                                    <i class="fas fa-flag" style="color: aqua;"></i>
                                    <strong>Địa chỉ:</strong>Đại Học Phenikaa
                                </div>
                                <div class="doccure-address">
                                    <i class="fas fa-map-marker-alt" style="color: aqua;"></i>
                                    <strong>Wedsite:</strong>pnk@.com
                                </div>
                                <div class="doccure-address-hotline">
                                    <i class="fas fa-phone" style="color: aqua;"></i>
                                    <strong>Tư vấn:</strong>012 3456 789
                                    <br>
                                    <i class="fas fa-phone" style="color: aqua;"></i>
                                    <strong>Hotline:</strong>012 3456 789
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="doccure-address-block">
                                <div class="doccure-address-title">
                                    <strong>Dịch vụ y tế</strong>
                                    <ul>
                                        <li><a href="#">Đặt khám tại cơ sở</a></li>
                                        <li><a href="#">Đặt khám theo bác sĩ</a></li>
                                        <li><a href="#">Tư vấn khám bệnh từ xa</a></li>
                                        <li><a href="#">Đặt lịch xét nghiệm</a></li>
                                        <li><a href="#">Y tế tại nhà</a></li>
                                        <li><a href="#">Thanh toán viện phí</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="doccure-address-block">
                                <div class="doccure-address-title">
                                    <strong>Cơ sở y tế</strong>
                                    <ul>
                                        <li><a href="#">Bệnh viện công</a></li>
                                        <li><a href="#">Bệnh viện tư</a></li>
                                        <li><a href="#">Phòng khám</a></li>
                                        <li><a href="#">Phòng mạch</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="doccure-address-block">
                                <div class="doccure-address-title">
                                    <strong>Hướng dẫn</strong>
                                    <ul>
                                        <li><a href="#">Cài đặt ứng dụng</a></li>
                                        <li><a href="#">Đặt lịch khám</a></li>
                                        <li><a href="#">Quy trình hoàn phí</a></li>
                                        <li><a href="#">Câu hỏi thường gặp</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="doccure-address-block">
                                <div class="doccure-address-title">
                                    <strong>Về chúng tôi</strong>
                                    <ul>
                                        <li><a href="#">Giới thiệu</a></li>
                                        <li><a href="#">Điều khoản dịch vụ</a></li>
                                        <li><a href="#">Chính sách bảo mật</a></li>
                                        <li><a href="#">Quy định sử dụng</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="doccure-address-block">
                                <div class="doccure-address-title">
                                    <a href=""><img src="./assest/img/img_ft1.webp" alt=""></a>
                                    <a href=""><img src="./assest/img/img_ft2.png" alt=""></a>
                                    <a href=""><img src="./assest/img/img_ft3.svg" alt=""></a>
                                    <a href=""><img src="./assest/img/img_ft4.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright"></div>
            </div>
        </div>
    </div>
    <footer>

    </footer>
    <script>
        function openTab(tabId) {
            // Hide all content sections and remove 'active' class from all tab buttons
            const contentSections = document.querySelectorAll(".content");
            const tabButtons = document.querySelectorAll(".tab-btn");

            contentSections.forEach((section) => {
                section.style.transform = "translateX(1000px)";
                section.classList.remove("active");
            });

            tabButtons.forEach((button) => {
                button.classList.remove("active");
            });

            // Show the selected content section and set the 'active' class on the button
            const selectedTab = document.getElementById(tabId);
            selectedTab.style.transform = "translateX(0)";
            selectedTab.classList.add("active");

            const selectedButton = document.querySelector(`#${tabId}-btn`);
            selectedButton.classList.add("active");
        }

    </script>
    <script src="./boostrap/bootstrap.min.js"></script>
    <script src="./jquery/code.jquery.com_jquery-3.7.1.min.js"></script>
</body>

</html>
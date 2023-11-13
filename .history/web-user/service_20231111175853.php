<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./assest/img/icon_2.svg">
    <link rel="stylesheet" href="./assest/font/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="./boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="./assest/css/service.css">
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
                            <a href="./index.html">Trang chủ</a>
                        </li>
                        <li class="menu_item">
                            <a href="service.html">Dịch vụ y tế<i class="fa-solid fa-angle-down"></i></a>
                            <div class="subnav" style="width: 160px;">
                                <a href="./service.html">Đặt khám tại cơ sở</a>
                                <a href="./service2.html">Đặt khám theo bác sĩ</a>
                                <a href="#">Tư vấn khám bệnh từ xa</a>
                                <a href="./service3.html">Đặt lịch xét nghiệm</a>
                                <a href="#">Y tế tại nhà</a>
                            </div>
                        </li>
                        <li class="menu_item">
                            <a href="./medical.html">Cơ sở y tế<i class="fa-solid fa-angle-down"></i></a>
                            <div class="subnav" style="width: 160px;">
                                <a href="#">Bệnh viện công</a>
                                <a href="#">Bệnh viện tư </a>
                                <a href="#">Phòng khám </a>
                                <a href="#">Phònh mạch</a>
                            </div>
                        </li>
                        <li class="menu_item">
                            <a href="./doctor.html">Bác sĩ</a>
                        </li>
                        <li class="menu_item">
                            <a href="./news.html">Tin Tức</a>
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
                                    <a href="./thongtincanhan.html"><i class="fa-solid fa-address-card"
                                            style="margin-right: 15px;"></i>Hồ Sơ Bệnh Nhân</a>
                                    <a href="./lichkhamuser.html"><i class="fa-solid fa-calendar-days"
                                            style="margin-right: 15px;"></i>Lịch Khám Bệnh</a>
                                    <a href="#"><i class="fa-solid fa-bell" style="margin-right: 15px;"></i>Thông
                                        báo</a>
                                    <a href="./updatehosobenhan.html"><i class="fa-solid fa-pen-to-square"
                                            style="margin-right: 15px;"></i>Cập nhập hồ sơ</a>
                                    <a href="#" style="color: #e10e0e;"><i class="fa-solid fa-right-from-bracket"
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
            <div id="doccure-banner">
                <div class="banner-slide">
                    <div class="banner-slide--bg slide-1 mt-4">
                        <a href="#"></a>
                    </div>
                    <div class="style_title">
                        <div class="style_card">
                            <div class="style_content_title">
                                <p>Dịch Vụ</p>
                                <h1>ĐẶT KHÁM TẠI CƠ SỞ</h1>
                            </div>
                            <div class="style_line_tittle"></div>
                            <div class="style_text" style="font-size: 20px;">
                                đặt khám nhanh chóng,tiết kiệm <br>thời gian,
                                an toàn tiện lợi
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-introduce mt-4">
                <div class="map container">
                    <a href="./index.html">TRANG CHỦ</a>
                    <i class="fa-solid fa-angle-right"></i>
                    <p class="cl-brown">DỊCH VỤ Y TẾ</p>
                </div>
            </div>
            <div class="style_body">
                <div class="style_body_search">
                    <div class="ant-form style_form">
                        <div class="form_content">
                            <div class="item_form d-flex">
                                <div class="item_icon">
                                    <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                                </div>
                                <div class="item_input">
                                    <div class="ant-form-item style_formitem">
                                        <input placeholder="Tìm kiếm cơ sở y tế..." type="text">
                                    </div>
                                </div>
                                <div class="inline"></div>
                            </div>
                            <div class="item_form2 d-flex">
                                <div class="item_icon">
                                    <a href=""><i class="fa-solid fa-location-dot"></i></a>
                                </div>
                                <div class="item_input">
                                    <div class="ant-form-item style_formitem">
                                        <input placeholder="chọn tỉnh thành..." type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ant-row" style="margin-left: 40px;margin-right: 40px;row-gap:20px">
                <div class="ant-col ant-col-12 ant-col-xs-24 ant-col-md-24 ant-col-lg-12 ant-col-xl-12"
                    style="padding-left: 10px;padding-right: 10px;">
                    <div class="style_content">
                        <a href="./datkham.html">
                            <div class="style_content_text">
                                <div class="img_logohis">
                                    <img src="./assest/img/img_his1.webp" alt="">
                                </div>
                                <div class="item_info">
                                    <h4>Bệnh Viện Đại học Y Dược TP.HCM</h4>
                                    <div class="info_his d-flex">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p>Cơ sở 201 Nguyễn Trí Thanh,Phường 12,Quận 5,<br>TP.Hồ Chí Minh</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="ant-col ant-col-12 ant-col-xs-24 ant-col-md-24 ant-col-lg-12 ant-col-xl-12"
                    style="padding-left: 10px;padding-right: 10px;">
                    <div class="style_content">
                        <div class="style_content_text">
                            <div class="img_logohis">
                                <img src="./assest/img/img_his1.webp" alt="">
                            </div>
                            <div class="item_info">
                                <h4>Bệnh Viện Đại học Y Dược TP.HCM</h4>
                                <div class="info_his d-flex">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p>Cơ sở 215 Hồng Bàng,Phường 11,Quận 5<br>TP.Hồ Chí Minh</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ant-col ant-col-12 ant-col-xs-24 ant-col-md-24 ant-col-lg-12 ant-col-xl-12"
                    style="padding-left: 10px;padding-right: 10px;">
                    <div class="style_content">
                        <div class="style_content_text">
                            <div class="img_logohis">
                                <img src="./assest/img/img_his1.webp" alt="">
                            </div>
                            <div class="item_info">
                                <h4>Bệnh Viện Đại học Y Dược TP.HCM</h4>
                                <div class="info_his d-flex">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p>Cơ sở 221B,Hoàng Văn vụ,Phường 8<br>Quận Phú Nhuận,TP.Hồ Chí Minh</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ant-col ant-col-12 ant-col-xs-24 ant-col-md-24 ant-col-lg-12 ant-col-xl-12"
                    style="padding-left: 10px;padding-right: 10px;">
                    <div class="style_content">
                        <div class="style_content_text">
                            <div class="img_logohis">
                                <img src="./assest/img/img_his1.webp" alt="">
                            </div>
                            <div class="item_info">
                                <h4>Bệnh Viện Đại Học Y Dược TP.HMC</h4>
                                <div class="info_his d-flex">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p>Cơ sở 201B Nguyễn Trí Thanh,Phường 12,Quận 5,<br>TP.Hồ Chí Minh</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ant-col ant-col-12 ant-col-xs-24 ant-col-md-24 ant-col-lg-12 ant-col-xl-12"
                    style="padding-left: 10px;padding-right: 10px;">
                    <div class="style_content">
                        <div class="style_content_text">
                            <div class="img_logohis">
                                <img src="./assest/img/img_his1.webp" alt="">
                            </div>
                            <div class="item_info">
                                <h4>Bệnh Viện Đại học Y Dược TP.HCM</h4>
                                <div class="info_his d-flex">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p>Cơ sở 201 Nguyễn Trí Thanh,Phường 12,Quận 5,<br>TP.Hồ Chí Minh</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ant-col ant-col-12 ant-col-xs-24 ant-col-md-24 ant-col-lg-12 ant-col-xl-12"
                    style="padding-left: 10px;padding-right: 10px;">
                    <div class="style_content">
                        <div class="style_content_text">
                            <div class="img_logohis">
                                <img src="./assest/img/img_his1.webp" alt="">
                            </div>
                            <div class="item_info">
                                <h4>Bệnh Viện Đại học Y Dược TP.HCM</h4>
                                <div class="info_his d-flex">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p>Cơ sở 201 Nguyễn Trí Thanh,Phường 12,Quận 5,<br>TP.Hồ Chí Minh</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ant-col ant-col-12 ant-col-xs-24 ant-col-md-24 ant-col-lg-12 ant-col-xl-12"
                    style="padding-left: 10px;padding-right: 10px;">
                    <div class="style_content">
                        <div class="style_content_text">
                            <div class="img_logohis">
                                <img src="./assest/img/img_his1.webp" alt="">
                            </div>
                            <div class="item_info">
                                <h4>Bệnh Viện Đại học Y Dược TP.HCM</h4>
                                <div class="info_his d-flex">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p>Cơ sở 201 Nguyễn Trí Thanh,Phường 12,Quận 5,<br>TP.Hồ Chí Minh</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ant-col ant-col-12 ant-col-xs-24 ant-col-md-24 ant-col-lg-12 ant-col-xl-12"
                    style="padding-left: 10px;padding-right: 10px;">
                    <div class="style_content">
                        <div class="style_content_text">
                            <div class="img_logohis">
                                <img src="./assest/img/img_his1.webp" alt="">
                            </div>
                            <div class="item_info">
                                <h4>Bệnh Viện Đại học Y Dược TP.HCM</h4>
                                <div class="info_his d-flex">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p>Cơ sở 201 Nguyễn Trí Thanh,Phường 12,Quận 5,<br>TP.Hồ Chí Minh</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ant-col ant-col-12 ant-col-xs-24 ant-col-md-24 ant-col-lg-12 ant-col-xl-12"
                    style="padding-left: 10px;padding-right: 10px;">
                    <div class="style_content">
                        <div class="style_content_text">
                            <div class="img_logohis">
                                <img src="./assest/img/img_his1.webp" alt="">
                            </div>
                            <div class="item_info">
                                <h4>Bệnh Viện Đại học Y Dược TP.HCM</h4>
                                <div class="info_his d-flex">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p>Cơ sở 201 Nguyễn Trí Thanh,Phường 12,Quận 5,<br>TP.Hồ Chí Minh</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ant-col ant-col-12 ant-col-xs-24 ant-col-md-24 ant-col-lg-12 ant-col-xl-12"
                    style="padding-left: 10px;padding-right: 10px;">
                    <div class="style_content">
                        <div class="style_content_text">
                            <div class="img_logohis">
                                <img src="./assest/img/img_his1.webp" alt="">
                            </div>
                            <div class="item_info">
                                <h4>Bệnh Viện Đại học Y Dược TP.HCM</h4>
                                <div class="info_his d-flex">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p>Cơ sở 201 Nguyễn Trí Thanh,Phường 12,Quận 5,<br>TP.Hồ Chí Minh</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="style_pagination">
                    <div class="ant-pagination">
                        <div class="item_pagination">
                            <ul>
                                <li><a href="#"><i class="fa-solid fa-angle-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><i class="fa-solid fa-angle-right"></i></a></li>
                                <li><a href="#">Xem tất cả</a></li>
                            </ul>
                        </div>
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
    <script src="./boostrap/bootstrap.min.js"></script>
    <script src="./jquery/code.jquery.com_jquery-3.7.1.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./assest/img/icon_2.svg">
    <link rel="stylesheet" href="./assest/font/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="./boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="./assest/css/style.css">
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
                                    <a href="./lichkhamuser.php"><i class="fa-solid fa-calendar-days"
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
    <section>
        <div class="style_body">
            <div class="index_main">
                <div class="index_header">
                    <div class="style_bg" style="background-image: url(./assest/img/bg_new.png);">
                        <div class="ant-row style_container">
                            <div class="style_contentleft">
                                <div class="style_wrapper">
                                    <div class="style_tag">Nền tảng công nghệ</div>
                                    <div class="style_title">
                                        <span class="style_line_1">Kết nối người dân với </span><br>
                                        <span class="style_line_2">Cơ sở - Dịch vụ Y tế</span>
                                    </div>
                                    <div class="style_desc">
                                        Đặt khám nhanh-Lấy số thứ tự trực tuyến
                                    </div>
                                    <div class="style_button">
                                        <button class="button_dlk">Đặt lịch khám</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="style_service">
                        <div class="service_header d-flex">
                            <div class="header_content1">
                                <a href="./service.php">
                                    <div class="icon_content1" style="text-align: center;">
                                        <img src="./assest/img/img_icon1.webp" alt="#">
                                        <p class="text_icon mt-2">Đặt khám tại cơ sở</p>
                                    </div>
                                </a>
                            </div>
                            <div class="header_content1">
                                <div class="icon_content1" style="text-align: center;">
                                    <img src="./assest/img/img_icon2.webp" alt="#">
                                    <p class="text_icon mt-2">Đặt khám theo bác sĩ</p>
                                </div>
                            </div>
                            <div class="header_content1">
                                <div class="icon_content1" style="text-align: center;">
                                    <img src="./assest/img/img_icon3.webp" alt="#">
                                    <p class="text_icon mt-2">Tư vấn khám bệnh từ xa</p>
                                </div>
                            </div>
                            <div class="header_content1">
                                <div class="icon_content1" style="text-align: center;">
                                    <img src="./assest/img/img_icon4.webp" alt="#">
                                    <p class="text_icon mt-2">Gói khám sức khoẻ</p>
                                </div>
                            </div>
                            <div class="header_content1">
                                <div class="icon_content1" style="text-align: center;">
                                    <img src="./assest/img/img_icon5.webp" alt="#">
                                    <p class="text_icon mt-2">Y tế tại nhà</p>
                                </div>
                            </div>
                            <div class="header_content1">
                                <div class="icon_content1" style="text-align: center;">
                                    <img src="./assest/img/img_icon6.webp" alt="#">
                                    <p class="text_icon mt-2">Đặt lịch xét nghiệm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="index_homecontainer">
                    <div class="style_homeinfo">
                        <div class="style_header">
                            <div class="ant-row ant-row-middle" style="margin-left:-5px;margin-right:-5px;">
                                <div style="padding-left:5px;padding-right:5px"
                                    class="ant-col ant-col-24 ant-col-lg-10">
                                    <p class="styles_doccureText">DOCCURE</p>
                                    <p class="styles_tag">Đặt lịch khám bệnh</p>
                                </div>
                                <div style="padding-left:5px;padding-right:5px"
                                    class="ant-col ant-col-24 ant-col-lg-14">
                                    <div class="styles_desc">
                                        <b>Doccure</b>
                                        cung cấp dịch vụ đặt khám nhanh, lấy số thứ tự trực tuyến và tư vấn sức khỏe
                                        từ xa tại các Cơ sở Y tế hàng đầu Việt Nam như Bệnh viện Đại học Y Dược TP.HCM,
                                        Bệnh viện Chợ Rẫy và Bệnh viện Nhi Đồng...
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container pt-3">
                            <div class="row mt-3 img_in">
                                <div class="col-md-4 col-sm-12 mb-3 style_midlad">
                                    <img src="./assest/img/img_item1.webp" class="w-100" alt="">
                                    <div class="text_item m-3">
                                        <h3><strong>Đặt khám Nhanh</strong></h3>
                                        <p>Đặt khám nhanh,thanh toán và lấy số thứ tự trực tuyến,
                                            tiết kiệm thời gian công sức
                                        </p>
                                    </div>
                                    <button class="button_xemthem">Xem thêm<i class="fa-solid fa-arrow-right"
                                            style="margin-left: 20px; color: #78b2ce;"></i></button>
                                </div>
                                <div class="col-md-4 col-sm-12 mb-3 style_midlad">
                                    <img src="./assest/img/img_item2.webp" class="w-100" alt="">
                                    <div class="text_item m-3">
                                        <h3><strong>Cơ sở y tế rộng khắp</strong></h3>
                                        <p>Mạng lưới bệnh viện phòng khám,phòng mạch
                                            phủ khắp toàn cuốc
                                        </p>
                                    </div>
                                    <button class="button_xemthem">Xem thêm<i class="fa-solid fa-arrow-right"
                                            style="margin-left: 20px; color: #78b2ce;"></i></button>
                                </div>
                                <div class="col-md-4 col-sm-12 mb-3 style_midlad">
                                    <img src="./assest/img/img_item3.webp" class="w-100" alt="">
                                    <div class="text_item m-3">
                                        <h3><strong>Tư vấn sức khoẻ từ xa</strong></h3>
                                        <p>Đặt khám nhanh,thanh toán và lấy số thứ tự trực tuyến,
                                            tiết kiệm thời gian công sức
                                        </p>
                                    </div>
                                    <button class="button_xemthem">Xem thêm<i class="fa-solid fa-arrow-right"
                                            style="margin-left: 20px; color: #78b2ce;"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="style_statistic">
                    <div class="style_title">SỐ LIỆU THỐNG KÊ</div>
                    <div class="style_body_tk">
                        <ul>
                            <li>
                                <div class="style_imge1">
                                    <img src="./assest/img/icon_1.svg" alt="">
                                </div>
                                <div class="style_conten">
                                    <div class="style_number">
                                        2.2M+
                                    </div>
                                    <div class="style_title1">
                                        Lượt khám
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="style_imge1">
                                    <img src="./assest/img/icon_2.svg" alt="">
                                </div>
                                <div class="style_conten">
                                    <div class="style_number">
                                        30+
                                    </div>
                                    <div class="style_title1">
                                        Bệnh viện
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="style_imge1">
                                    <img src="./assest/img/icon_3.svg" alt="">
                                </div>
                                <div class="style_conten">
                                    <div class="style_number">
                                        50+
                                    </div>
                                    <div class="style_title1">
                                        Cơ sở y tế
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="style_imge1">
                                    <img src="./assest/img/icon_4.svg" alt="">
                                </div>
                                <div class="style_conten">
                                    <div class="style_number">
                                        200+
                                    </div>
                                    <div class="style_title1">
                                        bác sĩ
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="style_imge1">
                                    <img src="./assest/img/icon_5.svg" alt="">
                                </div>
                                <div class="style_conten">
                                    <div class="style_number">
                                        25.4k+
                                    </div>
                                    <div class="style_title1">
                                        Lượt truy cập
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="style_imge1">
                                    <img src="./assest/img/icon_6.svg" alt="">
                                </div>
                                <div class="style_conten">
                                    <div class="style_number">
                                        500+
                                    </div>
                                    <div class="style_title1">
                                        Lượt truy cập <br> trong ngày
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="style_container style_container2">
                    <div class="style_booking">
                        <div class="ant-row ant-row-middle">
                            <div class="ant-col ant-col-24 style_left ant-col-lg-14">
                                <img src="./assest/img/img_cont1.webp" alt="">
                            </div>
                            <div class="ant-col ant-col-24 style_right ant-col-lg-10">
                                <div class="style_title_đk">Đặt khám nhanh - Lấy số thứ tự trực tuyến</div>
                                <div class="style_desc">Bệnh nhân chủ động chọn thông tin đặt khám nhanh
                                    (ngày khám, giờ khám và cơ sở y tế). Bệnh nhân sẽ nhận lấy số thứ tự trực tuyến
                                    ngay trên phần mềm
                                </div>
                                <div class="styles_buttonWrapper">
                                    <button type="button" class="ant-btn ant-btn-primary styles_btnBooking">
                                        <div class="styles_bgbt">
                                            <div class="styles_text">Đặt khám ngay</div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="index_homecontainer">
            <div class="style_homeinfobv">
                <div class="style_header">
                    <div class="ant-row ant-row-middle" style="margin-left:-5px;margin-right:-5px;">
                        <div style="padding-left:5px;padding-right:5px" class="ant-col ant-col-24 ant-col-lg-10">
                            <p class="styles_doccureText">DOCCURE</p>
                            <div class="styles_tag">
                                Hệ thống bệnh viện triển khai
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container pt-3">
                    <div class="row mt-3 img_allbv">
                        <div class="col-md-4 col-sm-12 mb-3 style_infobv">
                            <div class="img_zoom">
                                <img src="./assest/img/img_bv1.webp" class="w-100" alt="">
                            </div>
                            <button class="button_bv">Bệnh viện da liễu</button>
                        </div>
                        <div class="col-md-4 col-sm-12 mb-3 style_infobv">
                            <div class="img_zoom">
                                <img src="./assest/img/img_bv2.webp" class="w-100" alt="">
                            </div>
                            <button class="button_bv">Bệnh viện quân y</button>
                        </div>
                        <div class="col-md-4 col-sm-12 mb-3 style_infobv">
                            <div class="img_zoom">
                                <img src="./assest/img/img_bv3.webp" class="w-100" alt="">
                            </div>
                            <button class="button_bv">Bệnh viện tim</button>
                        </div>
                    </div>
                    <button class="button_xt mt-3">xem thêm</button>
                </div>
            </div>
            <div class="index_main">
                <div class="index_news">
                    <div class="style_title_news">
                        Tin tức Y Tế
                    </div>
                    <div class="ant-row" style="margin-left: -10px; margin-right: -10px;">
                        <div class="ant-col ant-col-24 style_cardleft ant-col-lg-10"
                            style="padding-left: 10px;padding-right: 10px;">
                            <div class="style_cardleftitem">
                                <div class="img_itemnews">
                                    <img src="./assest/img/img_new1.webp" alt="">
                                </div>
                                <div class="style_itemcard">
                                    Kid & Family Care-Phòng khám tai mũi họng cho bé và gia đình
                                </div>
                                <div class="sty_tag">
                                    <span>11/10/2023,03:45</span>
                                </div>
                                <p class="styles_description">
                                    Phòng khám Kid &amp; Family Care được trang bị đầy đủ máy móc
                                    nội soi Tai Mũi Họng hiện đại, giúp chẩn đoán bệnh chính xác
                                    và nhanh chóng. Ngoài ra, phòng khám còn sử dụng các phương pháp
                                    thủ thuật xông khí dung và hút dịch mũi an toàn, mang đến cho
                                    bạn trải nghiệm y tế thoải mái và yên tâm.</p>
                            </div>
                        </div>
                        <div class="ant-col ant-col-24 style_cardright ant-col-lg-14"
                            style="padding-left: 10px;padding-right: 10px;">
                            <div class="ant-row"
                                style="margin-left: -10px;margin-right: -10px;row-gap: 20px;flex-flow: row wrap;">
                                <div class="ant-col ant-col-24 ant-col-xs-11 ant-col-lg-12"
                                    style="padding-left: 10px;padding-right: 10px;">
                                    <div class="style_item1_right">
                                        <div class="img_item">
                                            <img src="./assest/img/img_new2.webp" alt="">
                                        </div>
                                        <div class="style_itemcard">
                                            Kid & Family Care-Phòng khám tai mũi họng cho bé và gia đình
                                        </div>
                                        <div class="sty_tag">
                                            <span>11/10/2023,03:45</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="ant-col ant-col-24 ant-col-xs-11 ant-col-lg-12"
                                    style="padding-left: 10px;padding-right: 10px;">
                                    <div class="style_item1_right">
                                        <div class="img_item">
                                            <img src="./assest/img/img_new2.webp" alt="">
                                        </div>
                                        <div class="style_itemcard">
                                            Kid & Family Care-Phòng khám tai mũi họng cho bé và gia đình
                                        </div>
                                        <div class="sty_tag">
                                            <span>11/10/2023,03:45</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="ant-col ant-col-24 ant-col-xs-11 ant-col-lg-12"
                                    style="padding-left: 10px;padding-right: 10px;">
                                    <div class="style_item1_right">
                                        <div class="img_item">
                                            <img src="./assest/img/img_new2.webp" alt="">
                                        </div>
                                        <div class="style_itemcard">
                                            Kid & Family Care-Phòng khám tai mũi họng cho bé và gia đình
                                        </div>
                                        <div class="sty_tag">
                                            <span>11/10/2023,03:45</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="ant-col ant-col-24 ant-col-xs-11 ant-col-lg-12"
                                    style="padding-left: 10px;padding-right: 10px;">
                                    <div class="style_item1_right">
                                        <div class="img_item">
                                            <img src="./assest/img/img_new2.webp" alt="">
                                        </div>
                                        <div class="style_itemcard">
                                            Kid & Family Care-Phòng khám tai mũi họng cho bé và gia đình
                                        </div>
                                        <div class="sty_tag">
                                            <span>11/10/2023,03:45</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="button_xt">xem thêm</button>
            </div>
        </div>
    </section>
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
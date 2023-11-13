<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./assest/img/icon_2.svg">
    <link rel="stylesheet" href="./assest/font/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="./boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="./assest/css/datkhamvoi.css">
    <title>Document</title>
</head>
<body>
    <!-- Header -->
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
                                <button class="user">Nguyễn Danh Điệp</button>
                                <div class="subnav">
                                    <a href="./thongtincanhan.html"><i class="fa-solid fa-address-card" style="margin-right: 15px;"></i>Hồ Sơ Bệnh Nhân</a>
                                    <a href="./lichkhamuser.html"><i class="fa-solid fa-calendar-days" style="margin-right: 15px;"></i>Lịch Khám Bệnh</a>
                                    <a href="#"><i class="fa-solid fa-bell" style="margin-right: 15px;"></i>Thông báo</a>
                                    <a href="./updatehosobenhan.html"><i class="fa-solid fa-pen-to-square" style="margin-right: 15px;"></i>Cập nhập hồ sơ</a>
                                    <a href="#" style="color: #e10e0e;"><i class="fa-solid fa-right-from-bracket" style="color: #e10e0e;margin-right: 15px;"></i>Đăng xuất</a>
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
                    <p class="cl-brown">ĐẶT KHÁM</p>
                    <i class="fa-solid fa-angle-right"></i>
                    <p class="cl-brown">Chọn dịch vụ</p>
                </div>
            </div>
            <div class="style-body">
                <div class="style-body-left">
                    <div class="style-title-thongtin">
                        <span>Thông tin bệnh viện</span>
                    </div>
                    <ul>
                        <li style="display: flex;" >
                            <i class="fa-solid fa-hospital" style="color: #969696; padding-right: 10px;"></i>
                            <p>Phòng Khám Nhi Đồng Hiếu Phúc</p>
                        </li>
                        <li style="display: flex;">
                            <i class="fa-solid fa-bag-shopping" style="color: #969696;padding-right: 10px;"></i>
                            <p>Phòng Khám Nhi Đồng Hiếu Phúc</p>
                        </li>
                    </ul>
                </div>
                <div class="style-body-right">
                    <div class="style-panelsHeader">
                        <span>Vui lòng chọn dịch vụ</span>
                    </div>
                    <div class="content">
                        <div class="content-header">
                            <b style="width: 7%;">#</b>
                            <b style="width: 60%;">Tên dịch vụ</b>
                            <b style="width: 17%;">Giá tiền</b>
                            <b style="width: 15%;"></b>
                        </div>
                        <div class="content-mid">
                            <div class="content-mid-1">
                                <p style="width: 7%;">1</p>
                                <div class="content-mid-1-1" style="width: 60%;">
                                    <b>Khám mới</b>
                                    <p>Lịch khám: Thứ 2,3,4,5,6,7</p>
                                </div>
                                <p style="width: 17%;">100.000đ</p>
                                <a href="./ngaykham.html">
                                    <button style="width: 150%;">Chọn</button>
                                </a>
                            </div>
                            <div class="content-mid-1">
                                <p style="width: 7%;">1</p>
                                <div class="content-mid-1-1" style="width: 60%;">
                                    <b>Khám mới</b>
                                    <p>Lịch khám: Thứ 2,3,4,5,6,7</p>
                                </div>
                                <p style="width: 17%;">100.000đ</p>
                                <a href="./ngaykham.html">
                                    <button style="width: 150%;">Chọn</button>
                                </a>
                            </div>
                            <div class="content-mid-1">
                                <p style="width: 7%;">1</p>
                                <div class="content-mid-1-1" style="width: 60%;">
                                    <b>Khám mới</b>
                                    <p>Lịch khám: Thứ 2,3,4,5,6,7</p>
                                </div>
                                <p style="width: 17%;">100.000đ</p>
                                <a href="./ngaykham.html">
                                    <button style="width: 150%;">Chọn</button>
                                </a>
                            </div>
                            <div class="content-mid-1">
                                <p style="width: 7%;">1</p>
                                <div class="content-mid-1-1" style="width: 60%;">
                                    <b>Khám mới</b>
                                    <p>Lịch khám: Thứ 2,3,4,5,6,7</p>
                                </div>
                                <p style="width: 17%;">100.000đ</p>
                                <a href="./ngaykham.html">
                                    <button style="width: 150%;">Chọn</button>
                                </a>
                            </div>
                            <div class="content-mid-1">
                                <p style="width: 7%;">1</p>
                                <div class="content-mid-1-1" style="width: 60%;">
                                    <b>Khám mới</b>
                                    <p>Lịch khám: Thứ 2,3,4,5,6,7</p>
                                </div>
                                <p style="width: 17%;">100.000đ</p>
                                <a href="./ngaykham.html">
                                    <button style="width: 150%;">Chọn</button>
                                </a>
                            </div>
                            <div class="content-mid-1">
                                <p style="width: 7%;">1</p>
                                <div class="content-mid-1-1" style="width: 60%;">
                                    <b>Khám mới</b>
                                    <p>Lịch khám: Thứ 2,3,4,5,6,7</p>
                                </div>
                                <p style="width: 17%;">100.000đ</p>
                                <a href="./ngaykham.html">
                                    <button style="width: 150%;">Chọn</button>
                                </a>
                            </div>
                            <div class="content-mid-1">
                                <p style="width: 7%;">1</p>
                                <div class="content-mid-1-1" style="width: 60%;">
                                    <b>Khám mới</b>
                                    <p>Lịch khám: Thứ 2,3,4,5,6,7</p>
                                </div>
                                <p style="width: 17%;">100.000đ</p>
                                <a href="./ngaykham.html">
                                    <button style="width: 150%;">Chọn</button>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
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
                                    <i class="fas fa-map-marker-alt"style="color: aqua;"></i>
                                    <strong>Wedsite:</strong>pnk@.com
                                </div>
                                <div class="doccure-address-hotline">
                                    <i class="fas fa-phone"style="color: aqua;"></i>
                                    <strong>Tư vấn:</strong>012 3456 789
                                    <br>
                                    <i class="fas fa-phone"style="color: aqua;"></i>
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
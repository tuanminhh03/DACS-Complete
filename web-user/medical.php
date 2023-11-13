<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./assest/img/icon_2.svg">
    <link rel="stylesheet" href="./assest/font/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="./boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="./assest/css/medical.css">
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
                                    if (session_status() == PHP_SESSION_NONE) {
                                        // Nếu session chưa được start, start nó
                                        session_start();
                                    }

                                    if (isset($_SESSION["username"])) {
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $database = "dacs";

                                        $conn = new mysqli($servername, $username, $password, $database);

                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }

                                        $username = $_SESSION["username"];
                                        $query = "SELECT hoTen FROM taikhoannguoidung WHERE tknguoidung = ?";
                                        $stmt = $conn->prepare($query);
                                        $stmt->bind_param("s", $username);
                                        $stmt->execute();
                                        $stmt->bind_result($hoTen);
                                        $stmt->fetch();
                                        $stmt->close();
                                        $conn->close();

                                        if (!empty($hoTen)) {
                                            echo $hoTen;
                                        } else {
                                            echo $_SESSION["username"];
                                        }
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
    <div class="content-introduce">
        <div class="map container">
            <a href="./index.html">TRANG CHỦ</a>
            <i class="fa-solid fa-angle-right"></i>
            <p class="cl-brown">CƠ SỞ Y TẾ</p>
        </div>
    </div>
    <div id="doccure-banner">
        <div class="banner-slide">
            <div class="banner-slide--bg slide-1 mt-4">
                <a href="#"></a>
            </div>
            <div class="style_title">
                <div class="style_card">
                    <div class="style_content_title">
                        <p>Dịch Vụ</p>
                        <h1>CƠ SỞ Y TẾ</h1>
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
    <div class="container">
        <div class="medical_section">
            <h2 style="text-align: center;padding-bottom: 30px;font-weight: 700;">DỊCH VỤ CỦA CHÚNG TÔI CÓ GÌ</h2>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="content_medical">
                        <div class="img_medical">
                            <a href="#"><img src="./assest/img/img_medical1.jpg" alt=""></a>
                        </div>
                        <div class="body_medical">
                            <h5>Medical</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="content_medical">
                        <div class="img_medical">
                            <a href="#"><img src="./assest/img/img_medical2.jpg" alt=""></a>
                        </div>
                        <div class="body_medical">
                            <h5>Operation</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="content_medical">
                        <div class="img_medical">
                            <a href="#"><img src="./assest/img/img_medical3.jpg" alt=""></a>
                        </div>
                        <div class="body_medical">
                            <h5>Laboratory</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="content_medical">
                        <div class="img_medical">
                            <a href="#"><img src="./assest/img/img_medical4.jpg" alt=""></a>
                        </div>
                        <div class="body_medical">
                            <h5>ICU</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="content_medical">
                        <div class="img_medical">
                            <a href="#"><img src="./assest/img/img_medical5.jpg" alt=""></a>
                        </div>
                        <div class="body_medical">
                            <h5>Test Room</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="content_medical">
                        <div class="img_medical">
                            <a href="#"><img src="./assest/img/img_medical6.jpg" alt=""></a>
                        </div>
                        <div class="body_medical">
                            <h5>Patient Ward</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="medical_section">
            <div class="row">
                <h2 style="text-align: center;padding-bottom: 30px;">KHÁCH HÀNG CỦA CHÚNG TÔI NÓI GÌ</h2>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="content_fb">
                        <div class="content_item_user">
                            <div class="info_user d-flex">
                                <div class="img_user">
                                    <img src="./assest/img/img_user1.jpg" alt="">
                                </div>
                                <div class="name_user">
                                    <h5>Lê Huyền Trang</h5>
                                </div>
                            </div>
                            <div class="d-block content_item mt-4 d-flex">
                                <i class="fa-solid fa-quote-left fa-2xl" style="color: #6197f5;"></i>
                                <p>Các y bác sĩ hỗ trựo rất nhiệt tình,tôi không phải mất thời gian đứng
                                    chờ để đến lượt,rất nhanh và dễ dàng.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="content_fb">
                        <div class="content_item_user">
                            <div class="info_user d-flex">
                                <div class="img_user">
                                    <img src="./assest/img/img_user2.jpg" alt="">
                                </div>
                                <div class="name_user">
                                    <h5>Lê Huyền Trang</h5>
                                </div>
                            </div>
                            <div class="d-block content_item mt-4 d-flex">
                                <i class="fa-solid fa-quote-left fa-2xl" style="color: #6197f5;"></i>
                                <p>Các y bác sĩ hỗ trựo rất nhiệt tình,tôi không phải mất thời gian đứng
                                    chờ để đến lượt,rất nhanh và dễ dàng.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="content_fb">
                        <div class="content_item_user">
                            <div class="info_user d-flex">
                                <div class="img_user">
                                    <img src="./assest/img/img_user3.jpg" alt="">
                                </div>
                                <div class="name_user">
                                    <h5>Lê Huyền Trang</h5>
                                </div>
                            </div>
                            <div class="d-block content_item mt-4 d-flex">
                                <i class="fa-solid fa-quote-left fa-2xl" style="color: #6197f5;"></i>
                                <p>Các y bác sĩ hỗ trựo rất nhiệt tình,tôi không phải mất thời gian đứng
                                    chờ để đến lượt,rất nhanh và dễ dàng.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="content_fb">
                        <div class="content_item_user">
                            <div class="info_user d-flex">
                                <div class="img_user">
                                    <img src="./assest/img/img_user4.jpg" alt="">
                                </div>
                                <div class="name_user">
                                    <h5>Lê Huyền Trang</h5>
                                </div>
                            </div>
                            <div class="d-block content_item mt-4 d-flex">
                                <i class="fa-solid fa-quote-left fa-2xl" style="color: #6197f5;"></i>
                                <p>Các y bác sĩ hỗ trựo rất nhiệt tình,tôi không phải mất thời gian đứng
                                    chờ để đến lượt,rất nhanh và dễ dàng.</p>
                            </div>
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
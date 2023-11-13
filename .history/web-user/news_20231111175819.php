<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./assest/img/icon_2.svg">
    <link rel="stylesheet" href="./assest/font/fontawesome-free-6.4.2-web/css/all.min.css">
    <link href="
        https://cdn.jsdelivr.net/npm/swiper@10.3.1/modules/effect-fade.min.css
        " rel="stylesheet">
    <link rel="stylesheet" href="./boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="./assest/css/news.css">
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
                            <a href="./service.html">Dịch vụ y tế<i class="fa-solid fa-angle-down"></i></a>
                            <div class="subnav" style="width: 160px;">
                                    <a href="./service.html">Đặt khám tại cơ sở</a>
                                    <a href="./service2.html">Đặt khám theo bác sĩ</a>
                                    <a href="">Tư vấn khám bệnh từ xa</a>
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
                    <div class="index_main">
                        <div class="container">
                            <div class="index_news">
                                <div class="style_title_news">
                                    Tin Tức Y Tế
                                </div>
                                <div class="ant-row" style="margin-left: -10px; margin-right: -10px;" >
                                    <div class="ant-col ant-col-24 style_cardleft ant-col-lg-10" style="padding-left: 10px;padding-right: 10px;">
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
                                    <div class="ant-col ant-col-24 style_cardright ant-col-lg-14" style="padding-left: 10px;padding-right: 10px;">
                                        <div class="ant-row" style="margin-left: -10px;margin-right: -10px;row-gap: 20px;flex-flow: row wrap;">
                                            <div class="ant-col ant-col-24 ant-col-xs-11 ant-col-lg-12" style="padding-left: 10px;padding-right: 10px;">
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
                                            <div class="ant-col ant-col-24 ant-col-xs-11 ant-col-lg-12" style="padding-left: 10px;padding-right: 10px;">
                                                <div class="style_item1_right">
                                                    <div class="img_item">
                                                        <img src="./assest/img/img_new3.webp" alt="">
                                                    </div>
                                                    <div class="style_itemcard">
                                                        Kid & Family Care-Phòng khám tai mũi họng cho bé và gia đình
                                                    </div>
                                                    <div class="sty_tag">
                                                        <span>11/10/2023,03:45</span>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="ant-col ant-col-24 ant-col-xs-11 ant-col-lg-12" style="padding-left: 10px;padding-right: 10px;">
                                                <div class="style_item1_right">
                                                    <div class="img_item">
                                                        <img src="./assest/img/img_new4.webp" alt="">
                                                    </div>
                                                    <div class="style_itemcard">
                                                        Kid & Family Care-Phòng khám tai mũi họng cho bé và gia đình
                                                    </div>
                                                    <div class="sty_tag">
                                                        <span>11/10/2023,03:45</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ant-col ant-col-24 ant-col-xs-11 ant-col-lg-12" style="padding-left: 10px;padding-right: 10px;">
                                                <div class="style_item1_right">
                                                    <div class="img_item">
                                                        <img src="./assest/img/img_new5.webp" alt="">
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
                        <div class="container-slide">
                            <div class="style_pc">
                                <div class="style_slide_news">
                                    <div class="style_title">
                                        <div class="title_text">
                                            <h2>Tin dịch vụ</h2>
                                        </div>
                                        <div class="title_line"></div>
                                    </div>
                                    <div class="slide-container">
                                        <div class="slide-content">
                                            <div class="card-wrapper d-flex">
                                                <div class="card">
                                                    <div class="image-content">
                                                        <span class="overlay"></span>
                                                        <div class="card-image">
                                                            <img src="./assest/img/img_neww.webp" alt="" class="card-img">
                                                        </div>
                                                    </div>
                                                    <div class="card-content" >
                                                        <li><a href="">Tin dịch vụ</a></li>
                                                        <div class="style_title_info">
                                                            Hệ thống Y tế Phenikaa đã có trên ứng dụng Doccure.
                                                        </div>
                                                        <p class="y-l" style="font-size: 13px;"><i class="fa-solid fa-calendar-days" style="margin-right: 5px;"></i>22/12/2023</p>
                                                        <p class="x-l" style="color: aqua;cursor: pointer;">Xem tiếp<i class="fa-solid fa-arrow-right" style="margin-left: 10px;"></i></p>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="image-content">
                                                        <span class="overlay"></span>
                                                        <div class="card-image">
                                                            <img src="./assest/img/img_neww2.webp" alt="" class="card-img">
                                                        </div>
                                                    </div>
                                                    <div class="card-content" >
                                                        <li><a href="">Tin dịch vụ</a></li>
                                                        <div class="style_title_info">
                                                            PHÒNG KHÁM XÉT NGHIỆM CÔNG NGHỆ CAO HEALTH CARE VIỆT NAM CHÍNH THỨC GIA NHẬP NỀN TẢNG MEDPRO
                                                        </div>
                                                        <p class="y-l" style="font-size: 13px;"><i class="fa-solid fa-calendar-days" style="margin-right: 5px;"></i>22/12/2023</p>
                                                        <p class="x-l" style="color: aqua;cursor: pointer;">Xem tiếp<i class="fa-solid fa-arrow-right" style="margin-left: 10px;"></i></p>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="image-content">
                                                        <span class="overlay"></span>
                                                        <div class="card-image">
                                                            <img src="./assest/img/img_neww3.webp" alt="" class="card-img">
                                                        </div>
                                                    </div>
                                                    <div class="card-content" >
                                                        <li><a href="">Tin dịch vụ</a></li>
                                                        <div class="style_title_info">
                                                            Vì Sức Khoẻ Cộng Đồng - Miễn phí Cuộc gọi Video cùng Bác Sĩ thật trên ứng dụng Medpro
                                                        </div>
                                                        <p class="y-l" style="font-size: 13px;"><i class="fa-solid fa-calendar-days" style="margin-right: 5px;"></i>22/12/2023</p>
                                                        <p class="x-l" style="color: aqua;cursor: pointer;">Xem tiếp<i class="fa-solid fa-arrow-right" style="margin-left: 10px;"></i></p>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="image-content">
                                                        <span class="overlay"></span>
                                                        <div class="card-image">
                                                            <img src="./assest/img/img_neww4.webp" alt="" class="card-img">
                                                        </div>
                                                    </div>
                                                    <div class="card-content" >
                                                        <li><a href="">Tin dịch vụ</a></li>
                                                        <div class="style_title_info">
                                                            Bệnh Viện Quận Bình Thạnh Thông Báo Nghỉ Lễ Quốc Khánh 02/09/2023  
                                                        </div>
                                                        <p class="y-l" style="font-size: 13px;"><i class="fa-solid fa-calendar-days" style="margin-right: 5px;"></i>22/12/2023</p>
                                                        <p class="x-l" style="color: aqua;cursor: pointer;">Xem tiếp<i class="fa-solid fa-arrow-right" style="margin-left: 10px;"></i></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="button_xt mt-4">Xem tất cả</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide_content_new">
                                    <div class="content_new_tyt">
                                        <div class="style_content d-flex">
                                            <div class="content_intro">
                                                <h2>Tin Y tế</h2>
                                            </div>
                                            <div class="inline_tyt"></div>
                                        </div>
                                        <div class="slide-container">
                                            <div class="slide-content_tyt d-flex" style="margin-left: 75px;">
                                                <div class="card-wrapper d-flex" style="width: 350px; margin-right: 35px;">
                                                    <div class="card_tyt">
                                                        <div class="image-content_tyt">
                                                            <span class="overlay"></span>
                                                            <div class="card-image_tyt">
                                                                <img src="./assest/img/img_neww2.webp" alt="" class="card-img">
                                                            </div>
                                                        </div>
                                                        <div class="card-content_tyt" >
                                                            <li><a href="">Tin dịch vụ</a></li>
                                                            <div class="style_title_info">
                                                                Hệ thống Y tế Phenikaa đã có trên ứng dụng Doccure.
                                                            </div>
                                                            <div class="title_content_tyt">viện Đa khoa Quốc tế Nam Sài Gòn là một trong những bệnh viện
                                                                 tư nhân uy tín hàng đầu tại Thành phố Hồ Chí Minh, chuyên khám 
                                                                 và điều trị các bệnh lý về cột sống, thần kinh và cơ xương khớp. 
                                                                 Với đội ngũ y bác sĩ giỏi, giàu kinh nghiệm, cùng với cơ sở vật
                                                                  chất, trang thiết bị y tế hiện đại, bệnh viện mang đến cho người 
                                                                  bệnh trải nghiệm khám chữa bệnh chất lượng cao.</div> 
                                                            <p class="y-l" style="font-size: 13px;"><i class="fa-solid fa-calendar-days" style="margin-right: 5px;"></i>22/12/2023</p>
                                                            <p class="x-l" style="color: aqua;cursor: pointer;">Xem tiếp<i class="fa-solid fa-arrow-right" style="margin-left: 10px;"></i></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper d-flex" style="width: 350px;margin-right: 35px;">
                                                    <div class="card_tyt">
                                                        <div class="image-content_tyt">
                                                            <span class="overlay"></span>
                                                            <div class="card-image_tyt">
                                                                <img src="./assest/img/img_neww3.webp" alt="" class="card-img">
                                                            </div>
                                                        </div>
                                                        <div class="card-content_tyt" >
                                                            <li><a href="">Tin dịch vụ</a></li>
                                                            <div class="style_title_info">
                                                                Hệ thống Y tế Phenikaa đã có trên ứng dụng Doccure.
                                                            </div>
                                                            <div class="title_content_tyt">viện Đa khoa Quốc tế Nam Sài Gòn là một trong những bệnh viện
                                                                 tư nhân uy tín hàng đầu tại Thành phố Hồ Chí Minh, chuyên khám 
                                                                 và điều trị các bệnh lý về cột sống, thần kinh và cơ xương khớp. 
                                                                 Với đội ngũ y bác sĩ giỏi, giàu kinh nghiệm, cùng với cơ sở vật
                                                                  chất, trang thiết bị y tế hiện đại, bệnh viện mang đến cho người 
                                                                  bệnh trải nghiệm khám chữa bệnh chất lượng cao.</div> 
                                                            <p class="y-l" style="font-size: 13px;"><i class="fa-solid fa-calendar-days" style="margin-right: 5px;"></i>22/12/2023</p>
                                                            <p class="x-l" style="color: aqua;cursor: pointer;">Xem tiếp<i class="fa-solid fa-arrow-right" style="margin-left: 10px;"></i></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-wrapper d-flex" style="width: 350px;">
                                                    <div class="card_tyt">
                                                        <div class="image-content_tyt">
                                                            <span class="overlay"></span>
                                                            <div class="card-image_tyt">
                                                                <img src="./assest/img/img_neww.webp" alt="" class="card-img">
                                                            </div>
                                                        </div>
                                                        <div class="card-content_tyt" >
                                                            <li><a href="">Tin dịch vụ</a></li>
                                                            <div class="style_title_info">
                                                                Hệ thống Y tế Phenikaa đã có trên ứng dụng Doccure.
                                                            </div>
                                                            <div class="title_content_tyt">viện Đa khoa Quốc tế Nam Sài Gòn là một trong những bệnh viện
                                                                 tư nhân uy tín hàng đầu tại Thành phố Hồ Chí Minh, chuyên khám 
                                                                 và điều trị các bệnh lý về cột sống, thần kinh và cơ xương khớp. 
                                                                 Với đội ngũ y bác sĩ giỏi, giàu kinh nghiệm, cùng với cơ sở vật
                                                                  chất, trang thiết bị y tế hiện đại, bệnh viện mang đến cho người 
                                                                  bệnh trải nghiệm khám chữa bệnh chất lượng cao.</div> 
                                                            <p class="y-l" style="font-size: 13px;"><i class="fa-solid fa-calendar-days" style="margin-right: 5px;"></i>22/12/2023</p>
                                                            <p class="x-l" style="color: aqua;cursor: pointer;">Xem tiếp<i class="fa-solid fa-arrow-right" style="margin-left: 10px;"></i></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="button_xt mt-4">Xem tất cả</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide_content_new">
                                    <div class="content_new_yhtt">
                                        <div class="style_content_yhtt d-flex" style="align-items: center;">
                                            <div class="content_intro_yhtt">
                                                <h2>Y học thường thức</h2>
                                            </div>
                                            <div class="inline_yhtt"></div>
                                        </div>
                                        <div class="slide-container">
                                            <div class="style_content_yhtt">
                                                <div class="card-wrapper d-flex" style="width: 350px; margin-right: 35px;">
                                                    <div class="card_yhtt">
                                                        <div class="image_content_yhtt">
                                                            <span class="overlay"></span>
                                                            <div class="card_image_yhtt">
                                                                <img src="./assest/img/img_neww2.webp" alt="" class="card-img">
                                                            </div>
                                                            <div class="card_content_yhtt" >
                                                                <div class="style_title_info_yhtt">
                                                                    Hệ thống Y tế Phenikaa đã có trên<br>ứng dụng Doccure.
                                                                </div>
                                                                <div class="title_content_yhtt">viện Đa khoa Quốc tế Nam Sài Gòn là một trong những bệnh viện
                                                                     tư nhân uy tín hàng đầu tại Thành phố Hồ Chí Minh, chuyên khám 
                                                                     và điều trị các bệnh lý về cột sống, thần kinh và cơ xương khớp. 
                                                                     Với đội ngũ y bác sĩ giỏi, giàu kinh nghiệm, cùng với cơ sở vật
                                                                      chất, trang thiết bị y tế hiện đại, bệnh viện mang đến cho người 
                                                                      bệnh trải nghiệm khám chữa  bệnh chất lượng cao.</div> 
                                                                <p class="y-l" style="font-size: 13px;"><i class="fa-solid fa-calendar-days" style="margin-right: 5px;"></i>22/12/2023</p>
                                                                <p class="x-l" style="color: aqua;cursor: pointer;">Xem tiếp<i class="fa-solid fa-arrow-right" style="margin-left: 10px;"></i></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="conten_header">
                                                        <div class="style_info_right" style="margin-left: 35px; width: 400px;padding-top: 15px;">
                                                            <li><a href="">Y học thường thức</a></li>
                                                            <div class="title_text">
                                                                Bệnh đậu mùa khỉ: nguyên nhân, triệu chứng và cách điều trị
                                                            </div>
                                                            <div class="title_text2">
                                                                Thông tin chi tiết về bệnh đậu mùa khỉ, triệu chứng, các cách bảo vệ sức khỏe và tránh nhiễm bệnh hoặc xử lý khi phát hiện những dấu hiệu ban đầu của bệnh.
                                                            </div>
                                                        </div>
                                                        <div class="style_info_right" style="margin-left: 35px; width: 400px;">
                                                            <li><a href="">Y học thường thức</a></li>
                                                            <div class="title_text">
                                                                Bệnh đậu mùa khỉ: nguyên nhân, triệu chứng và cách điều trị
                                                            </div>
                                                            <div class="title_text2">
                                                                Thông tin chi tiết về bệnh đậu mùa khỉ, triệu chứng, các cách bảo vệ sức khỏe và tránh nhiễm bệnh hoặc xử lý khi phát hiện những dấu hiệu ban đầu của bệnh.
                                                            </div>
                                                        </div>
                                                        <div class="style_info_right" style="margin-left: 35px; width: 400px;">
                                                            <li><a href="">Y học thường thức</a></li>
                                                            <div class="title_text">
                                                                Bệnh đậu mùa khỉ: nguyên nhân, triệu chứng và cách điều trị
                                                            </div>
                                                            <div class="title_text2">
                                                                Thông tin chi tiết về bệnh đậu mùa khỉ, triệu chứng, các cách bảo vệ sức khỏe và tránh nhiễm bệnh hoặc xử lý khi phát hiện những dấu hiệu ban đầu của bệnh.
                                                            </div>
                                                        </div>
                                                        <div class="style_info_right" style="margin-left: 35px; width: 400px;">
                                                            <li><a href="">Y học thường thức</a></li>
                                                            <div class="title_text">
                                                                Bệnh đậu mùa khỉ: nguyên nhân, triệu chứng và cách điều trị
                                                            </div>
                                                            <div class="title_text2">
                                                                Thông tin chi tiết về bệnh đậu mùa khỉ, triệu chứng, các cách bảo vệ sức khỏe và tránh nhiễm bệnh hoặc xử lý khi phát hiện những dấu hiệu ban đầu của bệnh.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@10.3.1/swiper-bundle.min.js"></script>
    <script src="./jquery/script.js"></script>
</body>
</html>
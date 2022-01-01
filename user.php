<?php
// TRƯỚC KHI CHO NGƯỜI DÙNG TRUY CẬP VÀO CẦN PHẢI KIỂM TRA (KỸ THUẬT SESSION)
session_start();

// Kiểm tra thẻ làm việc
if (!isset($_SESSION['isLoginOK'])) // nếu không có tồn tại (không có thẻ làm việc)
{
    header("location:form-login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo_title/logo_title.png" type="image/x-icon" />
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="https: //fonts.googleapis.com/css2? family = Oswald: wght @ 200 & family = Source + Sans + 3: wght @ 200 & display = swap " rel=" stylesheet ">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="style_comment.css"> -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style_user.css">
    <title>Đặt tour du lịch | Hahalolo</title>
</head>

<body>

    <!-- Nav -->
    <div class="container-fluid position-fixed" style="z-index: 1; padding: 0;">
        <nav class="navbar navbar-expand-lg navbar-light  " style="padding: 0; height: 65px; background-color: #fff;">
            <div class="nav-link active my_class_active" aria-current="page" href="" style="display: flex;">
                <img src="img/logo_2.PNG" alt="" class="rounded-circle" style="height: 56px;">
                <div class="nav_search">
                    <i class="bi bi-search"></i> <input type="text" placeholder="Tìm kiếm" class="btn_nav_search"><i class="bi bi-chevron-down"></i>
                </div>
            </div>


            <button class="navbar-toggler btn_menu_hide" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--  -->

            <div class="collapse navbar-collapse nav_item_center_ctn " style="margin-left: 10px;">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item nav_item_center">
                        <a class="nav-link" href="#" style="text-align: center;">
                            <!-- <i class="bi my_icon_nav_end bi-newspaper"></i>   -->
                            <img width="auto" height="40px" src="img/img_icon_nav/img_bangtin.png" alt="">
                            <p>Bảng tin</p>
                        </a>
                    </li>

                    <li class="nav-item nav_item_center">
                        <a class="nav-link" href="#" style="text-align: center;">
                            <!-- <i class="bi my_icon_nav_end bi-hypnotize"></i>   -->
                            <img width="auto" height="40px" src="img/img_icon_nav/img_trainghiem.png" alt="">
                            <p>Trải nghiệm</p>
                        </a>
                    </li>
                    <li class="nav-item nav_item_center">
                        <a class="nav-link" href="#" style="text-align: center;">
                            <img width="auto" height="40px" src="img/img_icon_nav/img_tour.png" alt="">
                            <p>Tour</p>
                        </a>
                    </li>
                    <li class="nav-item nav_item_center">
                        <a class="nav-link" href="#" style="text-align: center; ">
                            <!-- <i class="bi my_icon_nav_end bi-building"></i>   -->
                            <img width="auto" height="40px" src="img/img_icon_nav/img_khachsan.png" alt="">
                            <p>Khách sạn</p>
                        </a>

                    </li>
                    <li class="nav-item nav_item_center">

                        <a class="nav-link" href="#" style="text-align: center; ">
                            <img width="auto" height="40px" src="img/img_icon_nav/img_maybay.png" alt="">
                            <p>Vé máy bay</p>
                        </a>
                    </li>
                    <li class="nav-item nav_item_center">

                        <a class="nav-link" href="#" style="text-align: center; ">
                            <!-- <i class="bi my_icon_nav_end bi-truck"></i> -->
                            <img width="auto" height="40px" src="img/img_icon_nav/img_thuexe.png" alt="">
                            <p>Thuê xe</p>
                        </a>
                    </li>
                    <li class="nav-item nav_item_center">
                        <a class="nav-link" href="#" style="text-align: center;">
                            <!-- <i class="bi my_icon_nav_end bi-bag" style="line-height: unset; "></i> -->
                            <img width="auto" height="40px" src="img/img_icon_nav/img_muasam.png" alt="">
                            <p>Mua sắm</p>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="collapse navbar-collapse navbar_nav_end" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                    <li class="nav-item hienthi_thongbao_relative">
                        <a id="btn_hienthi_thongbao" class="nav-link " href="#" style="text-align: center;">
                            <img width="auto" height="45px" src="img/img_icon_nav/img_thongbao.png" alt="">
                        </a>
                        <!-- Phần hiển thị thông báo -->
                        <div id="show_thong_bao" class="show_thongbao">
                            <div class="show_thongbao_title">
                                <h6><b>Thông Báo</b></h6>
                            </div>

                            <div class="show_thongbao_content">
                                <img height="auto" width="150" src="img/img_icon_nav/img_show_thongbao.png" alt="">
                                <p>Không có thông báo nào</p>
                            </div>

                        </div>
                    </li>
                    <li class="nav-item hienthi_friend_relative">
                        <a id="btn_hienthi_friend" class="nav-link  " href="#" style="text-align: center;">
                            <img width="auto" height="45px" src="img/img_icon_nav/img_friend.png" alt="">
                        </a>
                        <!-- Phần hiển thị lời mời kết bạn -->
                        <div id="show_friend" class="show_friend_acp">
                            <!-- Code -->
                            <div class="show_friend_acp_title">
                                <h6><b>Lời mời kết bạn</b></h6>
                                <a href="">Xem tất cả</a>
                            </div>

                            <div class="show_friend_acp_obj">
                                <div class="show_friend_acp_obj_avt">
                                    <img width="48" height="48" class="rounded-circle" src="img/img_icon_nav/user_addFriend/user1.webp" alt="">
                                </div>
                                <div class="show_friend_acp_obj_name">
                                    <p><b>Nguyễn Thị Trâm</b></p>
                                    <div class="show_friend_acp_obj_name_btn">
                                        <button class="btn rounded-pill btn_dongY">Đồng ý</button>
                                        <button class="btn rounded-pill btn_tuChoi">Từ chối</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li class="nav-item btn_giohang">
                        <a id="btn_hienthi_giohang" class="nav-link " href="#" style="text-align: center;">
                            <img width="auto" height="45px" src="img/img_icon_nav/img_rohang.png" alt="">
                        </a>
                        <!-- Phần hiển thị giỏ hàng -->
                        <div id="show_gio_hang" class="show_giohang">
                            <div class="show_giohang_title">
                                <h6><b>Giỏ hàng</b></h6>
                            </div>
                            <div class="show_giohang_thanhtoan">
                                <p>Thanh Toán </p>
                                <img height="14" src="img/img_icon_nav/img_gachngang.PNG" alt="">
                            </div>
                            <div class="show_giohang_sanpham">
                                <i class="bi bi-cart3"></i>
                                <p>Không có sản phẩm nào trong giỏ hàng</p>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" style="text-align: center;">
                            <img width="auto" height="45px" src="img/img_icon_nav/img_thanhtoan.png" alt="">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="text-align: center;">
                            <img width="auto" height="45px" src="img/img_icon_nav/img_mess.png" alt="">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="btn_hienthi_dangnhap" class="nav-link btn_hienthi_dangnhap" href="#" style="text-align: center;">
                            <img width="auto" height="45px" src="img/img_icon_nav/img_user.png" alt="">
                        </a>
                        <!-- Phần hiển thị đăng nhập -->
                        <div id="show_dang_nhap" class="show_dangnhap">
                            <a class="show_dangnhap_top" style="height: 36px;" href="">
                                <img height="25px" width="auto" src="img/img_show_login/img_quanlydonhang.png" alt="">
                                <p>Quản lý đơn hàng</p>
                            </a>
                            <a id="btn_thaydoi_chedo" class="show_dangnhap_top" href="">
                                <img style="margin-top: 10px;" height="25px" width="auto" src="img/img_show_login/img_chedo.png" alt="">
                                <p>
                                    Chế độ tối (Tắt) <br>
                                    <span title="">Điều chỉnh giao diện để giảm độ chói và <br>
                                        cho đôi mắt được nghỉ ngơi</span>
                                </p>
                            </a>
                            <a class="show_dangnhap_top" href="home_page.php">
                                <img height="25px" width="auto" src="img/img_show_login/img_dangnhap.png" alt="">
                                <p>Đăng Xuất</p>
                            </a>
                            <hr>
                            <div class="show_dangnhap_bot">
                                <hr>
                                <div class="show_dangnhap_end_left">
                                    <a href="">
                                        <img src="img/img_show_login/img_ngonngu.png" alt=""> <span>Tiếng Việt</span>
                                    </a>
                                </div>

                                <div class="show_dangnhap_end_right">
                                    <a href="">
                                        <img src="img/img_show_login/img_VND.png" alt=""> <span>VND</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </li>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light my-background" style= "padding-top:0;" >                
    <div class="collapse navbar-collapse my-flex" id="navbarNav ">
        <div class="col-md-3">
            <ul class="navbar-nav">
                <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href=""> <img  src="img/pixlr-bg-result (4).png" alt="" class="rounded-circle" style="height: 60px;"></a>
                        </li>
                        
                    </ul>
                    </div>
                    <div class="col-md-6 ;"> 
                    <ul class="navbar-nav " style="justify-content: center;" >
                    
                       
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="text-align: center;"><img src="img/news.png" alt=""style="width: 22px;height: 22px;"></a>
                                <a class="nav-link" href="#">Bảng tin</a>
                            </li>
                        
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="text-align: center;"><img src="img/air-balloon.png" alt="" style="width: 22px;height: 22px;"></a>
                            <a class="nav-link" href="#">Trải nghiệm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="text-align: center;"><img src="img/destination.png" alt="" style="width: 22px;height: 22px;"></a>
                            <a class="nav-link" href="#">Tour</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="text-align: center;"><img src="img/hotels.png" alt="" style="width: 22px;height: 22px;"></a>

                            <a class="nav-link" href="#">Khách sạn</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="text-align: center;"><img src="img/plane.png" alt="" style="width: 22px;height: 22px;"></a>
                            <a class="nav-link" href="#">Vé máy bay</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="text-align: center;"><img src="img/car-wash.png" alt="" style="width: 22px;height: 22px;"></a>
                            <a class="nav-link" href="#">Thuê xe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="text-align: center;"><img src="img/shopping-bag.png" alt="" style="width: 22px;height: 22px;"></a>
                            <a class="nav-link" href="#">Mua sắm</a>
                        </li>
                    </ul>
                    </div>
                    <div class="col-md-3;" style="width: 100%;">
                    <ul class="navbar-nav  " style="justify-content: end; align-items: center;">
                        <li class="nav-item ">
                            <a class="nav-link" href="#" ><img src="img/shopping-cart.png" alt="" style="width: 27px;height: 27px;"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" ><img src="img/wallet.png" alt="" style="width: 27px;height: 27px;"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="img/pixlr-bg-result (1).png" alt="" style="height: 25px;" class="rounded-circle"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="img/user (1).png" alt="" style="height: 50px;"></a>
                        </li>
                    </ul>
                </div> 
                </div>
               

                 
              </nav> -->

    </div>


    <div id="click_container" class="container ">
        <div class="row main_content">
            <!-- CỘT 1 thông tin người dùng -->
            <div class="col-md-3 	d-none d-xl-block d-xxl-block ">
                <!-- position-fixed -->
                <div class="main_card_infoUser">
                    <div class="main_card_infoUser_name">
                        <div class="main_card_infoUser_name_left ">
                            <img height="45" class="rounded-circle" src="img/img_col1_info/avt_user.png" alt="">
                        </div>

                        <div class="main_card_infoUser_name_right">
                            <h6><b>
                                    <?php
                                    // Kiểm tra xem có tồn tại cái error hay không 
                                    if (isset($_GET['showname'])) {
                                        echo  $_GET['showname'];
                                    }
                                    ?>
                                </b></h6>
                            <!-- <?php
                                    // Bước 01: Kết nối Database Server
                                    $conn = mysqli_connect('localhost', 'root', '', 'hahalolo_tour');
                                    if (!$conn) {
                                        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                                    }
                                    // Bước 02: Thực hiện truy vấn
                                    $sql = "SELECT * FROM db_nguoidung";

                                    $result = mysqli_query($conn, $sql);

                                    // Bước 03: Xử lý kết quả truy vấn
                                    if (mysqli_num_rows($result)) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                <h6><b> <?php echo $row['ten_nguoidung']; ?> </b></h6> 
                    <?php
                                        }
                                    }

                                    // Bước 03: Đóng kết nối
                                    mysqli_close($conn);
                    ?> -->
                            <p>Xem hồ sơ của bạn</p>
                        </div>
                    </div>

                    <div class="main_card_infoUser_function">
                        <a href="">
                            <div class="main_card_infoUser_function_icon">
                                <img src="img/img_col1_info/img_xu.png" alt="">
                            </div>
                            <span class="main_card_infoUser_function_text"><b style="color: red;">0 Xu</b> </span>
                        </a>

                        <a href="">
                            <div class="main_card_infoUser_function_icon">
                                <img src="img/img_col1_info/img_soTay.png" alt="">
                            </div>
                            <span class="main_card_infoUser_function_text">Sổ Tay</span>
                        </a>

                        <a href="">
                            <div class="main_card_infoUser_function_icon">
                                <img src="img/img_col1_info/img_taiKhoankinhdoanh.png" alt="">
                            </div>
                            <span class="main_card_infoUser_function_text">Tài chính kinh doanh</span>
                        </a>
                        <a href="">
                            <div class="main_card_infoUser_function_icon">
                                <img src="img/img_col1_info/img_taiKhoanthanhtoan.png" alt="">
                            </div>
                            <span class="main_card_infoUser_function_text">Tài khoản thanh toán</span>
                        </a>
                        <a href="">
                            <div class="main_card_infoUser_function_icon">
                                <img src="img/img_col1_info/img_taiKhoanbanhang.png" alt="">
                            </div>
                            <span class="main_card_infoUser_function_text">Tài khoản bán hàng</span>
                        </a>
                        <a href="">
                            <div class="main_card_infoUser_function_icon">
                                <img src="img/img_col1_info/img_banbe.png" alt="">
                            </div>
                            <span class="main_card_infoUser_function_text">Bạn bè</span>
                        </a>

                        <a href="">
                            <div class="main_card_infoUser_function_icon">
                                <img src="img/img_col1_info/img_hinhanh.png" alt="">
                            </div>
                            <span class="main_card_infoUser_function_text">Hình ảnh</span>
                        </a>

                        <a href="">
                            <div class="main_card_infoUser_function_icon">
                                <img src="img/img_col1_info/img_bookmarks.png" alt="">
                            </div>
                            <span class="main_card_infoUser_function_text">Bookmarks</span>
                        </a>
                    </div>


                </div>

                <div class="main_card_site">
                    <div class="main_card_site_top">
                        <b>Site của bạn (0)</b>
                    </div>
                    <hr>
                    <div class="main_card_site_bot">
                        <button class="btn rounded-pill my_btn_crPage">Tạo trang cộng đồng</button>

                    </div>
                </div>

                <div class="main_card_site main_card_site_friend">
                    <div class="main_card_site_top">
                        <b>Lời mời kết bạn (0)</b> <span>Xem tất cả</span>
                    </div>
                    <hr>
                    <div class="main_card_site_bot">
                    </div>

                </div>


                <div class="main_card my_card_wt shadow-sm  ">
                    <!-- style="position: fixed; width: 19.5%;" -->
                    <div class="main_card_container">

                        <div class="main_card_address">
                            <h6><b>Salavan, LA</b></h6>
                        </div>
                        <div class="main_card_time">
                            <div class="update_time">
                                Thứ tư, 15/12/2021
                            </div>
                        </div>

                        <div class="main_card_weather">
                            <img src="img/img_dammay.png" alt="">
                            <div class="main_card_weather_info">
                                <h5>31 <span>°C |<span class="temple">°F</span></span></h5>
                                <span>Mây đen u ám</span>
                            </div>
                        </div>
                        <div class="main_card_layout">
                            <div class="layout1">
                                <label for="">Khoảng nhiệt</label>
                                <p>29°C-30°C</p>
                            </div>
                            <div class="layout2">
                                <label for="">Độ ẩm</label>
                                <p>50%</p>
                            </div>
                            <div class="layout3">
                                <label for="">Áp suất</label>
                                <p>1008hPa</p>
                            </div>


                            <div class="layout1">
                                <label for="">Tộc độ giót</label>
                                <p>1.55m/s</p>
                            </div>
                            <div class="layout2">
                                <label for="">Khả năng mưa</label>
                                <p>100%</p>
                            </div>
                            <div class="layout3">
                                <label for="">Tầm nhìn</label>
                                <p>10Km</p>
                            </div>

                            <div class="layout1">
                                <label for="">Bình minh </label>
                                <p> 06:15AM </p>
                            </div>
                            <div class="layout2">
                                <label for="">Hoàng hôn</label>
                                <p> 05:26PM</p>
                            </div>
                        </div>
                        <div class="main_card_layout_end">
                            <a href="">Cập nhật lúc 01:44 PM. OpenWeather</a>
                        </div>

                    </div>




                </div>
            </div>


            <!-- CỘT CONTENT -->
            <div class="col-md-6 ">
                <div class="main_status">
                    <!-- <div class="row pt-4"> -->
                    <div class="status_main_btn pt-4">
                        <div class="status_input_left">
                            <input style="width: 100% ;" type="text" placeholder="Bạn muốn đi đâu ?" class="my_btn_status">
                        </div>
                        <div class="status_input_right">
                            <i class="far fa-calendar-alt my-icon-calendar"></i> <input style="width: 80% ;" type="text" placeholder="MM/YYYY" class="my_btn_status" min="2000-01-02"> <i class="fas fa-times"></i>
                        </div>
                    </div>

                    <div id="demo" class=" status_main_btn status_center_btn collapse ">
                        <div class="status_input_left pt-5">
                            <input style="width: 100% ;" type="text" placeholder="Điểm khởi hành" class="my_btn_status">
                        </div>
                        <div class="status_input_left pt-5">
                            <input style="width: 100% ;" type="text" placeholder="Điểm đến" class="my_btn_status">
                        </div>
                        <div class="status_input_left pt-5">
                            <input style="width: 100% ;" type="text" placeholder="Chủ đề tour" class="my_btn_status">
                        </div>
                        <div class="status_input_left pt-5">
                            <!-- <input style="width: 100% ;" type="text" placeholder = "Loại tour" class="my_btn_status"> -->

                            <select class="my_btn_status_tour" name="" id="">
                                <option value="">Loại tour</option>
                                <option value="">Tất cả các loại tour</option>
                                <option value="">Tour trong nước</option>
                                <option value="">Tour ngoài nước</option>
                            </select>
                        </div>
                        <div class="status_input_left pt-5">
                            <input style="width: 100% ;" type="text" placeholder="Số ngày đi tour" class="my_btn_status">
                        </div>
                        <div class="status_input_left pt-5">
                            <input style="width: 100% ;" type="text" placeholder="Khoảng giá" class="my_btn_status">
                        </div>

                        <!-- 2 cái checkbox -->
                        <div class="status_input_left pt-5 status_my_check">
                            <input class="form-check-input" type="checkbox" placeholder="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Có áp dụng khuyến mãi
                            </label>
                        </div>

                        <div class="status_input_left pt-5 status_my_check">
                            <input class="form-check-input" type="checkbox" placeholder="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Tour trả góp
                            </label>
                        </div>
                    </div>

                    <div class="status_main_click">
                        <div class="status_main_click_left">
                            <button type="button" class="btn  rounded-pill my_btn_nangcao" data-bs-toggle="collapse" data-bs-target="#demo">Tìm kiếm nâng cao</button>

                        </div>
                        <div class="status_main_click_right">
                            <button type="button" class="btn  rounded-pill my_btn_datlai">Đặt lại</button>
                            <button type="button" class="btn  rounded-pill my_btn_timkiem">Tìm kiếm</button>
                        </div>

                    </div>

                    <div class="status_main_click_tracuu">
                        <a href="">Tra cứu mã đặt Tour</a>
                    </div>

                    <!-- <div class=" container status_search_btn">
                            <div class="row ms-5 mt-5 ">
                                <div class="col">
                                    <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="collapse" data-bs-target="#demo">Thu gọn</button>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-primary rounded-pill ms-5 me-3">Đặt lại</button>
                                    <button type="button" class="btn btn-primary rounded-pill">Tìm kiếm</button>
                                    
                                </div>
                            </div>
                            
                            <div class="row pb-5 ">
                            <a href="" class="ms-5 mt-5">Tra cữu mã đặt Tour</a>
                            </div>

                        </div> -->
                    <!-- </div> -->
                </div>

                <!-- Info1 -->
                <div class="main_info_tour">
                    <div class="main_info_tour_container">

                        <div class="main_info_tour_header">
                            <div class="main_info_tour_header_name">
                                <span><img src="img/infor_tour/logo_user.webp" alt=""></span>
                                <b>Tuấn Dũng Travel</b>
                            </div>

                            <button type="button" class="btn  rounded-pill my_btn_nangcao"><span><i class="far fa-laugh-beam"></i> Haha trang</span></button>

                        </div>

                        <div class="main_info_tour_Carousel ">
                            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img/infor_tour/carousel/img1.webp" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/infor_tour/carousel/img2.webp" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/infor_tour/carousel/img3.webp" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/infor_tour/carousel/img4.webp" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/infor_tour/carousel/img5.webp" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/infor_tour/carousel/img6.webp" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/infor_tour/carousel/img7.webp" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/infor_tour/carousel/img8.webp" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                        <div class="main_info_tour_content">
                            <p class="tour">Tour Miền Trung</p>
                            <div class="main_info_tour_content_title">
                                <b class="title">007: Tour Đà Nẵng - Bà Nà - Cù Lao Chàm - Hội An (3N2Đ)</b>
                            </div>

                            <div class="main_info_tour_content_city">
                                <div class="main_info_tour_content_city_flex">
                                    <i class="fas fa-map-marker-alt"></i> <b>Thành phố Đà Nẵng - Thành phố Đà Nẵng</b>
                                </div>
                                <div class="main_info_tour_content_city_flex">
                                    <i class="far fa-calendar-alt"></i> <b>Thứ 4, 15/12/2021</b>
                                </div>
                            </div>
                            <div class="main_info_tour_content_text">
                                <p>Đến Đà Nẵng, du khách sẽ được hoà mình vào làn nước mát lạnh của biển trong những ngày hè oi bức, được tham gia
                                    vào các trò chơi thể thao trên biển,… Đến Đà Nẵng để từ đó xuất phát đến những điểm tham quan du lịch nổi tiếng:
                                    Phố cổ đèn lồng Hội An,
                                    Bà Nà 4 mùa Xuân Hạ Thu Đông, viếng chùa Linh Ứng, viếng Ngũ Hành Sơn, vọng về Thành phố từ Bán đảo Sơn Trà…</p>

                            </div>

                            <div class="main_info_tour_content_price">
                                <div class="main_info_tour_content_price_left">
                                    <b>Giá chỉ từ </b>
                                    <p class="prince">1.780.000 đ</p>
                                </div>
                                <div class="main_info_tour_content_price_rigth">
                                    <button type="button" class="btn  rounded-pill my_btn_nangcao btn_xemnhanh" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><span> Xem nhanh <i class="fas fa-chevron-right"></i></span></button>

                                    <div class="offcanvas offcanvas-end my_offcanvas" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                        <!-- <div class="offcanvas-header">
                                    <h5 id="offcanvasRightLabel">Viết Code tại đây</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    
                                </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main_info_tour_showInteractive">
                            <div class="main_info_tour_showInteractive_left">
                                <i class="far fa-thumbs-up"></i>
                                <p> Phùng Bảo Quyên, Sỹ Quân và 19 người khác</p>
                            </div>
                            <div class="main_info_tour_showInteractive_right">
                                <p>2 Bình luận</p>
                                <p>2 Lượt chia sẻ.</p>
                            </div>
                        </div>
                        <div class="main_info_tour_chooseInteractive">
                            <div class="sub_main_info_tour_chooseInteractive">

                                <!-- <div class="post-footer"> -->
                                <a class="icon-hover">
                                    <button id="main_Changes" type="button" class="btn btn-light my_btn_chooseInteractive btn_mg_camxuc" style="margin: top -5px; ;"> <img id="Changes_img_icon" width="auto" height="30" src="img_Interactive/img2_like.png" alt="" style="padding: 4px;"> <span id="Changes" style="font-size: 16px;">Like</span> </button>
                                    <div class="box-list-icons">
                                        <div id="click_forChanges_haha" class="icon-thich">
                                            <img id="my_icon_haha" width="100%" src="img_Interactive/img_like.png" alt=""><label>Haha</label>
                                        </div>
                                        <div id="click_forChanges_love" class="icon-yeuthich">
                                            <img width="100%" src="img_Interactive/img_tim.PNG" alt=""><label>Love</label>
                                        </div>
                                        <div id="click_forChanges_lolo" class="icon-haha">
                                            <img width="100%" src="img_Interactive/img_haha.png" alt=""> <label>Lolo</label>
                                        </div>
                                        <div id="click_forChanges_Surprise" class="icon-wow">
                                            <img width="100%" src="img_Interactive/img_wow.png" alt=""> <label>Surprise</label>
                                        </div>
                                        <div id="click_forChanges_Sad" class="icon-buon">
                                            <img width="100%" src="img_Interactive/img_sad.png" alt=""> <label>Sad</label>
                                        </div>
                                        <div id="click_forChanges_Angry" class="icon-phanno">
                                            <img width="100%" src="img_Interactive/img_phanno.png" alt=""> <label>Angry</label>
                                        </div>
                                    </div>
                                </a>
                                <!-- </div> -->
                            </div>
                            <div class="sub_main_info_tour_chooseInteractive">
                                <button type="button" class="btn btn-light my_btn_chooseInteractive "><i class="far fa-comment-alt"></i> Bình Luận</button>
                            </div>
                            <div class="sub_main_info_tour_chooseInteractive">
                                <button type="button" class="btn btn-light my_btn_chooseInteractive "><i class="far fa-share-square"></i> Chia sẻ</button>
                            </div>
                        </div>

                        <!-- Comment1 -->
                        <div class="main_info_tour_comment">
                            <div class="main_info_tour_comment_user">
                                <div class="comment_user_avatar">
                                    <img width="36" height="36" class="rounded-circle" src="img/user_comment/user_dangthihuong.webp" alt="">
                                </div>
                                <div class="comment_user_content">
                                    <div class="content_text">
                                        <b>Đặng Thị Hường</b>
                                        <p>Tour này nhiều ưu đãi quá, tuyệt vời</p>
                                    </div>
                                    <div class="content_time">
                                        <b href="">Haha ·</b> <b>Trả Lời ·</b> <span>3 tháng trước</span>
                                    </div>
                                </div>
                            </div>
                            <!-- comment2 -->
                            <div class="main_info_tour_comment_user">
                                <div class="comment_user_avatar">
                                    <img width="36" height="36" class="rounded-circle" src="img/user_comment/user_vannguyen.webp" alt="">
                                </div>
                                <div class="comment_user_content">
                                    <div class="content_text">
                                        <b>Vân Nguyễn</b>
                                        <p>Có tour nào nữa không ạ ??</p>
                                    </div>
                                    <div class="content_time">
                                        <b href="">Haha ·</b> <b>Trả Lời ·</b> <span>3 tháng trước</span>
                                    </div>
                                </div>
                            </div>

                            <!-- comment3 -->
                            <div class="main_info_tour_comment_user">
                                <div class="comment_user_avatar">
                                    <img width="36" height="36" class="rounded-circle" src="img/user_comment/user_dinhkimanh.webp" alt="">
                                </div>
                                <div class="comment_user_content">
                                    <div class="content_text">
                                        <b>Đinh Kim Anh</b>
                                        <p>Tour này rất vui và tuyệt vời. Wellcome Đà Nẵng City</p>
                                    </div>
                                    <div class="content_time">
                                        <b href="">Haha ·</b> <b>Trả Lời ·</b> <span>3 tháng trước</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Form nhập comment
                        <form action="process-comment.php" method="POST">
                            <div class="main_info_tour_comment_formComment">
                                <div class="main_info_tour_comment_formComment_left">
                                    <img src="img/user_comment/img_avtUser.png" alt="">
                                </div>

                                <div class="main_info_tour_comment_formComment_right">
                                    <div class="main_info_tour_comment_formComment_right_enter">
                                        <input type="text" placeholder="Viết bình luận" name="txt_comment" >
                                    </div>
                                    <div class="main_info_tour_comment_formComment_right_icon"> -->
                            <!-- <a class="bi bi-emoji-smile" href=""></a>
                                        <a class="bi bi-card-image" href=""></a> -->
                            <!-- <button class="bi bi-send " name="txtsendComment"></button>      
                                                              
                                    </div>
                                </div>
                            </div>

                        </form> -->

                        <?php
                            require_once("DBController.php");
                            $db_handle = new DBController();
                            $comments = $db_handle->runQuery("SELECT * FROM db_comment");
                        ?>
                        <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
                        <script>
                            function showEditBox(editobj, id) {
                                $('#frmAdd').hide();
                                $(editobj).prop('disabled', 'true');
                                var currentMessage = $("#message_" + id + " .message-content").html(); 
                                var editMarkUp = '<br> <input  id="txtmessage_' + id + '">' +  '<button class = "btn btn-outline-secondary btn-sm"">' + currentMessage + '</button>' + '</inp><button class = "btn btn-outline-secondary btn-sm" name="ok" onClick="callCrudAction(\'edit\',' + id + ')">Save</button> <button class = "btn btn-outline-secondary btn-sm"  name="cancel" onClick="cancelEdit(\'' + currentMessage + '\',' + id + ')">Cancel</button>';
                                $("#message_" + id + " .message-content").html(editMarkUp);
                            }

                            function cancelEdit(message, id) {
                                $("#message_" + id + " .message-content").html(message);
                                $('#frmAdd').show();
                            }

                            function callCrudAction(action, id) {
                                $("#loaderIcon").show();
                                var queryString;
                                switch (action) {
                                    case "add":
                                        queryString = 'action=' + action + '&txtmessage=' + $("#txtmessage").val();
                                        break;
                                    case "edit":
                                        queryString = 'action=' + action + '&message_id=' + id + '&txtmessage=' + $("#txtmessage_" + id).val();
                                        break;
                                    case "delete":
                                        queryString = 'action=' + action + '&message_id=' + id;
                                        break;
                                }
                                jQuery.ajax({
                                    url: "crud_action.php",
                                    data: queryString,
                                    type: "POST",
                                    success: function(data) {
                                        switch (action) {
                                            case "add":
                                                $("#comment-list-box").append(data);
                                                break;
                                            case "edit":
                                                $("#message_" + id + " .message-content").html(data);
                                                $('#frmAdd').show();
                                                $("#message_" + id + " .btnEditAction").prop('disabled', '');
                                                break;
                                            case "delete":
                                                $('#message_' + id).fadeOut();
                                                break;
                                        }
                                        $("#txtmessage").val('');
                                        $("#loaderIcon").hide();
                                    },
                                    error: function() {}
                                });
                            }
                        </script>                            
            <div class="form_style">
                <div id="comment-list-box">
                        <?php
                        if (!empty($comments)) {
                            foreach ($comments as $k => $v) {
                        ?>
                                    
                                    

                                <div class="main_info_tour_comment_user message-box" id="message_<?php echo $comments[$k]["id"]; ?>">
                                    <div class="comment_user_avatar">
                                        <img width="36" height="36" class="rounded-circle" src="img/user_comment/img_avtUser.png" alt="">
                                    </div>
                                    <div class="comment_user_content">
                                        <div class="content_text">
                                            <b>
                                            <?php
                                    // Kiểm tra xem có tồn tại cái error hay không 
                                    if (isset($_GET['showname'])) {
                                        echo  $_GET['showname'];
                                    }
                                    ?>
                                            </b>
                                            <p><div class="message-content"><?php echo $comments[$k]["message"]; ?></div></p>
                                        <!-- </div>
                                        <div class="btn_show_option"> -->
                                            <button class="btnEditAction btnEditAction btn btn-outline-secondary btn-sm" name="edit" onClick="showEditBox(this,<?php echo $comments[$k]["id"]; ?>)">Edit</button>
                                            <button class="btnDeleteAction btnEditAction btn btn-outline-secondary btn-sm" name="delete" onClick="callCrudAction('delete',<?php echo $comments[$k]["id"]; ?>)">Delete</button>
                                        </div>
                                        <div class="content_time">
                                            <b href="">Haha ·</b> <b>Trả Lời ·</b> <span>3 tháng trước</span>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        } ?>
                </div>

                <div id="frmAdd" class="main_info_tour_comment_formComment">
                                <div class="main_info_tour_comment_formComment_left">
                                    <img src="img/user_comment/img_avtUser.png" alt="">
                                </div>
                                

                                <div class="main_info_tour_comment_formComment_right">
                                    <div class="main_info_tour_comment_formComment_right_enter">
                                        <input type="text" placeholder="Viết bình luận" name="txtmessage" id="txtmessage"  >
                                    </div>
                                    <div class="main_info_tour_comment_formComment_right_icon">
                                        <!-- <a class="bi bi-emoji-smile" href=""></a>
                                        <a class="bi bi-card-image" href=""></a>
                                        <button class="bi bi-send " name="txtsendComment"></button>  -->
                                        <a href=""><button id="btnAddAction" name="submit" onClick="callCrudAction('add','')">Enter</button></a>                                       
                                    </div>
                                </div>
                        </div>
                            <img src="LoaderIcon.gif" id="loaderIcon" style="display:none" />
                    </div>
                </div>
            </div>
        </div>
</div>
                            
                                

                               

            <!-- CỘT FOOTER -->
            <div class="col-md-3 column3">
                <div class="main_img">
                    <img class="rounded_img" src="img/quangcao1.jpg" width="100%" alt="">
                </div>

                <div class="main_voucher">
                    <img class="rounded_img" src="img/quangcao2.jpg" width="100%" alt="">
                </div>

                <div class="main_brand ">
                    <div class="card my_card_brand  ">
                        <div class="main_title">
                            <div class="main_title_left">
                                <span>Trải nghiệm nổi bật</span>
                            </div>
                            <div class="main_title_right">
                                <a href="">Xem tất cả</a>
                            </div>
                        </div>
                        <img src="img/quangcao3.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="card_info ">
                                <div class="card_info_left">
                                    <img src="img/avt_quangcao.webp" alt="">
                                </div>
                                <div class="card_info_right">
                                    <p class="text_voucher">SĂN VOUCHER CÙNG HAHALOLO</p>
                                    <p class="text_day">5 ngày trước</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container_contact">
                    <div class="main_contact">
                        <div class="main_contact_dangki">
                            <img src="img/brand_dangki.png" alt="">
                        </div>
                        <div class="main_contact_thongbao">
                            <img src="img/brand_thongbao.png" alt="">
                        </div>

                    </div>
                    <div class="main_contact">
                        <div class="main_contact_ustoa">
                            <img src="img/brand_ustoa.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="main_end">
                    <div class="main_end_top">
                        <div>
                            <a href="">Giới thiệu</a>
                        </div>

                        <div>
                            <a href="">Quyền riêng tư</a>
                        </div>

                        <div>
                            <a href="">Điều khoản</a>
                        </div>
                        <br>
                        <div>
                            <a href="">Cookie</a>
                        </div>

                        <div>
                            <a href="">Tuyển dụng</a>
                        </div>

                        <div>
                            <a href="">Hỗ trợ</a>
                        </div>

                        <div>
                            <a href="">Tiếp thị liên kết</a>
                        </div>
                    </div>
                    <div class="main_end_bot">
                        <span>© Hahalolo 2017. Đã đăng ký bản quyền</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        // Hiển thị thông báo
        $(document).ready(function() {
            $("#btn_hienthi_thongbao").click(function() {
                $("#show_thong_bao").toggle();
            });
        });

        $("#click_container").click(function() {
            $("#show_thong_bao").hide();
        });

        $("a[id!='btn_hienthi_thongbao']").click(function() {
            $("#show_thong_bao").hide();
        });
    </script>


    <script>
        // Hiển thị thông báo
        $(document).ready(function() {
            $("#btn_hienthi_friend").click(function() {
                $("#show_friend").toggle();
            });
        });

        $("#click_container").click(function() {
            $("#show_friend").hide();
        });

        $("a[id!='btn_hienthi_friend']").click(function() {
            $("#show_friend").hide();
        });
    </script>



    <script>
        // Hiển thị giỏ hàng
        $(document).ready(function() {
            $("#btn_hienthi_giohang").click(function() {
                $("#show_gio_hang").toggle();
            });
        });

        $("#click_container").click(function() {
            $("#show_gio_hang").hide();
        });

        $("a[id!='btn_hienthi_giohang']").click(function() {
            $("#show_gio_hang").hide();
        });
    </script>

    <script>
        // Hiển thị đăng nhập

        $(document).ready(function() {
            $("#btn_hienthi_dangnhap").click(function() {
                $("#show_dang_nhap").toggle();
            });
        });

        $("#click_container").click(function() {
            $("#show_dang_nhap").hide();
        });

        $("a[id!='btn_hienthi_dangnhap']").click(function() {
            $("#show_dang_nhap").hide();
        });
    </script>

    <script>
        // Thay đổi chế độ  
        $("#btn_thaydoi_chedo").click(function() {
            $("body").css("background-color", "black");
        });
    </script>
    <script>
        $(".btn_class_showOption").click(function(){
            $(".div_container_option").toggle();
        });
    </script>

</body>

</html>



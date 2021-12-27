<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_login.css">
    <title>SignIn</title>
</head>
<body>
    <div class="container my_container ">
        <div class="row">
            <div class="col-md-6">
                <div class="container_left_title">
                    <img width="625" height="auto" src="img/img_show_login/img_page_login.PNG" alt="">
                </div>

            </div>

            <div class="col-md-6">
                <div class="container_right_form">
                    <form class="form_login">
                        <h6 class="text-center">Đăng Nhập</h6>
                        <div class="mb-3">
                          <input type="text" placeholder="Email hoặc số điện thoại*" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <!-- <div class="mb-3">
                            
                          <input type="password" placeholder="Mật khẩu*" class="form-control" id="exampleInputPassword1">
                            <span class="input-group-text" onclick="password_show_hide();">
                            <i class="fas fa-eye" id="show_eye"></i>
                            <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                            </span> -->
                            <div class="input-group mb-3">
                                <input name="password" type="password" value="" class="input form-control" id="password" placeholder="password" required="true" aria-label="password" aria-describedby="basic-addon1" />
                                <div class="input-group-append">
                                <span class="input-group-text" onclick="password_show_hide();">
                                    <i class="fas fa-eye" id="show_eye"></i>
                                    <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                </span>
                                </div>
                            </div>
                        <!-- </div> -->
                        <!-- <div class="mb-3 input-group" id="show_hide_password">
                            <input class="form-control" type="password">
                            <div class="input-group-addon">
                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>
                        </div> -->

                        <a href="user.php" class="btn btn_dangnhap" style="color: #ffff;">
                            Đăng Nhập
                        </a>
                        <a class="link_quenMk" href="">Quên mật khẩu?</a>
                        <p class="link_dangki">Bạn chưa có tài khoản? <a href="Sign_up.php">Đăng ký tại đây!</a></p>
                      </form>
                </div>
            </div>

        </div>

        <div class="row my_row_dangnhap">
            <div class="col-md-6">
                <div class="container_left_btn">
                    <button type="submit" class="btn btn_store "><i class="fab fa-android"></i>Google Play</button> <br>
                    <button type="submit" class="btn btn_store "><i class="fab fa-apple"></i> App Store</button> <br> <br>
                </div>
                <p style="color: rgba(0, 0, 0, 0.54);">© 2017 Hahalolo. Đã đăng ký bản quyền.</p>

            </div>

            <div class="col-md-6">
                <div class="container_right_btn">
                    <a href="">Deutsch | English | <span>Tiếng Việt</span> | 中文 (简体)</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styler.css">
    <title>SignIn</title>

    <style>
        body
        {
            background-image: url('uploads/img_background_login.png');
        }
        #hide_img{
            position: absolute;
            left: 0px;
            top: 0px;
            z-index: 0;
        }
        .avatar {
        vertical-align: middle;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        }
    </style>
</head>
<body></body>
    <div class="container my_container ">
        <div class="row">
            <!-- <div class="col-md-6">
                <div class="container_left_title">
                    <img width="625" height="auto" src="img/img_show_login/img_page_login.PNG" alt="">
                </div>

            </div> -->

            <div class="col-md-12">                
                <div class="container_right_form">
                    <div class="form_login" action="process-login.php" method="POST" style="margin-left: 250px; background-color: #EEEEEE;"  >
                        <h6 class="text-center">Thay Đổi Ảnh Đại Diện</h6>
                        <form action="upload.php" method="post" enctype="multipart/form-data" id="myform " >
                            <div style="margin-left: 130px;">
                                <input type="hidden" name="code" value="DSAFDSGFDGGFHFJ45245345^GFDGGSDFGDSDSFFHHQACFBHJGPOIUJ">
                                <label class="avatar" for="uploadAvatar" style="display: inline-block; position: relative; overflow: hidden; width: 200px; height: 200px; border-radius: 50%;  cursor: pointer">
                                    <span class="embed-avatar" >
                                    <img id="hide_img" src="https://pioneer-india.in/media/misc/default-avatar.png" width="100%" alt=""> 

                                        <?php
                                        // Include the database configuration file
                                        include 'dbConfig.php';

                                        // Get images from the database
                                        $query = $db->query("SELECT  * FROM avatar ");
                                        

                                        if($query->num_rows > 0){
                                            while($row = $query->fetch_assoc()){
                                                $imageURL = 'uploads/'.$row["file_name"];
                                        ?>
                                            <!-- <img src="<?php echo $imageURL; ?>"  class="avatar" alt="" id="img" width="250" height="250"/> -->
                                            <!-- <img src="https://pioneer-india.in/media/misc/default-avatar.png" width="100%" alt=""> -->
                                            <img src="<?php echo $imageURL; ?>" width="100%" height="100%" alt="" style="position: absolute; z-index: 1;">

                                        <?php }
                                        }else{ ?>
                                            <!-- <p>Vui lòng cập nhật</p> -->
                                        <?php } ?>
                                    </span>
                                    <span class="" style="width: 100%;height: 100%;z-index: 9999;text-align: center;position: absolute;top: 0;left: 0;background: #F0F0F0;opacity: 0;padding: 0;padding-top: 43%; ">
                                        <i class="fa fa-camera mt-5" style="color: blueviolet"></i>
                                    </span>
                                    <input type="file" multiple name="files[]" id="uploadAvatar" class="upload-avatar" accept="image/*" style="display: none;">
                                    <!-- <input class="btn btn-outline-secondary" id="file" type="file" name="files[]" multiple style="padding-top:10px ;"> -->

                                </label>
                            </div>
                            <div class="alert  text-center text-danger fw-bold text-uppercase" role="alert" style="width: 80%; margin-left: 50px;">
                                            <?php
                                                // Kiểm tra xem có tồn tại cái error hay không 
                                                if (isset($_GET['showTB'])) 
                                                {
                                                
                                                echo  $_GET['showTB'];
                                                }
                                            ?>
                            </div>
                            <input type="submit" class="btn btn-primary btn-sm "  name="submit" value="Xác nhận" id="but_upload"  style="width: 30%; margin-left: 160px; height: 35px;"  >
                        </form>
                        <?php
                            // Kiểm tra xem có tồn tại cái error hay không 
                            if(isset($_GET['error'])){
                                echo "<p class = 'php_show_account' > {$_GET['error']} </p>";
                            }
                        ?>

                        <!-- <button name="btnLogin"  class="btn btn_dangnhap" style="color: #ffff;">
                            Đăng Nhập
                        </button> -->
                        <!-- <a class="link_quenMk" href="">Quên mật khẩu?</a> -->
                        <!-- Đoạn mã PHP này sẽ hiển thị nếu người dùng nhập sai thông tin tài khoản -->
                        
                        <!-- <p class="link_dangki">Bạn chưa có tài khoản? <a href="form-signup.php">Đăng ký tại đây!</a></p> -->
                      </div>
                </div>
            </div>

        </div>

        <div class="row my_row_dangnhap" style="margin-top: 40px;">
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
    <script src="js/show_passWord.js"></script>

    <script>
        $(document).ready(function(){
        $("#but_upload ").click(function(){
            $("#hide_img").hide();
        });
        
        });
    </script>
</body>
</html>

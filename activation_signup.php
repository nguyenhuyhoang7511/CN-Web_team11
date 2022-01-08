<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Account Activation by Email Verification using PHP</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php
    if ($_GET['key'] && $_GET['token']) { // kiểm tra có giá trị trên URL để lấy ra key và token  (người dùng đã nhấp vào link kích hoạt chữa)
        require "db.php"; // bước 1 : kết nối CSDL
        // Bước 2 ; thực hiện truy vấn
        $email = $_GET['key']; // bắt giá trị trên URL
        $token = $_GET['token']; // bắt giá trị trên URL
        $query = mysqli_query(
            $conn,
            "SELECT * FROM `db_nguoidung` WHERE `email_verification_link`='" . $token . "' and `email`='" . $email . "';"
        );
        $d = date('Y-m-d H:i:s'); // Tạo ra 1 biến lưu thời gian 
        if (mysqli_num_rows($query) > 0) { // Có bản ghi nào khớp với CSDL này không 
            $row = mysqli_fetch_array($query); // Nếu có thì lấy ra thông tin bản ghi này 
            if ($row['email_verified_at'] == NULL) { // Kiểm tra lại xem kích hoạt hay chưa

                // câu truy vấn 2 : cập nhật bản này
                mysqli_query($conn, "UPDATE db_nguoidung set email_verified_at ='" . $d . "' , status = '1' WHERE email='" . $email . "'");
                $msg = "Xin chúc mừng! Bạn đã xác nhận thành công Email của mình.";
            } else {
                $msg = "Bạn đã xác minh tài khoản của mình với chúng tôi";
            }
        } else {
            $msg = "Email này chưa được đăng ký với chúng tôi";
        }
    } else {
        $msg = "Sự nguy hiểm! Có điều gì đó không ổn.";
    }
    ?>
    <div class="container " style="margin-top: 150px;">
        <div class="card">
            <div class="card-header text-center">
                 <span class="badge bg-success fs-5">ĐĂNG KÍ THÀNH CÔNG</span>
            </div>
            <div class="card-body text-center">
                <p><?php echo $msg; ?></p>
                KÍCH HOẠT TÀI KHOẢN CỦA BẠN BẰNG CÁCH XÁC MINH QUA EMAIL
            </div>
            <div class="alert alert-success text-center" role="alert">
            Chúc mừng bạn đã đăng kí thành công <a href="#" class="alert-link text-danger">nhấn vào đây</a> để trở về đăng nhập
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
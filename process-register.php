<?php
if (isset($_POST['btnRegister']) && $_POST['email']) { // kiểm tra người dùng có nhấp vào nút submit và đã nhập phần tử email hay chưa

    // Bước 1 : gọi lại đoạn kết nối Database server    
    require "db.php";

    // Bước 2 : Bước thực hiện truy vấn
    $result = mysqli_query($conn, "SELECT * FROM db_nguoidung WHERE email='" . $_POST['email'] . "'");
    // $row = mysqli_num_rows($result);


    // Bước 3 : xử lý kết quả
    if (mysqli_num_rows($result) <= 0) {  // Nếu không có bản ghi nào(Tức là kiểm tra email này chưa được dùng => cho đăng kí)
        $token = md5($_POST['email']) . rand(10, 9999); // sử dụng giải thuật md5 để sinh ra chuỗi ngẫu nhiên được băm
        // echo $token;

        // Lưu lại thông tin đăng kí vào csdl
        // email_verification_link : là token

        // Nhận dữ liệu lấy từ index gửi sang
        // SỬ DỤNG PASSWORDHASH THAY VÌ GIẢI THUẬT MD-5
        $name = $_POST['name'] ;
        $email = $_POST['email'] ;
        $pass = password_hash($_POST['password'],PASSWORD_DEFAULT);

        // Ra lệnh lưu vào CSDL
        $sql = "INSERT INTO db_nguoidung(ten_nguoidung, email, email_verification_link ,mat_khau) VALUES('$name','$email','$token','$pass')";
        mysqli_query( $conn, $sql);
        
        // mysqli_query($conn, "INSERT INTO users(name, email, email_verification_link ,password) VALUES('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $token . "', '" . md5($_POST['password']) . "')");

        // Sau khi lưu xong cần gửi tới email đăng kí 1 đường link tới website của chúng ta và yêu cầu người dùng nhấp để kích hoạt (đường dẫn này sẽ gửi vào email)
        $link = "<a href='http://localhost/CN-Web_team11-main/activation_signup.php?key=" . $email . "&token=" . $token . "'>Nhấp vào đây để kích hoạt tài khoản</a>";

        include "send_email.php";

        if(sendEmailForAccountActive($email,$link))
        {
            $thongbao = "Vui lòng kiểm tra hộp thư của bạn để kích hoạt tài khoản ";
            header("location:form-signup.php?thongbao=$thongbao");
        }
        else
        {
            echo "Xin lỗi email chưa được gửi đi - vui lòng kiểm tra lại thông tin đăng kí tài khoản ";
        }

        // QUÁ TRÌNH GỬI EMAIL
        // require_once('phpmail/PHPMailerAutoload.php');
        // $mail = new PHPMailer();
        // $mail->CharSet =  "utf-8";
        // $mail->IsSMTP();
        // // enable SMTP authentication
        // $mail->SMTPAuth = true;
        // // GMAIL username
        // $mail->Username = "your_email_id@gmail.com";
        // // GMAIL password
        // $mail->Password = "your_gmail_password";
        // $mail->SMTPSecure = "ssl";
        // // sets GMAIL as the SMTP server
        // $mail->Host = "smtp.gmail.com";
        // // set the SMTP port for the GMAIL server
        // $mail->Port = "465";
        // $mail->From = 'your_gmail_id@gmail.com';
        // $mail->FromName = 'your_name';
        // $mail->AddAddress('reciever_email_id', 'reciever_name');
        // $mail->Subject  =  'Reset Password';
        // $mail->IsHTML(true);
        // $mail->Body    = 'Click On This Link to Verify Email ' . $link . '';
        // if ($mail->Send()) {
        //     echo "Check Your Email box and Click on the email verification link.";
        // } else {
        //     echo "Mail Error - >" . $mail->ErrorInfo;
        // }
    } else {
        echo "Email đã được đăng kí - vui lòng kiểm tra lại.";
    }
}

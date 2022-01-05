<?php
    $username = "nguyenhoang080721@gmail.com";
    $password = 'hzcluktaqoipurbo';

    // Thư viện xử lý gửi nhận email : Phpmailer. sendmail
    // khai báo thư viện send mail
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    // Bước 2 : Sử dụng thư viện này để gửi email (từ localhost) tới 1 tài khoản email bất kì 

    function sendEmailForAccountActive($email,$link)
    {

        //Create an instance; passing `true` enables exceptions
        global $username;
        global $password;
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = $username;                               //Địa chỉ email đóng vai trò gửi thư
            $mail->Password   = $password;                               //SMTP password
            $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            $mail->CharSet = 'UTF-8';
        
            //Recipients
            $mail->setFrom('nguyenhuyhoang080721@gmail.com', 'Nguyễn Huy Hoàng');
            $mail->addAddress($email);     //Add a recipient// người nhận
            // $mail->addAddress('ellen@example.com');               //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
        
            //Attachments
            // $mail->addAttachment('documents/Demo.xlsx');         //Add attachments, tệp đính kèm
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = '[Hahalolo_tour.com] Active your account'; // tiêu đề thư
            $mail->Body    = 'Chào mừng bạn đến với hahalolo_Tour <3 Để sử dụng tài khoản,' . $link . 'để kích hoạt'; // Nội dung thư
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            if($mail->send())
            {
                return true;
            }
            echo 'TRY- Gửi thành công';
        } catch (Exception $e) {
            echo "CATCH - Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
            return false;
    }

?>
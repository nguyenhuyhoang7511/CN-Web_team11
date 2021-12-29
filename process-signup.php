<?php
            // MỘT SỐ KỸ THUẬT VALIDATE FORM ĐƯỢC XỬ LÝ BẰNG JAVASCRIPT
            // ĐÂY LÀ NƠI NHẬN DỮ LIỆU GỬI TỪ CODE_SIGNUP KHI NGƯỜI DÙNG ẤN VÀO NÚT SIGN-UP

            if(!isset($_POST['btnSignUp']))
            {
                // Nếu mà chưa nhấn vào btnSignUp thì điều hướng quay lại 
                // header("location: form-signup.php") ;
            }

            // coi mọi dữ liệu là hợp lệ là pass1 = pass2
            $user = $_POST['txtUser'];
            $email = $_POST['txtEmail'];
            $pass1 = $_POST['txtPass1'];
            $pass2 = $_POST['txtPass2'];

            // MỤC TIÊU LÀ CHÈN BẢN GHI TÀI KHOẢN VÀO CSDL CẦN PHẢI KIỂM TRA NÓ ĐÃ TỒN TẠI HAY CHƯA 
            // Bước 1 : kết nối database server
            $conn = mysqli_connect('localhost','root','','hahalolo_tour'); // biến kết nối tới csdl

            // Nếu kết nối thất bại thì dừng lại và hiển thị lỗi 
            if(!$conn){
                die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
            }
            // Nếu bỏ qua khối if tức là đã kết nối csdl thành công 
    
            // Bước 2: Thực hiện truy vấn
            $sql01 = " SELECT * FROM db_nguoidung WHERE email = '$email' OR ten_nguoidung  = '$user' ";
    
    
            // Nếu thực hiện thành công trả về tập kết quả các bản ghi
            $ketqua01 = mysqli_query($conn,$sql01); // trả về số bản ghi 
    
            if(mysqli_num_rows($ketqua01) > 0)
            {
                // NẾU CÓ TỒN TẠI BIẾN KẾT QUẢ TỨC LÀ EMAIL HOẶC TÊN ĐĂNG NHẬP ĐÃ TỒN TẠI
                $thongBaoLoi = "Tên tài khoản hoặc mật khẩu đã tồn tại";
                header("location: form-signup.php?error=$thongBaoLoi"); // Có lỗi => chuyển hướng sang 1 trang thông báo lỗi
            }
            else{
                // NẾU VÀO ĐÂY TỨC LÀ KHÔNG CÓ EMAIL HOẶC TÊN ĐĂNG NHẬP BỊ TRÙNG
                // THỰC HIỆN PASSWORD-HASH TRƯỚC KHI CHÈN DỮ LIỆU VÀO CSDL
                $pass_hash = password_hash($pass1, PASSWORD_DEFAULT) ; 
                $sql02 = "INSERT INTO db_nguoidung (ten_nguoidung,email,mat_khau) VALUES('$user','$email','$pass_hash')";
                $ketqua02 = mysqli_query($conn,$sql02);

                if($ketqua02 == true) // tức là chèn dữ liệu thành công
                {
                    header("location: form-login.php");
                    // hiển thị thông báo cho người dùng
                }
                else
                {
                    // NẾU VÀO ĐÂY TỨC LÀ CHÈN CHƯA THÀNH CÔNG => THÔNG BÁO LỖ ICHO NGƯỜI DÙNG
                    $thongBaoLoi = "Đăng kí không thành công - vui lòng kiểm tra lại ";
                    header("location : location: form-signup.php?error=$thongBaoLoi") ;
                }

            }
    
            // Bước 3 : Đóng kết nối
            mysqli_close($conn);
?>

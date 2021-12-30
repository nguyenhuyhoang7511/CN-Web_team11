<?php
    // Include the database configuration file
    // B1: import cấu hình bước 1   
    require 'dbConfig.php';
    $statusMsg = ''; // Tạo biến để lưu lại trạng thái upload nhằm mục tiêu phản hồi lại cho người dùng 

    // Những động tác về thiết lập cho việc chuẩn bị upload
    $targetDir = "uploads/"; // Thư mục chỉ định nằm trong cùng project10 để lưu trữ tệp tải lên
    $fileName = basename($_FILES["Myfile"]["name"]); // $_File là một biến siêu toàn cục
    $targetFilePath = $targetDir . $fileName;

    // echo $targetFilePath . $fileName; // đây là tên đầy đủ cộng với đường dẫn sau khi upload hoàn thành
    // Nó là giá trị cần truyền vào move_upload file 
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    // Kiểm tra xem người dùng đã nhấn submit chưa và file đã được chọn hay chưa
    if(isset($_POST["Mysubmit"]) && !empty($_FILES["Myfile"]["name"]))
    {
        
        if(file_exists($targetFilePath))
        {   
            echo "Tệp tin đã tồn tại- vui lòng kiểm tra lại";
        }
        else
        {
            $allowTypes = array('jpg','png','jpeg','gif','pdf','docx','PNG');  // Allow certain file formats. Khai báo 1 biến mảng để lưu trữ các định dạng mà bạn cho phép uploads lên
            if(in_array($fileType, $allowTypes))
            { // Phương thức in_array kiểm tra xem 1 giá trị có thuộc mảng không 
                // Upload file to server. Nếu có thì mới xử lý upload (upload cái tệp tin đang lưu ở thư mục tạm)
                if(move_uploaded_file($_FILES["Myfile"]["tmp_name"], $targetFilePath))
                { // Lấy tệp tin từ nơi tạm và đẩy vào nơi chính 
                    // Insert image file name into database
                    $insert = $db->query("INSERT into db_images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())"); // Giống mysqli
                    if($insert)
                    { // kiểm tra việc query thành công 
                        $statusMsg = "Tệp tin ".$fileName. " đã tải lên thành công";
                        header("location: form-add_tour.php");
                    }else{
                        $statusMsg = "Tệp tải lên không thành công, vui lòng thử lại.";
                    } 
                }else{
                    $statusMsg = "Đã xảy ra lỗi khi tải lên tệp tin của bạn - Vui lòng thử lại.";
                }
            }else{
                $statusMsg = 'Đã xảy ra lỗi - chỉ các tệp JPG, JPEG, PNG, GIF và PDF mới được phép tải lên.';
            }
        }
    }else{
        $statusMsg = 'Đã xảy ra lỗi - Bạn chưa lựa chọn, vui lòng chọn một tệp để thực hiện tải lên';
    }
    
    // Display status message
    // echo $statusMsg;
    
?>
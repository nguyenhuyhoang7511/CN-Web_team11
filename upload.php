<?php
// Include the database configuration file
include 'dbConfig.php';
$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

        if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"]))
        {
            if(file_exists($targetFilePath))
            {   
                $statusMsg =  "Đã tồn tại tệp tin ( " . $fileName  . " ) vui lòng kiểm tra lại";
                header("location: form-add_tour.php?showTB= $statusMsg"); 
            }
            else
            {
                // Allow certain file formats
                $allowTypes = array('jpg','png', 'JPG','PNG','jpeg','gif');
                if(in_array($fileType, $allowTypes)){
                    // Upload file to server
                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                        // Insert image file name into database
                        $insert = $db->query("INSERT into db_images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
                        if($insert){
                            $statusMsg = "Tệp tin ( ".$fileName. " ) đã tải lên thành công";
                            header("location: show.php?showTB= $statusMsg");                              
                        }else{
                            $statusMsg = "Tệp tải lên không thành công, vui lòng thử lại.";
                            header("location: form-add_tour.php?showTB= $statusMsg"); 
                        } 
                    }else{
                        $statusMsg = "Đã xảy ra lỗi khi tải lên tệp tin của bạn - Vui lòng thử lại.";
                        header("location: form-add_tour.php?showTB= $statusMsg"); 
                    }
                }else{
                    $statusMsg = 'Đã xảy ra lỗi - chỉ các tệp JPG, PNG và GIF  mới được phép tải lên.';
                    header("location: form-add_tour.php?showTB= $statusMsg"); 
                }
            }

        }else{
            $statusMsg = 'Đã xảy ra lỗi - Bạn chưa lựa chọn, vui lòng chọn một tệp để thực hiện tải lên';
            header("location: form-add_tour.php?showTB= $statusMsg"); 
        }


?>
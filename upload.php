
<?php 
// Include the database configuration file 
// include_once 'dbConfig.php'; 
     
// if(isset($_POST['submit'])){ 
//     // File upload configuration 
//     $targetDir = "uploads/"; 
//     $allowTypes = array('jpg','png','jpeg','gif','PNG','JPG'); 
     
//     $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
//     $fileNames = array_filter($_FILES['files']['name']); 
//     if(!empty($fileNames))
//     { 
//         foreach($_FILES['files']['name'] as $key=>$val){ 
//             // File upload path 
//             $fileName = basename($_FILES['files']['name'][$key]); 
//             $targetFilePath = $targetDir . $fileName; 
             
//             // Check whether file type is valid 
//             $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
//             if(in_array($fileType, $allowTypes)){ 
//                 // Upload file to server 
//                 if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
//                     // Image db insert sql 
//                     $insertValuesSQL .= "('".$fileName."', NOW()),"; 
//                 }else{ 
//                     $errorUpload .= $_FILES['files']['name'][$key].' | '; 
//                 } 
//             }else{ 
//                 $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
//             } 
//         } 
         
//         // Error message 
//         $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
//         $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
//         $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
         
//         if(!empty($insertValuesSQL)){ 
//             $insertValuesSQL = trim($insertValuesSQL, ','); 
//             // Insert image file name into database 
//             $insert = $db->query("INSERT INTO db_images (file_name, uploaded_on) VALUES $insertValuesSQL"); 
//             if($insert){ 
//                 $statusMsg = "các file đã được tải lên thành công .".$errorMsg; 
//                 header("location: form-add_tour.php?showTB= $statusMsg"); 
//             }else{ 
//                 echo mysqli_error();
//                 $statusMsg = "Đã xảy ra lỗi khi tải file - Vui lòng kiểm tra lại"; 
//                 header("location: form-add_tour.php?showTB= $statusMsg"); 
//             } 
//         }else{ 
//             $statusMsg = "Tải lên thất bại ! Lỗi : ".$errorMsg; 
//             header("location: form-add_tour.php?showTB= $statusMsg"); 
//         } 
//     }else{ 
//         $statusMsg = 'Bạn chưa chọn file nào !'; 
//         header("location: form-add_tour.php?showTB= $statusMsg"); 
//     } 
// } 
 

?>

<?php


// TRƯỜNG HỢP LỰA CHỌN FILE TRÙNG NHAU 
// Include the database configuration file 
include_once 'dbConfig.php'; 
     
if(isset($_POST['submit']))
{ 
     if(file_exists($targetFilePath))
            {   
                $statusMsg =  "Đã tồn tại tệp tin ( " . $fileName  . " ) vui lòng kiểm tra lại";
                header("location: form-add_tour.php?showTB= $statusMsg"); 
            }
            else
            {
                    // File upload configuration 
                    $targetDir = "uploads/"; 
                    $allowTypes = array('jpg','png','jpeg','gif','PNG','JPG'); 
                    
                    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
                    $fileNames = array_filter($_FILES['files']['name']); 
                    if(!empty($fileNames)){ 
                        foreach($_FILES['files']['name'] as $key=>$val){ 
                            // File upload path 
                            $fileName = basename($_FILES['files']['name'][$key]); 
                            $targetFilePath = $targetDir . $fileName; 
                            
                            // Check whether file type is valid 
                            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                            if(in_array($fileType, $allowTypes)){ 
                                // Upload file to server 
                                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                                    // Image db insert sql 
                                    $ma_tour = $_POST['txt_matour'];
                                    $insertValuesSQL .= "('".$fileName."', NOW() ,'".$ma_tour."'  ),"; // CHỖ THÊM GIÁ TRỊ CỦA MA_TOUR ($matour = $_POST['ma_tour'];)
                                }else{ 
                                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                                } 
                            }else{ 
                                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
                            } 
                        } 
                        
                        // Error message 
                        $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
                        $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
                        $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
                        
                        if(!empty($insertValuesSQL)){ 
                            $insertValuesSQL = trim($insertValuesSQL, ','); 
                            
                            // Insert image file name into database 
                            $insert = $db->query("INSERT INTO db_images (file_name, upload_on,ma_tour) VALUES $insertValuesSQL"); 
                            if($insert){ 
                                $statusMsg = "các file đã được tải lên thành công .".$errorMsg; 
                                header("location: index.php?showTB= $statusMsg"); 
                            }else{ 
                                $statusMsg = "Đã xảy ra lỗi khi tải file - Vui lòng kiểm tra lại"; 
                                header("location: index.php?showTB= $statusMsg"); 
                            } 
                        }else{ 
                            $statusMsg = "Tải lên thất bại ! Lỗi : ".$errorMsg; 
                            header("location: index.php?showTB= $statusMsg"); 
                        } 
                    }else{ 
                        $statusMsg = 'Bạn chưa chọn file nào !'; 
                        header("location: index.php?showTB= $statusMsg"); 
                    } 

            }
    
} 

?>


<?php
/* 
// LỰA CHỌN UPLOAD 1 FILE
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

*/
?>



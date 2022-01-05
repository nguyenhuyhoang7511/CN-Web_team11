<?php

$conn = mysqli_connect('localhost','root','','tour');
if(!$conn){
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
}

if(isset($_FILES['image']['name']))
                {
                    //Get the details of the selected images
                    $image_name = $_FILES['image']['name'];

                    //Check Whether the Image is Selected or not and upload image only if selected
                    if($image_name!="")
                    {
                        // Image is SElected
                        //A. REnamge the Images
                        //Get the extension of selected image (jpg, png, gif, etc.) "vijay-thapa.jpg" vijay-thapa jpg
                        $ext = end(explode('.', $image_name));

                        // Create New Name for Images
                        $image_name = "Food-Name-".rand(0000,9999).".".$ext; //New Image Name May Be "Food-Name-657.jpg"

                        //B. Upload the Images
                        //Get the Src Path and DEstinaton path

                        // Source path is the current location of the image
                        $src = $_FILES['image']['tmp_name'];

                        //Destination Path for the image to be uploaded
                        $dst = "../images/food/".$image_name;

                        //Finally Uppload the food image
                        $upload = move_uploaded_file($src, $dst);

                        //check whether image uploaded of not
                        if($upload==false)
                        {
                            //Failed to Upload the image
                            //REdirect to Add Food Page with Error Message
                            $_SESSION['upload'] = "<div class='error'>Failed to Upload Image.</div>";
                            header('location:'.SITEURL.'admin/add-food.php');
                            //STop the process
                            die();
                        }

                    }

                }
                else
                {
                    $image_name = ""; //SEtting DEfault Value as blank
                }

                //3. Insert Into Database

                //Create a SQL Query to Save or Add food
                // For Numerical we do not need to pass value inside quotes '' But for string value it is compulsory to add quotes ''
                $sql2 = "INSERT INTO thongtinchung SET 
                    MaTour = '$MaTour',
                    ChuTour = '$ChuTour',
                    TenTour = '$TenTour',
                    ĐiaDiem = '$DiaDiem',
                    SoNgayDiTour = '$SoNgayDiTour',
                    TraGop = '$TraGop',
                    KhuyenMai= '$KhuyenMai',
                    hinhanh = '$image_name'
                ";
                $result = mysqli_query($conn,$sql2);
                if($result)

                


?>

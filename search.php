<?php

                $diadiem = $_POST['txtdiadiem'];
                $diemkhoihanh = $_POST['diemkhoihanh'];
                $diemden = $_POST['diemden'];
                // $loaitour = $_POST['loaitour'];
                $chitiet = $_POST['chitiet'];
                $songayditour = $_POST['songayditour'];
                // $khoanggia = $_POST['khoanggia'];
                // $checkKM = $_POST['checkKM'];
                // $checkTG = $_POST['checkTG'];
                $conn = mysqli_connect('localhost','root','','tour');
                 if(!$conn){
                     die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                }
               
                    
                    $search = "SELECT * FROM thongtinchung tc,loaitour lt,thongtinchitiet tt WHERE tc.MaTour = tt.ID and tc.LoaiTour = lt.MaLoai
                    tc.DiaDiem like $diadiem and tt.DiemKhoiHanh like $diemkhoihanh and tt.DiemDen like $diadiem --and lt.LoaiTour like $loaitour
                    and tc.chitiet like '%$chitiet%' and tc.SoNgayDiTour = $songayditour";
                    $result = mysqli_query($conn,$search);
                    $count = mysqli_num_rows($result);
                    if($count > 0){
                        header("location: search.php");
                        echo 'thành công';
                    }
                    else
                    {
                         header("location: search.php");
                        echo 'thất bại';
                    }
                    
                    
          
                
               

?>

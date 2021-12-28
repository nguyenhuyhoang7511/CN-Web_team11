<?php

                $conn = mysqli_connect('localhost','root','','tour');
                 if(!$conn){
                     die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                }
                $diadiem = $_POST['diadiem'];
                $diemkhoihanh = $_POST['diemkhoihanh'];
                $diemden = $_POST['diemden'];
                $loaitour = $_POST['loaitour'];
                $chitiet = $_POST['chitiet'];
                $songayditour = $_POST['songayditour'];
                $khoanggia = $_POST['khoanggia'];
                $checkKM = $_POST['checkKM'];
                $checkTG = $_POST['checkTG'];
                $search = "SELECT * FROM thongtinchung tc,loaitour lt,thongtinchitiet tt WHERE tc.MaTour = tt.ID and tc.LoaiTour = lt.MaLoai
                tc.DiaDiem like $diadiem and tt.DiemKhoiHanh like $diemkhoihanh and tt.DiemDen like $diadiem and lt.LoaiTour like $loaitour
                and tc.chitiet like '%$chitiet%' and tc.SoNgayDiTour = $songayditour";
                $result = mysqli_query($conn,$search);
                if($result > 0){
                    echo 'thành công';
                }
                else echo 'thất bại'

?>

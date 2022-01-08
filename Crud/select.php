<?php  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "thuchanh");  
      $query = "SELECT * FROM db_thongtintour WHERE ma_tour = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Mã Tour</label></td>  
                     <td width="70%">'.$row["ma_tour"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Chủ Tour</label></td>  
                     <td width="70%">'.$row["chu_tour"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Tên Tour</label></td>  
                     <td width="70%">'.$row["ten_tour"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Loại</label></td>  
                     <td width="70%">'.$row["loai_tour"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Địa điểm</label></td>  
                     <td width="70%">'.$row["dia_diem"].'</td>  
                </tr>  
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
 }  
 ?>
 
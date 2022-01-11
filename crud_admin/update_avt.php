<?php  
 $connect = mysqli_connect("localhost", "root", "", "hahalolo_tour");  
 if(!empty($_POST))  
 {  
     $output = '';  
     $message = '';  
     $ma_tour = mysqli_real_escape_string($connect, $_POST["ma_tour"]);  
     $chu_tour = mysqli_real_escape_string($connect, $_POST["chu_tour"]);  
     $loai_tour = mysqli_real_escape_string($connect, $_POST["loai_tour"]);  
     $ten_tour = mysqli_real_escape_string($connect, $_POST["ten_tour"]);  
     $dia_diem = mysqli_real_escape_string($connect, $_POST["dia_diem"]); 
     $thoi_gian = mysqli_real_escape_string($connect, $_POST["thoi_gian"]);  
     $gia_tour = mysqli_real_escape_string($connect, $_POST["gia_tour"]);  
     $mo_ta = mysqli_real_escape_string($connect, $_POST["mo_ta"]); 
  
    
      $query = "  
      INSERT INTO db_thongtintour(ma_tour,chu_tour, loai_tour, ten_tour, dia_diem, thoi_gian,gia_tour,mo_ta)  
      VALUES('$ma_tour','$chu_tour', '$loai_tour', '$ten_tour', '$dia_diem', '$thoi_gian', '$gia_tour', '$mo_ta');  
      ";  
      $message = '#Thêm mới thành công';  
      
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM db_thongtintour ORDER BY ma_tour ASC";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
          <table class="table table-bordered">  
          <tr>  
          <th>Mã Tour</th>  
          <th>Chủ Tour</th>
          <th>Loại Tour</th>
          <th>Tên Tour</th>
          <th>Địa Điểm</th>
          <th>Thời Gian</th>
          <th>Giá Tour</th>  
          <th></th>
          <th> </th>
          <th></th>
          <th></th>
           </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  

                          <td>' . $row["ma_tour"] . '</td> 
                          <td>' . $row["chu_tour"] . '</td>  
                          <td>' . $row["loai_tour"] . '</td>  
                          <td>' . $row["ten_tour"] . '</td>  
                          <td>' . $row["dia_diem"] . '</td>  
                          <td>' . $row["thoi_gian"] . '</td>  
                          <td>' . $row["gia_tour"] . '</td>  

                          <td><button type="button" class="btn btn-info btn-xs"  data-whatever="@getbootstrap">Thêm ảnh</button></td>
                          <td><input type="button" name="edit" value="Edit" id="'.$row["ma_tour"] .'" class="btn btn-info btn-xs edit_data" /></td>  
                          <td><input type="button" name="view" value="view" id="' . $row["ma_tour"] . '" class="btn btn-info btn-xs view_data" /></td>  
                          <td><input type="button" name="delete" value="delete" id="' . $row["ma_tour"] . '" class="btn btn-info btn-xs delete_data" /></td>  

                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }  
      echo $output;  
 }  
 ?>
 
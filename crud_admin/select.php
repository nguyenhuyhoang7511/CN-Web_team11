<?php  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "hahalolo_tour");  
      $query = "SELECT * FROM db_thongtintour WHERE ma_tour = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered " style="font-size: 16px;" >';  
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
                     <td width="30%"><label>Thời Gian</label></td>  
                     <td width="70%">'.$row["thoi_gian"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Địa điểm</label></td>  
                     <td width="70%">'.$row["dia_diem"] .'</td>  
                </tr>                  
                <tr>  
                     <td width="30%"><label>Giá Tour</label></td>  
                     <td width="70%">'.$row["gia_tour"].'Đ'.'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Mô tả</label></td>  
                     <td width="70%">'.$row["mo_ta"].'</td>  
                </tr>                                  
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output; 

     //  $query = "SELECT * FROM db_images WHERE ma_tour = '".$_POST["employee_id"]."'";  
     include 'dbConfig.php';
      $query = $db->query("SELECT * FROM db_images WHERE ma_tour = '".$_POST["employee_id"]."'");


      if($query->num_rows > 0){
           $i = 1;
          while($row = $query->fetch_assoc()){
               echo '<p style="font-size: 20px; color :red">Images '. $i++ .' :</p>';
              $imageURL = 'uploads/'.$row["file_name"];
      ?>
     <img src="<?php echo $imageURL; ?>" alt="" class="d-block w-100" alt="..." />
      <?php }
      }else{ ?>
          <p style="font-size: 20px; color: red;">Không tìm thấy hình ảnh cho tour này !! </p>
      <?php } 



 }  
 ?>
 
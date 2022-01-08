<?php  

$connect = mysqli_connect("localhost", "root", "", "thuchanh");  
if(isset($_POST["employee_id"]))  
{  
     $query = " DELETE  FROM db_thongtintour WHERE ma_tour = '".$_POST["employee_id"]."'";  
     $result = mysqli_query($connect, $query);  
    //  $row = mysqli_fetch_array($result);  
    //  echo json_encode($row);  

    $message = 'Data Delete'; 
    $output ="";
     if(mysqli_query($connect, $query))  
     {  
          $output .= '<label class="text-success">' . $message . '</label>';  
          $select_query = "SELECT * FROM db_thongtintour ORDER BY ma_tour DESC";  
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
               <th>Mô Tả</th>  
               <th>Edit</th>
               <th>View</th>
               <th>Delete</th>
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
                         <td>' . $row["mo_ta"] . '</td>  

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


    
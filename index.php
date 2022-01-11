 
 <?php  
 $connect = mysqli_connect("localhost", "root", "", "thuchanh");  
 $query = "SELECT * FROM db_thongtintour ORDER BY ma_tour DESC";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | PHP Ajax Update MySQL Data Through Bootstrap Modal</title>  
           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3 class ="text-center fs-1" style="font-size: 30px;">ADMIN HAHALOLO TOUR</h3>  
          
                <br />  
                <div class="table-responsive">  
                     <div class ="right">  
                          <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning">Add</button>  

                     </div>  
                     <br />  
                     <div id="employee_table">  
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
                                    <th>Ảnh</th>
                                    <th>Hiển Thị</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                               </tr>  
                               <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               ?>  
                               <tr>  
                                    <td><?php echo $row["ma_tour"]; ?></td> 
                                    <td><?php echo $row["chu_tour"]; ?></td>  
                                    <td><?php echo $row["loai_tour"]; ?></td> 
                                    <td><?php echo $row["ten_tour"]; ?></td> 
                                    <td><?php echo $row["dia_diem"]; ?></td> 
                                    <td><?php echo $row["thoi_gian"]; ?></td> 
                                    <td><?php echo $row["gia_tour"]; ?></td> 
                                    <td><?php echo $row["mo_ta"]; ?></td>        
                                    <td><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Thêm ảnh</button></td>
                                    <td><input type="button" name="view" value="view" id="<?php echo $row["ma_tour"]; ?>" class="btn btn-info btn-xs view_data" /></td>  
                                    <td><input type="button" name="edit" value="Edit" id="<?php echo $row["ma_tour"]; ?>" class="btn btn-info btn-xs edit_data" /></td>  
                                    <td><input type="submit"  name="delete" value="delete" id="<?php echo $row["ma_tour"]; ?>" class="btn btn-info btn-xs delete_data" /></td>  
                               </tr>  
                               <?php  
                               }  
                               ?>  
                          </table>  
                     </div>  
                </div>  
           </div>  
      </body>  
 </html>  

 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Đăng tải ảnh</h2>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
          <!-- <span aria-hidden="true">&times;</span> -->
        <!-- </button> -->
      </div>
      <div class="modal-body">
          <form action="upload.php" method="post" enctype="multipart/form-data" margin-bottom: -30px;">          
                         <div class="alert alert-success text-center text-danger fw-bold text-uppercase" role="alert">
                         <?php
                              // Kiểm tra xem có tồn tại cái error hay không 
                               if (isset($_GET['showTB'])) 
                              {
                              
                              echo  $_GET['showTB'];
                              }
                         ?>
                         </div>
                    <div class="container_flex" style="display: flex;">         
                         <input type="text" class=""   value="Nhập mã tour" name="txt_matour">
                         <input class="form-control" type="file" name="files[]" multiple style="width: 546px; margin-left: 40px;">
                    </div>

                    <div id="carouselExampleControls" class="carousel slide mt-5" data-bs-ride="carousel" >
                         <div class="carousel-inner" style="height: 280px;">
                              <div class="carousel-item active">
                                   <img src="./uploads/no_image.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                              <img src="./uploads/no_image.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                              <img src="./uploads/no_image.jpg" class="d-block w-100" alt="...">
                              </div>
                         </div>
                         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                         </button>
                         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                         </button>
                    </div>


          </form>  
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary"  name="submit" value="Đăng Ảnh" style="margin-left: 30px; ">
        <!-- <button type="button" class="btn btn-primary">Send message</button> -->
      </div>
    </div>
  </div>
</div>



 
 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>   -->
                     <h4 class="modal-title">Thông tin chi tiết của Tour</h4>  
                </div>                 
                <div class="modal-body" id="employee_detail">  
               
               
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>   -->
                     <h4 class="modal-title">ĐIỀN DỮ LIỆU VÀO FORM</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                          <label> Mã Tour</label>  
                          <input type="text" name="ma_tour" id="ma_tour" class="form-control" />  
                          <br />  

                          <label>Chủ Tour</label>  
                          <input type="text" name="chu_tour" id="chu_tour" class="form-control" /> 
                          <br />  
                          <label>Loại Tour</label>  
                          <select name="loai_tour" id="loai_tour" class="form-control">  
                               <option value="Tour Miền Bắc">Tour Miền Bắc</option>  
                               <option value="Tour Miền Trung">Tour Miền Trung</option>  
                               <option value="Tour Miền Nam">Tour Miền Nam</option>  
                          </select>  
                          <br />  
                          <label>Tên Tour</label>  
                          <input type="text" name="ten_tour" id="ten_tour" class="form-control" />  
                          <br />  
                          <label>Địa Điểm</label>  
                          <input type="text" name="dia_diem" id="dia_diem" class="form-control" />  
                          <br />  
                          <label>Thời Gian</label>  
                          <input type="text" name="thoi_gian" id="thoi_gian" class="form-control" />  
                          <br />  
                          <label>Giá Tour</label>  
                          <input type="text" name="gia_tour" id="gia_tour" class="form-control" />  
                          <br />  
                          <label>Mô Tả</label>  
                          <textarea type="text" name="mo_ta" id="mo_ta" class="form-control" cols="" rows=""></textarea>
                          <br />  
                          <!-- <input type="hidden" name="employee_id" id="employee_id" />   -->
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <script>  
 $(document).ready(function()
 {  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.edit_data', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  // HIỂN THỊ DỮ LIỆU LÊN FORM SỬA
                     $('#ma_tour').val(data.ma_tour); 
                     $('#chu_tour').val(data.chu_tour);  
                     $('#loai_tour').val(data.loai_tour);  
                     $('#ten_tour').val(data.ten_tour);  
                     $('#dia_diem').val(data.dia_diem);  
                     $('#thoi_gian').val(data.thoi_gian);  
                     $('#gia_tour').val(data.gia_tour);  
                     $('#mo_ta').val(data.mo_ta);  
                     $('#employee_id').val(data.id);                     
                     $('#insert').val("Update");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
           if($('#name').val() == "")  
           {  
                alert("Name is required");  
           }  
           else if($('#address').val() == '')  
           {  
                alert("Address is required");  
           }  
           else if($('#designation').val() == '')  
           {  
                alert("Designation is required");  
           }  
           else if($('#age').val() == '')  
           {  
                alert("Age is required");  
           }  
           else  
           {  
                $.ajax({  
                     url:"insert.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#employee_table').html(data);  
                     }  
                });  
           }  
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
           if($('#name').val() == "")  
           {  
                alert("Name is required");  
           }  
           else if($('#address').val() == '')  
           {  
                alert("Address is required");  
           }  
           else if($('#designation').val() == '')  
           {  
                alert("Designation is required");  
           }  
           else if($('#age').val() == '')  
           {  
                alert("Age is required");  
           }  
           else  
           {  
                $.ajax({  
                     url:"update.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Updating");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#employee_table').html(data);  
                     }  
                });  
           }  
      }); 
      $(document).on('click', '.view_data', function()
      {  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"select.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  
     $(document).on('click', '.delete_data', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                success:function(data){  // HIỂN THỊ DỮ LIỆU LÊN FORM SỬA
                    $('#employee_table').html(data);                       
                }  
           });  
      }); 

 });  
 </script>

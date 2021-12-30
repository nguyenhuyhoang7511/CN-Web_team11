<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/form_admin.css">
    <title>Document</title>
    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
    border-color: #96D4D4;
}
</style>
</head>
<body>

<!-- START NAV -->
<div class="container-fluid" style="background-color: #FFFFFF; border: 1px solid black;">
  <nav class="navbar navbar-expand-lg navbar-light " >

    <img src="img/logo_2.PNG" alt=""  class="rounded-circle" style="height: 40px;">
      <a class="navbar-brand" href="#"> Administration Hahalolo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Đăng Tour</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Chỉnh Sửa Tour</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Xóa Tour</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Đăng Nhập </a>
          </li>
          
        </ul>
      </div>
  </nav>
</div>
<!-- END NAV -->

<!-- <div class="container mt-5 mb-5">
  <div class="row"> -->
  <h5 class="text-center text-primary fs-2 mt-3 mb-5">THÔNG TIN CÁC TOUR DU DỊCH CỦA HAHALOLO</h5>
        <table class="container-fluid my_container">
            <thead>
                <tr >
                <th scope="col" class="text-center">ID </th>
                <th scope="col" class="text-center">Picture</th>
                <th scope="col" class="text-center">Chủ Tour </th>
                <th scope="col" class="text-center">Loại Tour</th>
                <th scope="col" class="text-center">Địa điểm</th>
                <th scope="col" class="text-center">Thời Gian</th>
                <th scope="col" class="text-center">Giá Tour</th>
                <th scope="col" class="text-center" >Mô tả</th>
                <th scope="col" class="text-center" >Chỉnh Sửa</th>
                <th scope="col" class="text-center">Xóa Tour</th>
                </tr>
            </thead>
            <tbody>
                <!-- Vùng này là dữ liệu cần lặp lại hiển thị từ CSDL (Đẩy dữ liệu từ CSDL) -->
                <?php
                    // Bước 1 : kết nối database server
                    $conn = mysqli_connect('localhost','root','','hahalolo_tour'); // biến kết nối tới csdl

                    // Nếu kết nối thất bại thì dừng lại và hiển thị lỗi 
                    if(!$conn){
                        die("Kết nói thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                    }
                    // Nếu bỏ qua khối if tức là đã kết nối csdl thành công 

                    // Bước 2: Thực hiện truy vấn
                    $sql = " SELECT * FROM db_thongtintour ";

                    // Gọi hàm này để thực hiện truy vấn 
                    $result =  mysqli_query($conn, $sql); // tham số truyền vào (đối tượng kết nối,câu lệnh truy vấn được tạo )
                    // kết quả trả về sẽ là false hoặc một tập kết quả


                    // Bước 3 : Xử lý kết quả truy vấn (tập kết quả trả về)
                    if(mysqli_num_rows($result) > 0) // kiểm tra số lượng bản ghi trả về biến result có lớn hơn 0 hay không 
                    {
                        // Nếu >0 thì thực hiện lặp lại để lấy ra từng bản ghi
                        while($row = mysqli_fetch_assoc($result)){
                ?>
                            <tr style="height: 150px;">
                            <td scope="row" class="my_td_table text-center" style="width: 40px;" >  
                                <?php echo $row['id_tour']; ?>
                            </td>
                            <td scope="row" class="my_td_table text-center" style="width: 200px;">  
                                <!-- <?php echo $row['picture']; ?> -->
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                    <img src="img/infor_tour/carousel/img1.webp" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="img/infor_tour/carousel/img2.webp" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="img/infor_tour/carousel/img3.webp" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="img/infor_tour/carousel/img4.webp" class="d-block w-100" alt="...">
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
                            </td>
                            <td scope="row" class="my_td_table text-center" style="width: 150px;">  
                                <?php echo $row['chu_tour']; ?>
                            </td>
                            <td scope="row" class="my_td_table text-center" style="width: 120px;">  
                                <?php echo $row['loai_tour']; ?>
                            </td>
                            <td scope="row" class="my_td_table text-center" style="width: 150px;">  
                                <?php echo $row['dia_diem']; ?>
                            </td>
                            <td scope="row" class="my_td_table text-center" style="width: 100px;">  
                                <?php echo $row['thoi_gian']; ?>
                            </td>
                            <td scope="row" class="my_td_table text-center" style="width: 100px;">  
                                <?php echo $row['gia_tour']; ?>
                            </td>
                            <td scope="row" class="my_td_table" style="width: 300px;" >  
                                <?php echo $row['mo_ta']; ?>
                            </td>
                            <td scope="row" class="my_td_table text-center" style="width: 80px;" >  
                                <i class="bi bi-pencil-square fs-2"></i>
                            </td>
                            <td scope="row" class="my_td_table text-center" style="width: 80px;" >  
                                <i class="bi bi-trash fs-2"></i>
                            </td>
                            </tr>
                <?php
                        }
                    }
                ?>
                
            </tbody>
        </table>

  <!-- </div>
</div> -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/form_admin.css">
    <title>Document</title>
</head>
<body>

<!-- START NAV -->
<div class="container-fluid" style="background-color: #FFFFFF;">
  <nav class="navbar navbar-expand-lg navbar-light " >

    <img src="img/logo_2.PNG" alt=""  class="rounded-circle" style="height: 40px;">
      <a class="navbar-brand" href="#"> Admin Hahalolo</a>
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
            <a class="nav-link" href="#">Đăng xuất</a>
          </li>
          
        </ul>
      </div>
  </nav>
</div>
<!-- END NAV -->

<form action="upload.php" method="post" enctype="multipart/form-data" style="margin-left: 150px; margin-bottom: -30px;">
        <!-- Chọn file ảnh để upload lên tour: -->
        <div class="container_flex" style="display: flex;">
          <input class="form-control" type="file" name="Myfile" style="width: 624px;">
          <input type="submit" class="btn btn-primary" name="Mysubmit" value="Đăng tải lên Tour" style="margin-left: 30px;">
        </div>
    </form>
<div class="container mt-5 mb-5">
  <div class="row">
  <form>
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <label class="form-label" for="form6Example1">Chủ Tour</label>
        <input type="text" id="form6Example1" class="form-control" />
      </div>
    </div>



    <div class="col">
      <div class="form-outline">
        <label class="form-label" for="form6Example2">Loại Tour</label>
        <input type="text" id="form6Example2" class="form-control" />
      </div>
    </div>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form6Example3">Tên Tour</label>
    <input type="text" id="form6Example3" class="form-control" />
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form6Example4">Địa điểm</label>
    <input type="text" id="form6Example4" class="form-control" />
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form6Example5">Thời gian</label>
    <input type="email" id="form6Example5" class="form-control" />
  </div>

  <!-- Number input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form6Example6">Giá Tour</label>
    <input type="number" id="form6Example6" class="form-control" />
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form6Example7">Thông tin mô tả</label>
    <textarea class="form-control" id="form6Example7" rows="3"></textarea>
  </div>

  <!-- Checkbox -->
  <!-- <div class="form-check d-flex justify-content-center mb-4">
    <input
      class="form-check-input me-2"
      type="checkbox"
      value=""
      id="form6Example8"
      checked
    />
    <label class="form-check-label" for="form6Example8"> Thông tin mô tả  </label>
  </div> -->

  <!-- Submit button -->
  
  <!-- <button type="button" class="btn btn-primary">Đăng Tải</button> -->
  <div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-primary" type="button">Đăng Tải</button>
  </div>
</form>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
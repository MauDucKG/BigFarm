<?php
  session_start();
  if (isset($_SESSION['guest']))
  {
    require_once('models/user.php');
    $data = User::get($_SESSION['guest']);
  }
  
?>
<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BIG FARM - Trang trại quần áo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Logo -->
  <link href="assets/images/team_logo.png" rel="icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
  <link href="assets/stylesheets/style.css" rel="stylesheet">
  <link href="assets/stylesheets/stylesheet.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/stylesheets/star_rating.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
  <script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <!-- Link CSS -->
  <link rel="stylesheet" href="assets/stylesheets/main/services.css">
</head>

<body>
  <?php
  if (isset($_SESSION['guest']))
  {
  echo '
    <div class="modal fade" id="EditUserModal" tabindex="-1" role="dialog" aria-labelledby="EditUserModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Chỉnh sửa</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="index.php?page=main&controller=register&action=editInfo" enctype="multipart/form-data" method="post">
          <div class="modal-body">
            <input type="hidden" name="email">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="row"> </div>
                  <label>Họ và tên lót</label>
                  <input class="form-control my-2" type="text" placeholder="Họ và tên lót" name="fname" value="' . $data->fname . '"/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="row"> </div>
                  <label>Tên</label>
                  <input class="form-control my-2" type="text" placeholder="Tên" name="lname" value="' . $data->lname . '"/>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Tuổi</label>
                  <input class="form-control my-2" type="number" placeholder="Tuổi" name="age" value="' . $data->age . '"/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Giới tính:</label>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender"' . (($data->gender == '1')?'checked':"") . ' value="1" />
                        <label>Nam</label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender"' . (($data->gender == '0')?'checked':"") . ' value="0" />
                        <label>Nữ</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label>Số điện thoại</label>
              <input class="form-control my-2" type="number" placeholder="Số điện thoại" name="phone" value="' . $data->phone . '"/>
            </div>
            <div class="form-group">
              <label>Hình ảnh hiện tại </label>
              <input class="form-control my-2" type="text" name="img" readonly value="' . $data->profile_photo . '" />
            </div>
            <div class="form-group">
              <label>Hình ảnh mới</label>&nbsp
              <input type="file" class="form-control my-2" name="fileToUpload" id="fileToUpload" />
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Đóng lại</button>
            <button class="btn btn-primary" type="submit">Cập nhật</button>
          </div>
        </form>
      </div>
    </div>
  </div>';
  }
  ?>
  
  <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container  align-items-center">
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="public/assets/img/logo.png" alt="" class="img-fluid"></a>-->
      
        <nav class="navbar navbar-expand-lg navbar-light bg-white bd-subnavbar py-2">
            <h1 class="logo "><a href="index.php?page=main&controller=layouts&action=index"><img src="assets/images/team_logo.png" alt="">BIG<span>FARM</span></a></h1>
            <button class="navbar-toggler ms-5" type="button"  aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse hide" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="index.php?page=main&controller=layouts&action=index" class="nav-link">Introduce</a></li>
                    <li class="nav-item"><a href="index.php?page=main&controller=about&action=index">About</a></li>
                    <li class="nav-item"><a href="index.php?page=main&controller=blog&action=index">News</a></li>
                    <li class="nav-item"><a href="index.php?page=main&controller=sale&action=index">Sale</a></li>
                    <li class="nav-item"><a href="index.php?page=main&controller=products&action=index">Product</a></li>
                    <li class="nav-item"><a href="index.php?page=main&controller=services&action=index">Service</a></li>
                    <li class="nav-item"><a href="index.php?page=main&controller=contact&action=index">Contact</a></li>

                    <?php
                        if (!isset($_SESSION["guest"])){
                    ?>
                        <li><a href="index.php?page=main&controller=register&action=index" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Đăng ký"><i class="bu bi-file-lock-fill">Register</i></a></li> <!-- Đăng ký -->
                        <li><a href="index.php?page=main&controller=login&action=index" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Đăng nhập" class="box-arrow-in-right"><i class="bu bi-person-lines-fill">Login</i></a></li> <!-- Đăng nhập -->
                            
                    <?php
                        }
                        else{
                            echo '
                            <li><a href="" data-bs-toggle="modal" data-bs-target="#EditUserModal"><i class="bu bi-person-badge-fill"></i></a></li>
                            <li><a href="index.php?page=main&controller=login&action=logout" class="box-arrow-in-right"><i class="bu bi-box-arrow-right"></i></a></li> <!-- Đăng xuất -->
                            ';
                        }
                    ?>
                </ul>
                    <!-- <i class="bi bi-list mobile-nav-toggle"></i> -->
                </ul>
            </div>
            
        </nav>
    </div>
  </header><!-- End Header -->
  
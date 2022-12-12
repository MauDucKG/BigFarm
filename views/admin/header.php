<?php
  session_start();
  if (isset($_SESSION['guest']))
  {
    require_once('models/user.php');
    $data = User::get($_SESSION['guest']);
  }
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="views/main/about/stylesheet.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.rawgit.com/afeld/bootstrap-toc/v1.0.1/dist/bootstrap-toc.min.css"/>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
   <script src="https://cdn.tailwindcss.com"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

   
   <title>Big Farm</title>
</head>
<body>
   <!-- Header -->
   <header id="navigation" class="container-fluid">
      <nav class="navbar fixed-top navbar-expand-xl navbar-light bg-light">
         <div class="container">
            <a href="index.php" class="navbar-brand mb-0 h1">
               <img class="d-inline-block align-top"  src="assets/images/team_logo.png" width="30" height="30" alt="ảnh">
               Trang chủ
            </a>
            <button type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" 
            class="navbar-toggler"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav navbar-nav-scroll">
                  <li class="nav-item active">
                     <a href="index.php?page=main&controller=about&action=index" class="nav-link">About us</a>
                  </li>
                  <li class="nav-item active">
                     <a href="index.php?page=main&controller=blog&action=index" class="nav-link">Tin tức</a>
                  </li>                  
                  <li class="nav-item active">
                     <a href="index.php?page=main&controller=contact&action=index" class="nav-link">Liên hệ</a>
                  </li>

                  <li class="nav-item dropdown">
                     <a href="index.php?page=main&controller=services&action=index" class="nav-link dropdown-toggle" 
                     id="navbarDropdown" 
                     role="button"
                     data-bs-toggle="dropdown"
                     aria-expanded="false"
                     >Sản phẩm</a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a href="#" class="dropdown-item">Thời trang nam</a></li>
                        <li><a href="#" class="dropdown-item">Thời trang nữ</a></li>
                        <li><a href="#" class="dropdown-item">Thời trang hot</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
            <div class="d-flex collapse navbar-collapse" id="navbarNav ">
               <ul class="navbar-nav me-auto mb-2 my-lg-0 navbar-nav-scroll float-right">
                  <li class="nav-item active ">
                     <?php
                        if(!isset($_SESSION["guest"])){
                           echo '<a class="btn btn-outline-primary m-1" href="index.php?page=main&controller=register&action=index">Đăng ký</a>
                                 <a class="btn btn-outline-success m-1" href="index.php?page=main&controller=login&action=index">Đăng nhập</a>';
                        }
                        else{
                           echo '<a href="index.php?page=main&controller=login&action=logout" class="btn btn-outline-danger"><i class="bi bi-box-arrow-in-right p-2"></i>Log out</a>';
                        }
                     ?>
                  </li>
               </ul>
            </div>

         </div>
      </nav>
   </header>
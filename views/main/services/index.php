<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="views/main/about/stylesheet.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <link rel="stylesheet" href="assets/stylesheets/star_rating.css">
   <title>Products</title>
   <style>
      @media only screen and (max-width : 992px) {

      }
      @media only screen and (max-width : 575px) {

      }
      @media only screen and (max-width : 830px) {
         .stars label {
            font-size: 10px;
         }
      }
      @media screen and (max-width: 540px) {
         .stars label {
            margin: 0 2px;
         }
         #advertisement-product{
            margin-top: 120px;
         }

      }
  </style>
</head>
<body>
   <div id="navigation" class="container-fluid">
      <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light">
         <div class="container">
            <a href="#" class="navbar-brand mb-0 h1">
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
               <ul class="navbar-nav ">
                  <li class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle" 
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
                  <li class="nav-item active">
                     <a href="" class="nav-link">About us</a>
                  </li>
                  <li class="nav-item active">
                     <a href="" class="nav-link">Contact us</a>
                  </li>                  
                  <li class="nav-item active">
                     <a href="" class="nav-link">Chính sách - hướng dẫn</a>
                  </li>
               </ul>
            </div>
            <form class="d-flex">
               <input type="text" class="form-control me-2" placeholder="Search">
               <button class="btn btn-outline-info" type="submit">Search</button>
            </form>
            <form class="d-flex", style="padding-left: 50px;">
               <button class="btn btn-outline-success" type="submit">Đăng nhập</button>
            </form>         
         </div>
      </nav>
   </div>
   <div id="advertisement-product"class="container-fluid d-block"style="margin-top: 60px;">
      <div class="row banner">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="https://bizweb.dktcdn.net/100/442/302/themes/842651/assets/slider_1.jpg?1668074220953" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
               <img src="https://bizweb.dktcdn.net/100/442/302/themes/842651/assets/slider_2.jpg?1668074220953" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
               <img src="https://bizweb.dktcdn.net/100/442/302/themes/842651/assets/slider_3.jpg?1668074220953" class="d-block w-100" alt="...">
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
      </div>
   </div>

   <!-- Items -->
   <div class="container py-2">
      <div class="container px-4 px-lg-6 mt-4">
         <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3 justify-content-center">
            <div class="col mb-3">
               <div class="card h-100">
                     <!-- Product image-->
                     <img class="card-img-top" src="https://cf.shopee.vn/file/508cf08952898b9e6e6fde494902dc4b" style="height: 300px;" alt="..." />
                     <!-- Product details-->
                     <div class="card-body p-4">
                        <div class="text-center">
                           <!-- Product name-->
                           <h5 class="product-name fw-bolder">Áo thun </h5>
                           <!-- Product price-->
                           134.000 <span class="money-unit">đ</span> 
                        </div>
                        <!-- Rating -->
                        <div class="star-block">
                           <div class="stars">
                                 <input type="radio" id="five" name="rate" value="5">
                                 <label for="five"></label>
                                 <input type="radio" id="four" name="rate" value="4">
                                 <label for="four"></label>
                                 <input type="radio" id="three" name="rate" value="3">
                                 <label for="three"></label>
                                 <input type="radio" id="two" name="rate" value="2">
                                 <label for="two"></label>
                                 <input type="radio" id="one" name="rate" value="1">
                                 <label for="one"></label>
                              <!-- <span class="have-bought">Đã bán ffsdaf</span> -->
                           </div>
                        </div>
        
                     </div>
   
                     <!-- Product actions-->
                     <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Xem thêm</a></div>
                     </div>
               </div>
            </div>
            <div class="col mb-3">
               <div class="card h-100">
                     <!-- Sale badge-->
                     <div class="badge bg-warning text-dark position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                     <!-- Product image-->
                     <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" style="height: 300px;" alt="..." />
                     <!-- Product details-->
                     <div class="card-body p-4">
                        <div class="text-center">
                           <!-- Product name-->
                           <h5 class="fw-bolder">Áo thun cao cấp</h5>
                           <!-- Product price-->
                           <span class="text-muted text-decoration-line-through"><span></span> </span>
                           225.000 <span class="money-unit">đ</span> 
                        </div>
                        <!-- Rating -->
                        <div class="star-block">
                           <div class="stars">
                                 <input type="radio" id="five" name="rate" value="5">
                                 <label for="five"></label>
                                 <input type="radio" id="four" name="rate" value="4">
                                 <label for="four"></label>
                                 <input type="radio" id="three" name="rate" value="3">
                                 <label for="three"></label>
                                 <input type="radio" id="two" name="rate" value="2">
                                 <label for="two"></label>
                                 <input type="radio" id="one" name="rate" value="1">
                                 <label for="one"></label>
                              <!-- <span class="have-bought">Đã bán ffsdaf</span> -->
                           </div>
                        </div>
                     </div>
                     
                     <!-- Product actions-->
                     <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                     </div>
               </div>
            </div>
            <div class="col mb-3">
               <div class="card h-100">
                     <!-- Sale badge-->
                     <div class="badge bg-warning text-dark position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                     <!-- Product image-->
                     <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" style="height: 300px;" alt="..." />
                     <!-- Product details-->
                     <div class="card-body p-4">
                        <div class="text-center">
                           <!-- Product name-->
                           <h5 class="fw-bolder">Áo sơ mi</h5>
                           <!-- Product price-->
                           <span class="text-muted text-decoration-line-through">$50.00</span>
                           325.000 <span class="money-unit">đ</span> 
                        </div>
                        <!-- Rating -->
                        <div class="star-block">
                           <div class="stars">
                                 <input type="radio" id="five" name="rate" value="5">
                                 <label for="five"></label>
                                 <input type="radio" id="four" name="rate" value="4">
                                 <label for="four"></label>
                                 <input type="radio" id="three" name="rate" value="3">
                                 <label for="three"></label>
                                 <input type="radio" id="two" name="rate" value="2">
                                 <label for="two"></label>
                                 <input type="radio" id="one" name="rate" value="1">
                                 <label for="one"></label>
                              <!-- <span class="have-bought">Đã bán ffsdaf</span> -->
                           </div>
                        </div>
                     </div>
                     <!-- Product actions-->
                     <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                     </div>
               </div>
            </div>
            <div class="col mb-3">
               <div class="card h-100">
                     <!-- Product image-->
                     <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" style="height: 300px;" alt="..." />
                     <!-- Product details-->
                     <div class="card-body p-4">
                        <div class="text-center">
                           <!-- Product name-->
                           <h5 class="fw-bolder">Áo khoác</h5>
                           <!-- Product price-->
                           150.000 <span class="money-unit">đ</span> 
                        </div>
                        <!-- Rating -->
                        <div class="star-block">
                           <div class="stars">
                                 <input type="radio" id="five" name="rate" value="5">
                                 <label for="five"></label>
                                 <input type="radio" id="four" name="rate" value="4">
                                 <label for="four"></label>
                                 <input type="radio" id="three" name="rate" value="3">
                                 <label for="three"></label>
                                 <input type="radio" id="two" name="rate" value="2">
                                 <label for="two"></label>
                                 <input type="radio" id="one" name="rate" value="1">
                                 <label for="one"></label>
                              <!-- <span class="have-bought">Đã bán ffsdaf</span> -->
                           </div>
                        </div>
                     </div>
                     <!-- Product actions-->
                     <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                     </div>
               </div>
            </div>
            <div class="col mb-3">
               <div class="card h-100">
                     <!-- Sale badge-->
                     <div class="badge bg-warning text-dark position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                     <!-- Product image-->
                     <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" style="height: 300px;" alt="..." />
                     <!-- Product details-->
                     <div class="card-body p-4">
                        <div class="text-center">
                           <!-- Product name-->
                           <h5 class="fw-bolder">Áo sơ mi ngắn tay</h5>
                           <!-- Product price-->
                           <span class="text-muted text-decoration-line-through">225.000 <span class="money-unit">đ</span> </span>
                           175.000 <span class="money-unit">đ</span> 
                        </div>
                        <!-- Rating -->
                        <div class="star-block">
                           <div class="stars">
                                 <input type="radio" id="five" name="rate" value="5">
                                 <label for="five"></label>
                                 <input type="radio" id="four" name="rate" value="4">
                                 <label for="four"></label>
                                 <input type="radio" id="three" name="rate" value="3">
                                 <label for="three"></label>
                                 <input type="radio" id="two" name="rate" value="2">
                                 <label for="two"></label>
                                 <input type="radio" id="one" name="rate" value="1">
                                 <label for="one"></label>
                              <!-- <span class="have-bought">Đã bán ffsdaf</span> -->
                           </div>
                        </div>
                     </div>
                     <!-- Product actions-->
                     <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                     </div>
               </div>
            </div>
            <div class="col mb-3">
               <div class="card h-100">
                     <!-- Product image-->
                     <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" style="height: 300px;" alt="..." />
                     <!-- Product details-->
                     <div class="card-body p-4">
                        <div class="text-center">
                           <!-- Product name-->
                           <h5 class="fw-bolder">Áo khoác</h5>
                           <!-- Product price-->
                           127.000đ - 221.000 đ
                        </div>
                        <!-- Rating -->
                        <div class="star-block">
                           <div class="stars">
                                 <input type="radio" id="five" name="rate" value="5">
                                 <label for="five"></label>
                                 <input type="radio" id="four" name="rate" value="4">
                                 <label for="four"></label>
                                 <input type="radio" id="three" name="rate" value="3">
                                 <label for="three"></label>
                                 <input type="radio" id="two" name="rate" value="2">
                                 <label for="two"></label>
                                 <input type="radio" id="one" name="rate" value="1">
                                 <label for="one"></label>
                              <!-- <span class="have-bought">Đã bán ffsdaf</span> -->
                           </div>
                        </div>
                     </div>
                     <!-- Product actions-->
                     <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                     </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   
   <div class="footer-field">
      <footer class="text-center text-white bg-dark">
         <!-- Grid container -->
         <div class="container p-4 pb-0">
             <!-- Section: CTA -->
             <div class="cta">
                 <p class="d-flex justify-content-center align-items-center">
                     <span class="me-3">Mua sắp ngay</span>
                     <button type="button" class="btn btn-outline-info btn-rounded">
                        Sign in!
                     </button>
                     <span class="px-3"> hoặc đăng ký tài khoản tại đây 👉</span>
                     <button type="button" class="btn btn-outline-info btn-rounded">
                        Sign up!
                     </button>                  
                 </p>
             </div>
             <!-- Section: CTA -->
         </div>
         <!-- Grid container -->
       
         <!-- Copyright -->
         <div class="text-center p-3">
             © 2022 written by:
             <a class="text-white" href="#">Vũ Đăng Khoa</a> | <a class="text-white" href="#">,.....</a> | <a class="text-white" href="#">....</a>
         </div>
         <!-- Copyright -->
       </footer>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>
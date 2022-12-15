<?php 
   include_once('views/main/navbar.php');
?>


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

<section id="about-page">

<style>
   .card:hover{
      box-shadow: 10px 10px 5px lightblue;
      background-color: gainsboro;
   }
   @media screen and (max-width: 1199px) {
      #about-image{
         display: none;
      }      
   }
   @media only screen and (max-width : 992px) {
      #about-image{
         display: none;
      }
   }
   @media only screen and (max-width : 575px) {

   }
   @media only screen and (max-width : 830px) {

   }
   @media screen and (max-width: 540px) {
      #advertisement-product{
         margin-top: 120px;
      }


   }
</style>
   <main>
      <div class="container py-2 mb-2" style="box-shadow: 0 5px 10px rgba(0,0,0,.2);">
         <div class="container px-4 px-lg-6 mt-5" style="margin-top: 500;">
            <div class="row m-5">
            <div class="text-center">
                     <h class="m-5 " style="font-size: 50px">ABOUT US</h>
            </div>
               <div class="col-md-12 col-xl-7  justify-content">
                  
                  
                  <p style="font-size: 20px;">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis provident perspiciatis suscipit. Quibusdam, labore perferendis distinctio voluptatibus temporibus tempore quasi! Velit ex aperiam aut excepturi provident quam ipsa quibusdam ut.
                  </p>
                  <p>
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui aut doloribus ipsa id nostrum expedita quia. Explicabo, esse possimus. Consequatur officiis quibusdam voluptatibus sit rem explicabo eligendi perspiciatis. Blanditiis, a?
                  </p>
                  <div class="align-items-center" >
                     <button class="btn btn-dark text-white m-2" style="font-size: 30px;" href="https://www.facebook.com/profile.php?id=100043539343788">View fanpage 
                     </button>
                     <div class="m-3" style="font-size: 50px;">
                        <i class="bi bi-facebook"></i> 
                        <i class="bi bi-instagram" ></i>
                        <i class="bi bi-twitter"></i>
                     </div>

                  </div>
                  
               </div>
               <div class="col-md-12 col-xl-4 rounded-2 m-2 d-none d-lg-block d-print-block">
                  <img id="about-image"  class="p-3" src="/BigFarm/assets/images/thoi-trang-nam.jpg" alt="hello">
               </div>
            </div>      
         </div>

      </div>
      <div class="text-center p-2 mx-5" style="background-color: white; box-shadow: 0 5px 10px rgba(0,0,0,.2);" >
         <h1 class="">CÁC THÀNH VIÊN</h1>
         <p class="justify-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa, voluptatum sapiente numquam consequuntur atque est incidunt maxime, veniam quia eum cum magnam. Ad aliquam omnis accusantium voluptatibus, alias ut qui!</p>
         <p class="justify-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam esse consequatur iure corrupti recusandae voluptatum quasi harum laudantium dolor ea animi, suscipit eos? Voluptatum quia quis odit neque repudiandae! Facere.</p>
      </div>
      <div style="height: 50px;">

      </div>
      <div class="m-2">
         <div class="row">

            <div id="card-content" class=" row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center">
               <div id="card" class="col mb-3" style="width: 25rem;">
                  <div class="card rounded-2" >
                     <!-- Product image-->
                     <img class="card-img-top" src="/BigFarm/assets/images/consulting.jpg"  alt="..." />
                     <!-- Product details-->
                     <div class="card-body p-4">
                        <div class="text-center">
                           <!-- Product name-->
                           <h5 class="product-name fw-bolder">PHẠM HOÀNG ĐỨC HUY</h5> 
                        </div>   
                        <!-- Rating -->
                        <div class="justify-content">
                           Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur voluptatum ad itaque provident aut tempore voluptate vero quis sapiente, obcaecati, officiis expedita ipsam! Eveniet doloremque impedit fugiat, voluptates architecto neque.
                        </div>
                     </div>
                  </div>
               </div>

               <div id="card" class="col mb-3" style="width: 25rem;">
                  <div class="card rounded-2">
                     <!-- Product image-->
                     <img class="card-img-top" src="/BigFarm/assets/images/designing.jpg"  alt="..." />
                     <!-- Product details-->
                     <div class="card-body p-4">
                        <div class="text-center">
                           <!-- Product name-->
                           <h5 class="product-name fw-bolder">GIANG TUẤN HIỀN</h5> 
                        </div>   
                        <!-- Rating -->
                        <div class="justify-content">
                           Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur voluptatum ad itaque provident aut tempore voluptate vero quis sapiente, obcaecati, officiis expedita ipsam! Eveniet doloremque impedit fugiat, voluptates architecto neque.
                        </div>
                     </div>
                  </div>
               </div>

               <div id="card" class="col mb-3" style="width: 25rem;">
                  <div class="card rounded-2">
                     <!-- Product image-->
                     <img class="card-img-top" src="/BigFarm/assets/images/consulting.jpg"  alt="..." />
                     <!-- Product details-->
                     <div class="card-body p-4">
                        <div class="text-center">
                           <!-- Product name-->
                           <h5 class="product-name fw-bolder">VŨ ĐĂNG KHOA</h5> 
                        </div>   
                        <!-- Rating -->
                        <div class="justify-content">
                           Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur voluptatum ad itaque provident aut tempore voluptate vero quis sapiente, obcaecati, officiis expedita ipsam! Eveniet doloremque impedit fugiat, voluptates architecto neque.
                        </div>
                     </div>
                  </div>
               </div>
               <div id="card" class="col mb-3" style="width: 25rem;">
                  <div class="card rounded-2">
                     <!-- Product image-->
                     <img class="card-img-top" src="/BigFarm/assets/images/sale.jpg" alt="..." />
                     <!-- Product details-->
                     <div class="card-body p-4">
                        <div class="text-center">
                           <!-- Product name-->
                           <h5 class="product-name fw-bolder">NGUYỄN MẬU MINH ĐỨC</h5> 
                        </div>   
                        <!-- Rating -->
                        <div class="justify-content">
                           Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur voluptatum ad itaque provident aut tempore voluptate vero quis sapiente, obcaecati, officiis expedita ipsam! Eveniet doloremque impedit fugiat, voluptates architecto neque.
                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>

      <section style="background-color: white; box-shadow: 0 5px 10px rgba(0,0,0,.2);" onclick="window.location.href='/BigFarm/index.php?page=main&controller=products&action=index'">
      <div class="align-left container" >

         <div class="row p-4">
            <div class="col-12">
                  <h1 class="mbr-title mbr-fonts-style mbr-white mb-5 display-2 text-dark text-center fs-1"><strong>CÁC DỊCH VỤ CỦA CHÚNG TÔI</strong>
                  </h1>
            </div>
            <div class="col-12 col-lg-3 col-md-6">
                  <div class="card rounded-2"  style="background-color: sandybrown;">
                     <h3 class="text-center"><strong class="m-5">
                              1</strong></h3>
                     <h2 class=" ">
                        <strong>
                        </strong>
                        <div class="align-middle m-2 text-center"><strong>Tư vấn </strong></div>
                     </h2>

                     <img class="rounded-bottom" src="/BigFarm/assets/images/consulting.jpg" alt="tư vấn thời trang">
                  </div>
                  <div style="height: 30px;"></div>
            </div>
            <div class="col-12 col-lg-3 col-md-6">
                  <div class="card rounded-2"  style="background-color: deepskyblue;">
                     <h3 class="text-center"><strong class="m-5">
                              2</strong></h3>
                     <h2 class=" ">
                        <strong>
                        </strong>
                        <div class="align-middle m-2 text-center"><strong>Thiết kế</strong></div>
                     </h2>
                     <img class="rounded-bottom" src="/BigFarm/assets/images/designing.jpg" alt="thiết kế thời trang">
                  </div>
                  <div style="height: 30px;"></div>
            </div>
            <div class="col-12 col-lg-3 col-md-6">
               <div class="card rounded-2"  style="background-color: darkseagreen;">
                  <h3 class="text-center"><strong class="m-5">
                           3</strong></h3>
                  <h2 class=" ">
                     <strong>
                     </strong>
                     <div class="align-middle m-2 text-center"><strong>Bán lẻ</strong></div>
                  </h2>

                  <img class="rounded-bottom" src="/BigFarm/assets/images/sale.jpg" alt="thiết kế thời trang" stlye="max-height: 195px;">
               </div>
               <div style="height: 30px;"></div>
            </div>
            <div class="col-12 col-lg-3 col-md-6">
                  <div class="card rounded-2"  style="background-color: sandybrown;">
                     <h3 class="text-center"><strong class="m-5">
                              4</strong></h3>
                     <h2 class=" ">
                        <strong>
                        </strong>
                        <div class="align-middle m-2 text-center"><strong>Hóa trang</strong></div>
                     </h2>

                     <img class="rounded-bottom" src="/BigFarm/assets/images/consulting.jpg" alt="tư vấn thời trang">
                  </div>
                  <div style="height: 30px;"></div>
            </div>
      </div>
   </section>

   </main>
</section>

<?php
   include_once('views/main/footer.php');
?>


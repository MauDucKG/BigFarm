<?php
  include_once('views/main/navbar.php');
?>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active align-center">
            <img src="https://bizweb.dktcdn.net/100/442/302/themes/842651/assets/slider_3.jpg?1668074220953" class="d-block w-60 imageChance" alt="">
            <!-- <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div> -->
            </div>
            <div class="carousel-item">
            <img src="https://bizweb.dktcdn.net/100/442/302/themes/842651/assets/slider_2.jpg?1668074220953" class="d-block w-100" alt="">
            <!-- <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div> -->
            </div>
            <div class="carousel-item">
            <img src="https://bizweb.dktcdn.net/100/442/302/themes/842651/assets/slider_1.jpg?1668074220953" class="d-block w-100" alt="">
            <!-- <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div> -->
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <main id="main">
    
    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <br>
            <br>
            <br>
            <br>
            <br>
            <h1 class="text-center"><span class="red">BIG</span><span class="green">FARM</span> - <span class="fw-bold">N??NG NIU V??C D??NG VI???T</span></h1><br>
        </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <br>
            <br>
            <h3 class="text-center"><span class="red">BIG</span><span class="green">FARM</span> h??n c??? m???t th????ng hi???u.</h3>
              <p>
                  Slogan: <span class="fw-bold">Fashion for all - Th???i trang cho m???i ng?????i</span>
              <p class="fst-italic justify-content">
                Logo ???????c l???y ?? t?????ng ch??nh t??? tr??i chanh v??ng (lemon), t??n g???i c???a nh??m v???i h??nh d??ng c??ch ??i???u c???a tr??i chanh. Lemon t?????ng tr??ng cho s??? ????n gi???n, kh??ng c???u k???, h?????ng t???i h???nh ph??c ch??n ch??nh.
              </p>
              <p class="fst-italic">Thi???t k??? k???t h???p t??? 2 gam m??u ch??? ?????o l?? v??ng v?? cam: </p>
              <ul class="fst-italic">
                  <li class="justify-content">M??u v??ng l?? m??u c???a ??nh n???ng d???u nh???, l?? m??u c???a cu???c s???ng vui t????i, l???c quan, ???m ??p, gi??u sang v?? th???nh v?????ng. <span class="fw-bold">????y l?? m???c ti??u m?? nh??m h?????ng ?????n.</span></li>
                  <li class="justify-content">M??u cam bi???u tr??ng cho s??? ph???n kh???i, s??ng t???o, h???nh ph??c, quy???t ??o??n v?? ??am m?? m??nh li???t. Ngo??i ra, s???c cam c??n l?? bi???u t?????ng c???a s???c m???nh, s??? b???n b??? <span class="fw-bold">gi???ng nh?? t??nh c??ch c??ng nh?? t??nh th???n c???a c??c th??nh vi??n trong nh??m.</span></li>
              </ul>
              </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
    <div id="about">

    </div>
    <div id="news" onclick="window.location.href='/BigFarm/index.php?page=main&controller=blog&action=index'">
    </div>
    <div id="contact" onclick="window.location.href='/BigFarm/index.php?page=main&controller=contact&action=index'" style=" box-shadow: 0 5px 10px rgba(0,0,0,.2);">

    </div>
    <script>
      $(function(){
        $("#about").load("http://localhost/BigFarm/index.php?page=main&controller=about&action=index #about-page"); 
      });
      $(function(){
        $("#news").load("http://localhost/BigFarm/index.php?page=main&controller=blog&action=index #blog"); 
      });
      $(function(){
        $("#contact").load("http://localhost/BigFarm/index.php?page=main&controller=contact&action=index #contact"); 
      });
    </script>
  

  </main><!-- End #main -->

  <?php
include_once('views/main/footer.php');
?>
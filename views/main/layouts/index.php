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
            <h1 class="text-center"><span class="red">BIG</span><span class="green">FARM</span> - <span class="fw-bold">NÂNG NIU VÓC DÁNG VIỆT</span></h1><br>
        </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <br>
            <br>
            <h3 class="text-center"><span class="red">BIG</span><span class="green">FARM</span> hơn cả một thương hiệu.</h3>
              <p>
                  Slogan: <span class="fw-bold">Fashion for all - Thời trang cho mọi người</span>
              <p class="fst-italic justify-content">
                Logo được lấy ý tưởng chính từ trái chanh vàng (lemon), tên gọi của nhóm với hình dáng cách điệu của trái chanh. Lemon tượng trưng cho sự đơn giản, không cầu kỳ, hướng tới hạnh phúc chân chính.
              </p>
              <p class="fst-italic">Thiết kế kết hợp từ 2 gam màu chủ đạo là vàng và cam: </p>
              <ul class="fst-italic">
                  <li class="justify-content">Màu vàng là màu của ánh nắng dịu nhẹ, là màu của cuộc sống vui tươi, lạc quan, ấm áp, giàu sang và thịnh vượng. <span class="fw-bold">Đây là mục tiêu mà nhóm hướng đến.</span></li>
                  <li class="justify-content">Màu cam biểu trưng cho sự phấn khởi, sáng tạo, hạnh phúc, quyết đoán và đam mê mãnh liệt. Ngoài ra, sắc cam còn là biểu tượng của sức mạnh, sự bền bỉ <span class="fw-bold">giống như tính cách cũng như tình thần của các thành viên trong nhóm.</span></li>
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
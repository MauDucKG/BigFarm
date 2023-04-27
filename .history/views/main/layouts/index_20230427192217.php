<?php
  include_once('views/main/navbar.php');
?>
  <!-- <style>
		.carousel-item img {
			width: 100%;
			height: 485px;
			object-fit: contain;
		}

    @media (min-width: 576px) {
			.carousel-item img {
				height: 400px;
			}
		}

		@media (min-width: 768px) {
			.carousel-item img {
				height: 500px;
			}
		}

		@media (min-width: 992px) {
			.carousel-item img {
				height: 600px;
			}
		}
	</style>
  <div class="container mt-5">
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="https://bizweb.dktcdn.net/100/442/302/themes/842651/assets/slider_3.jpg?1668074220953" alt="Slide 1">
				</div>
				<div class="carousel-item">
					<img src="https://bizweb.dktcdn.net/100/442/302/themes/842651/assets/slider_2.jpg?1668074220953" alt="Slide 2">
				</div>
				<div class="carousel-item">
					<img src="https://bizweb.dktcdn.net/100/442/302/themes/842651/assets/slider_1.jpg?1668074220953" alt="Slide 3">
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
	</div> -->
<header>
    <link rel="stylesheet" href="assets/stylesheets/main/landing-page.css">
</header>
    <body>
        <!--introduction-->
        <div class="introduction">
            <div class="wrapper">
            <section class="">
          <div class="container" data-aos="fade-up "  style="box-shadow: 0 5px 10px rgba(0,0,0,.2);">
            <div class="row content" >
              <div class="container px-4 px-lg-6">
              <div class="row m-4">
                  <h2 class="text-center mt-3" ><span class="red">BIG</span><span class="green">FARM</span> - <span class="fw-bold">NÂNG NIU VÓC DÁNG VIỆT</span></h2><br>
              <p class = "text-center">
                <span class="fw-bold">Fashion for all - Thời trang cho mọi người</span>
              <p class="fst-italic justify-content">
                <span style="display: flex; justify-content: center; align-items: center;">
                  <img src="assets/images/team_logo.png" alt="" style="width: 15%; height: auto; object-position: center;">
                </span>
                <br>
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
          </div>
        </section><!-- End About Us Section -->
            </div>
        </div>
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
    </body>

  <?php
include_once('views/main/footer.php');
?>

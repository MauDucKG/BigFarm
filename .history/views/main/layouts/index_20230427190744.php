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

    <!--introduction-->
    <div class="introduction">
        
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

  <?php
include_once('views/main/footer.php');
?>

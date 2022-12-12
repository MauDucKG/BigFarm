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
        @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:wght@400;700&family=Roboto&display=swap');
        .about--info{
            margin:0 auto;
        }
        .text--italic{
            font-family: 'Kaushan Script', cursive;
            font-size: 24px;
            text-align: center;
            margin-top: 20px;
        }
        .text--bold{
            margin-top:25px;
            font-size: 30px;
            font-weight: bolder;
            text-align: center;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-bottom: 45px;
        }
        .text--bold:before{
            content:'';
            position: absolute;
            height: 3px;
            width: 65px;
            background: linear-gradient(45deg, #00853e, #50c878);
            bottom:0;
        }
        .para--short{
            display: block;
            max-width: 100vw;
            margin-top: 50px;
            font-size: 15px;
            color: #b3b3b3;
            text-align: center;
            white-space: pre-line;
            width: 965px;
            margin-left: auto;
            margin-right: auto;
        }
        .card--personal{
            margin-top: 90px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100vw;
            background: hsla(39, 100%, 77%, 1);
            background: linear-gradient(45deg, #00853e, #50c878);
        }
        .card--personal-info{
            width: 300px;
            height: 400px;
            text-align: center;
            border-radius: 10px;
            overflow: hidden;
            margin: 0 30px;
            position: relative;
            z-index: 99;
            background-color: #242628;
        }
        .card-img{
            width: 120px;
            height: 120px;
            overflow: hidden;
            transition: 0.25s;
            margin: 0 auto;
            transform: translateY(25px);
            border-radius: 50%;
            border: 2px solid #f2726a;
            cursor: pointer;
        }
        .card-img:hover {
            width: 100%;
            height: 100%;
            border-radius: unset;
            border: unset;
            transform: unset;
        }
        .card__img:hover {
            width: 100%;
            height: 100%;
            border-radius: unset;
            border: unset;
            transform: unset;
        }
        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
        .name {
            margin-top: 40px;
            color:white;
        }
        .role {
            color: #f2726a;
        }
        .card-social a {
            text-decoration: none;
            color: white;
            margin: 25px 20px 40px;
            display: inline-block;
            font-size: 25px;
            transition: 0.25s;
        }
        .youtube:hover{
            color: #FF0000;
        }
        .facebook:hover{
            color: #0881ED;
        }
        .github:hover{
            color:black;
        }
        .about--service .text--bold:before{
            background: linear-gradient(45deg, #860025, #C85061);
        }
        .about-container{
            margin-top: 90px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap:wrap;
            width: 100vw;
        }
        .service--item{
            margin: 10px;
            width: 585px;
            height: 303px;
            border-radius: 30px;
            background-position: bottom bottom;
            background-size: cover;
            background-repeat: no-repeat;
            color: #ffffff;
            font-size: 36px;
            font-weight:600;
            font-family: 'Roboto', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            transition-duration:0.5s;
            transition-timing-function: linear;
            transition-delay: 0s;
            transition-property: all;
            cursor: pointer;
        }
        .first-item{
            background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(134, 0, 37, 0.7)), to(rgba(200, 80, 97, 0.7))),
                                url("/BigFarm/assets/images/consulting.jpg") ;
        }
        .second-item{
            background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 193, 236, 0.7)), to(rgba(80, 190, 200, 0.7))),
                                url("/BigFarm/assets/images/designing.jpg") ;
        }
        .third-item{
            background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(129, 134, 5, 0.7)), to(rgba(189, 200, 80, 0.7))),
                                url("/BigFarm/assets/images/sale.jpg") ;
        }
        .fourth-item{
            background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(134, 0, 98, 0.7)), to(rgba(200, 78, 178, 0.7))),
                                url("/BigFarm/assets/images/consulting.jpg") ;
        }
        .first-item:hover{
            background-image: unset;
            background-color: #E0003E;
        }
        .second-item:hover{
            background-image: unset;
            background-color: #00AEEF;
        }
        .third-item:hover{
            background-image: unset;
            background-color: #EBEC41;
        }
        .fourth-item:hover{
            background-image: unset;
            background-color: #A12A9B;
        }
        @media screen and (min-width: 1024px){
            .card--personal{
                height: 500px;
            }
        }
        @media screen and (max-width: 1023px){
            .card--personal{
                flex-wrap: wrap;
            }
            .card--personal-info{
                margin-top: 20px;
                margin-bottom: 20px;
            }
        }
    </style>
    <div class="about--info">
        <div class="text--italic">Who we are</div>
        <div class="text--bold">MEET OUR TEAM</div>
        <div class="para--short">Chúng tôi - Nhóm Lemon gồm 4 chàng trai với phong cách chạy deadline lãng tử với những đam mê khác nhau nhưng cùng chung mục tiêu hoàn thành project một cách trọn vẹn nhất.
        Đội ngũ IT vẫn đang ngày đêm cố gắng hoàn nhằm đem lại cho khách hàng những trải nghiệm tuyệt vời nhất. Tuy nhiên vẫn không tránh khỏi một vài lỗi, mong quý khách nếu phát hiện vui lòng để lại comment hoặc gửi feedback về cho đội ngũ thông qua địa chỉ phía dưới đây. Chúng tôi luôn trân trọng các ý kiến đóng góp và phản hồi sớm nhất có thể!!!
        </div>
        <div class="card--personal">
            <div class="card--personal-info">
                <img src="https://avatars.githubusercontent.com/u/100073936?s=400&u=60231bd3dda8030cce71da8822a9a3d849c450cb&v=4" alt="" class="card-img">
                <h2 class="name">Phạm Hoàng Đức Huy</h2>
                <p class="role">Developer</p>
                <div class="card-social">
                    <a href="https://www.facebook.com/duchuy22902" class="facebook" class="facebook"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.youtube.com/channel/UCmvIP_5mg49uGi5BSuRi9Nw" class="youtube"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://github.com/duchuykg" class="github"><i class="fa-brands fa-github"></i></a>
                </div>
            </div>
            <div class="card--personal-info">
                <img src="/BigFarm/assets/images/designing.jpg" alt="" class="card-img">
                <h2 class="name">Giang Tuấn Hiền</h2>
                <p class="role">Developer</p>
                <div class="card-social">
                    <a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="youtube"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" class="github"><i class="fa-brands fa-github"></i></a>
                </div>
            </div>
            <div class="card--personal-info">
                <img src="https://scontent.fsgn4-1.fna.fbcdn.net/v/t1.6435-9/108175787_190264442434866_2598380075968207340_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=174925&_nc_ohc=irAaPc6wSOEAX-I-qHP&_nc_ht=scontent.fsgn4-1.fna&oh=00_AfDuI02ZK8dxZGiPICQ33c38foNIUdz6PkV-nFzSg8CISA&oe=64530A8B" alt="" class="card-img">
                <h2 class="name">Vũ Đăng Khoa</h2>
                <p class="role">Developer</p>
                <div class="card-social">
                    <a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="youtube"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" class="github"><i class="fa-brands fa-github"></i></a>
                </div>
            </div>
            <div class="card--personal-info">
                <img src="https://scontent.fsgn4-1.fna.fbcdn.net/v/t1.6435-9/105624595_577455742914753_5083683658656347572_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=174925&_nc_ohc=paTUWwLi-EgAX-L01L7&_nc_ht=scontent.fsgn4-1.fna&oh=00_AfCs6NOaPOahPudlg92-D6vNFiXxzc47dDahnOu3_5TvmQ&oe=64531326" alt="" class="card-img">
                <h2 class="name">Nguyễn Mậu Minh Đức</h2>
                <p class="role">Developer</p>
                <div class="card-social">
                    <a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="youtube"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" class="github"><i class="fa-brands fa-github"></i></a>
                </div>
            </div>
        </div>
        <div class="about--service">
            <div class="text--italic">What we do</div>
            <div class="text--bold">OUR SERVICE</div>
            <div class="para--short">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae minima, blanditiis eveniet officiis non et cumque tenetur quis. Adipisci quae laudantium, repudiandae fuga alias accusantium temporibus doloribus quisquam eligendi iure!
            </div>
            <div class="about-container">
                <div class="service--item first-item">TƯ VẤN</div>
                <div class="service--item second-item">THIẾT KẾ</div>
                <div class="service--item third-item">BÁN LẺ</div>
                <div class="service--item fourth-item">HOÁ TRANG</div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/4ccf3877a2.js" crossorigin="anonymous"></script>
</section>

<?php
   include_once('views/main/footer.php');
?>


<?php
include_once('views/main/navbar.php');
?>

<body>
    <div class="container" style="margin-top: 6%;">
        <p class="fs-2 text-center">THÔNG TIN LIÊN HỆ</p>
    </div>
    <!-- ======= Contact Section ======= -->
    <!-- <div>
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7839.393507316623!2d106.743711!3d10.757838!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb98f29e0479d526a!2sVNG%20Corporation!5e0!3m2!1sen!2sus!4v1637860473994!5m2!1sen!2sus" frameborder="0" allowfullscreen></iframe>
    </div> -->
    <div class="row mx-5 mt-2 con">
        <?php
        // href="https://goo.gl/maps/dyhKkLf4aSUYmhQo7" target="_blank"
            foreach ($companies as $company) {
                echo '
                <div class="col-3">
                    <div class="fs-5 fw-bold">CHI NHÁNH</div>
                    <div>'. $company->name.'</div>
                </div>
                ';
                echo '
                <div class="col-5">
                    <div class="fs-5 fw-bold">ĐỊA CHỈ</div>
                    <div>
                        <a class="location">'
                        . $company->address .
                    '   </a>
                    </div>
                </div>
                ';
                echo '
                <div class="col-4">
                    <div class="fs-5 fw-bold">SỐ ĐIỆN THOẠI</div>
                    <div class="phone"></div>
                </div>
                ';
            }
        ?> 
        <!-- <div class="col-3">
            <div class="fs-5 fw-bold">CHI NHÁNH</div>
            <div>Hồ Chí Minh</div>
        </div>
        <div class="col-5">
            <div class="fs-5 fw-bold">ĐỊA CHỈ</div>
            <div>268 Lý Thường Kiệt, Phường 14, Quận 10, TPHCM</div>
        </div>
        <div class="col-4">
            <div class="fs-5 fw-bold">SỐ ĐIỆN THOẠI</div>
            <div>02.838 647 256 - 5221</div>
        </div>
        <div class="col-3">
            <div class="fs-5 fw-bold ">CHI NHÁNH</div>
            <div>Hà Nội</div>
        </div>
        <div class="col-5">
            <div class="fs-5 fw-bold">ĐỊA CHỈ</div>
            <div>Khu đô thị ĐHQG HCM, Thủ Đức, HCM</div>
        </div>
        <div class="col-4">
            <div class="fs-5 fw-bold">SỐ ĐIỆN THOẠI</div>
            <div>02.838 647 256 - 5221</div>
        </div> -->
    </div>
    <script src='assets/javascripts/company/location.js'></script>
</body>
    
<?php
include_once('views/main/footer.php');
?>

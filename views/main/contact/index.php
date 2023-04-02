
<?php
include_once('views/main/navbar.php');
?>

<div id="contact" class="container" >
    <div class="container" style="margin-top: 7.5%;">
        <p class="fs-2 text-center">THÔNG TIN LIÊN HỆ</p>
    </div>
    <!-- ======= Contact Section ======= -->
    <!-- <div>
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7839.393507316623!2d106.743711!3d10.757838!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb98f29e0479d526a!2sVNG%20Corporation!5e0!3m2!1sen!2sus!4v1637860473994!5m2!1sen!2sus" frameborder="0" allowfullscreen></iframe>
    </div> -->
    <div class="row mt-2 text-center"> 
        <?php
        // href="https://goo.gl/maps/dyhKkLf4aSUYmhQo7" target="_blank"
            foreach ($companies as $company) {
                echo '
                <div class="col-lg-2 col-6 my-4 container">
                    <div class="fs-5 fw-bold">CHI NHÁNH</div>
                    <div>'. $company->name.'</div>
                </div>
                ';
                echo '
                <div class="col-lg-5 col-6 my-4 container">
                    <div class="fs-5 fw-bold">ĐỊA CHỈ</div>
                    <div>
                        <p class="location">'
                        . $company->address .
                    '   </p>
                    </div>
                </div>
                ';
                echo '
                <div class="col-lg-2 col-6 my-4 container">
                    <div class="fs-5 fw-bold">SỐ ĐIỆN THOẠI</div>
                    <div>
                    <p class="location">'
                    . $company->phone .
                '   </p>
                </div>
                </div>
                ';
                echo '
                <div class="col-lg-3 col-6 my-4 container">
                    <div class="fs-5 fw-bold">GMAIL</div>
                    <div>
                    <p class="location">'
                    . $company->gmail .
                '   </p>
                </div>
                </div>
                ';
            }
        ?> 
    </div>
    <div class="mt-5 p-4"  style="background-color: white; box-shadow: 0 5px 10px rgba(0,0,0,.2);">

        <div class="container">
            <div class="container-fluild row align-center">
                <div class="col-lg-6 col-12 my-4" >   
                <iframe class="w-100"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.493927847166!2d106.65859895088279!3d10.77343116215605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ec3bcdf754b%3A0x6dfcdbc4e685b7bc!2zS2hvYSBLaG9hIGjhu41jIHbDoCBL4bu5IHRodeG6rXQgTcOheSB0w61uaCAtIEEzLCAyNjggTMO9IFRoxrDhu51uZyBLaeG7h3QsIFBoxrDhu51uZyAxNCwgUXXhuq1uIDEwLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1671071682951!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-6 col-12 my-4" >
                <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8741474395697!2d105.78200869999999!3d21.0377211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454caaf2b115f%3A0xc05b77c8a5f461ae!2zxJDhuqFpIGjhu41jIFF14buRYyBnaWEgSMOgIE7hu5lpLCBE4buLY2ggVuG7jW5nIEjhuq11LCBD4bqndSBHaeG6pXksIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1671072331789!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            
            </div>
        </div>

    </div>
    <script src='assets/javascripts/company/location.js'></script>
</div>
    
<?php
include_once('views/main/footer.php');
?>

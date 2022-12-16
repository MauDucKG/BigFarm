<?php
include_once('views/main/navbar.php');
?>
<body>

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
      <div class="container px-4 px-lg-6 mt-4" id = '#tab-user'>
        
            <div id="card-content" class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center">

            <?php 
            foreach ($products as $product) {
                if ($product->sale){
                    echo '
                        <div id="card" class="col mb-3">
                        <div class="card h-100">
                            <div class="badge bg-warning text-dark position-absolute" style="top: 0.5rem; right: 0.5rem">SALE '. $product->sale .'%</div>
                                <!-- Product image-->
                                <img class="card-img-top" src="' . $product->img .'" alt="...">
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="product-name fw-bolder">' .$product->name . '</h5>
                                    <!-- Product price-->
                                    <span class="red">' . number_format($product->price*(100-$product->sale)/100, 0, ',', '.') . ' VNĐ</span></span> <span class="money-unit"></span> 
                                    <span class="text-muted text-decoration-line-through">' . number_format($product->price, 0, ',', '.') . ' VNĐ</span>
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
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="index.php?page=main&controller=detail&id='. $product->id .'&action=index">Xem thêm</a></div>
                                </div>
                        </div>
                        
                        </div>';
                }
            }
            ?>

         </div>
         
      </div>
      <nav aria-label="Page navigation example">
         <ul class="pagination justify-content-center">

            <li class="page-item">
               <a class="page-link previous-page" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
               <a class="page-link .next-page" href="#">Next</a>
            </li>
         </ul>
      </nav>
   </div>
   <script type="text/javascript">
      function getPageList(totalPages, page, maxLength){
         function range(start, end){
            return Array.from(Array(end - start + 1), (_, i) => i + start);
         }

         var sideWidth = maxLength < 9 ? 1 : 2;
         var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
         var rightWidth = (maxLength - sideWidth * 2 - 3) >> 1;

         if(totalPages <= maxLength){
            return range(1, totalPages);
         }

         if(page <= maxLength - sideWidth - 1 - rightWidth){
            return range(1, maxLength - sideWidth - 1).concat(0, range(totalPages - sideWidth + 1, totalPages));
         }

         if(page >= totalPages - sideWidth - 1 - rightWidth){
            return range(1, sideWidth).concat(0, range(totalPages- sideWidth - 1 - rightWidth - leftWidth, totalPages));
         }

         return range(1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages - sideWidth + 1, totalPages));
      }

      $(function(){
      var numberOfItems = $("#card-content #card").length;
      var limitPerPage = 9; //How many card items visible per a page
      var totalPages = Math.ceil(numberOfItems / limitPerPage);
      var paginationSize = 7; //How many page elements visible in the pagination
      var currentPage;

         function showPage(whichPage){
            if(whichPage < 1 || whichPage > totalPages) return false;

            currentPage = whichPage;

            $("#card-content #card").hide().slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage).show();

            $(".pagination li").slice(1, -1).remove();

            getPageList(totalPages, currentPage, paginationSize).forEach(item => {
               $("<li>").addClass("page-item").addClass(item ? "current-page" : "dots")
               .toggleClass("active", item === currentPage).append($("<a>").addClass("page-link")
               .attr({href: "javascript:void(0)"}).text(item || "...")).insertBefore(".next-page");
            });

            $(".previous-page").toggleClass("disable", currentPage === 1);
            $(".next-page").toggleClass("disable", currentPage === totalPages);
            return true;
         }

         $(".pagination").append(
            $("<li>").addClass("page-item").addClass("previous-page").append($("<a>").addClass("page-link").attr({href: "javascript:void(0)"}).text("Prev")),
            $("<li>").addClass("page-item").addClass("next-page").append($("<a>").addClass("page-link").attr({href: "javascript:void(0)"}).text("Next"))
         );

         $("#card-content").show();
         showPage(1);

         $(document).on("click", ".pagination li.current-page:not(.active)", function(){
            return showPage(+$(this).text());
         });

         $(".next-page").on("click", function(){
            return showPage(currentPage + 1);
         });

         $(".previous-page").on("click", function(){
            return showPage(currentPage - 1);
         });
      });
   </script>
   <?php
include_once('views/main/footer.php');
?>

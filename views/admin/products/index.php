<?php
   include_once('views/admin/header.php');

?>
<style>

</style>

<div class="container-fluid pl-0 pr-0"style="margin-top: 60px;">
   <div class="p-3 text-center bg-secondary text-white font-weight-bold">QUẢN LÝ SẢN PHẨM</div>
   <div class="row flex-xl-nowrap">
      <div class="col-md-3 col-xl-2 bd-sidebar border-right border-primary">
         <nav id="toc" data-toggle="toc">
            <ul class="nav navbar-nav">
               <a class="nav-link" href="#">Quản lý sản phẩm</a>
               <a class="nav-link" href="#">Quản lý tài khoản</a>
            </ul>

         </nav>

      </div>

      <main class="row col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
         <div class="col-md-12 col-xl-8 ">
            <div class="container row py-1 ">

               <div class="col-md-5">
                  <form class="d-flex">
                     <input type="text" class="form-control me-2" placeholder="Nhập ID hoặc tên sản phẩm">
                     <button class="btn btn-primary text-primary" type="submit">Tìm</button>
                  </form>
               </div>
               <div class="col-md-6 d-flex justify-content-end m-2">
                  <button class="btn btn-outline-primary" type="submit">Tạo mới<i class="bi bi-plus-square-dotted m-2"></i></button>
               </div>   
            </div>


            <!-- Product table -->
            <table id="product-table" class="table table-responsive table-hover mt-3">
               <thead class="bg-light">
                  <th class="id mb-5">
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                     <label class="form-check-label" for="flexCheckDefault">Tên sản phẩm</label>
                  </div>
                  </th>

                  <!-- <th class="name mb-5">
                     Tên sản phẩm
                  </th> -->
                  <th class="price mb-5" style="width: 15%;">
                     Mức giá
                  </th>
                  <th class="category mb-5 text-center">
                     Phân loại
                  </th>
                  <th class="recently-change mb-5 text-center"><i class="bi bi-funnel-fill"></i></th>
               </thead>
               
               <?php
                  foreach ($products as $product){
               ?>
               <tbody id="product-table-body">

               
                  <tr id="row-<?php echo $product->id;?>">
                     <td>
                        <div class="row align-items-center">
                           <img class="col-3 rounded-2" src="/assignment/BigFarm/<?php echo $product->img;?>" style="max-width: 100px;" alt="..." />
                           <div class="col-7">
                              <p style="font-weight: bold;">
                                 <?php echo $product->name; ?>
                              </p>
                              <p class="text-muted">(<?php echo $product->id;?>)</p>
                           </div>
                        </div>
                     </td>
                     <td class="price align-middle"><?php echo $product->price; ?> đ</td>
                     <td class="category text-center align-middle"><?php echo $product->description; ?></td>
                     <td class="recently-change text-center align-middle">
                        <button id="view_item<?php echo $product->id;?>" onclick='showProduct(this.id,<?php echo $product->id;?>,"<?php echo $product->name;?>",<?php echo $product->price;?>,"<?php echo $product->description;?>","<?php echo $product->img; ?>" ,"<?php echo str_replace("\n","___",$product->content);?>")'><i class="bi bi-eye-slash-fill" ></i></button>
                     </td>
                  </tr>

                  <?php
                     }
                  ?>
               </tbody>
               

               <!-- Action console when clicking a product -->

               <!-- Console edit product -->
               <div class="modal fade" id="edit-product-console" tabindex="-1" role="dialog" aria-labelledby="edit-product-console-title" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="edit-product-console-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">Hello Mn</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        ...
                        <p>
                           fasfdsa
                           fasfasfd
                           ,fsadfa
                           ,fadf

                        </p>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                     </div>
                  </div>
               </div>
      
            </table> 
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



         <!-- Bảng thông tin sản phẩm -->
         <div id="product-infor" class="col-md-12 col-xl-4">
            <div class= "border border-primary rounded-2 p-3">
               <h4 class="text-center font-weight-bolder">Thông tin sản phẩm</h4>
               <div class="m-2">ID: <span id="id-infor" class="border border-primary rounded m-2 p-1"> #12313</span></div>
               <label for="inputNameProduct" class="mb-1">Tên sản phẩm:</label>
               <input type="text" onkeyup="validation()" id="name-infor" class="form-control mb-4" placeholder="Nhập ngắn gọn, đầy đủ, súc tích" readonly>

               <label for="inputPriceProduct" class="mb-1">Mức giá:</label>
               <input type="text" id="price-infor" class="form-control mb-4" placeholder="Đơn vị vnđ" readonly>

               <label for="inputCategoryProduct" class="mb-1">Mô tả ngắn:</label>
               <input type="text" id="description-infor" class="form-control mb-4" placeholder="Loại sản phẩm" readonly>

               <label for="inputDescription">Nội dung chi tiết:</label>
               <textarea id="content-infor" class="form-control mb-4" placeholder="Những câu từ mỹ miều sẽ làm tăng giá trị sản phẩm lên nè" rows="6" readonly></textarea>
               <button id="product-edit" type="button" class="font-weight-bold btn btn-success text-dark me-1" data-id='' data-name='' data-price='' data-description='' data-img='' data-content='' data-toggle="modal" data-target="#edit-product-console" disabled>Chỉnh sửa</button>

               <button onclick="clearForm()" class="btn btn-outline-danger">Hủy</button>
            </div>

         </div>

         <a href="#" class="flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="https://cf.shopee.vn/file/508cf08952898b9e6e6fde494902dc4b" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
               <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
               <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
         </a>

      </main>

      <div class="d-none d-xl-block col-xl-2 bd-toc">
         
      </div>      
   </div>



</div>
<script type="text/javascript">
   function showProduct(id_button, id, name, price, description, img, content){
      var parrent = document.getElementById(id_button);
      child = parrent.childNodes[0];
      
      var eles = document.getElementsByTagName('tr');
      console.log(eles.length);
      if(child.classList.contains('bi-eye-slash-fill')){
         // Click để mở product đó lên
         child.classList.remove('bi-eye-slash-fill');
         child.classList.add('bi-eye-fill');
         
         for (var i = 0; i < eles.length; i++){
            if(eles[i].id && eles[i].id != ('row-' + id)){
               eles[i].style.display = 'none';
            }
         }
         displayProduct(id, name, price, description, img, content);
         
      }
      else {
         child.classList.remove('bi-eye-fill');
         child.classList.add('bi-eye-slash-fill');  
         for (var i = 0; i < eles.length; i++){
            if(eles[i].id != 'undefined'){
               eles[i].style.display = '';
            }
         }
         makeDefault();        
      }
   }
   function displayProduct(id, name, price, description, img, content){
      <?php 
         foreach ($products as $product){
         }
      ?>
      document.getElementById('id-infor').innerHTML = id;
      document.getElementById('name-infor').placeholder = name;
      document.getElementById('price-infor').placeholder = price;
      document.getElementById('description-infor').placeholder = description;
      content = content.replaceAll('___','\n');
      document.getElementById('content-infor').placeholder = content;
      document.getElementById('product-edit').disabled = false;
      $('#product-edit').data('id', id);
      $('#product-edit').data('name', name);
      $('#product-edit').data('price', price);
      $('#product-edit').data('description', description);
      $('#product-edit').data('content', content);
      $('#product-edit').data('img', img);

   }
   function makeDefault(){
      document.getElementById('id-infor').innerHTML = '#12313';
      document.getElementById('name-infor').placeholder = "Nhập ngắn gọn, đầy đủ, súc tích";
      document.getElementById('price-infor').placeholder = "Đơn vị vnđ";
      document.getElementById('description-infor').placeholder = "Loại sản phẩm";
      document.getElementById('content-infor').placeholder = "Những câu từ mỹ miều sẽ làm tăng giá trị sản phẩm lên nè";
      document.getElementById('product-edit').disabled = true;
      $('#product-edit').data('id','');
      $('#product-edit').data('name','');
      $('#product-edit').data('price', '');
      $('#product-edit').data('description', '');
      $('#product-edit').data('content', '');
      $('#product-edit').data('img', '');
   }
   
   $("#product-edit").click(function(){
      var id = $(this).data('id');
      var name = $(this).data('name');
      var price = $(this).data('price');
      var description = $(this).data('description');
      var content = $(this).data('content');
      var img = $(this).data('img');
      console.log('Hello');
      $('#edit-product-console').show();
   });
</script>  

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
      var numberOfItems = $("#product-table-body tr").length;
      var limitPerPage = 5; //How many card items visible per a page
      var totalPages = Math.ceil(numberOfItems / limitPerPage);
      var paginationSize = 3; //How many page elements visible in the pagination
      var currentPage;

         function showPage(whichPage){
            if(whichPage < 1 || whichPage > totalPages) return false;

            currentPage = whichPage;

            $("#product-table-body tr").hide().slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage).show();

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
   include_once('views/admin/footer.php');
?>


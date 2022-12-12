<?php
   include_once('views/admin/header.php');

?>
<style>

</style>

<div class="container-fluid pl-0 pr-0"style="margin-top: 60px;">
   <div class="p-3 text-center bg-secondary text-white font-weight-bold">QUẢN LÝ SẢN PHẨM</div>
   <div class="row flex-xl-nowrap">
      <div class="col-12 col-md-3 col-xl-2 bd-sidebar border-right border-primary">
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
               <div class="col-md-7 d-flex justify-content-end">
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
                  <th class="price mb-5">
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
                           <img class="col-3 rounded-2" src="https://cf.shopee.vn/file/508cf08952898b9e6e6fde494902dc4b" style="max-width: 100px;" alt="..." />
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
                        <button id="view_item<?php echo $product->id;?>" onclick='showProduct(this.id,<?php echo $product->id;?>,"<?php echo $product->name;?>",<?php echo $product->price;?>,"<?php echo $product->description;?>","<?php echo $product->content;?>")'><i class="bi bi-eye-slash-fill" ></i></button>
                     </td>
                  </tr>

                  <?php
                     }
                  ?>
               </tbody>
            </table> 
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
               <textarea id="content-infor" class="form-control mb-4" placeholder="Những câu từ mỹ miều sẽ làm tăng giá trị sản phẩm lên nè" readonly></textarea>
               <button onclick="addProduct()" class="font-weight-bold btn btn-success me-1" id="addbtn" disabled>Chỉnh sửa</button>

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
<script>
   function showProduct(id_button, id, name, price, description, content){
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
         displayProduct(id, name, price, description, content);
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
   function displayProduct(id, name, price, description, content){
      document.getElementById('id-infor').innerHTML = id;
      document.getElementById('name-infor').placeholder = name;
      document.getElementById('price-infor').placeholder = price;
      document.getElementById('description-infor').placeholder = description;
      document.getElementById('content-infor').placeholder = content;

   }
   function makeDefault(){
      document.getElementById('id-infor').innerHTML = '#12313';
      document.getElementById('name-infor').placeholder = "Nhập ngắn gọn, đầy đủ, súc tích";
      document.getElementById('price-infor').placeholder = "Đơn vị vnđ";
      document.getElementById('description-infor').placeholder = "Loại sản phẩm";
      document.getElementById('content-infor').placeholder = "Những câu từ mỹ miều sẽ làm tăng giá trị sản phẩm lên nè";
   }
</script>  



<?php
   include_once('views/admin/footer.php');
?>


<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php?page=admin&controller=login&action=index");
}
?>

<?php
require_once('views/admin/header.php'); ?>

<!-- Add CSS -->


<?php
require_once('views/admin/content_layouts.php'); ?>

<!-- Code -->
<div class="content-wrapper">
    <!-- Add Content -->
    <!-- Content Header (Page header)-->
    <section class="content-header">
        <div class="container-fluid">
            <div class="float-end">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Quản lý Sản phẩm</li>
                </ol>
            </div>
        </div>
        <div class="container-fluid row">
            <div class="my-3">
                <p class="row">
                <h1 class="text-center">Quản lý Sản phẩm</h1>
                </p>
            </div>
        </div>
    </section>
    <hr>
    <!-- Main content-->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="shadow p-2 rounded">
                    <div class="">
                        <button class="btn btn-primary mb-2" type="button" data-bs-toggle="modal" data-bs-target="#addUserModal">Thêm mới</button>
                        <div class="modal fade" id="addUserModal" aria-labelledby="addUserModal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Thêm mới sản phẩm</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form id="form-add-product" action="index.php?page=admin&controller=products&action=add" enctype="multipart/form-data" method="post">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-6"><label>Tên sản phẩm</label><input class="form-control my-2" type="text" placeholder="Tên sản phẩm" name="name" required/></div>
                                                <div class="col-6"><label>Giá</label><input class="form-control my-2" type="number" placeholder="Giá" name="price" required/></div>
                                            </div>
                                            <div class="form-group"><label>Sale</label><input class="form-control my-2" type="number" placeholder="Sale" name="sale" required/></div>
                                            <div class="form-group"> <label>Mô tả</label> <textarea class="form-control my-2" name="description" rows="5" required></textarea></div>
                                            <div class="form-group"> <label>Nội dung</label> <textarea class="form-control my-2" name="content" rows="5" required></textarea></div>
                                            <div class="form-group"> <label>Hình ảnh </label>&nbsp <input class="form-control my-2" type="file" name="fileToUpload" id="fileToUpload" required/></div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Đóng</button>
                                            <button class="btn btn-primary" type="submit">Thêm mới</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <table id="tab-product" class="table table-bordered table-striped mt-3 shadow">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col" class="d-none d-lg-table-cell">STT</th>
                                    <th scope="col" >Tên sản phẩm</th>
                                    <th scope="col" class="d-none d-lg-table-cell">Giá </th>
                                    <th scope="col" class="d-none d-lg-table-cell">Mô tả</th>
                                    <th scope="col" class="d-none d-lg-table-cell">Nội dung</th>
                                    <th scope="col">Hình ảnh</th>
                                    <th scope="col">Thao tác</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php

                                $index = 1;

                                foreach ($products as $product) {

                                    echo
                                    "<tr class=\"text-center\">
                                                    <td class=\"d-none d-lg-table-cell\">"
                                        . $index .
                                        "</td>
                                                    <td>
                                                       " . $product->name . "
                                                    </td>
                                                    <td class=\"d-none d-lg-table-cell\">
                                                      " .  $product->price . "
                                                    </td>
                                                    <td class=\"d-none d-lg-table-cell\">
                                                     " .  $product->description . "
                                                    </td>
                                                    <td class=\"d-none d-lg-block d-print-block\">
                                                       " . str_replace(array("\r\n","\n\n","\n\r","\r\r", "\n", "\r"),'<br><br>',$product->content). "
                                                    </td>
                                                    <td >
                                                        <img style=\"width: 100px; height:100px;\" src='$product->img'>
                                                    </td>
                                                    <td>
                                                    <button class=\"btn-edit btn btn-primary btn-xs\" style=\"margin-right: 5px\" data-bs-id='$product->id' data-bs-name='$product->name' data-bs-price='$product->price' data-bs-description='$product->description' data-bs-content='$product->content' data-bs-sale='$product->sale' data-bs-img='$product->img' data-bs-target='#EditProductModal' data-bs-toggle='modal'><svg xmlns='http://www.w3.org/2000/svg' width='13' height='13' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                                                    <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                                    <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                                                  </svg></button>
                                                    <button class=\"btn-delete btn btn-danger btn-xs\" style=\"margin-right: 5px\" data-bs-id='$product->id' data-bs-target='#DeleteProductModal' data-bs-toggle='modal'><svg xmlns='http://www.w3.org/2000/svg' width='13' height='13' fill='currentColor' class='bi bi-trash3' viewBox='0 0 16 16'>
                                                    <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z'/>
                                                  </svg></button>
                                                  </td>
                                                </tr>";
                                }
                                ?>
                            </tbody>
                            <div class="modal fade" id="EditProductModal" tabindex="-1" role="dialog" aria-labelledby="EditproductModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Chỉnh sửa</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form id="form-edit-product" action="index.php?page=admin&controller=products&action=edit" enctype="multipart/form-data" method="post">
                                            <div class="modal-body">
                                                <div class="col-12"><label>ID</label> <input class="form-control my-2" type="text" placeholder="Name" name="id" readonly /></div>
                                                <div class="row">
                                                    <div class="col-6"><label>Tên sản phẩm</label><input class="form-control my-2" type="text" placeholder="Tên sản phẩm" name="name" required/></div>
                                                    <div class="col-6"><label>Giá</label><input class="form-control my-2" type="number" placeholder="Giá" name="price" required/></div>
                                                </div>

                                                <div class="form-group"><label>Sale</label><input class="form-control my-2" type="number" placeholder="Sale" name="sale" required/></div>
                                                <div class="form-group"> <label>Mô tả</label> <textarea class="form-control my-2" name="description" rows="5" required></textarea></div>
                                                <div class="form-group"> <label>Nội dung</label> <textarea class="form-control my-2" name="content" rows="5" required></textarea></div>
                                                <div class="form-group"><label>Url Hình ảnh </label><input class="form-control my-2" type="text" name="img" readonly /></div>
                                                <div class="form-group"> <label> Hình ảnh </label>&nbsp <input type="file" class="form-control my-2" name="fileToUpload" id="fileToUpload"/></div>
                                            </div>
                                            <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Đóng</button><button class="btn btn-primary formedit" type="submit">Chỉnh sửa</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="DeleteProductModal" tabindex="-1" role="dialog" aria-labelledby="DeleteProductModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Xóa</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                        </div>
                                        <form action="index.php?page=admin&controller=products&action=delete" method="post">
                                            <div class="modal-body">
                                                <input class="form-control my-2" name="id" disabled/>
                                                <p>Bạn có chắc chắn muốn xóa sản phẩm này?</p>
                                            </div>
                                            <div class="modal-footer"><button class="btn btn-danger btn-outline-light" type="button" data-bs-dismiss="modal">Đóng</button><button class="btn btn-danger btn-outline-light" type="submit">Xóa</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</section>




</div>


<?php
require_once('views/admin/footer.php'); ?>
<script src="assets\javascripts\product\index.js"></script>
<!-- Add Javascript-->


</body>

</html>
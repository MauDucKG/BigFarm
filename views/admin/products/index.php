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
                                                <div class="col-6"><label>Tên sản phẩm</label><input class="form-control my-2" type="text" placeholder="Tên sản phẩm" name="name" /></div>
                                                <div class="col-6"><label>Giá</label><input class="form-control my-2" type="number" placeholder="Giá" name="price" /></div>
                                            </div>

                                            <div class="form-group"> <label>Mô tả</label> <textarea class="form-control my-2" name="description" rows="5"></textarea></div>
                                            <div class="form-group"> <label>Nội dung</label> <textarea class="form-control my-2" name="content" rows="5"></textarea></div>
                                            <div class="form-group"> <label>Hình ảnh </label>&nbsp <input class="form-control my-2" type="file" name="fileToUpload" id="fileToUpload" /></div>
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
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Giá </th>
                                    <th scope="col">Mô tả</th>
                                    <th scope="col">Nội dung</th>
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
                                                    <td>"
                                        . $index .
                                        "</td>
                                                    <td>
                                                       " . $product->name . "
                                                    </td>
                                                    <td>
                                                      " .  $product->price . "
                                                    </td>
                                                    <td>
                                                     " .  $product->description . "
                                                    </td>
                                                    <td>
                                                       " . $product->content . "
                                                    </td>
                                                    <td >
                                                        <img style=\"width: 60px; height:35px;\" src='$product->img'>
                                                    </td>
                                                    <td>
                                                    <button class=\"btn-edit btn btn-primary btn-xs\" style=\"margin-right: 5px\" data-bs-id='$product->id' data-bs-name='$product->name' data-bs-price='$product->price' data-bs-description='$product->description' data-bs-content='$product->content' data-bs-img='$product->img' data-bs-target='#EditProductModal' data-bs-toggle='modal'>Sửa</button>
                                                    <button class=\"btn-delete btn btn-danger btn-xs\" style=\"margin-right: 5px\" data-bs-id='$product->id' data-bs-target='#DeleteProductModal' data-bs-toggle='modal'>Xóa</button>
                                                  </td>
                                                </tr>";
                                    $index++;
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
                                                    <div class="col-6"><label>Tên sản phẩm</label><input class="form-control my-2" type="text" placeholder="Tên sản phẩm" name="name" /></div>
                                                    <div class="col-6"><label>Giá</label><input class="form-control my-2" type="number" placeholder="Giá" name="price" /></div>
                                                </div>

                                                <div class="form-group"> <label>Mô tả</label> <textarea class="form-control my-2" name="description" rows="5"></textarea></div>
                                                <div class="form-group"> <label>Nội dung</label> <textarea class="form-control my-2" name="content" rows="5"></textarea></div>
                                                <div class="form-group"><label>Url Hình ảnh </label><input class="form-control my-2" type="text" name="img" readonly /></div>
                                                <div class="form-group"> <label> Hình ảnh </label>&nbsp <input type="file" class="form-control my-2" name="fileToUpload" id="fileToUpload" /></div>
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
</div>
</section>




</div>


<?php
require_once('views/admin/footer.php'); ?>
<script src="assets\javascripts\product\index.js"></script>
<!-- Add Javascript-->


</body>

</html>
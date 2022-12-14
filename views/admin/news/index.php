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
    <section class="content-header">
        <div class="container-fluid">
            <div class="float-end">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Quản lý Khách hàng</li>
                </ol>
            </div>
        </div>
        <div class="container-fluid row">
            <div class="my-3">
                <p class="row">
                <h1 class="text-center">Quản lý Bài viết</h1>
                </p>
            </div>
        </div>
    </section>
    <hr>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="shadow p-2 rounded">
                        <!-- /.card-header-->
                        <div class="">
                            <button class="btn btn-primary mb-2" type="button" data-bs-toggle="modal" data-bs-target="#addUserModal">Thêm mới</button>
                            <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModal" aria-hidden="true">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Thêm mới bài viết</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form id="form-add-new" action="index.php?page=admin&controller=news&action=add" enctype="multipart/form-data" method="post">
                                            <div class="modal-body">
                                                <div class="form-group"> <label>Mô tả</label> <textarea class="form-control" placeholder="Mô tả" name="description" rows="5"></textarea></div>
                                                <div class="form-group"> <label>Nội dung</label> <textarea class="form-control" placeholder="Nội dung" name="content" rows="10"></textarea></div>
                                                <div class="form-group"><label>Tiêu đề</label><input class="form-control" type="text" placeholder="Tiêu đề" name="title" /></div>
                                            </div>
                                            <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Đóng</button><button class="btn btn-primary" type="submit">Thêm mới</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <table id="tab-new" class="table table-bordered table-striped shadow">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col" class="d-none d-lg-table-cell">STT</th>
                                        <th scope="col" class="d-none d-lg-table-cell">Trạng thái</th>
                                        <th scope="col" class="d-none d-lg-table-cell">Ngày </th>
                                        <th scope="col" class="d-none d-lg-table-cell">Mô tả</th>
                                        <th scope="col" class="d-none d-lg-table-cell">Nội dung</th>
                                        <th scope="col">Tiêu đề</th>
                                        <th scope="col">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $index = 1;

                                    foreach ($news as $new) {
                                        $status = ($new->status) ? 'Post' : 'Hide';
                                        $button = ($new->status) ? "<button class=\"btn-hide btn btn-danger btn-xs\" data-bs-target='#HideNewModal' data-bs-toggle='modal' data-bs-id='$new->id' ><svg xmlns='http://www.w3.org/2000/svg' width='13' height='13' fill='currentColor' class='bi bi-bookmark-x' viewBox='0 0 16 16'>
                                        <path fill-rule='evenodd' d='M6.146 5.146a.5.5 0 0 1 .708 0L8 6.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 7l1.147 1.146a.5.5 0 0 1-.708.708L8 7.707 6.854 8.854a.5.5 0 1 1-.708-.708L7.293 7 6.146 5.854a.5.5 0 0 1 0-.708z'/>
                                        <path d='M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z'/>
                                      </svg></button>" : "<button class=\"btn-hide btn btn-primary btn-xs\" data-bs-target='#HideNewModal' data-bs-toggle='modal' data-bs-id='$new->id' ><svg xmlns='http://www.w3.org/2000/svg' width='13' height='13' fill='currentColor' class='bi bi-bookmark-plus' viewBox='0 0 16 16'>
                                      <path d='M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z'/>
                                      <path d='M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z'/>
                                    </svg></button>";
                                        echo
                                        "<tr >
                                                    <td class=\"d-none d-lg-table-cell\">"
                                            . $index .
                                            "</td>
                                                    <td class=\"d-none d-lg-table-cell\">
                                                       " .  $status . "
                                                    </td>
                                                    <td class=\"d-none d-lg-table-cell\">
                                                      " .  $new->date . "
                                                    </td>   
                                                    <td class=\"d-none d-lg-table-cell\">
                                                     " .  $new->description . "
                                                    </td> 
                                                    <td class=\"d-none d-lg-table-cell\">
                                                       " . $new->content . "
                                                    </td>   
                                                    <td>
                                                       " . $new->title . "
                                                    </td    >       
                                                    <td class=\"text-center\"> " .
                                            $button . "
                                                    <button class=\"btn-edit btn btn-primary btn-xs\" style=\"margin-right: 5px\" data-bs-id='$new->id'  data-bs-description='$new->description' data-bs-content='$new->content' data-bs-title='$new->title' data-bs-target='#EditNewModal' data-bs-toggle='modal'><svg xmlns='http://www.w3.org/2000/svg' width='13' height='13' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                                                    <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                                    <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                                                  </svg></button>
                                                    <button class=\"btn-delete btn btn-danger btn-xs\" style=\"margin-right: 5px\" data-bs-id='$new->id' data-bs-target='#DeleteNewModal' data-bs-toggle='modal'><svg xmlns='http://www.w3.org/2000/svg' width='13' height='13' fill='currentColor' class='bi bi-trash3' viewBox='0 0 16 16'>
                                                    <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z'/>
                                                  </svg></button>
                                                  </td>                                                                                                                                                                                       
                                                </tr>";
                                        $index++;
                                    }
                                    ?>
                                </tbody>
                                <div class="modal fade" id="EditNewModal" tabindex="-1" role="dialog" aria-labelledby="EditNewModal" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Chỉnh sửa</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="index.php?page=admin&controller=news&action=edit" enctype="multipart/form-data" method="post">
                                                <div class="modal-body">
                                                    <div class="col-12"><label>ID</label> <input class="form-control" type="text" placeholder="Name" name="id" readonly /></div>
                                                    <div class="form-group"> <label>Mô tả</label> <textarea class="form-control" name="description" rows="5"></textarea></div>
                                                    <div class="form-group"> <label>Nội dung</label> <textarea class="form-control" name="content" rows="10"></textarea></div>
                                                    <div class="form-group"><label>Tiêu đề </label><input class="form-control" type="text" name="title" /></div>
                                                </div>
                                                <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Đóng</button><button class="btn btn-primary" type="submit">Chỉnh sửa</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="DeleteNewModal" tabindex="-1" role="dialog" aria-labelledby="DeleteNewModal" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Xóa</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="index.php?page=admin&controller=news&action=delete" method="post">
                                                <div class="modal-body"><input type="hidden" name="id" />
                                                    <p>Bạn có chắc chắn xóa bài viết này</p>
                                                </div>
                                                <div class="modal-footer"><button class="btn btn-danger btn-outline-light" type="button" data-bs-dismiss="modal">Đóng</button><button class="btn btn-danger btn-outline-light" type="submit">Xóa</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="HideNewModal" tabindex="-1" role="dialog" aria-labelledby="HideNewModal" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Hiện hay ẩn bài viết</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="index.php?page=admin&controller=news&action=hide" method="post">
                                                <div class="modal-body"><input type="hidden" name="id" />
                                                    <p>Bạn đã chắc chắn?</p>
                                                </div>
                                                <div class="modal-footer"><button class="btn btn-danger btn-outline-light" type="button" data-bs-dismiss="modal">Đóng</button><button class="btn btn-danger btn-outline-light" type="submit">Cập nhật</button></div>
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

<!-- Add Javascripts -->
<script src="assets\javascripts\news\index.js"></script>

</body>

</html>
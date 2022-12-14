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
                    <li class="breadcrumb-item active">Quản lý Khách hàng</li>
                </ol>
            </div>
        </div>
        <div class="container-fluid row">
            <div class="my-3">
                <p class="row">
                <h1 class="text-center">Quản lý Bình luận</h1>
                </p>
            </div>
        </div>
    </section>
    <hr>
    <!-- Main content-->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="shadow p-2 rounded">
                        <div class="">
                            <button class="btn btn-primary mb-2" type="button" data-bs-toggle="modal" data-bs-target="#addCommentModal">Thêm mới</button>
                            <div class="modal fade" id="addCommentModal" tabindex="-1" role="dialog" aria-labelledby="addCommentModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Thêm mới bình luận</h5><button class="close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <form action="index.php?page=admin&controller=comments&action=add" enctype="multipart/form-data" method="post">
                                            <div class="modal-body">
                                                <div class="form-group"><label>Nội dung</label><input class="form-control my-2" type="text" placeholder="Nội dung" name="content" /></div>
                                                <div class="form-group"><label>ID bài viết</label>
                                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="news_id">
                                                        <?php
                                                        foreach ($news as $new) {
                                                            echo    "<option> " . $new->id . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group"><label>Người dùng</label>
                                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="user_id">
                                                        <?php
                                                        foreach ($users as $user) {
                                                            echo    "<option> " . $user->email . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Đóng</button><button class="btn btn-primary" type="submit">Thêm mới</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <table id="tab-comment" class="table table-bordered table-striped shadow">
                                        <thead>
                                            <tr class="text-center">
                                                <th class="d-none d-lg-table-cell">STT</th>
                                                <th class="d-none d-lg-table-cell">Mã bài viết</th>
                                                <th class="d-none d-lg-table-cell">Ngày</th>
                                                <th class="d-none d-lg-table-cell">Tiếp cận</th>
                                                <th>Nội dung</th>
                                                <th class="d-none d-lg-table-cell">Người dùng bình luận</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $index = 1;

                                            foreach ($comments as $comment) {
                                                $status = ($comment->approved) ? 'Post' : 'Hide';
                                                $button = ($comment->approved) ? "<button class=\"btn-hide btn btn-danger btn-xs\" data-bs-target='#HideCommentModal' data-bs-toggle='modal' data-bs-id='$comment->id' >Post</button>" : "<button class=\"btn-hide btn btn-primary btn-xs\" data-bs-target='#HideCommentModal' data-bs-toggle='modal' data-bs-id='$comment->id' >Hide</button>";
                                                echo
                                                "<tr class=\"text-center\">
                                                    <td class=\"d-none d-lg-table-cell\">"
                                                    . $index .
                                                    "</td>
                                                    <td class=\"d-none d-lg-table-cell\">"
                                                    . $comment->news_id .
                                                    "</td>
                                                    <td class=\"d-none d-lg-table-cell\">
                                                       " .  $comment->date  . "
                                                    </td>
                                                    <td class=\"d-none d-lg-table-cell\">
                                                      " .  $status . "
                                                    </td>   
                                                    <td>
                                                       " . $comment->content . "
                                                    </td>    
                                                    <td class=\"d-none d-lg-table-cell\">
                                                    " . $comment->user_id . "
                                                 </td>             
                                                    <td> " .
                                                    $button . "
                                                    <button class=\"btn-edit btn btn-primary btn-xs\" data-bs-target='#EditCommentModal' data-bs-toggle='modal' data-bs-id='$comment->id'  data-bs-content='$comment->content'>Edit</button>
                                                    <button class=\"btn-delete btn btn-danger btn-xs\" data-bs-target='#DeleteCommentModal' data-bs-toggle='modal' data-bs-id='$comment->id' >Delete</button>
                                                  </td>                                                                                                                                                                                       
                                                </tr>";
                                                $index++;
                                            }
                                            ?>
                                        </tbody>
                                        <div class="modal fade" id="HideCommentModal" tabindex="-1" role="dialog" aria-labelledby="HideCommentModal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Ẩn hay hiện bình luận</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="index.php?page=admin&controller=comments&action=hide" method="post">
                                                        <div class="modal-body">
                                                            <input class="form-control my-2" name="id" readonly />
                                                            <p>Bản có chắc chắn?</p>
                                                        </div>
                                                        <div class="modal-footer"><button class="btn btn-danger btn-outline-light" type="button" data-bs-dismiss="modal">Đóng</button><button class="btn btn-danger btn-outline-light" type="submit">Cập nhật</button></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="DeleteCommentModal" tabindex="-1" role="dialog" aria-labelledby="DeleteCommentModal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Xóa</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="index.php?page=admin&controller=comments&action=delete" method="post">
                                                        <div class="modal-body">
                                                            <input class="form-control my-2" name="id" readonly />
                                                            <p>Bạn có chắc chắn muốn xóa bình luận?</p>
                                                        </div>
                                                        <div class="modal-footer"><button class="btn btn-danger btn-outline-light" type="button" data-bs-dismiss="modal">Đóng</button><button class="btn btn-danger btn-outline-light" type="submit">Xóa</button></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="EditCommentModal" tabindex="-1" role="dialog" aria-labelledby="EditCommentModal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Chỉnh sửa bình luận</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="index.php?page=admin&controller=comments&action=edit" enctype="multipart/form-data" method="post">
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-12"><label>ID</label> <input class="form-control my-2" type="text" placeholder="Name" name="id" readonly /></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12"><label>Nội Dung </label><input class="form-control my-2" type="text" name="title" /></div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Đóng</button><button class="btn btn-primary" type="submit">Chỉnh sửa</button></div>
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
            </div>
        </div>
    </section>




</div>


<?php
require_once('views/admin/footer.php'); ?>

<!-- Add Javascripts -->
<script src="assets\javascripts\comment\index.js"></script>

</body>

</html>
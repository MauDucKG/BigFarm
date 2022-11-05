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
	<h1 style="margin-left: 10px">Bình luận đánh giá</h1> 
    <section class="content">
        <div class="container-fluid"> 
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header-->
                        <div class="card-body">
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addUserModal">Thêm mới</button>
                        <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Thêm mới bình luận</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <form action="index.php?page=admin&controller=comments&action=add" enctype="multipart/form-data" method="post">
                                        <div class="modal-body">
                                        <div class="form-group"><label>Nội dung</label><input class="form-control" type="text" placeholder="Nội dung" name="content" /></div>
                                           <div class="form-group"><label>ID bài viết</label>
                                           <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="news_id">
                                           <?php
                                                 foreach ($news as $new) { 
                                              echo    "<option> ".$new->id."</option>";
                                                 }
                                            ?>
                                            </select></div>
                                            <div class="form-group"><label>Người dùng</label>                                       
                                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="user_id">
                                           <?php
                                                 foreach ($users as $user) { 
                                                    echo    "<option> ".$user->email."</option>";
                                                }
                                            ?>
                                            </select></div>
                                        </div>
                                        <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Đóng</button><button class="btn btn-primary" type="submit">Thêm mới</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                                <div class="row">
                                    <div class="col-12">
                                        <table id="giaotrinhofkh" class="table table-bordered table-striped" style="margin-top:6px;">
                                            <thead>
                                                <tr class="text-center">
                                                    <th style="width: 220px;">STT</th>
                                                    <th style="width: 220px;">Mã bài viết</th>
                                                    <th style="width: 220px;">Ngày</th>
                                                    <th style="width: 130px;">Tiếp cận</th>
                                                    <th style="width: 260px;">Nội dung</th>
                                                    <th style="width: 230px;">Người dùng bình luận</th>
                                                    <th style="width: 100px;">Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody> 
                                        <?php
                                            
                                            $index = 1;

                                            foreach ($comments as $comment) {  
                                                      $status = ($comment->approved)? 'Post' : 'Hide' ;   
                                                      $button = ($comment->approved)? "<button class=\"btn-hide btn btn-danger btn-xs\" style=\"margin-right: 5px\" data-id='$comment->id' ><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-x-lg\" viewBox=\"0 0 16 16\">
                                                      <path fill-rule=\"evenodd\" d=\"M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z\"/>
                                                      <path fill-rule=\"evenodd\" d=\"M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z\"/>
                                                      </svg></button>" : "<button class=\"btn-hide btn btn-primary btn-xs\" style=\"margin-right: 5px\" data-id='$comment->id' > <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-check-lg\" viewBox=\"0 0 16 16\">
                                                      <path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/>
                                                    </svg></button>";               
                                                echo 
                                                "<tr class=\"text-center\">
                                                    <td >"
                                                        . $index. 
                                                    "</td>
                                                    <td >"
                                                    . $comment->news_id. 
                                                    "</td>
                                                    <td >
                                                       ".  $comment->date  ."
                                                    </td>
                                                    <td >
                                                      ".  $status."
                                                    </td>   
                                                    <td>
                                                       " .$comment->content."
                                                    </td>    
                                                    <td>
                                                    " .$comment->user_id."
                                                 </td>             
                                                    <td style=\"width:150px;\"> ".
                                                    $button . "
                                                    <button class=\"btn-edit btn btn-primary btn-xs\" style=\"margin-right: 5px; front-size:50px;\" data-id='$comment->id'  data-content='$comment->content'> <i style=\"font-size:17px;\"class=\"fas fa-edit\" ></i></button>
                                                    <button class=\"btn-delete btn btn-danger btn-xs\" style=\"margin-right: 5px\" data-id='$comment->id' ><i style=\"font-size:17px;\" class=\"fas fa-trash\"></i></button>
                                                  </td>                                                                                                                                                                                       
                                                </tr>";
                                                $index++;
                                            }
                                        ?>
                                    </tbody>
                                    <div class="modal fade" id="HideStudentModal" tabindex="-1" role="dialog" aria-labelledby="HideStudentModal" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content bg-danger">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Ẩn hay hiện bình luận</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form action="index.php?page=admin&controller=comments&action=hide" method="post">
                                                    <div class="modal-body"><input type="hidden" name="id" />
                                                        <p>Bản có chắc chắn?</p>
                                                    </div>
                                                    <div class="modal-footer"><button class="btn btn-danger btn-outline-light" type="button" data-dismiss="modal">Đóng</button><button class="btn btn-danger btn-outline-light" type="submit">Cập nhật</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="DeleteStudentModal" tabindex="-1" role="dialog" aria-labelledby="DeleteStudentModal" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content bg-danger">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Xóa</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form action="index.php?page=admin&controller=comments&action=delete" method="post">
                                                    <div class="modal-body"><input type="hidden" name="id" />
                                                        <p>Bạn có chắc chắn muốn xóa bình luận?</p>
                                                    </div>
                                                    <div class="modal-footer"><button class="btn btn-danger btn-outline-light" type="button" data-dismiss="modal">Đóng</button><button class="btn btn-danger btn-outline-light" type="submit">Xóa</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="EditStudentModal" tabindex="-1" role="dialog" aria-labelledby="EditStudentModal" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Chỉnh sửa bình luận</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form action="index.php?page=admin&controller=comments&action=edit" enctype="multipart/form-data" method="post">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                             <div  class="col-12"><label>ID</label> <input class="form-control" type="text" placeholder="Name" name="id"  readonly/></div>   
                                                        </div>
                                                        <div class="row">
                                                            <div  class="col-12"><label>Nội Dung </label><input class="form-control" type="text"  name="title" /></div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Đóng</button><button class="btn btn-primary" type="submit">Chỉnh sửa</button></div>
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
<script src="public/plugins/moment/moment.min.js"></script>
<script src="public/js/comments/index.js"></script>

</body>

</html>
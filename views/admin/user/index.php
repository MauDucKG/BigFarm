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
                <h1 class="text-center">Quản lý Khách hàng</h1>
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
                            <!-- Button trigger modal-->
                            <button class="btn btn-primary mb-2" type="button" data-bs-toggle="modal" data-bs-target="#addUserModal">Thêm mới</button>
                            <!-- Modal-->
                            <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModal" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Thêm mới</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="index.php?page=admin&controller=user&action=add" enctype="multipart/form-data" method="post">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="row"> </div>
                                                            <label >Họ và tên lót</label>
                                                            <input class="form-control my-2" type="text" placeholder="Họ và tên lót" name="fname" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="row"> </div>
                                                            <label>Tên</label>
                                                            <input class="form-control my-2" type="text" placeholder="Tên" name="lname" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Tuổi</label>
                                                            <input class="form-control my-2" type="number" placeholder="Tuổi" name="age" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Giới tính:</label>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input my-2" type="radio" name="gender" value="1" />
                                                                        <label>Nam</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input my-2" type="radio" name="gender" value="0" />
                                                                        <label>Nữ</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Số điện thoại</label>
                                                    <input class="form-control my-2" type="phone" placeholder="Số điện thoại" name="phone" required/>
                                                </div>

                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control my-2" type="text" placeholder="Email" name="email" required/>
                                                </div>

                                                <div class="form-group">
                                                    <label>Mật khẩu</label>
                                                    <input class="form-control my-2" type="password" placeholder="Mật khẩu" name="password" required/>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Ảnh đại diện</label>&nbsp
                                                    <input type="file" class="form-control my-2" name="fileToUpload" id="fileToUpload" required>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Đóng lại</button>
                                                <button class="btn btn-primary" type="submit">Thêm mới</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <table class="table table-bordered table-striped mt-3 shadow" id="tab-user">
                                <thead>
                                    <tr class="text-center">
                                        <th class="d-none d-lg-block d-print-block">STT</th>
                                        <th>Hình ảnh</th>
                                        <th class="d-none d-lg-block d-print-block">Họ và tên lót</th>
                                        <th>Tên</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $index = 1;
                                    foreach ($user as $user) {
                                        echo "<tr class='text-center'>";
                                        echo "<td class='align-middle d-none d-lg-block d-print-block'>" . $index++ . "</td>";
                                        echo "<td><img src='$user->profile_photo' class='border rounded-circle p-1' width='72' height='72'></td>";
                                        echo "<td class='align-middle d-none d-lg-block d-print-block'>" . $user->fname . "</td>";
                                        echo "<td class='align-middle'>" . $user->lname . "</td>";
                                        echo "<td class='align-middle'>
											<button class='btn-edit btn btn-primary btn-xs' data-bs-email='$user->email' data-bs-fname='$user->fname' data-bs-lname='$user->lname' data-bs-gender='$user->gender' data-bs-age='$user->age' data-bs-phone='$user->phone' data-bs-img='$user->profile_photo' data-bs-target='#EditUserModal' data-bs-toggle='modal'>Edit</button>
											<button class='btn-changepass btn btn-warning btn-xs' data-bs-email='$user->email' data-bs-target='#EditPassModal' data-bs-toggle='modal'>Change Password</button>
											<button class='btn-delete btn btn-danger btn-xs' data-bs-email='$user->email' data-bs-img='$user->profile_photo' data-bs-target='#DeleteUserModal' data-bs-toggle='modal'>Delete</button>
											</td>";
                                        echo "</tr>";
                                        $index++;
                                    }
                                    ?>
                                </tbody>
                            </table>

                            <div class="modal fade" id="EditUserModal" tabindex="-1" role="dialog" aria-labelledby="EditUserModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Chỉnh sửa</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="index.php?page=admin&controller=user&action=editInfo" enctype="multipart/form-data" method="post">
                                            <div class="modal-body">
                                                <input type="hidden" name="email">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="row"> </div>
                                                            <label>Họ và tên lót</label>
                                                            <input class="form-control my-2" type="text" placeholder="Họ và tên lót" name="fname" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="row"> </div>
                                                            <label>Tên</label>
                                                            <input class="form-control my-2" type="text" placeholder="Tên" name="lname" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Tuổi</label>
                                                            <input class="form-control my-2" type="number" placeholder="Tuổi" name="age" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Giới tính:</label>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input my-2" type="radio" name="gender" value="1" id="Nam" />
                                                                        <label>Nam</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input my-2" type="radio" name="gender" value="0" id="Nu" />
                                                                        <label>Nữ</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Số điện thoại</label>
                                                    <input class="form-control my-2" type="phone" placeholder="Số điện thoại" name="phone" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Hình ảnh hiện tại </label>
                                                    <input class="form-control my-2" type="text" name="img" readonly />
                                                </div>
                                                <div class="form-group">
                                                    <label>Hình ảnh mới</label>&nbsp
                                                    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control my-2"/>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Đóng lại</button>
                                                <button class="btn btn-primary" type="submit">Cập nhật</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="EditPassModal" tabindex="-1" role="dialog" aria-labelledby="EditPassModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Chỉnh sửa Password</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="index.php?page=admin&controller=user&action=editPass" method="post">
                                            <div class="modal-body">
                                                <input type="hidden" name="id" />
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control my-2" type="text" placeholder="Email" name="email" readonly />
                                                </div>
                                                <div class="form-group">
                                                    <label>New password</label>
                                                    <input class="form-control my-2" type="password" placeholder="Please enter your new password" name="new-password" />
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Đóng lại</button>
                                                <button class="btn btn-primary" type="submit">Cập nhật</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="DeleteUserModal" tabindex="-1" role="dialog" aria-labelledby="DeleteUserModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Xóa</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="index.php?page=admin&controller=user&action=delete" method="post">
                                            <div class="modal-body">
                                            <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control my-2" type="text" placeholder="Email" name="email" readonly />
                                                </div>
                                                <input type="hidden" name="img"/>
                                                <p>Bạn chắc chưa ?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary btn-outline-light" type="button" data-bs-dismiss="modal">Đóng lại</button>
                                                <button class="btn btn-danger btn-outline-light" type="submit">Xác nhận</button>
                                            </div>
                                        </form>
                                    </div>
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
<script src="assets\javascripts\user\index.js"></script>
</body>

</html>
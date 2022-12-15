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
                                        <th class="d-none d-lg-table-cell">STT</th>
                                        <th>Hình ảnh</th>
                                        <th class="d-none d-lg-table-cell">Họ và tên lót</th>
                                        <th>Tên</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $index = 1;
                                    foreach ($user as $user) {
                                        echo "<tr class='text-center'>";
                                        echo "<td class='align-middle d-none d-lg-table-cell'>" . $index++ . "</td>";
                                        echo "<td><img src='$user->profile_photo' class='border rounded-circle p-1' width='72' height='72'></td>";
                                        echo "<td class='align-middle d-none d-lg-table-cell'>" . $user->fname . "</td>";
                                        echo "<td class='align-middle'>" . $user->lname . "</td>";
                                        echo "<td class='align-middle'>
											<button class='btn-edit btn btn-primary btn-xs' data-bs-email='$user->email' data-bs-fname='$user->fname' data-bs-lname='$user->lname' data-bs-gender='$user->gender' data-bs-age='$user->age' data-bs-phone='$user->phone' data-bs-img='$user->profile_photo' data-bs-target='#EditUserModal' data-bs-toggle='modal'><svg xmlns='http://www.w3.org/2000/svg' width='13' height='13' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                                            <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                            <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                                          </svg></button>
											<button class='btn-changepass btn btn-warning btn-xs' data-bs-email='$user->email' data-bs-target='#EditPassModal' data-bs-toggle='modal'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pass' viewBox='0 0 16 16'>
                                            <path d='M5.5 5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5Zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3Z'/>
                                            <path d='M8 2a2 2 0 0 0 2-2h2.5A1.5 1.5 0 0 1 14 1.5v13a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-13A1.5 1.5 0 0 1 3.5 0H6a2 2 0 0 0 2 2Zm0 1a3.001 3.001 0 0 1-2.83-2H3.5a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-13a.5.5 0 0 0-.5-.5h-1.67A3.001 3.001 0 0 1 8 3Z'/>
                                          </svg></button>
											<button class='btn-delete btn btn-danger btn-xs' data-bs-email='$user->email' data-bs-img='$user->profile_photo' data-bs-target='#DeleteUserModal' data-bs-toggle='modal'><svg xmlns='http://www.w3.org/2000/svg' width='13' height='13' fill='currentColor' class='bi bi-trash3' viewBox='0 0 16 16'>
                                            <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z'/>
                                          </svg></button>
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
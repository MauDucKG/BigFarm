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
					<li class="breadcrumb-item active">Quản lý Thành viên</li>
				</ol>
			</div>
		</div>
		<div class="container-fluid row">
			<div class="my-3">
				<p class="row">
				<h1 class="text-center">Quản lý Thành viên</h1>
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
							<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addAdminModal">Thêm mới</button>
							<!-- Modal-->
							<div class="modal fade" id="addAdminModal" tabindex="-1" role="dialog" aria-labelledby="addAdminModal" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Thêm mới</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<form action="index.php?page=admin&controller=admin&action=add" method="post">
											<div class="modal-body">
												<div class="form-group">
													<label>Tên đăng nhập</label>
													<input class="form-control my-2" type="text" placeholder="Tên đăng nhập" name="username" />
												</div>
												<div class="form-group">
													<label>Mật khẩu</label>
													<input class="form-control my-2" type="password" placeholder="Mật khẩu" name="password" />
												</div>
											</div>
											<div class="modal-footer">
												<button class="btn btn-secondary" type="button" data-dismiss="modal">Đóng lại</button>
												<button class="btn btn-primary" type="submit">Thêm mới</button>
											</div>
										</form>
									</div>
								</div>
							</div>

							<table class="table table-bordered table-striped mt-3 shadow" id="tab-admin">
								<thead>
									<tr class="text-center">
										<th class="d-none d-lg-table-cell">STT</th>
										<th>Tên đăng nhập</th>
										<th class="d-none d-lg-table-cell">Cập nhật lần cuối</th>
										<th>Thao tác</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$index = 1;
									foreach ($admin as $admin) {
										echo "<tr class='text-center'>";
										echo "<td class=\"d-none d-lg-table-cell\">" . $index++ . "</td>";
										echo "<td>" . $admin->username . "</td>";
										echo "<td class=\"d-none d-lg-table-cell\">" . $admin->updateAt . "</td>";
										echo "<td>
											<button type='button' class='btn-edit btn btn-primary btn-xs' data-bs-username='$admin->username' data-bs-password='$admin->password' data-bs-target='#EditAdminModal' data-bs-toggle='modal'>Edit</button>
											<button type='button' class='btn-delete btn btn-danger btn-xs' data-bs-username='$admin->username' data-bs-target='#DeleteAdminModal' data-bs-toggle='modal'>Delete</button>
											</td>";
										echo "</tr>";
									}
									?>
								</tbody>
							</table>

							<div class="modal fade" id="EditAdminModal" tabindex="-1" role="dialog" aria-labelledby="EditAdminModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Chỉnh sửa</h5>
										</div>
										<form action="index.php?page=admin&controller=admin&action=edit" method="post">
											<div class="modal-body">
												<input type="hidden" name="id" />
												<div class="form-group">
													<label>Username</label>
													<input class="form-control my-2" type="text" placeholder="Username" name="username" disabled />
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

							<div class="modal fade" id="DeleteAdminModal" tabindex="-1" role="dialog" aria-labelledby="DeleteAdminModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Xóa</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<form action="index.php?page=admin&controller=admin&action=delete" method="post">
											<div class="modal-body">
												<input type="hidden" name="username" />
												<p>Bạn chắc chưa ?</p>
											</div>
											<div class="modal-footer">
												<button class="btn btn-primary btn-outline-light" type="button" data-bs-dismiss="modal">Đóng lại</button>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="assets\javascripts\admin\index.js"></script>
</body>

</html>
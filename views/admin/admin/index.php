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
											<button type='button' class='btn-edit btn btn-primary btn-xs' data-bs-username='$admin->username' data-bs-password='$admin->password' data-bs-target='#EditAdminModal' data-bs-toggle='modal'><svg xmlns='http://www.w3.org/2000/svg' width='13' height='13' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
											<path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
											<path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
										  </svg></button>
											<button type='button' class='btn-delete btn btn-danger btn-xs' data-bs-username='$admin->username' data-bs-target='#DeleteAdminModal' data-bs-toggle='modal'><svg xmlns='http://www.w3.org/2000/svg' width='13' height='13' fill='currentColor' class='bi bi-trash3' viewBox='0 0 16 16'>
											<path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z'/>
										  </svg></button>
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
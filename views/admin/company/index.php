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
				<h1 class="text-center">Quản lý Chi nhánh</h1>
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
							<button class="btn btn-primary mb-2" type="button" data-bs-toggle="modal" data-bs-target="#addCompanyModal">Thêm mới</button>
							<!-- Modal-->
							<div class="modal fade" id="addCompanyModal" tabindex="-1" role="dialog" aria-labelledby="addCompanyModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Thêm mới</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<form action="index.php?page=admin&controller=company&action=add" method="post">
											<div class="modal-body">
												<div class="form-group">
													<label>Tên chi nhánh</label>
													<input class="form-control my-2" type="text" placeholder="Tên chi nhánh" name="name" />
												</div>
												<div class="form-group">
													<label>Địa chỉ chi nhánh</label>
													<input class="form-control my-2" type="text" placeholder="Địa chỉ chi nhánh" name="address" />
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

							<table class="table table-bordered table-striped shadow" id="tab-company">
								<thead>
									<tr class="text-center">
										<th class="d-none d-lg-block d-print-block">STT</th>
										<th>Tên chi nhánh</th>
										<th class="d-none d-lg-block d-print-block">Địa chỉ chi nhánh</th>
										<th class="d-none d-lg-block d-print-block">Cập nhật lần cuối</th>
										<th>Thao tác</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($company as $company) {
										echo "<tr class='text-center'>";
										echo "<td class=\"d-none d-lg-block d-print-block\">" . $company->id . "</td>";
										echo "<td>" . $company->name . "</td>";
										echo "<td class=\"d-none d-lg-block d-print-block\">" . $company->address . "</td>";
										echo "<td class=\"d-none d-lg-block d-print-block\">" . $company->updateAt . "</td>";
										echo "<td>
											<btn class='btn-edit btn btn-primary btn-xs' style='margin-right: 5px' data-bs-id=$company->id data-bs-name='$company->name' data-bs-address='$company->address' data-bs-target='#EditCompanyModal' data-bs-toggle='modal'>Edit</btn>
											<btn class='btn-delete btn btn-danger btn-xs' style='margin-right: 5px' data-bs-id=$company->id data-bs-target='#DeleteCompanyModal' data-bs-toggle='modal'> Xóa</btn>
											</td>";
										echo "</tr>";
									}
									?>
								</tbody>
							</table>

							<div class="modal fade" id="EditCompanyModal" tabindex="-1" role="dialog" aria-labelledby="EditCompanyModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Chỉnh sửa</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<form action="index.php?page=admin&controller=company&action=edit" method="post">
											<div class="modal-body">
												<input type="hidden" name="id" />
												<div class="form-group">
													<input class="form-control my-2" type="hidden" placeholder="Id" name="id" readonly />
												</div>
												<div class="form-group">
													<label>Tên chi nhánh</label>
													<input class="form-control my-2" type="text" placeholder="Tên chi nhánh" name="name" />
												</div>
												<div class="form-group">
													<label>Địa chỉ</label>
													<input class="form-control my-2" type="text" placeholder="Địa chỉ chi nhánh" name="address" />
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

							<div class="modal fade" id="DeleteCompanyModal" tabindex="-1" role="dialog" aria-labelledby="DeleteCompanyModal" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Xóa</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<form action="index.php?page=admin&controller=company&action=delete" method="post">
											<div class="modal-body">
												<input type="hidden" name="id" />
												<p>Bạn chắc chưa ?</p>
											</div>
											<div class="modal-footer">
												<button class="btn btn-danger btn-outline-light" type="button" data-bs-dismiss="modal">Đóng lại</button>
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
<script src="assets\javascripts\company\index.js"></script>
</body>

</html>
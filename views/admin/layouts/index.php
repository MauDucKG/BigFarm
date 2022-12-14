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


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="float-end">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Trang chủ</li>
				</ol>
			</div>
		</div>
		<div class="container-fluid row">
			<div class="my-3">
				<p class="row">
				<h1 class="text-center">Administrator BigFarm</h1>
				</p>
			</div>
		</div>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid text-center">
			<div class="invoice p-3 mb-3">
				<div class="row invoice-info">
					<div class="col-sm-6 invoice-col">
						<ul style="list-style: none;">
							<li><a href="index.php?page=admin&controller=admin&action=index" class="fas fa-user-graduate"> Quản lý Thành viên</a></li>
							<li><a href="index.php?page=admin&controller=comments&action=index" class="fas fa-comments"> Bình luận đánh giá</a></li>
							<li><a href="index.php?page=admin&controller=user&action=index" class="fas fa-users-cog"> Liên hệ khách hàng</a>
						</ul>
					</div>
					<!-- /.col -->
					<div class="col-sm-6 invoice-col">
						<ul style="list-style: none;">
							<li><a href="index.php?page=admin&controller=products&action=index" class="fas fa-cube"> Quản lý sản phẩm</a></li>
							<li><a href="index.php?page=admin&controller=news&action=index" class="fas fa-file"> Quản lý bài viết</a></li>
							<li><a href="index.php?page=admin&controller=company&action=index" class="fas fa-newspaper"> Quản lý thông tin public</a>
						</ul>
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</div>
			<div class="row">
				<div class="col-md-12 col-lg-6 col-xl-4">
					<div class="card">
						<img src="..." class="card-img-top" alt="...">
						<div class="card-body">
							<a href="index.php?page=admin&controller=admin&action=index" class="btn btn-primary">Quản lý Thành viên</a>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-6 col-xl-4">
					<div class="card">
						<img src="..." class="card-img-top" alt="...">
						<div class="card-body">
							<a href="index.php?page=admin&controller=user&action=index" class="btn btn-primary">Quản lý Khách hàng</a>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-6 col-xl-4">
					<div class="card">
						<img src="..." class="card-img-top" alt="...">
						<div class="card-body">
							<a href="index.php?page=admin&controller=products&action=index" class="btn btn-primary">Quản lý Sản phẩm</a>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-6 col-xl-4">
					<div class="card">
						<img src="..." class="card-img-top" alt="...">
						<div class="card-body">
							<a href="index.php?page=admin&controller=comments&action=index" class="btn btn-primary">Quản lý Bình luận</a>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-6 col-xl-4">
					<div class="card">
						<img src="..." class="card-img-top" alt="...">
						<div class="card-body">
							<a href="index.php?page=admin&controller=news&action=index" class="btn btn-primary">Quản lý Bài viết</a>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-6 col-xl-4">
					<div class="card">
						<img src="..." class="card-img-top" alt="...">
						<div class="card-body">
							<a href="index.php?page=admin&controller=company&action=index" class="btn btn-primary">Quản lý Chi nhánh</a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<?php
require_once('views/admin/footer.php'); ?>

<!-- Add Javascripts -->


</body>

</html>
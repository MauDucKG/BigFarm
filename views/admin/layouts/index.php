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
			<div class="row mb-2">
				<div class="col-sm-8">
					<h1>Bạn đã đăng nhập vào khu vực Quản trị của VNGREEN!</h1>
				</div>
				<div class="col-sm-4">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Widgets</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
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
			<div class="card card-success">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12 col-lg-6 col-xl-4">
							<div class="card mb-2 bg-gradient-dark">
								<img class="card-img-top" src="public/img/layouts/Homepage_1.jpg" alt="Dist Photo 1">
								<div class="card-img-overlay d-flex flex-column justify-content-end">
									<h5 class="card-title text-primary text-white">Chào mừng đến với VNGREEN</h5>
									<p class="card-text text-white pb-2 pt-1">Thành lập ngày 9/9/2004, VNGREEN hiện là công ty Internet và công nghệ hàng đầu, kỳ lân công nghệ 1 tỷ USD + duy nhất của Việt Nam.</p>
								</div>
							</div>
						</div>

						<div class="col-md-12 col-lg-6 col-xl-4">
							<div class="card mb-2 bg-gradient-dark">
								<img class="card-img-top" src="public/img/layouts/Homepage_2.jpg" alt="Dist Photo 1">
								<div class="card-img-overlay d-flex flex-column justify-content-end">
									<h5 class="card-title text-primary text-white">Thành công với VNGREEN</h5>
									<p class="card-text text-white pb-2 pt-1">Có hơn 80 triệu người dùng tại 193 quốc gia với 15 ngôn ngữ.</p>
								</div>
							</div>
						</div>

						<div class="col-md-12 col-lg-6 col-xl-4">
							<div class="card mb-2 bg-gradient-dark">
								<img class="card-img-top" src="public/img/layouts/Homepage_3.jpg" alt="Dist Photo 1">
								<div class="card-img-overlay d-flex flex-column justify-content-end">
									<h5 class="card-title text-primary text-white">Đồng hành cùng VNGREEN</h5>
									<p class="card-text text-white pb-2 pt-1">Chúng tôi luôn chào đón các ứng viên hoài bão, mong muốn dấn thân vào lĩnh vực Internet, yêu thích làm việc trong một môi trường năng động, trẻ trung và đầy thử thách.</p>
								</div>
							</div>
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
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-light sticky-top">
		<div class="container-fluid">
			<img class="border rounded-circle p-1 mx-2 me-3" src="assets\images\team_logo.png" alt="" width="35" height="35">
			<a class="navbar-brand" href="#">Admin</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.php">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Quản lý
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="index.php?page=admin&controller=admin&action=index">Thành viên</a></li>
							<li><a class="dropdown-item" href="index.php?page=admin&controller=user&action=index">Khách hàng</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="index.php?page=admin&controller=products&action=index">Sản phẩm</a></li>
							<li><a class="dropdown-item" href="index.php?page=admin&controller=comments&action=index">Bình luận</a></li>
							<li><a class="dropdown-item" href="index.php?page=admin&controller=news&action=index">Bài viết</a></li>
							<li><a class="dropdown-item" href="index.php?page=admin&controller=company&action=index">Chi nhánh</a></li>
						</ul>
					</li>

				</ul>
				<form class="d-flex" role="search">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
				</form>

			</div>
			<div class="nav-item">
				<strong>
					<?php
					echo $_SESSION["user"]
					?>
				</strong>
			</div>
			<div class="">
				<div class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
						<img class="border rounded-circle p-1 mx-2 dropdown-toggle" src="assets\images\admin_logo.png" alt="" width="35" height="35">
					</a>
					<ul class="dropdown-menu dropdown-menu-end my-3">
						<li><a class="dropdown-item" href="index.php?page=admin&controller=login&action=logout">Logout</a></li>
					</ul>
				</div>
			</div>

		</div>
	</nav>
	<div class="container">
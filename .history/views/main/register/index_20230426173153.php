<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/stylesheets/register.css">
</head>

<body class="text-center">
	<div class="form-signin w-100 m-auto">
		<form action="index.php?page=main&controller=register&action=submit" method="POST" class="text-right">
			<img class="mb-3 border rounded-circle p-1" src="assets/images/team_logo.png" alt="" width="72" height="72">
			<h1 class="h3 mb-3 fw-normal">Register as User</h1>
			<div class="p-3 rounded-4 border shadow mb-2">
				<div class="m-1 row">
					<label for="floatingInput" class="col-3 my-auto">Email</label>
					<input type="email" class="form-control col" id="email" name="email" placeholder="Email" required>
				</div>
				<div class="m-1 row">
					<label for="floatingInput" class="col-3 my-auto">Password</label>
					<input type="password" class="form-control col" id="pass" name="pass" placeholder="Password" required>

				</div>

				<div class="row px-3">
					<div class="col-4">
						<div class="row">
							<label for="floatingInput" class="col-4 my-auto">Họ</label>
							<input type="text" class="form-control col" id="fname" name="fmane" placeholder="Họ" required>
						</div>
					</div>
					<div class="col-4">
						<div class="row">
							<label for="floatingInput" class="col-4 my-auto">Tên</label>
							<input type="text" class="form-control col" id="lname" name="lname" placeholder="Tên" required>
						</div>
					</div>
					<div class="col-4">
						<div class="row">
							<label for="floatingInput" class="col-4 my-auto">Tuổi</label>
							<input type="number" class="form-control col" id="age" name="age" placeholder="Tuổi" required>
						</div>
					</div>
				</div>
				
				<div class="row m-1">
					<label for="floatingInput" class="col-4	 my-auto">Số điện thoại</label>
					<input type="text" class="form-control col" id="phone" name="phone" placeholder="Số điện thoại" required>

				</div>

				<div class="row py-1">
					<div class="col">
						<label class="">Giới tính:</label>
					</div>
					<div class="col">
						<input class="form-check-input" type="radio" name="gender" value="1">
						<label class="form-check-label">Nam</label>
					</div>
					<div class="col">
						<input class="form-check-input" type="radio" name="gender" value="0">
						<label class="form-check-label">Nữ</label>
					</div>
				</div>
			</div>
			<div class="py-2">
				<input class="btn btn-primary btn-lg" type="submit" value="Đăng ký tài khoản">
			</div>
			<div class="row">
				<div class="col">
					<button href="index.php?page=main&controller=login&action=index" class="btn btn-danger">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 1 16 16">
							<path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z" />
							<path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
						</svg>
						Đăng nhập!
					</button>
				</div>

				<div class="col">
					<button href="index.php?page=main&controller=layouts&action=index" class="btn btn-warning">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 1 16 16">
							<path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
							<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
						</svg>
						Trang chủ!
					</button>
				</div>
			</div>
		</form>
	</div>
</body>

</html>
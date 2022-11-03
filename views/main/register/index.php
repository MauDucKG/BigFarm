<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="assets\stylesheets\register.css">
</head>

<body class="text-center">
	<div class="form-signin w-100 m-auto">
		<form action="index.php?page=main&controller=register&action=submit" method="POST" class="login100-form validate-form">
			<img class="mb-4 border rounded-circle p-1" src="assets\images\team_logo.png" alt="" width="72" height="72">
			<h1 class="h3 mb-3 fw-normal">Register as User</h1>

			<div class="form-floating m-1">
				<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
				<label for="floatingInput">Email</label>
			</div>



			<div class="form-floating m-1">
				<input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required>
				<label class="floatingInput">Password</label>
			</div>

			<div class="row px-1">
				<div class="col-4">
					<div class="form-floating">
						<input type="text" class="form-control" id="fname" name="fmane" placeholder="Họ" required>
						<label class="floatingInput">Họ</label>
					</div>
				</div>
				<div class="col-4">
					<div class="form-floating">
						<input type="text" class="form-control" id="lname" name="lname" placeholder="Tên" required>
						<label class="floatingInput">Tên</label>
					</div>
				</div>
				<div class="col-4">
					<div class="form-floating">
						<input type="text" class="form-control" id="age" name="age" placeholder="Tuổi" required>
						<label class="floatingInput">Tuổi</label>
					</div>
				</div>
			</div>
			<div class="form-floating m-1">
				<input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại" required>
				<label class="floatingInput">Số điện thoại</label>
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

			<div class="py-2">
				<input class="btn btn-primary" type="submit" value="Đăng ký tài khoản">
			</div>
			<div class="row">
				<div class="col">
					<a href="index.php?page=main&controller=login&action=index" class="txt1">
						Đăng nhập!
					</a>
				</div>

				<div class="col">
					<a href="index.php?page=main&controller=layouts&action=index" class="txt1">
						Trang chủ!
					</a>
				</div>
			</div>
		</form>
	</div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login for Admin</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="assets\stylesheets\login.css">
</head>

<body class="text-center">
	<div class="form-signin w-100 m-auto">
		<form action="index.php?page=admin&controller=login&action=check" method="POST">
			<img class="mb-4 border rounded-circle p-1" src="assets\images\team_logo.png" alt="" width="72" height="72">
			<h1 class="h3 mb-3 fw-normal">Please sign in</h1>
			<?php
			if (isset($err)) {
				echo '<p class="login-box-msg" style="color: red">' . $err . '</p>';
				unset($err);
			}
			?>
			<div class="form-floating">
				<input type="username" class="form-control" id="username" name="username" placeholder="Username" required>
				<label for="floatingInput">Username</label>
			</div>
			<div class="form-floating">
				<input type="password" class="form-control" id="password" name="password" placeholder="Password">
				<label for="floatingPassword">Password</label>
			</div>

			<div class="checkbox my-3">
				<p class="text-muted">Sign in as Administrator</p>
			</div>
			<button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
			<p class="mt-5 mb-3 text-muted">© Lemon team</p>
		</form>
	</div>
</body>

</html>
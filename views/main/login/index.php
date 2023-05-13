<?php
   include_once('views/main/navbar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login for Admin</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/stylesheets/login.css">
    <script src="https://kit.fontawesome.com/4ccf3877a2.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="wrapper">
        <div class="box">
            <form method="POST">
            <div class="register-box" id="regUser">
                <div class="top-header">
                    <img src="assets/images/team_logo.png" alt="" width="72" height="72">
                    <h3>Sign In</h3>
                    <small>Welcome Back</small>
                </div>
                    <?php
			            if (isset($err)) {
				        echo '<p class="login-box-msg" style="color: red">' . $err . '</p>';
				        unset($err);
			            }
			        ?>
                    <div class="input-field">
                        <input type="text" class="input-box" id="username" name="username" required>
                        <label for="regUser">Email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" class="input-box" id="password" name="password" required>
                        <label for="regPassword">Password</label>
                         <div class="eye-area">
                                <div class="eye-box" onclick="myRegPassword()">
                                    <i class="fa-regular fa-eye" id="eye-2"></i>
                                    <i class="fa-regular fa-eye-slash" id="eye-slash-2"></i>
                                </div>
                         </div>
                    </div>
                    <div class="remember">
                        <input type="checkbox" id="formCheck-2" class="check">
                        <label for="formCheck-2">Remember Me</label>
                    </div>
                    <div class="input-field">
                        <input type="submit" class="input-submit" value="Sign In" name="submit-btn">
                    </div>
                    <p style="text-align:center;">Don't have an Account? <a href="index.php?page=main&controller=register&action=index">Sign Up</a></p>
                </div>
          </div>
            </form>
        </div>
    </div>
    <script>
        function myRegPassword(){
            var d = document.getElementById('regPassword');
            var b = document.getElementById("eye-2");
            var c = document.getElementById("eye-slash-2");
            if(d.type === "password"){
                d.type = "text"
                b.style.opacity = "0";
                c.style.opacity = "1";
            }else{
                d.type = "password"
                b.style.opacity = "1";
                c.style.opacity = "0";
            }
        }
    </script>
</body>

</html>

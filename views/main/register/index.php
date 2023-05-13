<?php
   include_once('views/main/navbar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="assets/stylesheets/register.css">
    <script src="https://kit.fontawesome.com/4ccf3877a2.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <div class="box">
        <form action="index.php?page=main&controller=register&action=submit" method="POST" class="text-right">
            <div class="register-box" id="regUser">
                <div class="top-header">
                    <img src="assets/images/team_logo.png" alt="" width="72" height="72">
                    <h3>Sign Up</h3>
                    <small>Become a part of us</small>
                </div>
                <div class="input-group">
                    <div class="name-box">
                        <div class="input-field">
                            <input type="text" class="input-box" id="fname" name="fmane" required>
                            <label for="regUser">First Name</label>
                        </div>
                        <div class="input-field">
                            <input type="text" class="input-box" id="lname" name="lname" required>
                            <label for="regUser">Last Name</label>
                        </div>
                    </div>
                    <div class="input-field">
                        <input type="text" class="input-box" id="age" name="age" required>
                        <label for="regUser">Age</label>
                    </div>
                    <div class="input-field">
                        <input type="text" class="input-box" id="phone" name="phone" required>
                        <label for="regUser">Tel</label>
                    </div>
                    <div class="input-field">
                        <input type="text" class="input-box" id="email" name="email" required>
                        <label for="regUser">Email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" class="input-box" id="pass" name="pass" required>
                        <label for="regPassword">Password</label>
                         <div class="eye-area">
                                <div class="eye-box" onclick="myRegPassword()">
                                    <i class="fa-regular fa-eye" id="eye-2"></i>
                                    <i class="fa-regular fa-eye-slash" id="eye-slash-2"></i>
                                </div>
                         </div>
                    </div>
                    <div class="gender-box">
                        <div class="gender-container">
                            <input type="radio" class="gender-choice" name="gender" value="1" required>
                            <label>Male</label>
                        </div>
                        <div class="gender-container">
                            <input type="radio" class="gender-choice" name="gender" value="0" required>
                            <label>Female</label>
                        </div>
                    </div>
				</div>
                    <div class="remember">
                        <input type="checkbox" id="formCheck-2" class="check">
                        <label for="formCheck-2">Remember Me</label>
                    </div>
                    <div class="input-field">
                        <input type="submit" class="input-submit" value="Sign Up">
                    </div>
                    <p style="text-align:center;">Already have an account? <a href="index.php?page=main&controller=login&action=index">Sign In</a></p>
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

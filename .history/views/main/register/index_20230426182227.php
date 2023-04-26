<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/stylesheets/register.css">
    <script src="https://kit.fontawesome.com/4ccf3877a2.js" crossorigin="anonymous"></script>
    <style>
        .box-register{
            position: absolute;
            width: 85%;
            right: -350px;

        }
        .top-header{
            text-align: center;
            margin: 30px auto;
        }
        .top-header h3{
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 8px;
        }
        .input-group{}
    </style>
</head>

<body>
    <div class="register-box" id="regUser">
        <div class="top-header">
            <h3>Sign Up</h3>
            <small>Become a part of us</small>
        </div>
        <div class="input-group">
            <div class="input-field">
                <input type="text" class="input-box" id="regUser" required>
                <label for="regUser">Username</label>
            </div>
            <div class="input-field">
                <input type="text" class="input-box" id="regUser" required>
                <label for="regUser">Email</label>
            </div>
            <div class="input-field">
                <input type="password" class="input-box" id="regPassword" required>
                <label for="regPassword">Password</label>
                 <div class="eye-area">
                        <div class="eye-box" onclick="myRegPassword()">
                            <i class="fa-regular fa-eye" id="eye-2"></i>
                            <i class="fa-regular fa-eye-slash" id="eye-slash-2"></i>
                        </div>
                 </div>
            </div>
            <div class="input-field">
                <input type="text" class="input-box" id="regUser" required>
                <label for="regUser">Telephone number</label>
            <!-- </div>
            <div class="input-field">
                <input type="radio" class="input-box" id="regUser" required>
                <label for="regUser">Male</label>
            </div>
            <div class="input-field">
                <input type="radio" class="input-box" id="regUser" required>
                <label for="regUser">Female</label>
            </div> -->
            <div class="remember">
                <input type="checkbox" id="formCheck-2" class="check">
                <label for="formCheck-2"> Remember Me</label>
            </div>
            <div class="input-field">
                <input type="submit" class="input-submit" value="Sign In">
            </div>
        </div>
    </div>
</body>

</html>

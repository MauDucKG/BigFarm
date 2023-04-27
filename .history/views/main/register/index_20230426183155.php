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
        .box{
            display: flex;
            flex-direction: row;
            position: relative;
            padding: 60px 20px 30px 20px;
            height: 620px;
            width: 350px;
            background-color: rgba(255, 220, 220, 0.4);
            border-radius: 30px;
            -webkit-backdrop-filter: blur(15px);
            backdrop-filter: blur(15px);
            border: 3px solid rgba(255, 255, 255, 0.2);
            overflow: hidden;
        }
        .wrapper{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .box-register{
            position: absolute;
            width: 85%;
            right: -350px;
            transition: .5s ease-in-out;
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
        .input-group{
            width: 100%;
        }
        .input-field{
            margin-bottom: 12px 0 ;
            position: relative;
        }
        .input-box{
            width: 100%;
            height: 50px;
            font-size: 15px;
            color: #040404;
            border: none;
            border-radius: 10px;
            padding: 7px 45px 0 20px;
            background: rgba(224, 223, 223, 0.6);
            backdrop-filter: blur(2px);
            outline: none;
        }
        .input-field label{
            position: absolute;
            left: 20px;
            top: 15px;
            font-size: 15px;
            transition: .3s ease-in-out;
        }
        .input-box:focus ~ label,.input-box:valid ~ label{
            top: 2px;
            font-size: 10px;
            color: #c12828;
            font-weight: 500;
        }
        .eye-area{
            position: absolute;
            top: 25px;
            right: 25px;
        }
        .eye-box{
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        #eye,#eye-2{
            opacity: 1;
        }
        #eye-slash,#eye-slash-2{
            opacity: 0;
        }
        .remember{
            display: flex;
            font-size: 13px;
            margin: 12px 0 30px 0;
            color: #000;
        }
        .check{
            margin-right: 8px;
            width: 14px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="box">
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
                    <!-- <div class="input-field">
                        <input type="text" class="input-box" id="regUser" required>
                        <label for="regUser">Telephone number</label> -->
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
        </div>
    </div>
</body>

</html>

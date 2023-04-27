<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="assets/stylesheets/register.css">
    <script src="https://kit.fontawesome.com/4ccf3877a2.js" crossorigin="anonymous"></script>
    <!-- <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');
body{
    background: url("https://images.unsplash.com/photo-1472851294608-062f824d29cc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2304&q=80");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}
.wrapper{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    width: 100%;
}
.box{
    display: flex;
    flex-direction: row;
    position: relative;
    padding: 60px 20px 30px 20px;
    height: 700px;
    width: 450px;
    background-color: rgba(255, 220, 220, 0.4);
    border-radius: 30px;
    -webkit-backdrop-filter: blur(15px);
    backdrop-filter: blur(15px);
    border: 3px solid rgba(255, 255, 255, 0.2);
    overflow: hidden;
}
.box-register{
    position: absolute;
    width: 85%;
    right: -350px;
    transition: .5s ease-in-out;
}
.top-header{
    text-align: center;
    margin: 10px auto;
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
    width: 100%;
    margin-bottom: 12px;
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
    -webkit-backdrop-filter: blur(2px);
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
i{
    position: absolute;
    color: #444444;
    cursor: pointer;
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
.input-submit{
    width: 100%;
    height: 50px;
    font-size: 15px;
    font-weight: 500;
    border: none;
    border-radius: 10px;
    background: #bc6202;
    color: #fff;
    box-shadow: 0px 4px 20px rgba(62, 9, 9, 0.145);
    cursor: pointer;
    transition: .4s;
}
.input-submit:hover{
    background: #db3e00;
    box-shadow: 0px 4px 20px rgba(62, 9, 9, 0.32);
}
#btn{
    position: absolute;
    bottom: 0;
    left: 0;
    width: 145px;
    height: 50px;
    background: #cccccd;
    border-radius: 10px;
    box-shadow: 2px 0px 12px rgba(0, 0, 0, 0.1);
    transition: .5s ease-in-out;
}
.name-box{
    display: flex;
    column-gap: 10px;
}
.name-box .input-box{
    width: 100%;
}
.name-box .input-field{
    width: 100%;
}
    </style> -->
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
                    <div class="row py-1">
					<div class="col">
						<label class="">Gender:</label>
					</div>
					<div class="col">
						<input class="form-check-input" type="radio" name="gender" value="1">
						<label class="form-check-label">Male</label>
					</div>
					<div class="col">
						<input class="form-check-input" type="radio" name="gender" value="0">
						<label class="form-check-label">Female</label>
					</div>
				</div>
                    <div class="remember">
                        <input type="checkbox" id="formCheck-2" class="check">
                        <label for="formCheck-2">Remember Me</label>
                    </div>
                    <div class="input-field">
                        <input type="submit" class="input-submit" value="Sign Up">
                    </div>
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

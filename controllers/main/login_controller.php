<?php
require_once('controllers/main/base_controller.php');
require_once('models/user.php');

class LoginController extends BaseController
{
	function __construct()
	{
		$this->folder = 'login';
	}

	public function index()
	{
		session_start();
		if (isset($_SESSION["guest"]))
		{
			header('Location: index.php?page=main&controller=layouts&action=index');
		}
		else if (isset($_POST['submit-btn']))
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			unset($_POST);
			$check = User::validation($username, $password);
			if ($check == 1)
			{
				$_SESSION["guest"] = $username;
				header('Location: index.php?page=main&controller=layouts&action=index');
			}
			else 
			{
				$err = "Sai tài khoản hoặc mật khẩu";
				$data = array('err' => $err);
				$this->render('index', $data);
			}
		}
		else
		{
			$this->render('index');
		}
	}

	public function logout()
	{
		session_start();
		unset($_SESSION["guest"]);
		session_destroy();
		header("Location: index.php?page=main&controller=login&action=index");
	}
}

<?php
require_once('controllers/admin/base_controller.php');
require_once('models/company.php');

class CompanyController extends BaseController
{
	function __construct()
	{
		$this->folder = 'company';
	}

	public function index()
	{
		$company = Company::getAll();
		$data = array('company' => $company);
		$this->render('index', $data);
	}

	public function add()
	{
		$name = $_POST['name'];
		$address = $_POST['address'];
		$add_new = Company::insert($name, $address);
		header('Location: index.php?page=admin&controller=company&action=index');
	}

	public function edit()
	{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$change_pass = Company::update($id, $name, $address);
		header('Location: index.php?page=admin&controller=company&action=index');
	}

	public function delete()
	{
		$id = $_POST['id'];
		$delete_user = Company::delete($id);
		header('Location: index.php?page=admin&controller=company&action=index');
	}
}
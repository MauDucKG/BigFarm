<?php
require_once('controllers/main/base_controller.php');

class LayoutsController extends BaseController
{
	function __construct()
	{
		$this->folder = 'layouts';
	}

	public function index()
	{
		$this->render('index');
	}
}

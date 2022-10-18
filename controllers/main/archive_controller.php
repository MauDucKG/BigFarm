<?php
require_once('controllers/main/base_controller.php');

class ArchiveController extends BaseController
{
	function __construct()
	{
		$this->folder = 'archive';
	}

	public function index()
	{
		$this->render('index');
	}
}

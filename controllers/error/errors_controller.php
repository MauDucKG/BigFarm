<?php
class ErrorsController  
{
	public function index()
	{
		$view_file = 'views/error/index.php';	
		require_once($view_file);
	}

}
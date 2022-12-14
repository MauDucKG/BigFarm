<?php
require_once('controllers/main/base_controller.php');
require_once('models/product.php');

class DetailController extends BaseController
{
	function __construct()
	{
		$this->folder = 'detail';
	}

	public function index()
	{
        $products = Product::getAll();
		$data = array('products' => $products);
		$this->render('index', $data);
	}
}

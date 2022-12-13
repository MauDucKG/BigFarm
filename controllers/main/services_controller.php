<?php
require_once('controllers/main/base_controller.php');
require_once('models/product.php');

class ServicesController extends BaseController
{
	function __construct()
	{
		$this->folder = 'services';
	}

	public function index()
	{
		$products = Product::getAll();
		$data = array('products' => $products);
		$this->render('index', $data);
	}
	public function get()
	{
		if(isset($_POST['id'])){
			$id = $_POST['id'];
			// $product = Product::get($id);
			// $data = array('product' => $product);
			$data = array('product' => $id);
			$this->render('get', $data);
		}
		else {
			echo "<script>console.log('false')</script>";
		}

	}
}

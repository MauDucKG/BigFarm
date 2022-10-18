<?php
require_once('controllers/admin/base_controller.php');
require_once('models/news.php');


class NewsController extends BaseController
{
	function __construct()
	{
		$this->folder = 'news';
	}

	public function index()
	{
        $news = News::getAll();
        $data = array('news' => $news);
        $this->render('index', $data);
	}
    public function add(){
        $description = $_POST['description'];
        $content = $_POST['content'];
        $title = $_POST['title'];
        News::insert($title, $description, $content);
        header('Location: index.php?page=admin&controller=news&action=index');
    }
    public function edit(){
        $id = $_POST['id'];
        $description = $_POST['description'];
        $content = $_POST['content'];
        $title = $_POST['title'];
        News::update($id,$title, $description, $content);
        header('Location: index.php?page=admin&controller=news&action=index');
    }
    public function delete(){
        $id = $_POST['id'];
        News::delete($id);
        header('Location: index.php?page=admin&controller=news&action=index');
    }
    public function hide(){
        $id = $_POST['id'];
        News::hide($id);
        header('Location: index.php?page=admin&controller=news&action=index');
    }
}

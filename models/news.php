<?php
require_once('./connection.php');
class News
{
    public $id;
    public $status;
    public $date;
    public $title;
    public $description;
    public $content;

    public function __construct($id, $status, $date, $title, $description, $content)
    {
        $this->id = $id;
        $this->status = $status;
        $this->date = $date;
        $this->title = $title;
        $this->description = $description;
        $this->content = $content;
    }

    static function getAll()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM news ORDER BY date DESC");
        $lnews = [];
        foreach ($req->fetch_all(MYSQLI_ASSOC) as $news)
        {
            $lnews[] = new News(
                $news['id'],
                $news['status'],
                $news['date'],
                $news['title'],
                $news['description'],
                $news['content']
            );
        }
        return $lnews;
    }

    static function getAllShow()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM news WHERE status=1 ORDER BY date DESC");
        $lnews = [];
        foreach ($req->fetch_all(MYSQLI_ASSOC) as $news)
        {
            $lnews[] = new News(
                $news['id'],
                $news['status'],
                $news['date'],
                $news['title'],
                $news['description'],
                $news['content']
            );
        }
        return $lnews;
    }

    static function get($id)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM news WHERE id = $id");
        $result = $req->fetch_assoc();
        $news = new News(
            $result['id'],
            $result['status'],
            $result['date'],
            $result['title'],
            $result['description'],
            $result['content']
        );
        return $news;
    }

    static function insert($title, $description, $content)
    {
        $status = true;
        $date = date("Y-m-d-h-i-s");
        $db = DB::getInstance();
        $req = $db->query(
            "
            INSERT INTO news (status, date, title, description, content)
            VALUES ($status, '$date', '$title', '$description', '$content')
            ;");
        return $req;
    }

    static function delete($id)
    {
        $db = DB::getInstance();
        $req = $db->query("DELETE FROM news WHERE id = $id;");
        return $req;
    }

    static function update($id, $title, $description, $content)
    {
        $db = DB::getInstance();
        $req = $db->query("UPDATE news SET content = '$content', title = '$title', description = '$description' WHERE id = $id;");
        return $req;
    }

    static function hide($id)
    {   
        $db = DB::getInstance();
        $statuscurrent = News::get($id)->status;
        if ($statuscurrent == 1){
            $req = $db->query("UPDATE news SET status = 0 WHERE id = $id;");
        }
        else{
            $req = $db->query("UPDATE news SET status = 1 WHERE id = $id;");
        }
        return $req;
    }

    static function show($id)
    {
        $db = DB::getInstance();
        $req = $db->query("UPDATE news SET status = 1 WHERE id = $id;");
        return $req;
    }

    static function recentNews()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM news WHERE status = 1 ORDER BY date DESC LIMIT 5");
        $lnews = [];
        foreach ($req->fetch_all(MYSQLI_ASSOC) as $news)
        {
            $lnews[] = new News(
                $news['id'],
                $news['status'],
                $news['date'],
                $news['title'],
                $news['description'],
                $news['content']
            );
        }
        return $lnews;
    }
}
?>
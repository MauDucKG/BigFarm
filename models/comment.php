<?php
require_once('./connection.php');
class Comment
{
    public $id;
    public $date;
    public $approved;
    public $content;
    public $news_id;
    public $user_id;
    public $news_title;
    public $user_name;
    public $parent;

    public function __construct($id, $date, $approved, $content, $news_id, $user_id, $news_title, $user_name, $parent)
    {
        $this->id = $id;
        $this->date = $date;
        $this->approved = $approved;
        $this->content = $content;
        $this->news_id = $news_id;
        $this->user_id = $user_id;
        $this->news_title = $news_title;
        $this->user_name = $user_name;
        $this->parent = $parent;
    }

    static function getAll()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT 
        C.id AS id,
        C.date AS date,
        C.approved AS approved,
        C.content AS content,
        C.news_id AS news_id,
        C.user_id AS user_id,
        N.title AS title,
        U.fname AS fname,
        U.lname AS lname,
        C.parent AS parent
        FROM comment AS C, user AS U, news AS N WHERE C.news_id = N.id AND C.user_id = U.email ORDER BY C.date");
        $comments = [];
        foreach ($req->fetch_all(MYSQLI_ASSOC) as $comment) {
            $comments[] = new Comment(
                $comment['id'],
                $comment['date'],
                $comment['approved'],
                $comment['content'],
                $comment['news_id'],
                $comment['user_id'],
                $comment['title'],
                $comment['fname'] . ' ' . $comment['lname'],
                $comment['parent']
            );
        }
        return $comments;
    }

    static function get($id)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT 
        C.id AS id, 
        C.date AS date,
        C.approved AS approved,
        C.content AS content,
        C.news_id AS news_id,
        C.user_id AS user_id,
        N.title AS title,
        U.fname AS fname,
        U.lname AS lname,
        C.parent AS parent
        FROM comment AS C, user AS U, news AS N WHERE C.news_id = N.id AND C.user_id = U.email AND C.id = $id ORDER BY C.date");
        $result = $req->fetch_assoc();
        $comment = new Comment(
            $result['id'],
            $result['date'],
            $result['approved'],
            $result['content'],
            $result['news_id'],
            $result['user_id'],
            $result['title'],
            $result['fname'] . ' ' . $result['lname'],
            $result['parent']
        );
        return $comment;
    }

    static function getCommentByNews($news_id)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT 
        C.id AS id,
        C.date AS date,
        C.approved AS approved,
        C.content AS content,
        C.news_id AS news_id,
        C.user_id AS user_id,
        N.title AS title,
        U.fname AS fname,
        U.lname AS lname,
        C.parent AS parent
        FROM comment AS C, user AS U, news AS N WHERE C.news_id = N.id AND C.user_id = U.email AND C.news_id = $news_id AND C.approved = 1 AND C.parent IS NULL ORDER BY C.date DESC;");
        $comments = [];
        foreach ($req->fetch_all(MYSQLI_ASSOC) as $comment) {
            $comments[] = new Comment(
                $comment['id'],
                $comment['date'],
                $comment['approved'],
                $comment['content'],
                $comment['news_id'],
                $comment['user_id'],
                $comment['title'],
                $comment['fname'] . ' ' . $comment['lname'],
                $comment['parent']
            );
        }
        return $comments;
    }

    static function getCommentByUser($user_id)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT 
        C.id AS id,
        C.date AS date,
        C.approved AS approved,
        C.content AS content,
        C.news_id AS news_id,
        C.user_id AS user_id,
        N.title AS title,
        U.fname AS fname,
        U.lname AS lname,
        C.parent AS parent
        FROM comment AS C, user AS U, news AS N WHERE C.news_id = N.id AND C.user_id = U.email AND C.user_id = $user_id AND C.approved = 1 ORDER BY C.date DESC;");
        $comments = [];
        foreach ($req->fetch_all(MYSQLI_ASSOC) as $comment) {
            $comment[] = new Comment(
                $comment['id'],
                $comment['date'],
                $comment['approved'],
                $comment['content'],
                $comment['news_id'],
                $comment['user_id'],
                $comment['title'],
                $comment['fname'] . ' ' . $comment['lname'],
                $comment['parent']
            );
        }
        return $comments;
    }


    static function insert($content, $news_id, $user_id)
    {
        $approved = true;
        $db = DB::getInstance();
        $req = $db->query(
            "
            INSERT INTO comment (date, approved, content, news_id, user_id)
            VALUES (NOW(), $approved, '$content', $news_id, '$user_id')
            ;"
        );
        return $req;
    }

    static function reply($content, $news_id, $user_id, $parent)
    {
        $approved = true;
        $db = DB::getInstance();
        $req = $db->query(
            "
            INSERT INTO comment (date, approved, content, news_id, user_id, parent)
            VALUES (NOW(), $approved, '$content', $news_id, '$user_id', $parent)
            ;"
        );
        return $req;
    }

    static function getReply($id)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT 
        C.id AS id,
        C.date AS date,
        C.approved AS approved,
        C.content AS content,
        C.news_id AS news_id,
        C.user_id AS user_id,
        N.title AS title,
        U.fname AS fname,
        U.lname AS lname,
        C.parent AS parent
        FROM comment AS C, user AS U, news AS N WHERE C.news_id = N.id AND C.user_id = U.email AND C.parent = $id AND approved = 1;");
        $replies = [];
        foreach ($req->fetch_all(MYSQLI_ASSOC) as $reply) {
            $replies[] = new Comment(
                $reply['id'],
                $reply['date'],
                $reply['approved'],
                $reply['content'],
                $reply['news_id'],
                $reply['user_id'],
                $reply['title'],
                $reply['fname'] . ' ' . $reply['lname'],
                $reply['parent']
            );
        }
        return $replies;
    }

    static function delete($id)
    {
        $db = DB::getInstance();
        $req = $db->query("DELETE FROM comment WHERE id = $id;");
        return $req;
    }

    static function update($id, $content)
    {
        $db = DB::getInstance();
        $req = $db->query("UPDATE comment SET content = '$content' WHERE id = $id;");
        return $req;
    }

    static function block($id)
    {
        $db = DB::getInstance();
        $req = $db->query("UPDATE comment SET approved = 0 WHERE id = $id;");
        return $req;
    }

    static function unblock($id)
    {
        $db = DB::getInstance();
        $req = $db->query("UPDATE comment SET approved = 1 WHERE id = $id;");
        return $req;
    }
}

<?php
require_once('./connection.php');
class Admin
{
    public $username;
    public $password;
    public $createAt;
    public $updateAt;

    public function __construct($username, $password, $createAt, $updateAt)
    {
        $this->username = $username;
        $this->password = $password;
        $this->createAt = $createAt;
        $this->updateAt = $updateAt;
    }

    static function insert($username, $password)
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $db = DB::getInstance();
        $req = $db->query("INSERT INTO admin (username, password, createAt, updateAt) VALUES ('$username', '$password', NOW(), NOW());");
        return $req;
    }

    static function delete($username)
    {
        $db = DB::getInstance();
        $req = $db->query("DELETE FROM admin WHERE username = '$username';");
        return $req;
    }

    static function validation($username, $password)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM admin WHERE username = '$username'");
        if($result = $req -> fetch_assoc()) {
            if ($password == $result['password'])
                return true;
            else
                return false;
        }
        else {
            return false;
        }
    }

    static function changePassword($username, $oldpassword, $newpassword)
    {
        if (Admin::validation($username, $oldpassword)) {
            $password = password_hash($newpassword, PASSWORD_DEFAULT);
            $db = DB::getInstance();
            $req = $db->query(
                "UPDATE admin
                SET password = '$password', updateAt = NOW()
                WHERE username = '$username';"
            );
            return $req;
        } else {
            return false;
        }
    }

    static function changePassword_($username, $newpassword)
    {
        $password = password_hash($newpassword, PASSWORD_DEFAULT);
        $db = DB::getInstance();
        $req = $db->query(
            "UPDATE admin
            SET password = '$password', updateAt = NOW()
            WHERE username = '$username';"
        );
        return $req;
    }

    static function getAll()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM admin");
        $admins = [];
        foreach ($req->fetch_all(MYSQLI_ASSOC) as $admin) {
            $admins[] = new Admin(
                $admin['username'],
                $admin['password'],
                $admin['createAt'],
                $admin['updateAt']
            );
        }
        return $admins;
    }
}

<?php
require_once('./connection.php');
class Company
{
    public $id;
    public $name;
    public $address;
    public $createAt;
    public $updateAt;
    public $phone;
    public $gmail;

    public function __construct($id, $name, $address, $createAt, $updateAt, $phone, $gmail)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->createAt = $createAt;
        $this->updateAt = $updateAt;
        $this->phone = $phone;
        $this->gmail = $gmail;
    }

    static function getAll()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM company");
        $companies = [];
        foreach ($req->fetch_all(MYSQLI_ASSOC) as $company) {
            $companies[] = new Company(
                $company['id'],
                $company['name'],
                $company['address'],
                $company['createAt'],
                $company['updateAt'],
                $company['phone'],
                $company['gmail']
            );
        }
        return $companies;
    }

    static function get($id)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM company WHERE id = $id");
        $result = $req->fetch_assoc();
        $company = new Company(
            $result['id'],
            $result['name'],
            $result['address'],
            $result['createAt'],
            $result['updateAt'],
            $result['phone'],
            $result['gmail']
        );
        return $company;
    }

    static function insert($name, $address)
    {
        $db = DB::getInstance();
        $req = $db->query(
            "
            INSERT INTO company (name, address, createAt, updateAt, phone, gmail)
            VALUES ('$name', '$address', NOW(), NOW())
            ;"
        );
        return $req;
    }

    static function delete($id)
    {
        $db = DB::getInstance();
        $req = $db->query("DELETE FROM company WHERE id = $id;");
        return $req;
    }

    static function update($id, $name, $address)
    {
        $db = DB::getInstance();
        $req = $db->query("UPDATE company SET name = '$name', address = '$address', updateAt = NOW() WHERE id = $id;");
        return $req;
    }
}
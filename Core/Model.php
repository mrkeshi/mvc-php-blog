<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 07/28/2019
 * Time: 06:45 PM
 */

namespace Core;


class Model
{
    private $tbl;
    protected $pdo;
    private $username;
    private $db;
    private $password;
    private $servername;

    public function __construct()
    {
        $this->pdo = $this->connect();
    }

    public function setTbl($tbl)
    {
        $this->tbl = $tbl;
    }

    private function connect()
    {
        $this->username = Config::USERNAME;
        $this->db = Config::DB_NAME;
        $this->password = Config::PASSWORD;
        $this->servername = Config::SERVER_NAME;
        try {
            return new \PDO("mysql:host={$this->servername};dbname={$this->db}", $this->username, $this->password, array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        } catch (\PDOException $e) {
            throw  $e;
        }
    }

    public function insert($data, $tbl)
    {
        $kews = array_keys($data);
        $kews = implode(',', $kews);
        $data = implode("','", $data);
        $data = "'" . $data . "'";
        $sql = $this->pdo->prepare("INSERT INTO $tbl ($kews) VALUES ($data)");
        if ($sql->execute() == true) {
            return [true,'<p class="text-success">با موفقیت ساخته شد</p>'];
        } else {
            return [false,'<p class="text-danger">خطا درساخت !!فکرکنم آدرس از قبل وجود داره</p>'];

        }

    }

    public function delete($id, $tbl)
    {
        $id = htmlspecialchars($id);
        $sql = $this->pdo->prepare("DELETE FROM $tbl WHERE id=$id");
        if ($sql->execute()) {
            header("location:?true=yes");
        }else{
        }
    }

    public function update($value, $id, $tbl)
    {
        $text = '';
        foreach ($value as $kew => $item) {
            $text .= $kew . "='" . $item . "',";
        }
        $text = preg_replace('/,$/', '', $text);

        $id = htmlspecialchars($id);
        $sql = $this->pdo->prepare("UPDATE `$tbl` SET $text WHERE id='$id'");
        if ($sql->execute()) {
            return [true,'<p class="text-success">با موفقیت ویرایش شد</p>'];
        } else {
            return [false,'<p class="text-danger">خطا در ویرایش !!فکرکنم آدرس از قبل وجود داره</p>'];
        }

    }
}
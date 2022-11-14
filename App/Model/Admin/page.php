<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/01/2019
 * Time: 03:11 AM
 */

namespace App\Model\Admin;


use Core\Model;
use mysql_xdevapi\Exception;

class page extends Model
{
    public function selectPage()
    {
        $sql = $this->pdo->prepare("SELECT * FROM page_tbl");
        $sql->execute();
        $result = $sql->fetchAll();
        return $result;
    }

    public function selectSinglePage($id)
{
    $id = htmlspecialchars($id);
    $sql = $this->pdo->prepare("SELECT * FROM page_tbl WHERE id='$id'");
    $sql->execute();
    $result = $sql->fetch();
    return $result;
}
    public function selectSinglePageByUrl($url)
    {
        $id = htmlspecialchars($url);
        $sql = $this->pdo->prepare("SELECT * FROM page_tbl WHERE url='$url'");
        if($sql->execute()){
            $result = $sql->fetch();
            return $result;
        }else{
            return false;
        }

    }
    public function countPostsPage($id)
    {
        echo $id;
    }

    public function insertPage($data)
    {
        $dat = time();
        if (isset($_SESSION['username'])) {
            $ses = base64_decode($_SESSION['username']);
        } else {
            $ses = base64_decode($_SESSION['user']);
        }
        $sql = $this->pdo->prepare("INSERT INTO page_tbl (`title`,`url`,`text`,`date`,`writer`) VALUES ('$data[title]','$data[url]','$data[text]','$dat','$ses')");
        if ($sql->execute()) {
            return [true, '<p class="text-success"> با موفقیت ساخته شد</p>'];
        } else {
            return [false, '<p class="text-danger">خطا در ساخت صفحه , آدرس صفحه از قبل موجود میباشد</p>'];
        }
    }

    public function selectWrite($ser)
    {
        $sql = $this->pdo->prepare("SELECT * FROM admin_tbl WHERE username='$ser'");
        if ($sql->execute()) {
            $sql->execute();
        } else {
            $sql = $this->pdo->prepare("SELECT * FROM user_tbl WHERE `user`='$ser'");
            $sql->execute();
        }
        return $sql->fetch()['name'];
    }

    public function updatePage($data, $id)
    {
        if (isset($_SESSION['username'])) {
            $file = base64_decode($_SESSION['username']);
        } else {
            $file = base64_decode($_SESSION['user']);
        }
        $id = htmlspecialchars($id);
        $ti = time();
        $sql = $this->pdo->prepare("UPDATE page_tbl SET `title`='$data[name]',`url`='$data[url]',`text`='$data[text]',`up`='$ti',`upby`='$file' WHERE id='$id'");
        if ($sql->execute()) {
            return [true, "<p class='text-success'>با موفقیت ویرایش شد</p>"];
        } else {
            return [false, "<p class='text-danger'>خطا در هنگام ویرایش</p>"];
        }
    }
}
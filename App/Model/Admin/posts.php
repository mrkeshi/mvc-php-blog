<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/02/2019
 * Time: 11:18 PM
 */

namespace App\Model\Admin;


use App\Model\PublicModel;
use Core\Model;

class posts extends Model
{
    public function insertPost($data, $image)
    {
        if (isset($_SESSION['username'])) {
            $ses = base64_decode($_SESSION['username']);
        } else {
            $ses = base64_decode($_SESSION['user']);
        }
        if (isset($_FILES[$image])) {
            $image = PublicModel::uploaderImage('posts', $image);
        } else {
            $image = 'uploader/defult.png';
        }
        $ti = time();
        $sql = $this->pdo->prepare("INSERT INTO post_tbl(`title`,`url`,`status`,`content`,`image`,`date`,`writer`,`cat_id`) VALUES ('$data[title]','$data[url]','$data[status]','$data[text]','$image','$ti','$ses','$data[cat_id]') ");
        if ($sql->execute()) {
            return [true, "<p class='text-success'>با موفقیت افزوده شد</p>"];
        } else {
            return [false, "<p class='text-danger'>خطا در ارسال پست.فکرکنم آدرس رو تکراری وارد کردین</p>"];
        }
    }
public function stacomment($int,$id){
        $sql=$this->pdo->prepare("UPDATE `comment_tbl` SET status='$int' WHERE id='$id'");
        $sql->execute();
}
    public function selectPost()
    {
        $sql = $this->pdo->prepare("SELECT * FROM post_tbl ORDER by id DESC ");
        $sql->execute();
        return $sql->fetchAll();
    }
public function selectComment(){
    $sql = $this->pdo->prepare("SELECT * FROM comment_tbl ORDER BY datee DESC ");
    $sql->execute();
    return $sql->fetchAll();
}
public function selectPostComment($url){
        $sql=$this->pdo->prepare("SELECT * FROM post_tbl WHERE url='$url'");
        $sql->execute();
        return $sql->fetch();
}
    public function selectWrite($ser)
    {
        $sql = $this->pdo->prepare("SELECT * FROM admin_tbl WHERE username='$ser'");
        if ($sql->execute()) {
            $sql->execute();
        } else {
            $sql = $this->pdo->prepare("SELECT * FROM user_tbl WHERE user='$ser'");
            $sql->execute();
        }
        return $sql->fetch()['name'];
    }

    public function selectSinglePost($id)
    {
        $id = htmlspecialchars($id);
        $sql = $this->pdo->prepare("SELECT * FROM post_tbl WHERE id='$id'");
        $sql->execute();
        $result = $sql->fetch();
        return $result;
    }
    public function countComment(){
        $sql = $this->pdo->prepare("SELECT * FROM comment_tbl WHERE status='0' ");
        $sql->execute();
        return count($sql->fetchAll());
    }
    public function updatePost($data, $id, $filee)
    {
        if (isset($_SESSION['username'])) {
            $file = base64_decode($_SESSION['username']);
        } else {
            $file = base64_decode($_SESSION['user']);
        }
        if ($_FILES[$filee]['size']) {
            $f = new PublicModel();
            $img=$f->uploaderImage('posts', 'file');
        }else{
            $img = $this->selectSinglePost($id)['image'];

        }
        $id = htmlspecialchars($id);
        $ti = time();
        $sql = $this->pdo->prepare("UPDATE `post_tbl` SET  `title`='$data[title]',`url`='$data[url]',`status`='$data[status]',`content`='$data[text]',`up`='$ti',`upby`='$file',`image`='$img',`cat_id`='$data[cat_id]' WHERE id='$id'");
        if ($sql->execute()) {
            return [true, "<p class='text-success'>با موفقیت ویرایش شد</p>"];
        } else {
            return [false, "<p class='text-danger'>خطا در هنگام ویرایش</p>"];
        }
    }

    public function countPostsPage($id)
    {
        echo $id;
    }
    public function Delcom($id){
        $idd=$this->selectSinglePost($id)['url'];
        $sql=$this->pdo->prepare("DELETE FROM `comment_tbl` WHERE  post_id='$idd'");
       echo $sql->execute();
    }
}
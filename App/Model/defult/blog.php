<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/06/2019
 * Time: 05:50 PM
 */

namespace App\Model\defult;


use Core\Model;
use mysql_xdevapi\Exception;

class blog extends Model
{
    public $mess=null;
public function showSinglePost($url){
    $sql=$this->pdo->prepare("SELECT * FROM post_tbl WHERE url='$url'");
         $sql->execute();
    return  $sql->fetch();


}
public function countPost(){
    $sql=$this->pdo->prepare("select * from post_tbl where status='1'");
    $sql->execute();
    return count($sql->fetchAll());
}
    public function countPostcat($id){
        $sql=$this->pdo->prepare("select * from post_tbl where status='1' AND cat_id='$id' ");
        $sql->execute();
        return count($sql->fetchAll());
    }
    public function showPost($n){
    $n=$n*5;
    $sql=$this->pdo->prepare("SELECT * FROM post_tbl WHERE status='1' ORDER BY date DESC LIMIT 5 OFFSET $n ");
    $sql->execute();
    return$sql->fetchAll();
}
    public function showCat($n,$cat){
        $n=$n*5;
        $sql=$this->pdo->prepare("SELECT * FROM post_tbl WHERE status='1' AND cat_id='$cat' ORDER BY date DESC LIMIT 5 OFFSET $n ");
        $sql->execute();
        return$sql->fetchAll();
    }
    public function insertComment($data,$url){
    $tim=time();
        $sql=$this->pdo->prepare("INSERT INTO comment_tbl(`name`,`email`,`post_id`,`datee`,`text`) VALUES ('$data[name]','$data[email]','$url','$tim','$data[text]')");
        if($sql->execute()){
            return [true,'<p style="color: green">با موفقیت نظر شما ارسال شد.بعد تائید مدیریت نظر شما نمایش داده میشود</p>'];
        }else{
            return [false,'<p style="color: red">خطا در ارسال نظر</p>'];
        }
    }
    public function selectComment($url){
    $sql=$this->pdo->prepare("SELECT * FROM comment_tbl WHERE post_id='$url'AND status='1' ORDER BY datee DESC ");
    $sql->execute();
    return $sql->fetchAll();
    }
    public function selectCat_id($url){
    $sql=$this->pdo->prepare("SELECT * FROM cat_tbl WHERE url='$url'");
    $sql->execute();
    return $sql->fetch();
    }
}
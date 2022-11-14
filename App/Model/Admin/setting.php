<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/05/2019
 * Time: 05:28 PM
 */
namespace App\Model\Admin;
use App\Model\PublicModel;

class setting extends \Core\Model
{
    public static $site;
public function show(){
    $sql=$this->pdo->prepare("select * FROM setting_tbl");
    $sql->execute();
    $result=$sql->fetch();
    self::$site=['name'=>$result['name'],'home'=>$result['home_page']];
    return $result;
}
public function comment(){

    $sql=$this->pdo->prepare("SELECT * FROM comment_tbl WHERE status='1' ORDER BY id ASC LIMIT 2");
    $sql->execute();
    foreach ($sql->fetchAll() as $item){
        $x=$item['post_id'];
        $sql2=$this->pdo->prepare("SELECT * FROM post_tbl WHERE url='$x'");
        $sql2->execute();
        $fet=$sql2->fetch();
        $comment[]=['comment'=>$item,'post'=>$fet];

    } if($comment){
        return $comment;

    }
}
public function in($i){
    $up=new PublicModel();
    if($_FILES[$i]['size']){
$to=$up->uploaderImage('icons',$i);
    }else{
$to=$this->show()['logo'];
    }
    $sql=$this->pdo->prepare("UPDATE  setting_tbl SET logo='$to'");
    if( $sql->execute()){
        return true;
    }
}
}
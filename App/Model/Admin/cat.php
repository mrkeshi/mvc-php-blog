<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/01/2019
 * Time: 03:11 AM
 */

namespace App\Model\Admin;


use Core\Model;

class cat extends Model
{
public function selectCat(){
    $sql=$this->pdo->prepare("SELECT * FROM cat_tbl");
    $sql->execute();
    $result=$sql->fetchAll();
    return $result;
}
public function selectSingleCat($id){
    $sql=$this->pdo->prepare("SELECT * FROM cat_tbl WHERE id='$id'");
    $sql->execute();
    $result=$sql->fetch();
    return $result;
}
    public function countCat($id){
        $sql=$this->pdo->prepare("SELECT * FROM post_tbl WHERE cat_id='$id'");
        $sql->execute();
        $result=$sql->fetchAll();
        return count($result);
    }
    public function delpost($id){
$sql=$this->pdo->prepare("DELETE FROM post_tbl WHERE cat_id='$id'");
$sql->execute();
    }
}
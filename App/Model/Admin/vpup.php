<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/11/2019
 * Time: 02:36 AM
 */

namespace App\Model\Admin;


use Core\Model;

class vpup extends Model
{
public function show($page){
    $sql=$this->pdo->prepare("SELECT * FROM textv_tbl WHERE page='$page'");
    $sql->execute();
    return $sql->fetch();
}
public function updateV($status,$where){
    $sql=$this->pdo->prepare("UPDATE  textv_tbl SET status='$status' WHERE page='$where'");
    $sql->execute();
}
}
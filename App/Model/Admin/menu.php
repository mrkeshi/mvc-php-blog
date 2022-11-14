<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/01/2019
 * Time: 12:30 AM
 */

namespace App\Model\Admin;


use Core\Model;

class menu extends Model
{
public function selectParent(){
$sql=$this->pdo->prepare("SELECT * FROM menu_tbl WHERE child_id='0'");
$sql->execute();
$result=$sql->fetchAll();
return $result;
}
public function showMenu(){
    $sql=$this->pdo->prepare("SELECT * FROM menu_tbl ORDER BY sort ASC ");
    $sql->execute();
    $result=$sql->fetchAll();
    return $result;
}
public function subMenu($id){
    $sql=$this->pdo->prepare("SELECT * FROM menu_tbl WHERE child_id='$id'");
    $sql->execute();
    $result=$sql->fetchAll();
    return $result;
}
public function showParent($id){
    $sql=$this->pdo->prepare("SELECT * FROM menu_tbl WHERE id='$id'");
    $sql->execute();
    $result=$sql->fetch();
    return $result;
}
public function showMenuInSite(){
    $sql=$this->pdo->prepare("SELECT * FROM menu_tbl WHERE status='1' AND child_id='0' ORDER BY sort ASC ");
    $sql->execute();
    return $sql->fetchAll();
}
}
<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/11/2019
 * Time: 07:55 PM
 */

namespace App\Model\defult;


use Core\Model;

class work extends Model
{
public function showCat(){
    $sql=$this->pdo->prepare("SELECT * FROM workcat_tbl");
    $sql->execute();
    return $sql->fetchAll();
}
public function countWork($id){
    $sql=$this->pdo->prepare("SELECT * FROM work_tbl WHERE cat_id='$id'");
    $sql->execute();
    return $sql->fetchAll();
}
public function ShowSingle($url){
    $sql=$this->pdo->prepare("SELECT * FROM work_tbl WHERE url='$url'");
    $sql->execute();
    return $sql->fetch();
}
    public function catS($id){
        $sql=$this->pdo->prepare("SELECT * FROM workcat_tbl WHERE id='$id'");
        $sql->execute();
        return $sql->fetch();
    }
    public function likee($url){

    $sql=$this->pdo->prepare("SELECT * FROM work_tbl WHERE url='$url'");
    $sql->execute();
    $result=$sql->fetch()['cat_id'];
        $sql2=$this->pdo->prepare("SELECT * FROM work_tbl WHERE cat_id='$result' LIMIT 4");
        $sql2->execute();
        $row=$sql2->fetchAll();
        $con=0;

        foreach ($row as $item){
            if($item['url']==$url){
            }else{


                $rambo[]=$item;
                $con++;
            }
        }
        if(isset($rambo)){
            return $rambo;

        }else{
            return false;
        }
    }
    public function worknext($id){
    $sql1=$this->pdo->prepare("SELECT * FROM work_tbl");
    $sql1->execute();
    $count=count($sql1->fetchAll());
for ($i=0;$i<$count;$i++){
    $id+=1;
    $sql=$this->pdo->prepare("SELECT * FROM work_tbl WHERE id='$id'");
    if($sql->execute()){
        return $sql->fetch()['url'];
    }

}
        return false;

}
    public function workper($id){
        $sql1=$this->pdo->prepare("SELECT * FROM work_tbl");
        $sql1->execute();
        $id1=$id;
        $count=count($sql1->fetchAll());
        for ($i=0;$i<$count;$i++){
            $id1-=1;
            $sql=$this->pdo->prepare("SELECT * FROM work_tbl WHERE id='$id1'");
            if($sql->execute()){
                return $sql->fetch()['url'];
            }

        }
return false;
    }
}
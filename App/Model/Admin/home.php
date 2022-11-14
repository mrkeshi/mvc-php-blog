<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/10/2019
 * Time: 11:03 PM
 */

namespace App\Model\Admin;


use App\Model\PublicModel;
use Core\Model;
use Core\view;

class home extends Model
{
public function selectBoxs($tbl){
$sql=$this->pdo->prepare("SELECT * FROM $tbl");
$sql->execute();
return $sql->fetch();
}
public function updateBoxs($data,$img,$tbl){
    $n=new PublicModel();
    if($_FILES[$img.'1']['size']){
        $img1=$n->uploaderImage('icons','img1');
    }else{
        $img1=$this->selectBoxs($tbl)['img1'];
    }
    if($_FILES[$img.'2']['size']){
        $img2=$n->uploaderImage('icons','img2');
    }else{
        $img2=$this->selectBoxs($tbl)['img2'];
    }
    if($_FILES[$img.'3']['size']){
        $img3=$n->uploaderImage('icons','img3');
    }else{
        $img3=$this->selectBoxs($tbl)['img3'];
    }
    $sql=$this->pdo->prepare("UPDATE `$tbl` SET `img1`='$img1',`img2`='$img2',`img3`='$img3',`text1`='$data[text1]',`text2`='$data[text2]',`text3`='$data[text3]',`titr1`='$data[titr1]',`titr2`='$data[titr2]',`titr3`='$data[titr3]'");
if($sql->execute()){
return [true,"<p class='text-success'>با موفقیت ویرایش شد</p>"];
}else{
    return [false,'<p class="text-danger">خطا در امر ویرایش</p>'];
}
}
public function selectSection(){
    $sql=$this->pdo->prepare("SELECT * FROM section_tbl");
    $sql->execute();
    return $sql->fetch();
}
    public function slider(){
        $sql=$this->pdo->prepare("SELECT * FROM slider_tbl");
        $sql->execute();
        return $sql->fetch();
    }
    public function chapter($id){
        $sql=$this->pdo->prepare("SELECT * FROM taber_tbl WHERE id='$id' ");
        $sql->execute();
        return $sql->fetch();
    }
    public function updateStatus($qu,$n){
        $sql=$this->pdo->prepare("UPDATE `{$qu}` SET status='$n' WHERE id='1'");
        $sql->execute();
    }
    public function selectTbl($tbl,$id='1'){
        $sql=$this->pdo->prepare("SELECT * FROM `$tbl` WHERE id='$id'");
        $sql->execute();
        return $sql->fetch();
    }

}
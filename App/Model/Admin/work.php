<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/05/2019
 * Time: 11:38 PM
 */

namespace App\Model\Admin;


use App\Model\PublicModel;
use Core\Model;

class work extends Model
{

    public function add($data, $indes)
    {
        $obj = new PublicModel();
        //imgages
        $img = $obj->uploaderImage('works', $indes);
        $img1 = $obj->uploaderImage('works', $indes . '1');
        $img2 = $obj->uploaderImage('works', $indes . '2');
        $img3 = $obj->uploaderImage('works', $indes . '3');
        $img4 = $obj->uploaderImage('works', $indes . '4');
        //endimgages
        $sql = $this->pdo->prepare("INSERT INTO `work_tbl`( `title`, `url`, `text`, `status`, `map`, `star`, `buy`, `dcrate`, `img1`, `img2`, `img3`, `img4`, `dt1`, `dt2`, `dt3`, `dt4`, `cat_id`,`img`) VALUES ('$data[title]','$data[url]','$data[text]','$data[status]','$data[map]','$data[star]','$data[buy]','$data[date]','$img1','$img2','$img3','$img4','$data[dt1]','$data[dt2]','$data[dt3]','$data[dt4]','$data[cat_id]','$img')");
    if($sql->execute()){
        return [true,'<p class="text-success">با موفقیت اضافه شد</p>'];
    }else{
        return [false,'<p class="text-danger">خطا در ساخت</p>'];

    }
    }

    public function selectCat()
    {
        $sql = $this->pdo->prepare("SELECT * FROM workcat_tbl");
        $sql->execute();
        return $sql->fetchAll();
    }

    public function selectCatsingle($id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM workcat_tbl WHERE id='$id'");
        $sql->execute();
        return $sql->fetch();
    }
    public function selectWork(){
        $sql = $this->pdo->prepare("SELECT * FROM work_tbl ORDER BY id ASC ");
        $sql->execute();
        return $sql->fetchAll();
    }
    public function selecSeingletWork($url){
        $sql = $this->pdo->prepare("SELECT * FROM work_tbl WHERE id='$url'");
        $sql->execute();
        return $sql->fetch();
    }
    public function updateWork($id,$data,$file='file'){
        $f = new PublicModel();
        if ($_FILES[$file]['size']) {
            $img=$f->uploaderImage('works', 'file');
        }else{
            $img = $this->selecSeingletWork($id)['img'];

        }
        if ($_FILES[$file.'1']['size']) {
            $img1=$f->uploaderImage('works', 'file'.'1');
        }else{
            $img1=$this->selecSeingletWork($id)['img1'];

        }
        if ($_FILES[$file.'2']['size']) {
            $img2=$f->uploaderImage('works', 'file'.'2');
        }else{
            $img2=$this->selecSeingletWork($id)['img2'];

        }
        if ($_FILES[$file.'3']['size']) {
            $img3=$f->uploaderImage('works', 'file'.'3');
        }else{
            $img3=$this->selecSeingletWork($id)['img3'];

        }
        if ($_FILES[$file.'4']['size']) {
            $img4=$f->uploaderImage('works', 'file'.'4');
        }else{
            $img4=$this->selecSeingletWork($id)['img4'];
        }
    $sql=$this->pdo->prepare("UPDATE `work_tbl` SET `title`='$data[title]',`url`='$data[url]',`text`='$data[text]',`status`='$data[status]',`map`='$data[map]',`star`='$data[star]',`buy`='$data[buy]',`dcrate`='$data[date]',`img1`='$img1',`img2`='$img2',`img3`='$img3',`img4`='$img4',`dt1`='$data[dt1]',`dt2`='$data[dt2]',`dt3`='$data[dt3]',`dt4`='$data[dt4]',`cat_id`='$data[cat_id]',`img`='$img' WHERE id='$id'");
        if($sql->execute()){
            return [true,"<p class='text-success'>با موفقیت ویرایش شد</p>"];
        }else{
            return [false,"<p class='text-danger'>خطا در ویرایش لطفا مجددا امتحان کنیذ</p>"];

        }
    }
    public function delwork($id){
$sql=$this->pdo->prepare("DELETE FROM work_tbl WHERE cat_id='$id'");
$sql->execute();
    }
}
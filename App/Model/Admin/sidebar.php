<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/09/2019
 * Time: 02:16 AM
 */

namespace App\Model\Admin;


use App\Model\PublicModel;
use Core\Model;

class sidebar extends Model
{
    public function updateText($data)
    {
        $sql = $this->pdo->prepare("UPDATE vighettext_tbl SET `title`='$data[title]',`text`='$data[text]' WHERE id='1'");
        if ($sql->execute()) {
            return [true, '<p class="text-success">با موفقیت ویرایش شد</p>'];
        } else {
            return [false, '<p class="text-danger">خطا در ویرایش</p>'];

        }
    }

    public function selectAds()
    {
        $sql = $this->pdo->prepare("SELECT * FROM ads WHERE id='1'");
        $sql->execute();
        return $sql->fetch();
    }

    public function selectText()
    {
        $sql = $this->pdo->prepare("SELECT * FROM vighettext_tbl WHERE id='1'");
        $sql->execute();
        return $sql->fetch();
    }

    public function insertAds($data, $indes = 'file')
    {
        $obj = new PublicModel();
        if ($_FILES[$indes . '1']['size']) {
            $img1 = $obj->uploaderImage('ads', $indes . '1');
        } else {
            $img1 = $this->selectAds()['img1'];
        }
        if ($_FILES[$indes . '3']['size']) {
            $img3 = $obj->uploaderImage('ads', $indes . '3');
        } else {
            $img3 = $this->selectAds()['img3'];
        }
        if ($_FILES[$indes . '2']['size']) {
            $img2 = $obj->uploaderImage('ads', $indes . '2');
        } else {
            $img2 = $this->selectAds()['img2'];
        }
        $sql = $this->pdo->prepare("UPDATE ads SET `link1`='$data[link1]',`link2`='$data[link2]',link3='$data[link3]',`img1`='$img1',`img2`='$img2',`img3`='$img3'");
        if ($sql->execute()) {
            return [true, '<p class="text-success">با موفقیت ویرایش شد</p>'];
        } else {
            return [false, '<p class="text-danger">خطا در ویرایش</p>'];

        }
    }

    public function selectTab()
    {
        $sql = $this->pdo->prepare("SELECT * FROM `setting tab` WHERE id='1'");
        $sql->execute();
        return $sql->fetch();
    }
    public function updateStatus($qu,$n){
        $sql=$this->pdo->prepare("UPDATE `{$qu}` SET status='$n' WHERE id='1'");
        $sql->execute();
    }
}
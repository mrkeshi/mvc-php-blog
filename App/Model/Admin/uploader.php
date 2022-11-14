<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/04/2019
 * Time: 05:08 PM
 */

namespace App\Model\Admin;

use App\Model\PublicModel;
use Core\Model;

class uploader extends Model
{
    public function upload($data, $file)
    {
        $obj = new PublicModel();
        if (isset($_SESSION['username'])) {
            $writer = base64_decode($_SESSION['username']);
        } else {
            $writer = base64_decode($_SESSION['user']);
        }
        $img = $obj->uploaderImage('media', $file);
        $format=explode('.',$img);
        $format=end($format);
        $sql=$this->pdo->prepare("INSERT INTO up_tbl(title,description,link,writer,format) VALUES ('$data[title]','$data[description]','$img','$writer','$format')");
    if($sql->execute()){
        return true;
    }else{
        return false;
    }
    }
    public function deimg($id){
        $sql=$this->pdo->prepare("DELETE FROM up_tbl WHERE id='$id'");
        if($sql->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function showFiles(){
        $sql=$this->pdo->prepare("SELECT * FROM up_tbl ORDER BY id DESC ");
       if($sql->execute()){
           return $sql->fetchAll();

       }else{
           return false;
       }
    }
}
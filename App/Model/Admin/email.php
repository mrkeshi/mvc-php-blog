<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/02/2019
 * Time: 12:07 PM
 */

namespace App\Model\Admin;


use App\Model\PublicModel;
use Core\Model;
class email extends Model

{
    public function ali($date){

            $sql3=$this->pdo->prepare("SELECT * FROM contact_tbl");
            $sql3->execute();
            $result=$sql3->fetchAll();
            foreach ($result as $item){
                if($item['timee']==$date){
                    return false;
                }
            }
            return true;

    }
    public $n=5;
public $count=5;
    public function insertEmail($data){
        $time=time();
        $sql=$this->pdo->prepare("INSERT INTO `contact_tbl`(`name`, `email`, `subject`, `text`, `timee`) VALUES  ('$data[name]','$data[email]','$data[subject]','$data[text]','$time')");
       if ($sql->execute()){
           return [true,'<h2 style="color: green">با موفقیت ارسال شد</h2>'];
       }else{
           return [false,'<h2 style="color: red">خطا در ارسال پیغام</h2>'];
       }
    }
    public function countEmail(){
        $sql=$this->pdo->prepare("SELECT * FROM contact_tbl WHERE status='0'");
        $sql->execute();
        $result=count($sql->fetchAll());
        return $result;
    }
    public function submit($subject,$text,$email){


        if(mail($email,$subject,$text)){
            $tim=time();
            $sql=$this->pdo->prepare("INSERT INTO contact_tbl(`subject`,`text`,`email`,`ty`,`status`,`timee`)VALUES ('$subject','$text','$email','1','1','$tim')");
            $sql->execute();
            return true;
        }else{
            return false;
        }

    }
    public function showEmail(){
        $sql=$this->pdo->prepare("SELECT * FROM contact_tbl WHERE ty='0' ORDER BY timee DESC  ");
        $sql->execute();
        $result=$sql->fetchAll();
        return $result;
    }
    public function showEmail2(){
        $sql=$this->pdo->prepare("SELECT * FROM contact_tbl WHERE ty='1' ORDER BY timee DESC  ");
        $sql->execute();
        $result=$sql->fetchAll();
        return $result;
    }
    public function edaitStatusEmail($dataid){
        $id=explode('f',$dataid)[1];
        $sql=$this->pdo->prepare("UPDATE contact_tbl SET status='1' WHERE id='$id'");
        if($sql->execute()){
            return true;

        }else{
            return false;
        }


    }
    public function deletEmail($obj){
        foreach ($obj as $item){
            $id=explode('f',$item)[1];
            $sql=$this->pdo->prepare("DELETE FROM contact_tbl WHERE id='$id'");
            if($sql->execute()){

            }else{
                return false;
            }
        }
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/02/2019
 * Time: 12:09 PM
 */

namespace App\Controller\Admin;


use App\Model\PublicModel;
use App\Model\sssion;
use Core\controller;
use Core\view;

class email extends controller
{
    public function __construct()
    {
        $obj=new sssion();
        $obj->cheeck();

    }

    public function email(){
    $obj=new \App\Model\Admin\email();

    view::rander('admin/email',[
        'title'=>'ایمیل های دریافتی',
        'email'=>$obj,
        'count'=>$obj->countEmail(),
        'showEmail'=>$obj->showEmail()
    ]);
}
    public function email2(){
        $obj=new \App\Model\Admin\email();
        view::rander('admin/emailsubmit',[
            'title'=>'ایمیل های ارسالی',
            'email'=>$obj,
            'count'=>$obj->countEmail(),
            'showEmail'=>$obj->showEmail2()
        ]);
    }
public function submit(){
        $email=new \App\Model\Admin\email();
        if(isset($_POST['text'])){
            if($email->submit($_POST['subject'],$_POST['text'],$_POST['email'])==true){
                echo true;
            }else{
                echo  false;
            }
        }
}
public function ajax(){
    $email=new \App\Model\Admin\email();
    if(isset($_POST['showid'])){
        if($email->edaitStatusEmail($_POST['showid'])){
            echo 'true';
        }
    }
}


public function delajax(){
$email=new \App\Model\Admin\email();
if($email->deletEmail($_POST['ali'])){
}
}
}
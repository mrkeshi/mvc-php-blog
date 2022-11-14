<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/04/2019
 * Time: 04:05 PM
 */

namespace App\Controller\Admin;


use App\Model\PublicModel;
use App\Model\sssion;
use Core\controller;
use Core\Model;
use Core\view;

class uploader extends controller
{
public function __construct()
{
    $obj=new sssion();
    $obj->cheeck();
}

    public function creat(){

    view::rander('admin/uploader',[
        'title'=>'آپلود فایل',
        'error'=>Null
    ]);
}
public function upload(){
    $obj=new \App\Model\Admin\uploader();
if($obj->upload($_POST['form'],'file')){
echo  true;
}else{
    echo false;
    }
}
public function gallery(){
    $up=new \App\Model\Admin\uploader();
view::rander('admin/gallery',[
'title'=>'گالری',
  'value'=>$up->showFiles(),
]);
}
public function delimg(){
    $up=new \App\Model\Admin\uploader();
if(isset($_POST['id'])){
    if($up->deimg($_POST['id'])){
echo true;
    }else{
        echo false;
    }
}

}
public function files(){
    $obj=new \App\Model\Admin\uploader();
    if (isset($_GET['del'])) {
        $n = htmlspecialchars($_GET['del']);
        $obj->delete($n, 'up_tbl');
    }
    $obj=new \App\Model\Admin\uploader();
    $public=new PublicModel();
    view::rander('admin/listfile',[
        'title'=>' لیست فایل ها',
        'error'=>Null,
        'information'=>$obj,
        'writer'=>$public
    ]);
}
}

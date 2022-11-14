<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/11/2019
 * Time: 02:19 AM
 */

namespace App\controller\admin;


use App\Model\Admin\vpup;
use Core\controller;
use Core\view;

class vpub extends controller
{
    public function status(){
        $vp=new vpup();
        if(isset($_POST['status'])){
        $st=$_POST['status'];
        $sh=$_POST['value'];
        $vp->updateV($st,$sh);
        }
    }
public function listitem(){
    $vpub=new vpup();

    view::rander('admin/showv-pub',[
'title'=>'نمایش ویجت  عمومی',
        'blog'=>$vpub->show('blog')['status'],
        'home'=>$vpub->show('home')['status'],
        'contact'=>$vpub->show('contact')['status'],
        'page'=>$vpub->show('page')['status'],
        'work'=>$vpub->show('work')['status'],
    ]);
}
public function edait($page){
$vpub=new vpup();
$id=$vpub->show($page)['id'];
if(isset($_POST['btn'])){
    $this->error=$vpub->update($_POST['from'],$id,'textv_tbl');
}

view::rander('admin/vedait',[
    'title'=>'ویرایش ویچت',
    'value'=>$vpub->show($page),
    'error'=>$this->error,


]);
}
}
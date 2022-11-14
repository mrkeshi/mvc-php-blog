<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/09/2019
 * Time: 02:16 AM
 */

namespace App\Controller\Admin;


use Core\controller;
use Core\view;

class sidebar extends controller
{
    public $error=null;
public function lisst(){
    $sidbar=new \App\Model\Admin\sidebar();
    view::rander('admin/sidebar',[
'title'=>'تنظیمات سایدبار',
        'tab_st'=>$sidbar->selectTab()['status'],
        'ads_st'=>$sidbar->selectAds()['status'],
        'text_st'=>$sidbar->selectText()['status'],
        ]);
}
public function text(){
    $sidebar=new \App\Model\Admin\sidebar();
    if (isset($_POST['btn'])){
        $this->error=$sidebar->updateText($_POST['from'])[1];
    }
    view::rander('admin/addtext',[
        'title'=>'ویرایش ویجت متنی',
        'error'=>$this->error,
        'value'=>$sidebar->selectText()
    ]);
}
public function adsedait(){
    $sidebar=new \App\Model\Admin\sidebar();

    if(isset($_POST['btn'])){
$this->error=$sidebar->insertAds($_POST['from'],'file')[1];
    }
    view::rander('admin/ads',[
        'title'=>'مدیریت تبلیغات',
       'error'=>$this->error,
        'value'=>$sidebar->selectAds()
    ]);
}
public function tab(){
    $sidebar=new \App\Model\Admin\sidebar();
    if(isset($_POST['btn'])){
        $this->error=$sidebar->update($_POST['from'],'1','setting tab');
    }
    view::rander('admin/tab',[
        'title'=>'مدیریت تب ها',
        'error'=>$this->error,
        'value'=>$sidebar->selectTab()
    ]);
}
public function updateStatus(){
    $sidbar=new \App\Model\Admin\sidebar();
if(isset($_POST['value'])){
$qu=$_POST['value'];
$status=$_POST['status'];
$sidbar->updateStatus($qu,$status);
}
}

}
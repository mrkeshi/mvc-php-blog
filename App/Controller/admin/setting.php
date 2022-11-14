<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/05/2019
 * Time: 05:28 PM
 */

namespace App\Controller\Admin;


use App\Model\sssion;
use Core\Controller;
use Core\view;

class setting extends Controller
{
public function __construct()
{
    $obj=new sssion();
    $obj->cheeck();
}

    public function publicSetting(){
    $setting=new \App\Model\Admin\setting();
$n=null;
    if(isset($_POST['btn'])){
        if($setting->in('logo')){
            $n=$setting->update($_POST['fom'],'1','setting_tbl')[1];
        }

    }
        view::rander('admin/setting',[
        'show'=>$setting->show(),
            'error'=>$n
]);
}
}
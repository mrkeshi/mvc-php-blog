<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 07/28/2019
 * Time: 06:18 PM
 */

namespace App\Controller\defult;


use App\Model\Admin\cat;
use App\Model\Admin\home;
use App\Model\Admin\menu;
use App\Model\Admin\visit;
use App\Model\defult\homeresult;
use Core\bootstrap;
use Core\view;

class result
{
    public function __construct()
    {
        $item=new visit();
        $item->item();
        $item->visitor();

    }

    public function index(){
    $menu=new menu();
$item=new \App\Model\defult\result();
$cat=new cat();
    view::rander('defult/index',[
    'title'=>Null,
    'menu'=>$menu,
    'slider'=>$item->slider(),
     'box'=>$item->box_tbl(),
        'section'=>$item->section(),
        'chapter1'=>$item->chapter('1'),
        'chapter2'=>$item->chapter('2'),
        'obj'=>$item,
        'pubv'=>$item->pubv('home')

]);

}
}
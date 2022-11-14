<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/11/2019
 * Time: 07:55 PM
 */

namespace App\Controller\defult;


use App\Model\Admin\menu;
use App\Model\Admin\visit;
use App\Model\Admin\vpup;
use Core\controller;
use Core\view;

class work extends controller
{
    public function __construct()
    {
    $item=new visit();
    $item->item();
    $item->visitor();

    }

    public function showPost(){
    $menu=new menu();
    $work=new \App\Model\defult\work();
    $v=new vpup();
    $vighet=$v->show('work');
    view::rander('defult/portfolio',[
        'title'=>'نمونه کارها',
        'menu'=>$menu,
        'cat'=>$work->showCat(),
        'obj'=>$work,
        'vighet'=>$vighet
    ]);
}
public function showSinglePost($url){
    $menu=new menu();
    $work=new \App\Model\defult\work();
view::rander('defult/portfolio_item',[
    'title'=>$work->showSingle($url)['title'],
    'menu'=>$menu,
    'value'=>$work->showSingle($url),
    'obj'=>$work,
    'like'=>$work->likee($url),

]);
}
}
<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/10/2019
 * Time: 11:04 PM
 */

namespace App\Controller\Admin;


use Core\controller;
use Core\view;
class home extends controller
{
    public function listItem(){
        $home=new \App\Model\Admin\home();
        view::rander('admin/home',[
            'title'=>'مدیریت ویجت های صفحه ی اصلی',
            'chapter1'=>$home->selectTbl('taber_tbl')['status'],
            'chapter2'=>$home->selectTbl('taber_tbl','2')['status'],
            'slider'=>$home->selectTbl('slider_tbl')['status'],
            'section'=>$home->selectTbl('section_tbl')['status'],
            'box'=>$home->selectTbl('box_tbl')['status'],
        ]);
    }
    public function boxs(){
        $home=new \App\Model\Admin\home();
        if(isset($_POST['btn'])){
            $this->error=$home->updateBoxs($_POST['from'],'img','box_tbl');
        }
        view::rander('admin/boxs',[
            'title'=>'پروباکس',
            'error'=>$this->error,
            'value'=>$home->selectBoxs('box_tbl')
        ]);
    }
    public function section(){
        $home=new \App\Model\Admin\home();
        if(isset($_POST['btn'])){
          $this->error=$home->update($_POST['from'],'1','section_tbl');
        };
        view::rander("admin/section",[
            'title'=>'سکشن صفحه ی اصلی',
            'error'=>$this->error,
            'value'=>$home->selectSection()
        ]);
    }
    public function slider(){
        $home=new \App\Model\Admin\home();
        if(isset($_POST['btn'])){
            $this->error=$home->updateBoxs($_POST['from'],'img','slider_tbl');
        }
        view::rander('admin/slider',[
            'title'=>'اسلایدر',
            'value'=>$home->slider(),
            'error'=>$this->error,

        ]);
    }
    public function chapter($id){
        $home=new \App\Model\Admin\home();
    if(isset($_POST['btn'])){
        $this->error=$home->update($_POST['from'],$id,'taber_tbl');
    }
        view::rander('admin/chapter',[
    'title'=>'چاپتر تب',
    'value'=>$home->chapter($id),
     'error'=>$this->error,


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
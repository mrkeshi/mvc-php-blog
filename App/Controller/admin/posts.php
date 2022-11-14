<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/02/2019
 * Time: 11:56 PM
 */

namespace App\Controller\Admin;


use App\Model\sssion;
use Core\controller;
use Core\view;

class posts extends controller
{
    public function __construct()
    {
        $obj=new sssion();
        $obj->cheeck();
    }

    public  $mess=null;
    public function addPost()
    {
        $error = Null;
        $obj = new \App\Model\Admin\cat();
        $post = new \App\Model\Admin\posts();
        if (isset($_POST['btn'])) {
            $error = $post->insertPost($_POST['form'], 'file')[1];
        }
        view::rander('admin/addpost', [
            'title' => 'افزودن پست جدید',
            'cat' => $obj->selectCat(),
            'error' => $error
        ]);
    }

    public function listPost()
    {
        $cat = new \App\Model\Admin\cat();
        $post = new \App\Model\Admin\posts();
        if (isset($_GET['del'])) {
            $n = htmlspecialchars($_GET['del']);
            $post->Delcom($_GET['del']);
            $post->delete($n, 'post_tbl');
        }
        view::rander('admin/listpost', [
            'title' => 'مشاهده ی پست ها',
            'cat' => $cat,
            'information' => $post->selectPost(),

        ]);
    }
    public function stacomment(){
        $post=new \App\Model\Admin\posts();

        if(isset($_POST['status'])){
            $post->stacomment($_POST['status'],$_POST['id']);
        }
    }
public function comment(){
    $post = new \App\Model\Admin\posts();
    if (isset($_GET['del'])) {
        $n = htmlspecialchars($_GET['del']);
        $post->delete($n, 'comment_tbl');
    }
    view::rander('admin/listcomment', [
        'title' => 'مشاهده ی نظرات ',
        'post'=>$post,
        'information' => $post->selectComment(),

    ]);
}
    public function showPost($id)
    {
        $obj = new \App\Model\Admin\posts();
        view::rander('admin/showpost', [
            'title' => ' مشاهده ی پست ' . $obj->selectSinglePost($id)['title'],
            'writer' => $obj,
            'information' => $obj->selectSinglePost($id),
        ]);
    }
    public function edaitPost($id)
    {
        $obj2 = new \App\Model\Admin\cat();
        $obj = new \App\Model\Admin\posts();
        if (isset($_POST['btn'])) {
            $this->mess=$obj->updatePost($_POST['form'],$id,'file');
        }
        view::rander('admin/edaitPost', [
            'title' => ' ویرایش  پست '.$obj->selectSinglePost($id)['title'],
            'error' => $this->mess,
            'information' => $obj->selectSinglePost($id),
            'cat' => $obj2->selectCat(),
        ]);
    }
}
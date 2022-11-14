<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/06/2019
 * Time: 05:48 PM
 */

namespace App\Controller\defult;


use App\Model\Admin\menu;
use App\Model\Admin\visit;
use Core\controller;
use Core\view;
use mysql_xdevapi\Exception;

class blog extends controller
{
    public function __construct()
    {
$item=new visit();
$item->item();
$item->visitor();
    }

    public $mess = null;

    public function showSinglePost($url)
    {
        $post = new \App\Model\defult\blog();
        if (isset($_POST['btn'])) {
            $this->mess = $post->insertComment($_POST['frm'], $url)[1];
        }
if(!$post->showSinglePost($url)){
    throw new \Exception('NOT FUND POST');
}
        view::rander('defult/single_post', [
            'title' => $post->showSinglePost($url)['title'],
            'menu' => new menu(),
            'value' => $post->showSinglePost($url),
            'mess' => $this->mess,
            'comment' => $post->selectComment($url),
        ]);
    }

    public function showPost($n = 0)
    {
        $item=new \App\Model\defult\result();

        $post = new \App\Model\defult\blog();
        view::rander('defult/blog', [
            'title' => 'لیست مطالب',
            'menu' => new menu(),
            'post' => $post->showPost($n),
            'com' => $post,
            'count' => $post->countPost(),
            'header'=>Null,
            'pager'=>null,
            'pubv'=>$item->pubv('blog')
        ]);
    }
    public function showCat($cat,$n=0){
        $item=new \App\Model\defult\result();

        $post = new \App\Model\defult\blog();
        $cat_id=$post->selectCat_id($cat)['id'];
        $catTitle=$post->selectCat_id($cat)['title'];
        $n1=$cat;
        view::rander('defult/blog', [
            'title' =>$catTitle,
            'menu' => new menu(),
            'post' => $post->showCat($n,$cat_id),
            'com' => $post,
            'count' => $post->countPostcat($cat_id),
            'header'=>true,
            'pager'=>'c'.$n1,
            'pubv'=>$item->pubv('home')
        ]);
    }
}
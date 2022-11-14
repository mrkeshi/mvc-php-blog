<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 07/31/2019
 * Time: 10:44 PM
 */

namespace App\Controller\Admin;


use App\Model\sssion;
use Core\controller;
use Core\view;

class Menu extends controller
{
    public $mess = null;

    public function addMenu()
    {
        $session = new sssion();
        $session->cheeck();
        $cat=new \App\Model\Admin\cat();
        $page=new \App\Model\Admin\page();
        $error = null;
        $obj = new \App\Model\Admin\menu();
        if (isset($_POST['btn'])) {
            $this->mess = $obj->insert($_POST['form'], 'menu_tbl');
        }

        $argumeny = [
            'title' => 'افزودن منو',
            'parent' => $obj->selectParent(),
            'error' => $this->mess,
            'cat'=>$cat->selectCat(),
            'page'=>$page->selectPage()
        ];
        view::rander('admin/addmenu', $argumeny);

    }

    public function listMenu()
    {
        $session = new sssion();
        $session->cheeck();
        $obj = new \App\Model\Admin\menu();

        if (isset($_GET['del'])) {
            $n = htmlspecialchars($_GET['del']);
           $obj->delete($n, 'menu_tbl');
        }
        view::rander('admin/listmenu', [
            'title' => 'مشاهده ی منو  ها ',
            'error' => $this->mess,
            'information' => $obj,

        ]);
    }

    public function edaitMenu($id)
    {
        $session = new sssion();
        $session->cheeck();
        $obj = new \App\Model\Admin\menu();
        if (isset($_POST['btn'])) {
            $this->mess = $obj->update($_POST['form'], $id, 'menu_tbl');
        }      $cat=new \App\Model\Admin\cat();
        $page=new \App\Model\Admin\page();
        view::rander('admin/edaitmenu', [
            'title' => 'ویرایش منو ها',
            'show' => $obj->showParent($id),
            'parent' => $obj->selectParent(),
            'error' => $this->mess,
            'cat'=>$cat->selectCat(),
            'page'=>$page->selectPage()

        ]);
    }
}
<?php


namespace App\Controller\Admin;
use App\Model\sssion;
use Core\controller;
use Core\view;

class cat extends controller
{
    public $mess = null;

    public function addCat()
    {
        $ses=new sssion();
        $ses->cheeck();
        $obj = new \App\Model\Admin\cat();
        if (isset($_POST['btn'])) {
            $this->mess = $obj->insert($_POST['from'], 'cat_tbl');
        }
        view::rander('admin/addcat', [
            'title' => 'افزودن دسته بندی',
            'error' => $this->mess
        ]);
    }

    public function listCat()
    {
        $ses=new sssion();
        $ses->cheeck();
        $obj = new \App\Model\Admin\cat();
        if (isset($_GET['del'])) {
            $n = htmlspecialchars($_GET['del']);
            $obj->delpost($n);
            $obj->delete($n, 'cat_tbl');
        }
        view::rander('admin/listcat', [
            'title' => 'نمایش دسته ها',
            'error' => $this->mess,
            'information' => $obj->selectCat(),
            'conut'=>$obj
        ]);
    }

    public function edaitCat($id)

    {
        $ses=new sssion();
        $ses->cheeck();
        $obj = new \App\Model\Admin\cat();
        if (isset($_POST['btn'])) {
        $this->mess=$obj->update($_POST['from'],$id,'cat_tbl');
        }
        view::rander('admin/edaitcat', [
            'title' => 'ویرایش یک دسته',
            'error' => $this->mess,
            'information' => $obj->selectSingleCat($id),

        ]);
    }
}
<?php


namespace App\Controller\Admin;
use App\Model\sssion;
use Core\controller;
use Core\view;
use mysql_xdevapi\Session;

class page extends controller
{
    public $mess = null;

    public function addPage()
    {
        $ses=new sssion();
        $ses->cheeck();
        $obj = new \App\Model\Admin\Page();
        if (isset($_POST['btn'])) {
            $this->mess = $obj->insertPage($_POST['from']);
        }
        view::rander('admin/addpage', [
            'title'=>'افزودن صفحه',
            'error'=> $this->mess
        ]);
    }

    public function listPage()
    {
        $ses=new sssion();
        $ses->cheeck();
        $obj = new \App\Model\Admin\page();
        if (isset($_GET['del'])) {
            $n = htmlspecialchars($_GET['del']);
            $obj->delete($n, 'Page_tbl');
        }
        view::rander('admin/listpage', [
            'title' => 'نمایش صفحه ها',
            'error' => $this->mess,
            'information' => $obj->selectPage()
        ]);
    }

    public function edaitPage($id)
    {
        $ses=new sssion();
        $ses->cheeck();
        $obj = new \App\Model\Admin\page();
        if (isset($_POST['btn'])) {
        $this->mess=$obj->updatePage($_POST['from'],$id);
        }
        view::rander('admin/edaitPage', [
            'title' => '  ویرایش  '.$obj->selectSinglePage($id)['title'],
            'error' => $this->mess,
            'information' => $obj->selectSinglePage($id),

        ]);
    }
    public function showPage($id){
        $ses=new sssion();
        $ses->cheeck();
        $obj=new \App\Model\Admin\page();
        view::rander('admin/showpage',[
            'title'=>'  مشاهده ی صفحه ی '.$obj->selectSinglePage($id)['title'],
            'writer'=>$obj,
            'information'=>$obj->selectSinglePage($id),
        ]);
    }
}
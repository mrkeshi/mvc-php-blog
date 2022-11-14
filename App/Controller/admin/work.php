<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/05/2019
 * Time: 11:38 PM
 */

namespace App\Controller\Admin;


use App\Model\sssion;
use Core\Controller;
use Core\view;

class work extends Controller
{

    public function __construct()
    {
        $obj=new sssion();
        $obj->cheeck();
    }

    public $error=null;
    public function addWork(){
        $work=new \App\Model\Admin\work();
        if(isset($_POST['btn'])){
            $this->error=$work->add($_POST['form'],'file')[1];
        }

view::rander('admin/addwork',[
    'title'=>'افزودن نمونه کار',
    'error'=>$this->error,
    'cat'=>$work->selectCat()
]);
    }
    public function edaitWork($url){
        $work=new \App\Model\Admin\work();
        if (isset($_POST['btn'])){
            $this->error=$work->updateWork($url,$_POST['form'],'file')[1];
        }
        view::rander('admin/edaitwork',[
            'title'=>'ویرایش نمونه کار',
            'cat'=>$work->selectCat(),
            'information'=>$work->selecSeingletWork($url),
            'error'=>$this->error
        ]);
    }
    public function listWork(){
        $work=new \App\Model\Admin\work();
if(isset($_GET['del'])){
    $work->delwork($_GET['id']);
$this->error=$work->delete($_GET['del'],'work_tbl');
}
        view::rander('admin/listwork',[
            'title'=>'نمایش نمونه کار ها',
            'cat'=>$work,
            'information'=>$work->selectWork(),
            'error'=>$this->error
        ]);
    }
public function addCat(){
if(isset($_POST['btn'])){
    $work=new \App\Model\Admin\work();
    $this->error=$work->insert($_POST['from'],'workcat_tbl');
}
    view::rander('admin/work-addcat',[
        'title'=>'افزودن دسته بندی',
        'error'=>$this->error
    ]);
}
public function listCat(){
    $list=new \App\Model\Admin\work();
    if(isset($_GET['del'])){
        $list->delwork($_GET['del']);
    $list->delete($_GET['del'],'workcat_tbl');
    }
    view::rander('admin/work-listcat',[
        'title'=>'نمایش دسته ها',
        'information'=>$list->selectCat()
    ]);
}
public function edaitCat($id){
    $list=new \App\Model\Admin\work();
    if(isset($_POST['btn'])){
        $this->error=$list->update($_POST['from'],$id,'workcat_tbl');
    }
    view::rander('admin/work-edaitcat',[
        'title'=>'ویرایش یک دسته',
        'information'=>$list->selectCatSingle($id),
        'error'=>$this->error
    ]);
}
}
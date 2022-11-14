<?php namespace App\Controller\Admin;


use App\Model\Admin\adminPanel;
use App\Model\Admin\dashbord;
use App\Model\Admin\visit;
use App\Model\sssion;
use Core\controller;
use Core\view;

class admin extends controller
{


    public function login()
    {
        $obj = new sssion();
        $arg['title'] = 'ورود به داشبورد';
        if (isset($_POST['btn'])) {
            $admin = new adminPanel();
            if ($admin->loginPanel($_POST['frm'])[0] == true) {
                header('location:http://127.0.0.10/dashbord');
                $obj->setSession('username', $_POST['frm']['username']);
            } else {
                $arg['message'] = $admin->loginPanel($_POST['frm'])[1];
            }
        }
        view::rander('Admin/page-login', $arg);

    }

    public function logOut()
    {
        session_destroy();
        header('location:http://127.0.0.10/wp-login');
    }

    public function dashbord()
    {
        $obj = new sssion();
        $obj->cheeck();
        $db=new dashbord();
        view::rander('Admin/index', [
                'title' => 'داشبورد',
                'name' => 'علیرضا کشاورز',
                'iamge' => '',
                    'countPost'=>$db->countPost(),
                    'countComment'=>$db->countComment(),
                    'email'=>$db->email(),
                    'post'=>$db->post(),
                'admin'=>$db->admin(),
                'visit'=>$db->selectV(),
                'visitor'=>$db->Vis()
                ]

        );

    }
    public function test(){
        $model=new visit();
        view::rander('test',[
            'model'=>$model->visitor()
        ]);
    }

}
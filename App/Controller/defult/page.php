<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 07/29/2019
 * Time: 03:40 PM
 */

namespace App\Controller\defult;

use App\Controller\Admin\email;
use App\Model\Admin\menu;
use App\Model\Admin\setting;
use App\Model\Admin\visit;
use App\Model\Admin\vpup;
use Core\view;
use mysql_xdevapi\Exception;

class page
{
    public function __construct()
    {
        $item=new visit();
        $item->item();
        $item->visitor();

    }

    public function about()
    {

    }

    public function contact()
    {
        $n=null;
        $opj = new \App\Model\Admin\email();
        $ser=new setting();
        $home=new vpup();
        if (isset($_POST['btn'])) {
            $n=$opj->insertEmail($_POST['form']);
        }
        $menu=new menu();
        view::rander('Defult/contact',[
            'title' => 'تماس با ما',
            'error' => $n[0],
            'menu'=>$menu,
            'information'=>$ser->show(),
            'v'=>$home->show('contact')
        ]);
    }
public function page($url){
        $menu=new menu();
        $page=new \App\Model\Admin\page();
        if($page->selectSinglePageByUrl($url)==false){
            throw new \Exception('NOT FUND PAGE,301');
        }else{
            view::rander('defult/about_us',[
                'title'=>$page->selectSinglePageByUrl($url)['title'],
                'menu'=>$menu,
                'page'=>$page->selectSinglePageByUrl($url)
            ]);
        }

}
    public function prof()
    {

    }
}
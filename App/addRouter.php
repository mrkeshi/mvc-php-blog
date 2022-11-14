<?php
$obj=new \Core\Rute();
//site/
$obj->addRoute('/test',['user'=>'admin@test','namespace'=>'Admin']);

$obj->addRoute(\Core\Config::HOMEPAGE,['user'=>'result@index','namespace'=>'defult',"session"=>false]);
//post show and cat
$obj->addRoute(\Core\Config::HOMEPAGE.'contact',['user'=>'page@contact','namespace'=>'defult']);

$obj->addRoute('/blog',['user'=>'blog@showPost','namespace'=>'defult']);
$obj->addRoute('/posts/{url}',['user'=>'blog@showSinglePost','namespace'=>'defult']);
$obj->addRoute('/blog/page/{id}',['user'=>'blog@showPost','namespace'=>'defult']);
$obj->addRoute('/c{cat}',['user'=>'blog@showcat','namespace'=>'defult']);
$obj->addRoute('/c{cat}/page/{id}',['user'=>'blog@showcat','namespace'=>'defult']);
// Work Sample
$obj->addRoute('/work',['user'=>'work@showPost','namespace'=>'defult']);
$obj->addRoute('/work/{title}',['user'=>'work@showsinglePost','namespace'=>'defult']);

//end site








$obj->addRoute('/wp',['user'=>'admin@login','namespace'=>'Admin']);
//ADMIN
$obj->addRoute('/dashbord',['user'=>'admin@dashbord','namespace'=>'admin']);
$obj->addRoute('/wp-login',['user'=>'admin@login','namespace'=>'admin']);

//menu
$obj->addRoute("/".\Core\Config::ADMINPAGE."/addmenu",['user'=>'menu@addMenu','namespace'=>'Admin']);
$obj->addRoute('/'.\Core\Config::ADMINPAGE.'/listmenu',['user'=>'menu@listMenu','namespace'=>'Admin']);
$obj->addRoute('/'.\Core\Config::ADMINPAGE.'/listmenu/edait/{edait}',['user'=>'menu@edaitMenu','namespace'=>'Admin']);
//Cat
$obj->addRoute("/".\Core\Config::ADMINPAGE."/addCat",['user'=>'cat@addCat','namespace'=>'Admin']);
$obj->addRoute('/'.\Core\Config::ADMINPAGE.'/listCat',['user'=>'cat@listCat','namespace'=>'Admin']);
$obj->addRoute('/'.\Core\Config::ADMINPAGE.'/listCat/edait/{edait}',['user'=>'cat@edaitCat','namespace'=>'Admin']);
//Page
$obj->addRoute("/".\Core\Config::ADMINPAGE."/addPage",['user'=>'page@addPage','namespace'=>'Admin']);
$obj->addRoute('/'.\Core\Config::ADMINPAGE.'/listPage',['user'=>'page@listPage','namespace'=>'Admin']);
$obj->addRoute('/'.\Core\Config::ADMINPAGE.'/listPage/edait/{edait}',['user'=>'page@edaitPage','namespace'=>'Admin']);
$obj->addRoute('/'.\Core\Config::ADMINPAGE.'/listPage/show/{id}',['user'=>'page@showPage','namespace'=>'Admin']);
//Email
$obj->addRoute("/".\Core\Config::ADMINPAGE."/emailreceive",['user'=>'email@email','namespace'=>'Admin']);
$obj->addRoute("/".\Core\Config::ADMINPAGE."/emailsubmit",['user'=>'email@email2','namespace'=>'Admin']);
$obj->addRoute("/".\Core\Config::ADMINPAGE."/emailreceive/show",['user'=>'email@ajax','namespace'=>'Admin']);
$obj->addRoute("/".\Core\Config::ADMINPAGE."/emailreceive/del",['user'=>'email@delajax','namespace'=>'Admin']);
$obj->addRoute("/".\Core\Config::ADMINPAGE."/emailreceive/submit",['user'=>'email@submit','namespace'=>'Admin']);

//Works Sample Cat
$obj->addRoute("/".\Core\Config::ADMINPAGE."/addCatwork",['user'=>'work@addCat','namespace'=>'Admin']);
$obj->addRoute('/'.\Core\Config::ADMINPAGE.'/workCat',['user'=>'work@listCat','namespace'=>'Admin']);
$obj->addRoute('/'.\Core\Config::ADMINPAGE.'/workCat/edait/{edait}',['user'=>'work@edaitCat','namespace'=>'Admin']);
//Works sample
$obj->addRoute("/".\Core\Config::ADMINPAGE."/addwork",['user'=>'work@addWork','namespace'=>'Admin']);
$obj->addRoute('/'.\Core\Config::ADMINPAGE.'/listwork',['user'=>'work@listWork','namespace'=>'Admin']);
$obj->addRoute('/'.\Core\Config::ADMINPAGE.'/workedait/{edait}',['user'=>'work@edaitWork','namespace'=>'Admin']);
//Post
$obj->addRoute("/".\Core\Config::ADMINPAGE."/addpost",['user'=>'posts@addPost','namespace'=>'Admin']);
$obj->addRoute("/".\Core\Config::ADMINPAGE."/listpost",['user'=>'posts@listPost','namespace'=>'Admin']);
$obj->addRoute('/'.\Core\Config::ADMINPAGE.'/listpost/edait/{edait}',['user'=>'posts@edaitPost','namespace'=>'Admin']);
$obj->addRoute('/'.\Core\Config::ADMINPAGE.'/listpost/show/{id}',['user'=>'posts@showpost','namespace'=>'Admin']);
$obj->addRoute("/".\Core\Config::ADMINPAGE."/comment",['user'=>'posts@comment','namespace'=>'Admin']);
$obj->addRoute("/".\Core\Config::ADMINPAGE."/comment/status",['user'=>'posts@stacomment','namespace'=>'Admin']);
//Sidbar
$obj->addRoute("/".\Core\Config::ADMINPAGE."/sidebar",['user'=>'sidebar@lisst','namespace'=>'Admin']);
$obj->addRoute("/".\Core\Config::ADMINPAGE."/sidebar/ads",['user'=>'sidebar@adsedait','namespace'=>'Admin']);
$obj->addRoute("/".\Core\Config::ADMINPAGE."/sidebar/text",['user'=>'sidebar@text','namespace'=>'Admin']);
$obj->addRoute("/".\Core\Config::ADMINPAGE."/sidebar/tab",['user'=>'sidebar@tab','namespace'=>'Admin']);
$obj->addRoute("/".\Core\Config::ADMINPAGE."/sidebar/ok",['user'=>'sidebar@updateStatus','namespace'=>'Admin']);
//Home vighet//
$obj->addRoute("/".\Core\Config::ADMINPAGE."/home",['user'=>'home@listItem','namespace'=>'Admin']);
$obj->addRoute("/".\Core\Config::ADMINPAGE."/home/proboxs",['user'=>'home@boxs','namespace'=>'Admin']);
$obj->addRoute("/".\Core\Config::ADMINPAGE."/home/section",['user'=>'home@section','namespace'=>'Admin']);
$obj->addRoute("/".\Core\Config::ADMINPAGE."/home/chapter/{id}",['user'=>'home@chapter','namespace'=>'Admin']);
$obj->addRoute("/".\Core\Config::ADMINPAGE."/home/ok/",['user'=>'home@updateStatus','namespace'=>'Admin']);
$obj->addRoute("/".\Core\Config::ADMINPAGE."/home/slider/",['user'=>'home@slider','namespace'=>'Admin']);

//vighet Public to All pages
$obj->addRoute("/".\Core\Config::ADMINPAGE."/vpub",['user'=>'vpub@listItem','namespace'=>'Admin']);
$obj->addRoute("/".\Core\Config::ADMINPAGE."/vpub/edait/{page}",['user'=>'vpub@edait','namespace'=>'Admin']);
$obj->addRoute("/".\Core\Config::ADMINPAGE."/vpub/ok",['user'=>'vpub@status','namespace'=>'Admin']);

//Uploader
$obj->addRoute("/".\Core\Config::ADMINPAGE."/uploader",['user'=>'uploader@creat','namespace'=>'Admin']);
$obj->addRoute("/".\Core\Config::ADMINPAGE."/gallery",['user'=>'uploader@gallery','namespace'=>'Admin']);
$obj->addRoute("/".\Core\Config::ADMINPAGE."/gallery/del",['user'=>'uploader@delimg','namespace'=>'Admin']);
$obj->addRoute('/'.\Core\Config::ADMINPAGE.'/up/files',['user'=>'uploader@files','namespace'=>'Admin']);
$obj->addRoute('/'.\Core\Config::ADMINPAGE.'/up',['user'=>'uploader@upload','namespace'=>'Admin']);
//ٍٍSetting site
$obj->addRoute("/".\Core\Config::ADMINPAGE."/publicsetting",['user'=>'setting@publicSetting','namespace'=>'Admin']);
$obj->addRoute('/'.\Core\Config::ADMINPAGE.'/listPage',['user'=>'page@listPage','namespace'=>'Admin']);
//ADMIN logout
$obj->addRoute('/dashbord/logout',['user'=>'admin@logOut','namespace'=>'Admin']);
//Site
$obj->addRoute(\Core\Config::HOMEPAGE.'{page}',['user'=>'page@page','namespace'=>'defult',"session"=>false]);
//test

?>
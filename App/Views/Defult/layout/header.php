<?php
$val=new \App\Model\Admin\setting();
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<title><?php if($title!=null){
    echo $title;
    }else{echo $val->show()['name'];}?></title>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="HandheldFriendly" content="true" />
<meta name="apple-touch-fullscreen" content="yes" />
<!-- All Animations CSS -->
<link href="/defult/css/animate.css" rel="stylesheet" type="text/css">
<link href="/defult/css/animate-rtl.css" rel="stylesheet" type="text/css">
<!-- Image Lightbox CSS-->
<link rel="stylesheet" href="/defult/css/imagelightbox.css" type="text/css" media="screen">
<link rel="stylesheet" href="/defult/css/imagelightbox-rtl.css" type="text/css" media="screen">
<!-- Theme styles and Menu styles -->
<link href="/defult/css/style.css" rel="stylesheet" type="text/css">
<link href="/defult/css/style-rtl.css" rel="stylesheet" type="text/css">
<link href="/defult/css/mainmenu.css" rel="stylesheet" type="text/css">
<link href="/defult/css/mainmenu-rtl.css" rel="stylesheet" type="text/css">
<!-- Call Fontawsome Icon Font from a CDN -->
<link href="/defult/http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!--Pace Page Loader -->
<link rel="stylesheet" href="/defult/js/pace-0.5.1/themes/pace-theme-minimal.css" type="text/css" media="screen" />
<!--FlexSlider -->
<link rel="stylesheet" href="/defult/js/woothemes-FlexSlider-06b12f8/flexslider.css" type="text/css" media="screen">
<!--Isotope Plugin -->
<link rel="stylesheet" href="/defult/js/isotope/css/style.css" type="text/css" media="screen">
<!--Simple Text Rotator -->
<link href="/defult/css/simpletextrotator.css" rel="stylesheet" type="text/css">
<!--Style Switcher, You propably want to remove this!-->
<link href="/defult/css/_style_switcher.css" rel="stylesheet" type="text/css">
<!--Modernizer Custom -->
<script type="text/javascript" src="/defult/js/modernizr.custom.48287.js"></script>
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/defult/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/defult/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="/defult/apple-touch-fa-57x57-precomposed.html">
<link rel="shortcut icon" href="/defult/favicon.png">
</head>
<body class="sticky_header">
<div class="overflow_wrapper">


     <header>
          <div class="container">
               <div class="logo"><a class="brand" href="http://127.0.0.10"> <img src="/defult/images/cleanstart_logo.png" alt="optional logo"> <span class="logo_title"> <?php echo $val->show()['name'] ?></span></a></div>
               <div id="mainmenu" class="menu_container">
                    <label class="mobile_collapser">منو</label>
                    <!-- Mobile menu title -->
                    <ul>
                        <?php
                        if($menu->showMenuInSite()){
                            foreach ($menu->showMenuInSite() as $item) {
                        ?>
                                <?php
                                if($menu->subMenu($item['id'])){
                                    ?>
                                    <li><a style="cursor: pointer" ><?php echo $item['title'] ?></a>
                                        <div class="dmui_dropdown_block full_width" style="background-image: url(images/mega_menu_background.png); background-repeat:no-repeat; background-position:-70px;width:500px;">
                                            <div class="dmui-container">
                                                <div class="dmui-col span3">
                                                    <div class="dmui-container">
                                                        <ul class="dmui-submenu">


                                    <?php
                                        foreach ($menu->subMenu($item['id']) as $value){
                                            ?>
                                            <li><a href="http://127.0.0.10/<?php echo $value['url']?>"> <?php echo $value['title']?></a></li>

                                            <?php
                                        };
                                        ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                                            <?php
                                }else {
                                            ?>


                                    <li class="<?php
                                                if($_SERVER['QUERY_STRING'].'/'==$item['url'] OR $_SERVER['QUERY_STRING']==$item['url']){
        echo ' active';
                                                }
                                    ?>"><a href="http://127.0.0.10/<?php echo $item['url'] ?>"><?php echo $item['title'] ?></a>
                                    </li>

                                    <?php
                                }
                            }
                        }
                        ?>
                    </ul>
               </div>
               <div class="triangle-up-left"></div>
               <div class="triangle-up-right"></div>
          </div>
     </header>
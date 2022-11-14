<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta content-Type="text/plain"  charset="UTF-8" content-Transfer-Encoding="base64">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="/admin/assets/images/favicon.ico">

    <!-- App title -->
    <title><?php echo $title ?></title>

    <link href="/admin/assets/plugins/summernote/dist/summernote.css" rel="stylesheet"/><!-- Custom box css -->
    <link href="/admin/assets/plugins/custombox/dist/custombox.min.css" rel="stylesheet">

    <!-- App CSS -->
    <link href="/admin/assets/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/assets/css/core.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/assets/css/components.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/assets/css/pages.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/assets/css/menu.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/assets/css/responsive.css" rel="stylesheet" type="text/css"/>

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/admin/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="/admin/https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="/admin/assets/js/modernizr.min.js"></script>

</head>
<style>
    html {
    }

    body {
        margin: 0;

    }

    .loader-container {
        position: fixed;/* absolute */
        left: 0;
        right: 0;
        display: none;
        height: 100%;
        background: #013940;
        opacity: 0.7;
        z-index: 1000000000;
        text-align: center;
    }

    .loader-content {
        position: relative;
        top: 25%;
    }

    .loader {
        border: 0.250em solid #03A9F4;
        border-radius: 50%;
        border-top: 0.250em solid #caf9ff;
        border-bottom: 0.250em solid #caf9ff;
        width: 1.875em; /* 30px [16px base font]*/
        height: 1.875em; /* 30px [16px base font]*/
        -webkit-animation: spin 1s ease-out infinite;
        animation: spin 1s ease-out infinite;
        display: inline-block;
        background: #4ea2c7;
        -webkit-box-shadow: 0em 0em 0.813em 0.25em #8adbff;
        box-shadow: 0em 0em 0.813em 0.25em #8adbff; /* 0 0 13px 4px #8adbff */
        zoom: 1;
    }

    .loader-text {
        display: block;
        position: relative;
        text-align: center;
        margin-top: 0.5em;
        font-size: 1.5em;
        font-family: sans-serif;
        color: #00BCD4;
        text-shadow: 0.063em 0.063em #004a54;
        -webkit-animation: bounce 3s linear infinite;
        animation: bounce 3s linear infinite;
        letter-spacing: 0.3em;
    }

    @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); transform: rotate(360deg); }
    }

    @keyframes spin {
        0% { -webkit-transform: rotate(0deg); transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); transform: rotate(360deg); }
    }

    @-webkit-keyframes bounce {
        0% {
            top: 0;
        }
        25% {
            top: 0.625em; /* 10px/16px */
        }
        50% {
            top: 0;
        }
        75% {
            top: 0.625em; /* 10px/16px */
        }
        100% {
            top: 0;
        }
    }

    @keyframes bounce {
        0% {
            top: 0;
        }
        25% {
            top: 0.625em; /* 10px/16px */
        }
        50% {
            top: 0;
        }
        75% {
            top: 0.625em; /* 10px/16px */
        }
        100% {
            top: 0;
        }
    }
</style>

<body class="fixed-left">
<div class="loader-container" id="loader-container">

    <div class="loader-content">
        <span class="loader"></span>
        <span class="loader-text">Loading</span>
    </div>

</div>
<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <?php
    \Core\view::rander('admin/layout/menu', [
        'title' => $title
    ])
    ?>
    <!-- Left Sidebar End -->


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <div class="row">

                    <div class="col-sm-12">
                        <div class="inbox-app-main">
                            <div class="row">
                                <div class="col-md-3">
                                    <aside id="sidebar" class="nano">
                                        <div class="nano-content">

                                            <div class="text-center">
                                                <a href="#custom-modal"
                                                   class="btn btn-danger btn-rounded w-lg waves-effect waves-light m-b-20 m-t-30"
                                                   data-animation="fadein" data-plugin="custommodal"
                                                   data-overlaySpeed="200" data-overlayColor="#36404a">ارسال ایمیل</a>
                                            </div>
                                            <menu class="menu-segment">
                                                <ul class="list-unstyled">
                                                    <li class="active"><a href="#">اینباکس
                                                            <span data-number=<?php echo $count ?> id="con">(<?php echo $count ?>)</span></a>
                                                    </li>
                                                    <li class=""><a href="/<?php echo \Core\Config::ADMINPAGE.'/emailsubmit'?>">ارسالی</a></li>
                                                    </li>
                                                </ul>
                                            </menu>
                                            <div class="separator"></div>

                                            <div class="bottom-padding"></div>
                                        </div>
                                    </aside>
                                </div> <!-- end col -->

                                <div class="col-md-9">
                                    <main id="main">
                                        <div class="overlay"></div>
                                        <header class="header">

                                            <h1 class="page-title"><a class="sidebar-toggle-btn trigger-toggle-sidebar"><span
                                                            class="line"></span><span class="line"></span><span
                                                            class="line"></span><span
                                                            class="line line-angle1"></span><span
                                                            class="line line-angle2"></span></a></h1>
                                            <div class="action-bar pull-left">
                                                <ul class="list-inline m-b-0">
                                                 

                                                    <li>
                                                        <a class="icon iconwa circle-icon red glyphicon glyphicon-remove"></a>
                                                    </li>

                                                </ul>
                                            </div>


                                            <div class="clearfix"></div>

                                        </header>
                                        <style>
                                            .checkbox-wrapper-mail {
                                                position: absolute;
                                                /* margin-top: 0px; */
                                                /* top: 20px; */
                                                margin-top: 13px;
                                                margin-right: 10px;
                                                /* top: -1px; */
                                                right: 1px;
                                            }
                                        </style>
                                        <div id="main-nano-wrapper" class="nano">
                                            <div class="nano-content">
                                                <ul class="message-list">
                                                    <p style="display: none" class="alert alert-info"></p>
                                                    <style>
                                                        .bree{
                                                            font-weight: lighter;
                                                        }
                                                    </style>
                                                    <?php
                                                    if($showEmail){


                                                    foreach ($showEmail as $value){
                                                        if($value['status']==0){
                                                            $class='unread';
                                                        }else{
                                                            $class='';
                                                        }
                                                        ?>

                                                        <div class="checkbox-wrapper-mail">
                                                            <input data-check='false'   class="ty" type="checkbox" id="f<?php echo $value['id']?>">
                                                            <label for="f<?php echo $value['id']?>" class="toggle"></label>
                                                        </div>
                                                        <li data-id="f<?php echo $value['id']?>" id="f<?php echo $value['id']?>" class="<?php echo $class?> reza">
                                                            <div class="col col-1"><span class="dot"></span>

                                                                <p class="title"><?php echo $value['name']?></p>
                                                            </div>
                                                            <div class="col col-2">
                                                                <div class="subject">
                                                                    <?php echo $value['subject']?>
                                                                    <span  style="font-weight: lighter" class="">
                                                                    <?php echo $value['text']?>
                                                                    </span>
                                                                </div>
                                                                <div class="date">
                                                                    <?php
                                                               echo jdate('  d F Y - H:i',$value['timee'])
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <?php
                                                    } }
                                                    ?>


                                                </ul>

                                                <div id="res">

                                                </div>
                                            </div>
                                        </div>
                                    </main>
                                        <?php
                                        if($showEmail){
                                            foreach ($showEmail as $item){
                                                ?>
                                    <div id="message" class="f<?php echo $item['id'] ?>">
                                        <div class="header">
                                            <h1 class="page-title"><a
                                                        class="icon <?php echo 'nf'.$item['id']?> circle-icon glyphicon glyphicon-remove trigger-message-close"></a><?php echo $item['subject']?></h1>
                                            <p>ازجانب <a href="/admin/#"><?php echo $item['name']?></a> به <a href="/admin/#"></a>شما
                                                شروع از <a
                                                        href="/admin/#">  <?php echo jdate('d m Y ',$item['timee'])?></a> <?php echo jdate('H:i:s',$item['timee'])?> </p>
                                        </div>
                                        <div  id="message-nano-wrapper" class="nano">
                                            <div class="nano-content">
                                                <ul class="message-container list-unstyled">
                                                    <li class="sent">
                                                        <div class="details">
                                                            <div class="left">شما
                                                                <div class="arrow"></div>
                                                              <?php echo $item['name']?>
                                                            </div>
                                                            <div class="right"><?php echo jdate('f Y',$item['timee'])?></div>
                                                        </div>
                                                        <div class="message">
                                                    <?php
                                                    echo $item['text']
                                                    ?>
                                                        </div>
                                                        <div class="tool-box"><a data-subject="<?php echo $item['subject'] ?>" id="rezas" data-email="<?php echo $item['email']?>" href="#custom-modal"

                                                                                 data-animation="fadein" data-plugin="custommodal"
                                                                                 data-overlaySpeed="200" data-overlayColor="#36404a"
                                                                                 class="circle-icon small glyphicon glyphicon-share-alt "></a>
                                                        </div>
                                                    </li>

                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div> <!-- end col -->
                            </div><!-- end row -->
                        </div>

                    </div>

                </div>
                <!-- End row -->

            </div> <!-- container -->

        </div> <!-- content -->

    </div>
    <!-- End content-page -->


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


    <!-- Right Sidebar -->
    <!-- /Right-bar -->

</div>
<!-- END wrapper -->

<!-- Modal -->
<div style="z-index: 1" id="custom-modal" class="modal-demo text-left">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>&times;</span><span class="sr-only">بستن</span>
    </button>
    <h4 class="custom-modal-title">ارسال ایمیل</h4>
    <div class="card-box">
        <form role="form">
            <div class="form-group">
                <input id="email" required type="email" class="form-control" placeholder="به">
            </div>

            <div class="form-group">
                <input id="subject" required type="text" class="form-control" placeholder="موضوع">
            </div>
            <div class="form-group">
                <textarea class="form-control" id="text" style="width: 560px" rows="4" placeholder="متن ایمیل"></textarea>
            </div>

            <div class="btn-toolbar form-group m-b-0">
                <div class="pull-right">

                    <button id="btn2"  class="btn btn-purple waves-effect waves-light"><span>ارسال</span> <i
                                class="fa fa-send m-l-10"></i></button>
                </div>
            </div>

        </form>

    </div>
</div>


<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="/admin/assets/js/jquery.min.js"></script>
<script src="/admin/assets/js/bootstrap-rtl.min.js"></script>
<script src="/admin/assets/js/detect.js"></script>
<script src="/admin/assets/js/fastclick.js"></script>
<script src="/admin/assets/js/jquery.slimscroll.js"></script>
<script src="/admin/assets/js/jquery.blockUI.js"></script>
<script src="/admin/assets/js/waves.js"></script>
<script src="/admin/assets/js/jquery.nicescroll.js"></script>
<script src="/admin/assets/js/jquery.scrollTo.min.js"></script>

<!--form validation init-->
<script src="/admin/assets/plugins/summernote/dist/summernote.min.js"></script>

<!-- Modal-Effect -->
<script src="/admin/assets/plugins/custombox/dist/custombox.min.js"></script>
<script src="/admin/assets/plugins/custombox/dist/legacy.min.js"></script>

<!-- App js -->
<script src="/admin/assets/js/jquery.core.js"></script>
<script src="/admin/assets/js/jquery.app.js"></script>

<script>

    jQuery(document).ready(function () {

        $('.summernote').summernote({
            height: 320,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                 // set focus to editable area after initializing summernote
        });

    });
</script>
<script>
$('#rezas').click(function () {
    $('#subject').val('پاسخ به موضوع '+$(this).attr('data-subject'));
    $('#email').val($(this).attr('data-email'));

   $('#custom-modal').fadeIn();
});
    var ali=[];
$('#btn2').click(function (e) {
    e.preventDefault();

        $.ajax({
            type:'post',
            url:'http://127.0.0.10/dashbord/emailreceive/submit',
            data:{
                'text':$('#text').val(),
                'subject':$('#subject').val(),
                'email':$('#email').val(),
            },
            beforeSend:function(){
                $('#loader-container').css('display','block')
            },
            success:function (resp) {
                $('#loader-container').css('display','none');

                if(resp!=false){
                    $('#custom-modal').fadeOut();
                    $('.alert').css('display','block');
                    $('.alert').text('ایمیل با موفقیت ارسال شد');
                    $('.alert').delay(3000).fadeOut();
                }else{ $('.alert').css('display','block');
                    $('#custom-modal').fadeOut();
                    $('.alert').text('خطا در ارسال ایمیل');
                    $('.alert').delay(3000).fadeOut();
                }
            },
            error:function () {
                $('#loader-container').css('display','none');

                $('.alert').css('display','block');
                $('#custom-modal').fadeOut();
                $('.alert').text('خطا در ارسال ایمیل');
                $('.alert').delay(3000).fadeOut();
            }

        })

});
    $('.ty').click(function () {
        if($(this).attr('data-check')=='false'){
            $(this).attr('data-check','true')
        }else{
            $(this).attr('data-check','false')

        }
});
    $('.iconwa').click(function () {
        var ali=[];
        let input=document.querySelectorAll('.ty');
        var x=-1;
        var y=-1;

        input.forEach(function (e) {

                if($(e).attr('data-check')=='true'){
                    ali[x+1]=$(e).attr('id');
                    x++;
                }
        });
        $.ajax({
            url:'http://127.0.0.10/dashbord/emailreceive/del',
            type:'post',
            data:{ali:ali},
            success:function (res) {
                document.location.reload(true)
            }

        })
    });

$('.reza').click(function () {

    $class=$(this);
    $vr='.n'+$(this).attr('data-id');
    if($(this).attr('class')==='unread reza'){
        $.ajax({
            url:"http://127.0.0.10/dashbord/emailreceive/show",
            type:'post',
            data:{
                showid:$(this).attr('data-id')
            },
            beforeSend :function(){

            },
            success:function (res) {
                if(res=='true'){
                    $class.removeClass('unread');
                    $val=Number($('#con').attr('data-number'));
                    $val--;
                }else{
                    alert('خطا در حذف');
                }

                    $('#con').attr('data-number',$val);
                $('#con').text($val);
                }
        });
    }

$item='.'+$(this).attr('data-id');
$($vr).click(function () {
    $($item).css('left','0px');
});
if($($item).css('left')==='500px'){
    $($item).css('left','0px');

}else{
 $($item).css('left','550px');

    }
})
</script>
</body>
</html>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="/admin/assets/images/favicon.ico">

    <title><?php echo $title ?></title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="/admin/assets/plugins/morris/morris.css">

    <!-- App css -->
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


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="/admin/index.html" class="logo"><span>آقای<span>ادمین</span></span><i class="zmdi zmdi-layers"></i></a>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">

                <!-- Page title -->
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <button class="button-menu-mobile open-left">
                            <i class="zmdi zmdi-menu"></i>
                        </button>
                    </li>
                    <li>
                        <h4 class="page-title">افزودن منوی جدید</h4>
                    </li>
                </ul>

                <!-- Right(Notification and Searchbox -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <!-- Notification -->
                        <div class="notification-box">
                            <ul class="list-inline m-b-0">
                                <li>
                                    <a class="right-bar-toggle">
                                        <i class="zmdi zmdi-notifications-none"></i>
                                    </a>
                                    <div class="noti-dot">
                                        <span class="dot"></span>
                                        <span class="pulse"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- End Notification bar -->
                    </li>
                    <li class="hidden-xs">
                        <form role="search" class="app-search">
                            <input type="text" placeholder="به دنبال چه می گردی ؟؟؟"
                                   class="form-control">
                            <a href="/admin/"><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                </ul>

            </div><!-- end container -->
        </div><!-- end navbar -->
    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->
    <?php
    \Core\view::rander('admin/layout/menu',[
        'title'=>'افزودن  منو '
    ])?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <div class="row  center-block">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="card-box">
                            <?php if($error!=null){
                            echo $error[1];
                            }
 ?>
                            <form class="form-horizontal" method="post">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">نام </label>

                                    <div class="col-md-10">
                                        <input required type="text" id="name" name="form[title]" class="form-control"
                                               placeholder="لطفا نام منو را وارد نمائید">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="example-email">آدرس</label>

                                    <div class="col-md-10">
                                        <div class="input-group">
                                            <input  id="url" style="text-align: left" id="example-input2-group1"
                                                   name="form[url]" class="form-control" placeholder="آدرس">
                                            <span class="input-group-addon "
                                                  style="font-size: 18px;">http://site.ir</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label"> زیر منو </label>
                                    <div class="col-md-8">
                                        <select required name="form[child_id]" class="form-control"
                                                style="width: 210px">
                                            <option value="0">غیر فعال</option>
                                            <?php
                                            if ($parent) {
                                                foreach ($parent as $value) {


                                                    ?>
                                                    <option value="<?php echo $value['id']?>"> <?php echo $value['title']?></option>

                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">وضعیت نمایش </label>
                                    <div class="col-md-5">
                                        <select required name="form[status]" class="form-control" style="width: 210px">
                                            <option value="1">فعال</option>
                                            <option value="0">غیر فعال</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">ترتیب نمایش </label>
                                    <div class="col-md-4">
                                        <input required name="form[sort]" type="text" class="form-control"
                                               placeholder="لطفا عدد وارد نمائید">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button name="btn" class="btn btn-success waves-effect w-md waves-light m-b-5"
                                            style="font-size:18px;margin-right: 130px">افزودن منو
                                    </button>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
                <style>
                    .t {
                        margin: 5px;
                    }

                </style>
                <div class="row ">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="" style="display: flex;justify-content: center">

                            <div class="card-box t  col-lg-6">
                                <h3 style="margin: 0px;line-height: 0px">دسته ها</h3>
                                <div class="form-group"><br><br>
                                    <select name="" style="width: 300px" id="se1" class="reza form-control">
                                        <option value="#">هیچی</option>
                                    <?php
                                    if($cat) {
                                        foreach ($cat as $value){

                                    ?>
                                        <option value="c<?php echo $value['url'] ?>"><?php echo $value['title'] ?></option>
                                    <?php
                                    }
                                        }
                                    ?>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <span id="ise1"
                                          class="btn btn-inverse btn-bordred waves-effect w-md waves-light m-b-5">افزودن</span>
                                </div>
                            </div>
                            <div class="card-box t col-lg-6">
                                <h3 style="margin: 0px;line-height: 0px"> صفحات</h3>
                                <div class="form-group"><br><br>
                                    <select id="se2" name="" style="width: 300px" class="reza form-control">
                                        <option value="#">هیچی</option>

                                    <?php
                                    if($cat) {
                                    foreach ($page as $valuee) {

                                        ?>
                                            <option value="<?php echo $valuee['url'] ?>"><?php echo $valuee['title'] ?></option>

                                        <?php
                                    }}
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <span id="ise2"
                                          class="btn btn-inverse btn-bordred waves-effect w-md waves-light m-b-5">افزودن</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer">
            آقای ادمین2016 ©.
        </footer>

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


    <!-- Right Sidebar -->
    <div class="side-bar right-bar">
        <a href="/admin/javascript:void(0);" class="right-bar-toggle">
            <i class="zmdi zmdi-close-circle-o"></i>
        </a>
        <h4 class="">اعلانات</h4>
        <div class="notification-list nicescroll">
            <ul class="list-group list-no-border user-list">
                <li class="list-group-item">
                    <a href="/admin/#" class="user-list-item">
                        <div class="avatar">
                            <img src="/admin/assets/images/users/avatar-2.jpg" alt="">
                        </div>
                        <div class="user-desc">
                            <span class="name">کاربر شماره یک</span>
                            <span class="desc">متن کاربر شماره یک</span>
                            <span class="time">2 ساعت قبل</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/admin/#" class="user-list-item">
                        <div class="icon bg-info">
                            <i class="zmdi zmdi-account"></i>
                        </div>
                        <div class="user-desc">
                            <span class="name">ثبت نام جدید</span>
                            <span class="desc">کاربری جدید در سایت ثبت نام کرده است</span>
                            <span class="time">5 ساعت قبل</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/admin/#" class="user-list-item">
                        <div class="icon bg-pink">
                            <i class="zmdi zmdi-comment"></i>
                        </div>
                        <div class="user-desc">
                            <span class="name">پیام جدید</span>
                            <span class="desc">متن پیام جدید از کاریی جدید</span>
                            <span class="time">1 روز قبل</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item active">
                    <a href="/admin/#" class="user-list-item">
                        <div class="avatar">
                            <img src="/admin/assets/images/users/avatar-3.jpg" alt="">
                        </div>
                        <div class="user-desc">
                            <span class="name">کاربر شماره 2</span>
                            <span class="desc">با سلام من یک متن کاملا آزمایشی هستم</span>
                            <span class="time">2 روز قبل</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item active">
                    <a href="/admin/#" class="user-list-item">
                        <div class="icon bg-warning">
                            <i class="zmdi zmdi-settings"></i>
                        </div>
                        <div class="user-desc">
                            <span class="name">تنظیمات</span>
                            <span class="desc">تنظیمات جدید برای دسترسی و راحتی شما موجود است</span>
                            <span class="time">1 روز قبل</span>
                        </div>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <!-- /Right-bar -->

</div>
<!-- END wrapper -->


<script>
    var resizefunc = [];
</script>
<!--/

/-->
<!-- jQuery  -->
<script src="/admin/assets/js/jquery.min.js"></script>
<script src="/admin/assets/js/bootstrap-rtl.min.js"></script>
<script src="/admin/assets/js/detect.js"></script>
<script src="/admin/assets/js/fastclick.js"></script>
<script src="/admin/assets/js/jquery.blockUI.js"></script>
<script src="/admin/assets/js/waves.js"></script>
<script src="/admin/assets/js/jquery.nicescroll.js"></script>
<script src="/admin/assets/js/jquery.slimscroll.js"></script>
<script src="/admin/assets/js/jquery.scrollTo.min.js"></script>

<!-- KNOB JS -->
<!--[if IE]>
<script type="text/javascript" src="/admin/assets/plugins/jquery-knob/excanvas.js"></script>
<![endif]-->
<script src="/admin/assets/plugins/jquery-knob/jquery.knob.js"></script>

<!--Morris Chart-->
<script src="/admin/assets/plugins/morris/morris.min.js"></script>
<script src="/admin/assets/plugins/raphael/raphael-min.js"></script>

<!-- Dashboard init -->
<script src="/admin/assets/pages/jquery.dashboard.js"></script>

<!-- App js -->
<script src="/admin/assets/js/jquery.core.js"></script>
<script src="/admin/assets/js/jquery.app.js"></script>
<script>
    $('#ise1').click(function () {
        $url = $('#se1 option:selected').val();
        $text = $('#se1 option:selected').text();
        $('#name').val($text);
        $('#url').val($url);

    });
    $('#ise2').click(function () {
        $url = $('#se2 option:selected').val();
        $text = $('#se2 option:selected').text();
        $('#name').val($text);
        $('#url').val($url);

    })
</script>
</body>
</html>
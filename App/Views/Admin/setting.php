<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="/admin/assets/images/favicon.ico">

    <title>تنظیمات</title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="/admin/assets/plugins/morris/morris.css">

    <!-- App css -->
    <link href="/admin/assets/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="/admin/assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="/admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="/admin/assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="/admin/assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="/admin/assets/css/responsive.css" rel="stylesheet" type="text/css" />

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
<?php
\Core\view::rander('admin/layout/menu',[
    'title'=>'تنظیمات عمومی سایت'
])?>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

<div class="row  center-block">


    <?php
    if($error==null){

    }else{
        echo $error;
    }?>
    <form class="form-horizontal" method="post" enctype="multipart/form-data">
    <div  class="col-lg-10 col-lg-offset-1 ">

        <div style="padding: 2px 4px !important;" class="card-box">
            <h3>بخش کلی</h3>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">نام سایت </label>
            <div class="col-md-6">
                <input value="<?php echo $show['name'] ?>" name="fom[name]" type="text" class="form-control" placeholder="لطفا نام سایت خود را وارد نمائید">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">آدرس سایت </label>
            <div class="col-md-6">
                <input  style="text-align: left"  type="text" class="form-control" value="http://127.0.0.10" disabled>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">آدرس صفحه اصلی </label>
            <div class="col-md-6">
                <input value="<?php echo $show['home_page'] ?>" style="text-align: left"  type="text" class="form-control" name="fom[home_page]"  >
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">شعار سایت </label>
            <div class="col-md-6">
                <input value="<?php echo $show['titr'] ?>" name="fom[titr]" type="text" class="form-control" placeholder="لطفا شعاری زیبا برای سایت خود انتخاب نمایید">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">لوگوی سایت </label>
            <div class="col-md-6">
                <input  name="logo" type="file" class="form-control" placeholder="لطفا شعاری زیبا برای سایت خود انتخاب نمایید">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">توضیحاتی در مورد سایت </label>
            <div class="col-md-6">
                <textarea  name="fom[description]"  class="form-control" placeholder="توضیحی کوتاه و مختصر در مورد سایت خود وارد نمائید"><?php echo $show['description'] ?></textarea>
            </div>
        </div>




    </div>
    <div  class="col-lg-10 col-lg-offset-1 ">
        <div style="padding: 2px 4px !important;" class="card-box">
            <h3>اطلاعات تماس</h3>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label"> شماره تلفن </label>
            <div class="col-md-6">
                <input value="<?php echo $show['phone'] ?>" name="fom[phone]" type="text" class="form-control" placeholder="لطفا شماره تلفن خود را وارد نمائید">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">آدرس  </label>
            <div class="col-md-6">
                <input value="<?php echo $show['address'] ?>"  type="text" class="form-control" placeholder="لطفا آدرس مکان شرکت خود را در آن وارد کنید" name="fom[address]">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">ایمیل  </label>
            <div class="col-md-6">
                <input value="<?php echo $show['email'] ?>" name="fom[email]" type="text" class="form-control" placeholder="لطفا ایملی جهت برقراری ارتباط وارد نمائید">
            </div>
        </div>





    </div>
    <div  class="col-lg-10 col-lg-offset-1 ">
        <div style="padding: 2px 4px !important;" class="card-box">
            <h3> شبکه های اجتماعی</h3>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">  اینیستاگرام </label>
            <div class="col-md-6">
                <input value="<?php echo $show['instagram'] ?>"  type="text" name="fom[instagram]" class="form-control" placeholder="لطفا  آدرس اینیستاگرام  خود را وارد نمائید">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">تلگرام  </label>
            <div class="col-md-6">
                <input value="<?php echo $show['telegram'] ?>" placeholder="لطفا  آدرس تلگرام  خود را وارد نمائید"   type="text" class="form-control"  name="fom[telegram]">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">توییتر  </label>
            <div class="col-md-6">
                <input value="<?php echo $show['tw'] ?>" name="fom[tw]" type="text" class="form-control" placeholder="لطفا  آدرس توئیتر  خود را وارد نمائید">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">یوتیوب  </label>
            <div class="col-md-6">
                <input value="<?php echo $show['youtube'] ?>" name="fom[youtube]" type="text" class="form-control" placeholder="لطفا  آدرس یوتیوب  خود را وارد نمائید">
            </div>
        </div>





    </div>
        <div class="form-group">
            <button type="submit" name="btn"  class="btn btn-success waves-effect w-md waves-light m-b-5" style="font-size:18px;margin-right: 130px">ذخیره ی تنظیمات</button>
        </div>
                </form>
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

</body>
</html>
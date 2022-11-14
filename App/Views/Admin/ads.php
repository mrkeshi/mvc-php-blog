<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="/admin/assets/images/favicon.ico">

    <title><?php echo  $title?></title>

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
    'title'=>'مدیریت تبلیغات'
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
    <div class="col-lg-8 col-lg-offset-2">
<div class="card-box">
    <?php if($error!=null){
        echo $error;
    }
    ?>
    <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-md-2 control-label">تصویر ۱ </label>
            <img src="/<?php echo $value['img1']?>" width="80px" alt=""><br><br>
            <div class="col-md-10">
                <input name="file1" type="file" class="form-control" placeholder="لطفا نام دسته بندی را وارد نمائید"><br><br>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="example-email">لینک ۱</label>
            <div class="col-md-10">
                <div class="input-group">
                    <input value="<?php echo $value['link1']?>" style="text-align: left;width: 400px" id="example-input2-group1" name="from[link1]" class="form-control" placeholder="link image">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">تصویر 2 </label>
            <img src="/<?php echo $value['img2']?>" width="80px" alt=""><br><br>

            <div class="col-md-10">
                <input  name="file2" type="file" class="form-control" placeholder="لطفا نام دسته بندی را وارد نمائید">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="example-email">لینک 2</label>
            <div class="col-md-10">
                <div class="input-group">
                    <input value="<?php echo $value['link2']?>" style="text-align: left;width: 400px" id="example-input2-group1" name="from[link2]" class="form-control" placeholder="link image">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">تصویر 3 </label>
            <img src="/<?php echo $value['img3']?>" width="80px" alt=""><br><br>

            <div class="col-md-10">
                <input  name="file3" type="file" class="form-control" placeholder="لطفا نام دسته بندی را وارد نمائید">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="example-email">لینک 3</label>
            <div class="col-md-10">
                <div class="input-group">
                    <input value="<?php echo $value['link3']?>" style="text-align: left;width: 400px" id="example-input2-group1" name="from[link3]" class="form-control" placeholder="link image">
                </div>
            </div>
        </div>
            <div class="form-group">
                <button type="submit" name="btn"  class="btn btn-success waves-effect w-md waves-light m-b-5" style="font-size:18px;margin-right: 130px">ویرایش</button>
            </div>


    </form>
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
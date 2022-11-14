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
    <?php
    \Core\view::rander('admin/layout/menu', [
        'title' => 'پاترو اسلاید'
    ]) ?>
    <!-- Left Sidebar End -->


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <form method="post" enctype="multipart/form-data">
                    <div class="row">
                        <?php
                        if($error!=null){
                            echo $error[1];
                        }?>
                        <div class="col-lg-4">
                            <div class="card-box">
                                <style>
                                    h2 {
                                        margin-top: 0px;
                                    }
                                </style>
                                <h2>اسلاید ۱</h2>
                                <img height="150px" src="/<?php echo $value['img1'] ?>" alt="" width="150px"
                                     class="img-circle center-block"><br><br>

                                <input value="<?php echo $value['titr1'] ?>" style="text-align: right"
                                       id="example-input2-group1" name="from[titr1]" class="form-control"
                                       placeholder="سرتیتر">
                                <br> <textarea class="form-control" name="from[text1]" id="" cols="30" rows="10"
                                               placeholder="لطفا متن خود را وارد نمائید"><?php echo $value['text1'] ?></textarea>
                                <br><input type="file" name="img1" class="form-control">

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card-box">
                                <h2>اسلاید ۲</h2>
                                <img height="150px" src="/<?php echo $value['img2'] ?>" alt="" width="150px"
                                     class="img-circle center-block"><br><br>

                                <input value="<?php echo $value['titr2'] ?>" style="text-align: right"
                                       id="example-input2-group1" name="from[titr2]" class="form-control"
                                       placeholder="سرتیتر">
                                <br> <textarea class="form-control" name="from[text2]" id="" cols="30" rows="10"
                                               placeholder="لطفا متن خود را وارد نمائید"><?php echo $value['text2']?></textarea>
                                <br><input type="file" name="img2" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card-box">
                                <h2>اسلاید ۳</h2>
                                <img height="150px" src="/<?php echo $value['img3']?>" alt="" width="150px" class="img-circle center-block">
                                <br><br>
                                <input value="<?php echo $value['titr3']?>" style="text-align: right" id="example-input2-group1" name="from[titr3]"
                                       class="form-control" placeholder="سرتیتر">
                                <br> <textarea class="form-control" name="from[text3]" id="" cols="30" rows="10"
                                               placeholder="لطفا متن خود را وارد نمائید"><?php echo $value['text3']?></textarea>
                                <br><input type="file" name="img3" class="form-control">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-lg-offset-5">
                            <input type="submit" name="btn" class="form-control btn btn-info" value="ذخیره"><br><br>
                        </div>
                    </div>
                </form>          <!-- end row -->

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
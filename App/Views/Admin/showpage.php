<html lang="en" dir="rtl" style="" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="/admin/assets/images/favicon.ico">

    <title><?php echo $title?></title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="/admin/assets/plugins/morris/morris.css">

    <!-- App css -->
    <link href="/admin/assets/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css">
    <link href="/admin/assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="/admin/assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="/admin/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="/admin/assets/css/pages.css" rel="stylesheet" type="text/css">
    <link href="/admin/assets/css/menu.css" rel="stylesheet" type="text/css">
    <link href="/admin/assets/css/responsive.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/admin/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="/admin/https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="/admin/assets/js/modernizr.min.js"></script>

</head>


<body class="fixed-left widescreen">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
<?php
\Core\view::rander('admin/layout/menu',[
    'title'=>$title
])
?>
    <!-- Left Sidebar End -->


    <style>
        .red {
            display: flex;
            justify-content: space-between;
        }

        .answr span {
            margin: 10px 0px;
            font-size: 17px;
            display: block;
        }

        .title span {
            margin: 10px 0px;

            font-size: 18px;
            font-weight: bolder;
            display: block;
        }
    </style>
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card-box ">

                            <div class="red">
                                <style>
                                    .answr{
                                        margin-top: 5px;
                                    }
                                </style>

                                <div class="title">
                                    <span>نام صفحه</span>
                                    <span>آدرس</span>
                                    <span>تاریخ ساخت</span>
                                    <span>ساخته شده توسط</span>
                                    <span>تعداد کاراکتر</span>
                                    <span>آپدیت توسط</span>
                                    <span>تاریخ آپدیت</span>

                                </div>
                                <div class="answr">
                                    <span><?php echo $information['title']?></span>
                                    <span>https://site.ir/<?php echo $information['url']?></span>
                                    <span style="direction: ;text-align: right"><?php echo jdate(' d F Y   ',$information['date'])?></span>
                                    <span data-user=""><?php echo $writer->selectWrite($information['writer'])?></span>
                                    <?php
                                    $length=strlen($information['text']);
                                    ?>
                                    <span> <?php echo $length?></span>
                                    <span><?PHP if (empty($information['upby'])){
                                            echo 'آپدیت نشده';
                                        }else{
                                            echo $writer->selectWrite($information['writer']);
                                        }
                                        ?></span>
                                    <span><?PHP if (empty($information['up'])){
                                        echo 'آپدیت نشده';
                                        }else{
                                         echo jdate(' d F Y   ',$information['up']);
                                        }
                                        ?></span>

                                </div>
                            </div>
                            <a href="http://127.0.0.10/dashbord/listpage/edait/<?php echo $information['id']?>" style="margin-right: 95px" class="btn btn-primary btn-bordred waves-effect w-md waves-light m-b-5"> ویرایش</a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card-box">
                            <h2>محتویات</h2>
                            <div>
                                <?php
                                echo $information['text']
                                ?>
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


</body></html>

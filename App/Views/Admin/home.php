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
        'title'=>'نمایش تنظیمات سایدبار '
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
                    <div class="col-lg-12">
                        <div class="card-box">


                            <h4 class="header-title m-t-0 m-b-30">شما در اینجا تمام ویجت های صفحه ی اصلی را مشاهده می کنید</h4>

                            <p class="text-muted font-13 m-b-25">
                            </p>
                            <style>
                                th,tr{
                                    text-align: center !important;
                                }
                            </style>
                            <div class="table-responsive">

                                <table class="table m-0">
                                    <thead>
                                    <tr>
                                        <th> شمارنده</th>
                                        <th>نام</th>
                                        <th>نمایش</th>
                                        <th>ویرایش</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">۱</th>
                                            <td><span class="btn btn-info">باکس سه ستونه</span></td>
                                            <td><input <?php if($box==1){echo ' checked';} ?> data-s="<?php echo $box?>"  data-db="box_tbl" type="checkbox" class="form-control ik"></td>
                                            <td>
                                                <a href="http://127.0.0.10/dashbord/home/proboxs/" class="btn btn-danger waves-effect w-md waves-light m-b-5">ویرایش</a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">۲</th>
                                            <td><span class="btn btn-info">سکشن وسط</span></td>
                                            <td><input <?php if($section==1){echo ' checked';} ?> data-s="<?php echo $section?>"  data-db="section_tbl"  type="checkbox" class="form-control ik"></td>
                                            <td>
                                                <a href="http://127.0.0.10/dashbord/home/section/" class="btn btn-danger waves-effect w-md waves-light m-b-5">ویرایش</a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">۳</th>
                                            <td><span class="btn btn-info">اسلایدر </span></td>

                                            <td><input <?php if($slider==1){echo ' checked';} ?> data-s="<?php echo $slider?>"  data-db="slider_tbl"  type="checkbox" class="form-control ik"></td>
                                            <td>
                                                <a href="http://127.0.0.10/dashbord/home/slider/" class="btn btn-danger waves-effect w-md waves-light m-b-5">ویرایش</a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">۴</th>
                                            <td><span class="btn btn-info">انتخابگر۱ </span></td>

                                            <td><input <?php if($chapter1==1){echo ' checked';} ?> data-s="<?php echo $chapter1?>"  data-db="taber_tbl"  type="checkbox" class="form-control ik"></td>
                                            <td>
                                                <a href="http://127.0.0.10/dashbord/home/chapter/1" class="btn btn-danger waves-effect w-md waves-light m-b-5">ویرایش</a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">۵</th>
                                            <td><span class="btn btn-info">انتخابگر۲ </span></td>

                                            <td><input <?php if($chapter2==1){echo ' checked';} ?> data-s="<?php echo $chapter2?>"  data-db="taber_tbl"   type="checkbox" class="form-control ik"></td>
                                            <td>
                                                <a href="http://127.0.0.10/dashbord/home/chapter/2" class="btn btn-danger waves-effect w-md waves-light m-b-5">ویرایش</a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td><span class="btn btn-info">ویجت عمومی</span></td>

                                            <td><input disabled  type="checkbox" class="form-control ik"></td>
                                            <td>
                                                <a href="http://127.0.0.10/dashbord/sidebar/tab/" class="btn btn-danger disabled waves-effect w-md waves-light m-b-5">ویرایش</a>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- end col -->

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
<script>
    $('.ik').click(function () {
        $status=$(this).attr('data-s');
        $value=$(this).attr('data-db');
            if($status=='0'){
                $status=1;
            }else{
                $status=0;
            }
            $(this).attr('data-s',$status);
            $.ajax({
                type:'post',
                url:'http://127.0.0.10/dashbord/sidebar/ok',
                data:{
                    value:$value,
                    status:$status
                },
                error:function () {
                    alert('ERROR');
                },
                success:(resp)=>{
                }
            })
    })
</script>
</body>
</html>
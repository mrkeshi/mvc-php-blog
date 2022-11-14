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
        'title' => 'داشبورد',
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
                    <?php if ($countPost['show']) {

                        ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="card-box">
                                <div class="dropdown pull-right">


                                </div>

                                <h4 class="header-title m-t-0 m-b-30"> مطالب </h4>

                                <div class="widget-chart-1">
                                    <div class="widget-chart-box-1">
                                        <input data-plugin="knob" data-width="80" data-height="80"
                                               data-fgColor="#8c6493"
                                               data-bgColor="#f3f3f3"
                                               value="<?php echo round(($countPost['show'] * 100) / $countPost['all']) ?>"
                                               data-skin="tron" data-angleOffset="180" data-readOnly=true
                                               data-thickness=".15"/>
                                    </div>

                                    <div class="widget-detail-1">
                                        <h2 class="p-t-10 m-b-0"><?php echo $countPost['show'] ?></h2>
                                        <p class="text-muted"> مطالب نمایش داده شده</p>
                                    </div>
                                </div>

                            </div>
                        </div><!-- end col -->
                    <?php } ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card-box">
                            <div class="dropdown pull-right">

                                <?php


                                $l = $visit['lastday'];
                                $t = $visit['today'];

                                $visited = round((($t / $l) * 100) - 100);
                                if ($visited < 0) {
                                    $visited = 100 - round((($t / $l) * 100));
                                    $class = 'danger';
                                } else {
                                    $class = 'success';
                                }
                                $visitede = $visited;
                                if ($visited > 100) {
                                    $visitede = 100;
                                }
                                $visitede .= '%';
                                $visited .= '%';
                                ?>
<!--/////////////////////////  visitor  /////////////////////////////////-->

                            </div>

                            <h4 class="header-title m-t-0 m-b-30">بازدید کلی</h4>

                            <div class="widget-box-2">
                                <div class="widget-detail-2">
                                    <span class="badge badge-<?php echo $class ?> pull-left m-t-20"><?php echo $visited.' ' ?><i
                                                class="zmdi zmdi-trending-up"></i> </span>
                                    <h2 class="m-b-0"> <?php echo $visit['today'] ?> </h2>
                                    <p class="text-muted m-b-25">بازدید امروز</p>
                                </div>
                                <div class="progress progress-bar-<?php echo $class ?>-alt progress-sm m-b-0">
                                    <div class="progress-bar progress-bar-<?php echo $class ?>" role="progressbar"
                                         aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"
                                         style="width:<?php echo $visitede ?>;">
                                        <span class="sr-only">77% مجموع</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->
                    <?php if ($countComment['show']) { ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="card-box">
                                <div class="dropdown pull-right">


                                </div>

                                <h4 class="header-title m-t-0 m-b-30">نظرات دریافتی</h4>

                                <div class="widget-chart-1">
                                    <div class="widget-chart-box-1">
                                        <input data-plugin="knob" data-width="80" data-height="80"
                                               data-fgColor="#ffbd4a"
                                               data-bgColor="#FFE6BA"
                                               value="<?php echo round(($countComment['show'] * 100) / $countComment['all']) ?>"
                                               data-skin="tron" data-angleOffset="180" data-readOnly=true
                                               data-thickness=".15"/>
                                    </div>
                                    <div class="widget-detail-1">
                                        <h2 class="p-t-10 m-b-0"> <?php echo $countComment['show'] ?> </h2>
                                        <p class="text-muted">نظرات مورد تائید</p>
                                    </div>
                                </div>
                            </div>

                        </div><!-- end col -->
                    <?php } ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card-box">
                            <div class="dropdown pull-right">

                                <?php


                                $l2=$visitor['lastday'];
                                $t2=$visitor['today'];

                                $visitored=round((($t2/$l2)*100)-100);
                                if($visitored<0){
                                    $visitored=100-round((($t2/$l2)*100));
                                    $class2='danger';
                                }else{
                                    $class2='success';
                                }
                                $visitorede=$visitored;
                                if($visitored>100){
                                    $visitorede=100;
                                }
                                $visitorede.='%';
                                $visitored.='%';
                                ?>
                            </div>

                            <h4 class="header-title m-t-0 m-b-30">بازدید گنندگان </h4>

                            <div class="widget-box-2">
                                <div class="widget-detail-2">
                                    <span class="badge badge-<?php echo $class2?> pull-left m-t-20"><?php  echo  $visitored.' '?><i
                                                class="zmdi zmdi-trending-up"></i> </span>
                                    <h2 class="m-b-0"><?php echo $t2 ?></h2>
                                    <p class="text-muted m-b-25"> بازدید های امروز</p>
                                </div>
                                <div class="progress progress-bar-<?php echo $class2?>-alt progress-sm m-b-0">
                                    <div class="progress-bar progress-bar-<?php echo $class2?>" role="progressbar"
                                         aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                         style="width: <?php  echo  $visitorede?>;">
                                        <span class="sr-only">27% مجموع</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                </div>
                <!-- end row -->

                <!-- end row -->



                <!-- end row -->


                <div class="row">
                    <div class="col-lg-4">
                        <div class="card-box">
                            <div class="dropdown pull-right">
                                <a href="/admin/#" class="dropdown-toggle card-drop" data-toggle="dropdown"
                                   aria-expanded="false">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="dashbord/emailreceive">ایمیل ها</a></li>

                                </ul>
                            </div>

                            <h4 class="header-title m-t-0 m-b-30">جعبه دریافتی</h4>
                            <div class="inbox-widget nicescroll" style="height: 315px;">
                                <a href="dashbord/emailreceive">
                            <?php if ($email) {
                                foreach ($email as $itemx) {
                                    ?>

                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="/uploader/admin.png"
                                                                                 class="img-circle" alt=""></div>
                                                <p style="font-weight:<?php if ($itemx['status'] == 0) {
                                                    echo 'bolder';
                                                } ?>" class="inbox-item-author"><?php echo $itemx['name'] ?></p>
                                                <p class="inbox-item-text"><?php echo $itemx['text'] ?></p>
                                                <p class="inbox-item-date"><?php echo jdate(' h:i:s-Y/m/d') ?></p>
                                            </div>

                                <?php }
                            } ?>
                                        </a>

                                    </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-8">
                        <div class="card-box">
                            <div class="dropdown pull-right">
                                <a href="/admin/#" class="dropdown-toggle card-drop" data-toggle="dropdown"
                                   aria-expanded="false">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/dashbord/listPost">رفتن به صفحه ی مطالب</a></li>

                                </ul>
                            </div>

                            <h4 class="header-title m-t-0 m-b-30">آخرین مطالب </h4>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="">
                                    <tr>
                                        <th>آيدی</th>
                                        <th>نام</th>
                                        <th>مشاهده</th>
                                        <th>تاریخ</th>
                                        <th>وضعیت</th>
                                        <th>یوزر فرستنده</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if ($post) {
                                        foreach ($post as $val) {
                                            ?>
                                            <tr>
                                                <td><?php echo $val['id'] ?></td>
                                                <td><?php echo $val['title'] ?></td>
                                                <td><span class="label label-default"><a
                                                                href="/dashbord/listpost/show/<?php echo $val['id'] ?>">مشاهده</a></span>
                                                </td>
                                                <td><?php if (!empty($val['up'])) {
                                                        echo jdate('h:i:s-Y/m/d', $val['up']);
                                                    } else {
                                                        echo jdate('h:i:s-Y/m/d', $val['date']);

                                                    } ?></td>
                                                <td> <?php if ($val['status'] == 0) {
                                                        echo "<span class='label label-warning'>پیش نویس</span>";
                                                    } else {
                                                        echo "<span class='label label-success'>منتشر شده</span>";

                                                    } ?></td>
                                                <td><?php echo $val['writer'] ?></td>
                                            </tr>
                                        <?php }
                                    } ?>


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
            علیرضا کشاورز
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
<!-- Counter Up  -->
<script src="assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
<script src="assets/plugins/counterup/jquery.counterup.min.js"></script>

<!-- KNOB JS -->
<!--[if IE]>
<![endif]-->
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
<script src="assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
</body>
</html>
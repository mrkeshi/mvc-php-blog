<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="/admin/assets/images/favicon.ico">

    <title><?php echo $title?></title>

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
        'title'=>$title,
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
                            <?php if(isset($_GET['true'])){
                                if($_GET['true']=='yes'){
                                    echo '<p class="text-danger">???? ???????????? ?????? ????</p>';

                                }else{
                                    echo '<p class="text-danger">?????? ???? ??????</p>';
                                }
                            }
                            ?>

                            <h4 class="header-title m-t-0 m-b-30">?????? ???? ?????????? ????????  ???????? ?????? ?????????? ?????? ???? ???? ???????????? ???? ????????</h4>

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
                                        <th> ??????</th>
                                        <th>????????</th>
                                        <th>?????????? ?????? ????????</th>
                                        <th>????????</th>
                                        <th>??????</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if($information->showFiles()){
                                    foreach ($information->showFiles() as $value) {
                                        $n='true';
                                                $pass=['jpg','jpeg','png','gif','psd'];
                                                for ($i=0;$i<count($pass);$i++){
                                                    if($value['format']==$pass[$i]){
                                                                $n='false';
                                                    }else{
                                                       
                                                    }
                                                }
                                                        if($n=='false'){

                                                        }else{
                                        ?>
                                        <tr>
                                            <td><?php echo $value['title']?></td>
                                            <td><input style="text-align: left;font-size: 15px; width: 240px"
                                                       type="text" class="form-control" value="http://127.0.0.10/<?php echo $value['link']?>">
                                            </td>
                                            <td>
                                                <b data-user="<?php echo $value['writer']?>"><?php echo $writer->selectWrite('admin') ?></b>
                                            </td>
                                            <td>
                                                <span type="button" class="btn btn-inverse btn-rounded w-md waves-effect waves-light m-b-5"><?php echo $value['format']?></span>
                                            </td>

                                            <td>
                                                <a href="http://127.0.0.10/dashbord/up/files?del=<?php echo $value['id']?>" class="btn btn-warning waves-effect w-md waves-light m-b-5">??????</a>
                                            </td>
                                        </tr>
                                        <?php
                                    }}}
                                    ?>
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
            ???????? ??????????2016 ??.
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
        <h4 class="">??????????????</h4>
        <div class="notification-list nicescroll">
            <ul class="list-group list-no-border user-list">
                <li class="list-group-item">
                    <a href="/admin/#" class="user-list-item">
                        <div class="avatar">
                            <img src="/admin/assets/images/users/avatar-2.jpg" alt="">
                        </div>
                        <div class="user-desc">
                            <span class="name">?????????? ?????????? ????</span>
                            <span class="desc">?????? ?????????? ?????????? ????</span>
                            <span class="time">2 ???????? ??????</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/admin/#" class="user-list-item">
                        <div class="icon bg-info">
                            <i class="zmdi zmdi-account"></i>
                        </div>
                        <div class="user-desc">
                            <span class="name">?????? ?????? ????????</span>
                            <span class="desc">???????????? ???????? ???? ???????? ?????? ?????? ???????? ??????</span>
                            <span class="time">5 ???????? ??????</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/admin/#" class="user-list-item">
                        <div class="icon bg-pink">
                            <i class="zmdi zmdi-comment"></i>
                        </div>
                        <div class="user-desc">
                            <span class="name">???????? ????????</span>
                            <span class="desc">?????? ???????? ???????? ???? ?????????? ????????</span>
                            <span class="time">1 ?????? ??????</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item active">
                    <a href="/admin/#" class="user-list-item">
                        <div class="avatar">
                            <img src="/admin/assets/images/users/avatar-3.jpg" alt="">
                        </div>
                        <div class="user-desc">
                            <span class="name">?????????? ?????????? 2</span>
                            <span class="desc">???? ???????? ???? ???? ?????? ?????????? ?????????????? ????????</span>
                            <span class="time">2 ?????? ??????</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item active">
                    <a href="/admin/#" class="user-list-item">
                        <div class="icon bg-warning">
                            <i class="zmdi zmdi-settings"></i>
                        </div>
                        <div class="user-desc">
                            <span class="name">??????????????</span>
                            <span class="desc">?????????????? ???????? ???????? ???????????? ?? ?????????? ?????? ?????????? ??????</span>
                            <span class="time">1 ?????? ??????</span>
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

</body>
</html>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="/admin/assets/images/favicon.ico">

    <!-- App title -->
    <title><?php echo $title ?></title>

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
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="assets/js/modernizr.min.js"></script>

</head>
<body>

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class="text-center">
        <a href="/admin/index.html" class="logo"><span>وبسایت <span>من</span></span></a>
        <h5 class="text-muted m-t-0 font-600">اولین سیستم مدیریت محتوای ساخته شده توسط من</h5>
    </div>
    <div class="m-t-40 card-box">
        <div class="text-center">
            <h4 class="text-uppercase font-bold m-b-0">ورود</h4>
        </div>
        <div class="panel-body">

            <form class="form-horizontal m-t-20" action="" method="post">

                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" name="frm[username]"
                               placeholder="نام کاربری">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" name="frm[password]" required=""
                               placeholder="پسورد">
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <p class="text-danger">
                            <?php if (isset($message)){
                                echo '* '.$message;
                            } ?>            </p>


                    </div>
                </div>

                <div class="form-group text-center m-t-30">
                    <div class="col-xs-12">
                        <button name="btn" class="btn btn-custom btn-bordred btn-block waves-effect waves-light"
                                type="submit">ورود
                        </button>
                    </div>
                </div>

                <div class="form-group m-t-30 m-b-0">
                    <div class="col-sm-12">
                    </div>
                </div>
            </form>

        </div>
    </div>
    <!-- end card-box-->

    <div class="row">
        <div class="col-sm-12 text-center">
        </div>
    </div>

</div>
<!-- end wrapper page -->


<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap-rtl.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>

<script src="assets/plugins/toastr/toastr.min.js"></script>
<!-- App js -->
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>
</body>
</html>
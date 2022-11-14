<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App title -->
    <title>آقای ادمین | قالب واکنشگرا مدیریتی</title>

    <!-- Plugins css-->
    <link href="assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
    <link href="assets/plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/select2/dist/css/select2-bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
    <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="assets/plugins/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- App CSS -->
    <link href="assets/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="assets/js/modernizr.min.js"></script>

</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="index.html" class="logo"><span>آقای<span>ادمین</span></span><i class="zmdi zmdi-layers"></i></a>
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
                        <h4 class="page-title">افزودن کاربر</h4>
                    </li>
                </ul>

                <!-- Right(Notification and Searchbox -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <!-- Notification -->
                        <div class="notification-box">
                            <ul class="list-inline m-b-0">
                                <li>
                                    <a href="javascript:void(0);" class="right-bar-toggle">
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
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                </ul>

            </div><!-- end container -->
        </div><!-- end navbar -->
    </div>
    <!-- Top Bar End -->

    <style>
        .btn-success{
            margin-right: 120px;
        }
    </style>
    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">

            <!-- User -->
            <div class="user-box">
                <div class="user-img">
                    <img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                    <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
                </div>
                <h5><a href="#">علی یدالهی</a> </h5>
                <ul class="list-inline">
                    <li>
                        <a href="#" >
                            <i class="zmdi zmdi-settings"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="text-custom">
                            <i class="zmdi zmdi-power"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End User -->

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <ul>
                    <li class="text-muted menu-title">دسته بندی ها</li>

                    <li>
                        <a href="index.html" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> داشبورد </span> </a>
                    </li>

                    <li>
                        <a href="typography.html" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span> نوشته ها </span> </a>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i> <span> رابط کاربی </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="ui-buttons.html">دکمه ها</a></li>
                            <li><a href="ui-cards.html">کارد</a></li>
                            <li><a href="ui-draggable-cards.html">کارت های جابه جا شونده</a></li>
                            <li><a href="ui-checkbox-radio.html">چک باکس ها</a></li>
                            <li><a href="ui-material-icons.html">آیکون های طراحی متریال</a></li>
                            <li><a href="ui-font-awesome-icons.html">فونت آسوم</a></li>
                            <li><a href="ui-themify-icons.html">تم فی آیکون</a></li>
                            <li><a href="ui-modals.html">مدل ها</a></li>
                            <li><a href="ui-notification.html">اطلاعات</a></li>
                            <li><a href="ui-range-slider.html">نوار تغیرات</a></li>
                            <li><a href="ui-components.html">اجزا</a>
                            <li><a href="ui-sweetalert.html">هشدار ها</a>
                            <li><a href="ui-treeview.html">نمایش درختی</a>
                            <li><a href="ui-widgets.html">ویجت ها</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect active"><i class="zmdi zmdi-collection-text"></i><span class="label label-warning pull-right">7</span><span> فرم ها </span> </a>
                        <ul class="list-unstyled">
                            <li><a href="form-elements.html">فرم های عمومی</a></li>
                            <li class="active"><a href="form-advanced.html">فرم های پیشرفته</a></li>
                            <li><a href="form-validation.html">فرم ولیدشن</a></li>
                            <li><a href="form-wizard.html">فرم پیشفرض</a></li>
                            <li><a href="form-fileupload.html">فرم آپلود</a></li>
                            <li><a href="form-wysiwig.html">ادیتور 1</a></li>
                            <li><a href="form-xeditable.html">ادیتور 2</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span> جدول ها </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="tables-basic.html">جدول پیشفرض</a></li>
                            <li><a href="tables-datatable.html">جدول داده ها</a></li>
                            <li><a href="tables-responsive.html">جدول واکنش گرا</a></li>
                            <li><a href="tables-editable.html">جدول تغیرات</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect "><i class="zmdi zmdi-chart"></i><span> چارت ها </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="chart-flot.html">چارت شماره 1</a></li>
                            <li><a href="chart-morris.html">چارت شماره 2</a></li>
                            <li><a href="chart-chartist.html">چارت شماره 3</a></li>
                            <li><a href="chart-chartjs.html">چارت شماره 4</a></li>
                            <li><a href="chart-other.html">چارت شماره 5</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="calendar.html" ><i class="zmdi zmdi-calendar"></i><span> تقویم </span></a>
                    </li>

                    <li>
                        <a href="inbox.html" class="waves-effect"><i class="zmdi zmdi-email"></i><span class="label label-purple pull-right">جدید</span><span> ایمیل </span></a>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-collection-item"></i><span> برگه ها </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="page-starter.html">برگه خالی</a></li>
                            <li><a href="page-login.html">ورود</a></li>
                            <li><a href="page-register.html">ثبت نام</a></li>
                            <li><a href="page-recoverpw.html">فراموشی رمز</a></li>
                            <li><a href="page-lock-screen.html">قفل صفحه</a></li>
                            <li><a href="page-confirm-mail.html">تنظیمات ایمیل</a></li>
                            <li><a href="page-404.html">خطای 404</a></li>
                            <li><a href="page-500.html">خطای 500</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect "><i class="zmdi zmdi-layers"></i><span>دیگر صفحات </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="extras-projects.html">پروژ ه ها</a></li>
                            <li><a href="extras-tour.html">تور آزمایشی</a></li>
                            <li><a href="extras-taskboard.html">مدیرها</a></li>
                            <li><a href="extras-taskdetail.html">جزئیات</a></li>
                            <li><a href="extras-profile.html">پروفایل </a></li>
                            <li><a href="extras-maps.html">نقشه</a></li>
                            <li><a href="extras-contact.html">لیست تماس</a></li>
                            <li><a href="extras-pricing.html">فروش</a></li>
                            <li><a href="extras-timeline.html">خط زمان</a></li>
                            <li><a href="extras-invoice.html">صورت حساب</a></li>
                            <li><a href="extras-faq.html">سوال و جواب</a></li>
                            <li><a href="extras-gallery.html">گالری</a></li>
                            <li><a href="extras-email-template.html">تم های ایمیل</a></li>
                            <li><a href="extras-maintenance.html">تعمیرات</a></li>
                            <li><a href="extras-comingsoon.html">به زودی</a></li>
                        </ul>
                    </li>

                </ul>
                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>

        </div>

    </div>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8">
                        <div class="card-box">


                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">نام کاربری</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="نام کاربری">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="example-email">ایمیل</label>
                                    <div class="col-md-10">
                                        <input type="email" id="example-email" name="example-email" class="form-control" placeholder="ایمیل">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">پسورد</label>
                                    <div class="col-md-10">
                                        <input type="password" class="form-control" placeholder="لطفا پسورد کاربر را وارد نمائید">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label">نام</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="اسم کاربر را بصورت کامل وارد نمایید">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">عکس</label>
                                    <div class="col-md-10">
                                        <input type="file" class="form-control fileupload" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">توضیحات تکمیلی</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" rows="3" placeholder="لطفا توضیح کوتاهی وارد کنید">بدون توضیح!!</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-success btn-bordred waves-effect w-md waves-light m-b-5">ثبت </button>
                                </div>
                            </form>
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-4">
                        <div class="card-box">
                            <style>
                                .flex{

                                    display: flex;
                                    justify-content: space-between;

                                }
                                .flex label{
                                    float: ;
                                    margin-top: 5px;
                                }
                            </style>

                            <h4 class="header-title m-t-0 m-b-30">تعیین سطح دسترسی</h4>


                            <div class="switchery-demo flex">
                                <label for="">امکان ارسال مطلب</label>
                                <input type="checkbox" checked data-plugin="switchery" data-color="#00b19d"/>
                            </div>
                            <div class="switchery-demo flex">
                                <label for="">ارسال مستقیم</label>
                                <input type="checkbox"  data-plugin="switchery" data-color="#00b19d"/>
                            </div>
                            <div class="switchery-demo flex">
                                <label for="">تایید نظرات مهمان</label>
                                <input type="checkbox" checked data-plugin="switchery" data-color="#00b19d"/>
                            </div>
                            <div class="switchery-demo flex">
                                <label for="">مدیریت سایر کاربران</label>
                                <input type="checkbox"  data-plugin="switchery" data-color="#00b19d"/>
                            </div>
                            <div class="switchery-demo flex">
                                <label for="">مدیریت مطالب ارسالی کاربران</label>
                                <input type="checkbox"  data-plugin="switchery" data-color="#00b19d"/>
                            </div>
                            <div class="switchery-demo flex">
                                <label for="">مدیریت ایمیل ها</label>
                                <input type="checkbox"  data-plugin="switchery" data-color="#00b19d"/>
                            </div>


                            <div class="switchery-demo flex">
                                <label for="">مدیریت برگه ها</label>
                                <input type="checkbox"   data-plugin="switchery" data-color="#00b19d"/>
                            </div>

                            <div class="switchery-demo flex">
                                <label for="">تعریف یوزر ساده</label>
                                <input type="checkbox" checked   data-plugin="switchery" data-color="#00b19d"/>
                            </div>
                            <div class="switchery-demo flex">
                                <label for="">مدیریت ویجت ها</label>
                                <input type="checkbox"   data-plugin="switchery" data-color="#00b19d"/>
                            </div>
                            <div class="switchery-demo flex">
                                <label for="">مدیریت منو ها</label>
                                <input type="checkbox"   data-plugin="switchery" data-color="#00b19d"/>
                            </div>





                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->


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
        <a href="javascript:void(0);" class="right-bar-toggle">
            <i class="zmdi zmdi-close-circle-o"></i>
        </a>
        <h4 class="">اعلانات</h4>
        <div class="notification-list nicescroll">
            <ul class="list-group list-no-border user-list">
                <li class="list-group-item">
                    <a href="#" class="user-list-item">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-2.jpg" alt="">
                        </div>
                        <div class="user-desc">
                            <span class="name">کاربر شماره یک</span>
                            <span class="desc">متن کاربر شماره یک</span>
                            <span class="time">2 ساعت قبل</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="#" class="user-list-item">
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
                    <a href="#" class="user-list-item">
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
                    <a href="#" class="user-list-item">
                        <div class="avatar">
                            <img src="assets/images/users/avatar-3.jpg" alt="">
                        </div>
                        <div class="user-desc">
                            <span class="name">کاربر شماره 2</span>
                            <span class="desc">با سلام من یک متن کاملا آزمایشی هستم</span>
                            <span class="time">2 روز قبل</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item active">
                    <a href="#" class="user-list-item">
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

<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap-rtl.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>

<!-- Plugins Js -->
<script src="assets/plugins/switchery/switchery.min.js"></script>
<script src="assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript" src="assets/plugins/multiselect/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
<script src="assets/plugins/select2/dist/js/select2.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
<script src="assets/plugins/moment/moment.js"></script>
<script src="assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="assets/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

<!-- App js -->
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>

<script>
    jQuery(document).ready(function() {

        //advance multiselect start
        $('#my_multi_select3').multiSelect({
            selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='جستجو...'>",
            selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='جستجو...'>",
            afterInit: function (ms) {
                var that = this,
                    $selectableSearch = that.$selectableUl.prev(),
                    $selectionSearch = that.$selectionUl.prev(),
                    selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                    selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                    .on('keydown', function (e) {
                        if (e.which === 40) {
                            that.$selectableUl.focus();
                            return false;
                        }
                    });

                that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                    .on('keydown', function (e) {
                        if (e.which == 40) {
                            that.$selectionUl.focus();
                            return false;
                        }
                    });
            },
            afterSelect: function () {
                this.qs1.cache();
                this.qs2.cache();
            },
            afterDeselect: function () {
                this.qs1.cache();
                this.qs2.cache();
            }
        });

        // Select2
        $(".select2").select2();

        $(".select2-limiting").select2({
            maximumSelectionLength: 2
        });

    });

    //Bootstrap-TouchSpin
    $(".vertical-spin").TouchSpin({
        verticalbuttons: true,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary",
        verticalupclass: 'ti-plus',
        verticaldownclass: 'ti-minus'
    });
    var vspinTrue = $(".vertical-spin").TouchSpin({
        verticalbuttons: true
    });
    if (vspinTrue) {
        $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
    }

    $("input[name='demo1']").TouchSpin({
        min: 0,
        max: 100,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary",
        postfix: '%'
    });
    $("input[name='demo2']").TouchSpin({
        min: -1000000000,
        max: 1000000000,
        stepinterval: 50,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary",
        maxboostedstep: 10000000,
        prefix: '$'
    });
    $("input[name='demo3']").TouchSpin({
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
    });
    $("input[name='demo3_21']").TouchSpin({
        initval: 40,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
    });
    $("input[name='demo3_22']").TouchSpin({
        initval: 40,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
    });

    $("input[name='demo5']").TouchSpin({
        prefix: "کم کن",
        postfix: "زیاد کن",
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
    });
    $("input[name='demo0']").TouchSpin({
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
    });

    // Time Picker
    jQuery('#timepicker').timepicker({
        defaultTIme : false
    });
    jQuery('#timepicker2').timepicker({
        showMeridian : false
    });
    jQuery('#timepicker3').timepicker({
        minuteStep : 15
    });

    //colorpicker start

    $('.colorpicker-default').colorpicker({
        format: 'hex'
    });
    $('.colorpicker-rgba').colorpicker();

    // Date Picker
    jQuery('#datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    jQuery('#datepicker-inline').datepicker();
    jQuery('#datepicker-multiple-date').datepicker({
        format: "mm/dd/yyyy",
        clearBtn: true,
        multidate: true,
        multidateSeparator: ","
    });
    jQuery('#date-range').datepicker({
        toggleActive: true
    });

    //Date range picker
    $('.input-daterange-datepicker').daterangepicker({
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-default',
        cancelClass: 'btn-primary'
    });
    $('.input-daterange-timepicker').daterangepicker({
        timePicker: true,
        format: 'MM/DD/YYYY h:mm A',
        timePickerIncrement: 30,
        timePicker12Hour: true,
        timePickerSeconds: false,
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-default',
        cancelClass: 'btn-primary'
    });
    $('.input-limit-datepicker').daterangepicker({
        format: 'MM/DD/YYYY',
        minDate: '06/01/2016',
        maxDate: '06/30/2016',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-default',
        cancelClass: 'btn-primary',
        dateLimit: {
            days: 6
        }
    });

    $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

    $('#reportrange').daterangepicker({
        format: 'MM/DD/YYYY',
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2016',
        maxDate: '12/31/2016',
        dateLimit: {
            days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
            'امروز': [moment(), moment()],
            'دیروز': [moment().subtract(1, 'روز '), moment().subtract(1, 'روز')],
            'یک هفته قبل': [moment().subtract(6, 'روز'), moment()],
            'یک ماه قبل': [moment().subtract(29, 'روز'), moment()],
            'در این ماه': [moment().startOf('ماه'), moment().endOf('ماه')],
            'ماه قبل': [moment().subtract(1, 'ماه').startOf('ماه'), moment().subtract(1, 'ماه').endOf('ماه')]
        },
        opens: 'چپ',
        drops: 'پایین',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-success',
        cancelClass: 'btn-default',
        separator: ' تا ',
        locale: {
            applyLabel: 'قبول',
            cancelLabel: 'لغو',
            fromLabel: 'فورم',
            toLabel: 'تا',
            customRangeLabel: 'متغییر',
            daysOfWeek: ['یک شنبه', 'دو شنبه', 'سه شنبه', 'جهارشنبه', 'پنج شنبه', 'جمعه', 'شنبه'],
            monthNames: ['دی', 'بهمن', 'اسفند', 'فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور', 'مهر', 'آبان', 'آذر'],
            firstDay: 1
        }
    }, function (start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    });

    //Bootstrap-MaxLength
    $('input#defaultconfig').maxlength()

    $('input#thresholdconfig').maxlength({
        threshold: 20
    });

    $('input#moreoptions').maxlength({
        alwaysShow: true,
        warningClass: "label label-success",
        limitReachedClass: "label label-danger"
    });

    $('input#alloptions').maxlength({
        alwaysShow: true,
        warningClass: "label label-success",
        limitReachedClass: "label label-danger",
        separator: ' خارج از ',
        preText: 'ورودی شما ',
        postText: ' کاراکتر مورد قبول.',
        validate: true
    });

    $('textarea#textarea').maxlength({
        alwaysShow: true
    });

    $('input#placement').maxlength({
        alwaysShow: true,
        placement: 'top-left'
    });
</script>

</body>
</html>
<!DOCTYPE html>
<html lang="en" dir="rtl">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
<meta name="author" content="Coderthemes">

<!-- App Favicon -->
<link rel="shortcut icon" href="/admin/assets/images/favicon.ico">

<!-- App title -->
<title><?php echo $title?></title>

<!-- App CSS -->
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

    <!-- Left Sidebar End -->

<?php
\Core\view::rander('admin/layout/menu',[
    'title'=>'افزودن نمونه کار',
]);
?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <style>
                    .btn-success{
                        margin:20px 190px 0px 0px !important;
                    }
                </style>
                <div class="row">
                    <style>
                        .ier{
                            margin: 0px;
                            width: 200px;
                        }
                        .in{
                            padding-top:5px;
                        }
                        select{

                        }
                    </style>
                    <div class="col-sm-8">
                        <div class="card-box">
<?php
if($error!=Null){
    echo $error;
}
?>
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label class="col-md-2 control-label">نام </label>
                                    <div class="col-md-10">
                                        <input type="text" name="form[title]" class="form-control" placeholder="لطفا نام نمونه کار خود را وارد نمائید">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="example-email">آدرس</label>
                                    <div class="col-md-10">
                                        <div class="input-group">
                                            <input name="form[url]" style="text-align: left"  id="example-input2-group1"  class="form-control" placeholder="url work">
                                            <span class="input-group-addon " style="font-size: 18px;">http://site.ir/work</span>
                                        </div>
                                    </div>
                                </div>

                                <textarea id="elm1" name="form[text]"></textarea><br>

                                    <h2 class="ier">وضعیت نمایش</h2>
                                    <select name="form[status]" class="form-control">
                                        <option value="1">منتشر می شود</option>
                                        <option value="0"> به عنوان پیش نویس ذخیره میشود</option>

                                    </select>

                                <div class="form-group">
                                    <button type="submit" style="margin-top: 20px;margin: 20px 410px 0px 0px;font-size:23px "  name="btn" class="btn btn-success waves-effect w-md waves-light m-b-5" style="!important;margin-right: 130px">افزودن نمونه کار ی جدید</button>
                                </div>


                        </div>
                    </div><!-- end col -->

                    <div class="col-sm-4">
                        <div class="card-box in">
                            <h2 class="ier">انتخاب دسته</h2>
                            <select name="form[cat_id]" class="form-control">
                                <?php
                                if($cat){
                                    foreach ($cat as $value) {


                                        ?>
                                        <option value="0">هیچی</option>
                                        <option value="<?php echo $value['id']?>"><?php echo $value['title']?></option>
                                        <?php
                                    }}
?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">

                    </div>
                    <div class="col-sm-4">
                        <div class="card-box in">
                            <h2 class="ier">اطلاعات  </h2>
                            <label for="">مکان:</label>
                            <input name="form[map]" type="text" class="form-control" placeholder="مکان مثلا اروپا"><br>
                            <label for="">امتیاز:</label>
                            <input name="form[star]" type="number" maxlength="5" minlength="1" placeholder="حداقل ۱ و حداکثر ۵" class="form-control"><br>
                            <label for="">مشتری:</label>
                            <input name="form[buy]" type="text" class="form-control" placeholder="مشتری"><br>
                            <label for="">تاریخ :</label>
                            <input name="form[date]" type="text" class="form-control" placeholder="تاریخ تحویل پروژه"><br>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card-box in">
                            <h2 class="ier">تصویر پیش نمایش</h2>
                            <input name="file" type="file" class="form-control"><br>


                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card-box in">
                            <h2 class="ier">اسلایدر نمونه کار</h2>
                            <input name="form[dt1]" placeholder="توضیحات 1" type="text" class="form-control"><br>
                            <input name="file1" type="file" class="form-control"><br>
                            <input name="form[dt2]" placeholder="توضیحات 2" type="text" class="form-control"><br>
                            <input name="file2" type="file"  class="form-control"><br>
                            <input name="form[dt3]" placeholder="توضیحات 3" type="text" class="form-control"><br>
                            <input name="file3" class="form-control" type="file"><br>
                            <input name="form[dt4]" placeholder="توضیحات 4" type="text" class="form-control"><br>
                            <input name="file4" type="file" class="form-control"><br>

                        </div>

                    </div>

                    </form>
                </div>
                <!-- End row -->

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
        <a src="/admin//admin/javascript:void(0);" class="right-bar-toggle">
            <i class="zmdi zmdi-close-circle-o"></i>
        </a>
        <h4 class="">اعلانات</h4>
        <div class="notification-list nicescroll">
            <ul class="list-group list-no-border user-list">
                <li class="list-group-item">
                    <a src="/admin//admin/#" class="user-list-item">
                        <div class="avatar">
                            <img src="/admin//admin/assets/images/users/avatar-2.jpg" alt="">
                        </div>
                        <div class="user-desc">
                            <span class="name">کاربر شماره یک</span>
                            <span class="desc">متن کاربر شماره یک</span>
                            <span class="time">2 ساعت قبل</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a src="/admin//admin/#" class="user-list-item">
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
                    <a src="/admin//admin/#" class="user-list-item">
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
                    <a src="/admin//admin/#" class="user-list-item">
                        <div class="avatar">
                            <img src="/admin//admin/assets/images/users/avatar-3.jpg" alt="">
                        </div>
                        <div class="user-desc">
                            <span class="name">کاربر شماره 2</span>
                            <span class="desc">با سلام من یک متن کاملا آزمایشی هستم</span>
                            <span class="time">2 روز قبل</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item active">
                    <a src="/admin//admin/#" class="user-list-item">
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
<script src="/admin/assets/js/jquery.min.js"></script>
<script src="/admin/assets/js/bootstrap-rtl.min.js"></script>
<script src="/admin/assets/js/detect.js"></script>
<script src="/admin/assets/js/fastclick.js"></script>
<script src="/admin/assets/js/jquery.slimscroll.js"></script>
<script src="/admin/assets/js/jquery.blockUI.js"></script>
<script src="/admin/assets/js/waves.js"></script>
<script src="/admin/assets/js/jquery.nicescroll.js"></script>
<script src="/admin/assets/js/jquery.scrollTo.min.js"></script>

<!--form wysiwig js-->
<script src="/admin/assets/plugins/tinymce/tinymce.min.js"></script>

<!-- App js -->
<script src="/admin/assets/js/jquery.core.js"></script>
<script src="/admin/assets/js/jquery.app.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        if($("#elm1").length > 0){
            tinymce.init({
                selector: "textarea#elm1",
                theme: "modern",
                height:300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "rtl insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ]
            });
        }
    });
</script>

</body>
</html>
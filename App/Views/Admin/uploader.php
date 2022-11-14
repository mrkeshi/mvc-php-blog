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
    'title'=>'افزودن  دسته '
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
        echo $error[1];
    }
    ?>
    <form id="form" class="form-horizontal" role="form" method="post">
        <div class="form-group">
            <label class="col-md-2 control-label">عنوان</label>
            <div class="col-md-10">
                <input required name="form[title]" type="text" class="form-control" placeholder="لطفا نام رسانه را وارد نمائید">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="example-email">توضیحات</label>
            <div class="col-md-10">

                <input required  id="example-input2-group1" name="form[description]" class="form-control" placeholder="توضیحات فایل">

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="example-email">فایل</label>
            <div  class="col-md-10">

                <input type="file" required  id="example-input2-group1" name="file" class="form-control" placeholder="توضیحات فایل">

            </div>
        </div>
        <div style="margin-right: 90px" class="col-sm-10">
            <div class="progress">
                <div class="progress-bar bg-success progress-bar-striped" style="width:0%"></div>
            </div>
        </div><br><br>

 <div style="width: 400px" id="result">

 </div>
            <div class="form-group">
                <button id="btn"  name="btn"  class="btn btn-success waves-effect w-md waves-light m-b-5" style="font-size:18px;margin-right: 130px">افزودن رسانه</button>
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
    <div class="side-bar right-bar">
        <a href="/admin/javascript:void(0);" class="right-bar-toggle">
            <i class="zmdi zmdi-close-circle-o"></i>
        </a>
        <h4 class="">اعلانات</h4>
        <div class="notification-list nicescroll">
            <ul class="list-group list-no-border user-list">
                <li class="list-group-item">
                    <a href="/admin/#" class="user-list-item">
                        <div class="avatar">
                            <img src="/admin/assets/images/users/avatar-2.jpg" alt="">
                        </div>
                        <div class="user-desc">
                            <span class="name">کاربر شماره یک</span>
                            <span class="desc">متن کاربر شماره یک</span>
                            <span class="time">2 ساعت قبل</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/admin/#" class="user-list-item">
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
                    <a href="/admin/#" class="user-list-item">
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
                    <a href="/admin/#" class="user-list-item">
                        <div class="avatar">
                            <img src="/admin/assets/images/users/avatar-3.jpg" alt="">
                        </div>
                        <div class="user-desc">
                            <span class="name">کاربر شماره 2</span>
                            <span class="desc">با سلام من یک متن کاملا آزمایشی هستم</span>
                            <span class="time">2 روز قبل</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item active">
                    <a href="/admin/#" class="user-list-item">
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
$('#btn').click(function (e) {
    e.preventDefault();

    $data = new FormData($("#form")[0]);

  $.ajax({
      url:"http://127.0.0.10/dashbord/up",
      type:'post',
      contentType:false,
        processData:false,
        data:$data,
      xhr:function(){
    var xhr=new XMLHttpRequest();
        xhr.upload.addEventListener('progress',function (e) {
            var prog = Math.round((e.loaded / e.total) * 100);
            $('.bg-success').css('width',prog+'%');
            // $("").attr("data-",prog);
        });
          return xhr;
      },
    success:function (res) {
          if(res==true){
              $('#result').html("<p class='alert alert-success'>با موفقیت آپلود شد</p>");
              $('#result p').delay(3000).fadeOut();
          }else{
              $('#result').html("<p class='alert alert-danger'>خطا در انجام آپلود</p>")

          }
    },

      error:function () {
          $('#result').html("<p class='alert alert-danger'>خطا در انجام آپلود</p>")

    }
  })

})

</script>
</body>
</html>
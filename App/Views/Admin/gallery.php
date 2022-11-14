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
<?php
\Core\view::rander('admin/layout/menu',[
        'title'=>$title
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
                <style>
                    .btn-success{
                       margin:20px 340px 0px 0px !important;

                    }
                    .btnn {
                        border-top: 1px solid;
                        background: #fff;
                        margin-top: 20px;
                        font-size: 18px;
                        padding: 0px 30px 5px 30px;
                        border-radius: 5px;
                    }
                    .spn{
                        /* border: 1px solid; */
                        margin: 0px 5px;
                        cursor: pointer;
                    }
                    }
                </style>
                <div class="row">
                    <div class="col-sm-12"><div id="result">

                        </div>
<?php
if($value){
    foreach ($value as $item){
        $n='true';
        $pass=['jpg','jpeg','png','gif','psd'];
        for ($i=0;$i<count($pass);$i++){
            if($item['format']==$pass[$i]){
                $n='false';
            }else{

            }
        }
        if($n=='true'){

        }else{
?>
                        <div data-id="<?php echo $item['id']?>" style="width: 210px;min-height:260px;padding: 5px;margin: 10px" class="card-box nc col-sm-4">
                            <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a data-id="<?php echo $item['id']?>" href="#" class="tr text-danger">حذف</a></li>

                                </ul>
                            </div>

                            <h4 style="margin-bottom: 10px !important;" class="header-title m-t-0 m-b-30"><?php echo $item['writer']?></h4>



                                    <a href="/<?php echo $item['link']?>" class="image-popup" title="Screenshot-1">
                                        <img width="200px" height="100px" src="/<?php echo $item['link']?>" class="thumb-img" alt="work-thumbnail">
                                    </a>
                                    <h4><?php echo $item['title']?></h4>
                            <p class="text-muted">
                            <?php echo $item['description']?>
                            </p>
                            <div class="btnn">
                                <span  class="spn reza" data-link="/<?php echo $item['link']?>">کپی لینک</span>
                                <span class="spn mahdi" data-tag="<img src=http://127.0.0.10/<?php echo $item['link'] ?> alt='<?php echo $item['title']?>' title='<?php echo $item['title']?>' >">کپی تگ</span>
                            </div>


                        </div>
                        <?php
                        }}}
                        ?>
                    </div><!-- end col -->
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
<script>
    $('.reza').click(function(){
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val('http://127.0.0.10'+$(this).attr('data-link')).select();
        document.execCommand("copy");
        $temp.remove();
    });
    $('.mahdi').click(function(){

        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(this).attr('data-tag')).select();
        document.execCommand("copy");
        $temp.remove();
    });
$('.tr').click(function () {
    $al=$(this);

    $id=$(this).attr('data-id');
$.ajax({
    url:"http://127.0.0.10/dashbord/gallery/del",
    type:'post',
    data:{id:$id},
    success:function (resp) {
if(resp==true){
$(".nc[data-id="+$id+"]").fadeOut();
}else{
    $('#result').html("<p class=\"alert alert-danger\">خطا در انجام عملیات</p>")

}
    }
})
})
</script>
</body>
</html>
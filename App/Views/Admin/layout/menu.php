<div class="topbar">
<?php
$obj=new \App\Model\Admin\adminPanel();
$result=$obj->selectInformation();
$obj2=new \App\Model\Admin\posts();
$obj2->countComment();
?>
    <!-- LOGO -->
    <div class="topbar-left">
        <a href="index.html" class="logo"><span>وبسایت <span>من </span></span><i class="zmdi zmdi-layers"></i></a>
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
                    <h4 class="page-title"><?php echo $title?></h4>
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


<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!-- User -->
        <div class="user-box">
            <div class="user-img">
                <img src="/admin/assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
            </div>
            <h5><a href="#"><?php echo $result['name']?></a> </h5>
            <ul class="list-inline">
                <li>
                    <a href="http://127.0.0.10/dashbord/publicsetting" >
                        <i class="zmdi zmdi-settings"></i>
                    </a>
                </li>

                <li>
                    <a href="http://127.0.0.10/dashbord/logout" class="text-custom">
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
                    <a href="http://127.0.0.10/<?php echo \Core\Config::ADMINPAGE?>" class="waves-effect active"><i class="zmdi zmdi-view-dashboard"></i> <span> داشبورد </span> </a>
                </li>



                <li class="has_sub">
                    <a  class="waves-effect"><i class="fa fa-image"></i> <span> رسانه</span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="/<?php echo \Core\Config::ADMINPAGE?>/uploader">آپلود</a></li>
                        <li><a href="/<?php echo \Core\Config::ADMINPAGE?>/gallery">گالری</a></li>
                        <li><a href="/<?php echo \Core\Config::ADMINPAGE?>/up/files">فایل ها</a></li>
                    </ul>
                </li>



                <li class="has_sub">
                    <a  class="waves-effect"><i class="fa fa-navicon"></i> <span> منو ها </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="/<?php echo \Core\Config::ADMINPAGE?>/addmenu">افزودن </a></li>
                        <li><a href="/<?php echo \Core\Config::ADMINPAGE?>/listmenu"> مشاهده</a></li>

                    </ul>
                </li>
                <li>
                    <a href="/<?php echo \Core\Config::ADMINPAGE?>/home" class="waves-effect"><i class="fa-desktop fa "></i><span> صفحه ی اصلی </span></a>
                </li>

                <li class="has_sub">
                    <a  class="waves-effect "><i class="fa fa-send-o"></i><span>  مطالب </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="/<?php echo \Core\Config::ADMINPAGE?>/addpost">افزودن </a></li>
                        <li><a href="/<?php echo \Core\Config::ADMINPAGE?>/listPost"> مشاهده</a></li>
                        <li><a href="/<?php echo \Core\Config::ADMINPAGE?>/comment">مدیریت نظرات<?php
                                if($obj2->countComment()!=0){
                                    echo "<span class='label label-info pull-right'>".$obj2->countComment()."</span>";
                                }
                                ?></a></li>
                    </ul>
                </li>
                <li>
                    <a href="/<?php echo \Core\Config::ADMINPAGE?>/vpub" class="waves-effect"><i class="fa fa-modx fa "></i><span> ویجت عمومی</span></a>
                </li>

                <li>
                    <a href="/<?php echo \Core\Config::ADMINPAGE?>/sidebar"" class="waves-effect"><i class="fa-hdd-o fa "></i><span class="label label-success pull-right">جدید</span><span> سایدبار </span></a>
                </li>

                <li class="has_sub">
                    <a  class="waves-effect"><i class="zmdi zmdi-collection-item"></i><span> دسته ها </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="/<?php echo \Core\Config::ADMINPAGE?>/addcat">افزودن</a></li>
                        <li><a href="/<?php echo \Core\Config::ADMINPAGE?>/listcat">مشاهده</a></li>

                    </ul>
                </li>
                <li class="has_sub">
                    <a href=/<?php echo \Core\Config::ADMINPAGE?>/emailreceive  class="waves-effect"><i class="fa  fa-hdd-o"></i>
                        <?php
                        $email=new \App\Model\Admin\email();
                        ?>
                        <span class="label label-warning pull-right"><?php
                            if($email->countEmail()!==0){
                                echo $email->countEmail();
                            }
                            ?></span><span> ایمیل ها  </span> </a>

                </li>
                <li class="has_sub">
                    <a  class="waves-effect "><i class="fa  fa-trophy"></i><span> نمونه کار</span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="/<?php echo \Core\Config::ADMINPAGE?>/addcatwork">افزودن دسته</a></li>
                        <li><a href="/<?php echo \Core\Config::ADMINPAGE?>/workcat">مدیریت دسته</a></li>
                        <li><a href="/<?php echo \Core\Config::ADMINPAGE?>/addwork">افزودن نمونه کار</a></li>
                        <li><a href="/<?php echo \Core\Config::ADMINPAGE?>/listwork"> مدیریت نمونه کار</a></li>

                    </ul>
                </li>
                <li class="has_sub">
                    <a  class="waves-effect "><i class="zmdi zmdi-layers"></i><span>صفحه ساز</span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="/<?php echo \Core\Config::ADMINPAGE?>/addpage">افزودن</a></li>
                        <li><a href="/<?php echo \Core\Config::ADMINPAGE?>/listpage">مشاهده</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a  class="waves-effect "><i class="fa-gears fa"></i><span> تنطیمات</span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="/<?php echo \Core\Config::ADMINPAGE?>/publicsetting">عمومی</a></li>

                    </ul>
                </li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>

</div>
<script>

</script>
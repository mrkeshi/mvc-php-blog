<?php \Core\view::lt('header', [
    'title' => $title
], 'defult') ?>
<div class="full_page_photo" style="background-image: url(images/404.jpg);">
    <div class="hgroup">
        <div class="hgroup_title animated bounceInUp">
            <div class="container">
                <h1>اوپس! <strong>خطای 404</strong></h1>
            </div>
        </div>
        <div class="hgroup_subtitle animated bounceInUp skincolored">
            <div class="container">
                <p>متاسفیم ولی چیزی که دنبالش هستید پیدا نشد!</p>
            </div>
        </div>
    </div>
</div>
<div class="main">
    <div class="container triangles-of-section">
        <div class="triangle-up-left"></div>
        <div class="square-left"></div>
        <div class="triangle-up-right"></div>
        <div class="square-right"></div>
    </div>
    <section class="call_to_action four-o-four">
        <div class="container"><i class="fa fa-ambulance"></i>
            <h3>خطای 404 چیزی برای ناراختی ندارد...</h3>
            <h4>می توانید از طریق فرم زیر به جستجو عبارت یا صفحه خود بپردازید.</h4>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="search_form">
                <form name="search_form" id="search_form" method="post" action="#">
                    <div class="row">
                        <div class="col-sm-2 col-md-2"></div>
                        <div class="col-sm-6 col-md-6">
                            <input name="search" id="search" class="form-control" type="text">
                        </div>
                        <div class="col-sm-4 col-md-4" style="text-align:right;"><a id="submit_btn"
                                                                                    class="btn btn-primary"
                                                                                    name="submit">جستجو</a></div>
                        <div class="col-sm-2 col-md-2"></div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="twitter_feed_wrapper skincolored_section">
        <div class="container">
            <div class="row">
                <div class="twitter_feed_icon wow fadeInDown"><a href="https://twitter.com/PlethoraThemes"><i
                                class="fa fa-twitter"></i></a></div>
                <div id="twitter_flexslider" class="flexslider">
                    <ul class="slides">
                        <li class="item">
                            <blockquote>
                                <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است.<a href="http://mihanwebmaster.com//">میهن وبمستر</a></p>
                            </blockquote>
                        </li>
                        <li class="item">
                            <blockquote>
                                <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است.<a href="http://mihanwebmaster.com//">میهن وبمستر</a></p>
                            </blockquote>
                        </li>
                        <li class="item">
                            <blockquote>
                                <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است.<a href="http://mihanwebmaster.com//">میهن وبمستر</a></p>
                            </blockquote>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php \Core\view::lt('footer', [], 'defult') ?>

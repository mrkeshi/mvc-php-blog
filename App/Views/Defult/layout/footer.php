<?php
$about1=new \App\Model\Admin\setting();
$about=$about1->show();
$comment=$about1->comment()
?>
<footer>
    <section class="footer_teasers_wrapper dark_section">
        <div class="container triangles-of-section">
            <div class="triangle-up-left"></div>
            <div class="square-left"></div>
            <div class="triangle-up-right"></div>
            <div class="square-right"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="footer_teaser pl_about_us_widget col-sm-4 col-md-4">
                    <h3>در تماس باشید</h3>
                   <p><?php echo $about['address']?></p>
                    <p><i class="fa fa-envelope"></i><?php echo $about['email']?></p>
                    <p><i class="fa fa-phone"></i><?php echo $about['phone']?></p>

                </div>

                <div class="footer_teaser pl_latest_news_widget col-sm-4 col-md-4">
                    <h3>آخرین نظرات</h3>
                    <ul class="media-list">
<?php
if(isset($comment[0]['post'])){

for($i=0;$i<count($comment);$i++){
    $post=$comment[$i]['post'];
?>
                        <li class="media"> <a href="/defult/#" class="media-photo" style="background-image:url(/<?php echo $comment[$i]['post']['image']?>)"></a> <a href="http://127.0.0.10/posts/<?php echo $post['url']?> " class="media-date"><?php echo jdate('d',$post['date'])?><span><?php echo jdate('F',$post['date'])?></span></a>
                            <h5 class="media-heading"><a href="http://127.0.0.10/posts/<?php echo $comment[$i]['post']['url']?>"><?php echo $comment[$i]['comment']['name'].' در مطلب '.$comment[$i]['post']['title'].' گفته : '?></a></h5>
                            <p><?php echo $comment[$i]['comment']['text']?></p>
                        </li>

                        <?php }} ?>
                    </ul>

                </div>
                <div class="footer_teaser pl_flickr_widget col-sm-4 col-md-4" id="latest-flickr-images">
                    <h3>فلیکرفید</h3>
                    <ul>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4">کپی رایت  ©2014 تمامی حقوق محفوظ است </div>
                <div class="col-sm-4 col-md-4"></div>
            </div>
        </div>
    </div>
</footer>
</div>
<script src="defult/js/jquery-1.10.2.min.js"></script>
<script src="defult/twitter-bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!--Pace Page Loader -->
<script src="defult/js/pace-0.5.1/pace.min.js"></script>
<!--FlexSlider -->
<script src="defult/js/woothemes-FlexSlider-06b12f8/jquery.flexslider-min.js"></script>
<!--Isotope Plugin -->
<script src="defult/js/isotope/jquery.isotope.min.js" type="text/javascript"></script>
<!--To-Top Button Plugin -->
<script type="text/javascript" src="defult/js/jquery.ui.totop.js"></script>
<!--Easing animations Plugin -->
<script type="text/javascript" src="defult/js/easing.js"></script>
<!--WOW Reveal on scroll Plugin -->
<script type="text/javascript" src="defult/js/wow.min.js"></script>
<!--Simple Text Rotator -->
<script type="text/javascript" src="defult/js/jquery.simple-text-rotator.js"></script>
<!--The Theme Required Js -->
<script type="text/javascript" src="defult/js/cleanstart_theme.js"></script>
<!--To collapse the menu -->
<script type="text/javascript" src="defult/js/collapser.js"></script>

</div>
</body>
</html>
<?php \Core\view::rander('defult/layout/header',[
        'title'=>$title,
    'menu'=>$menu
])?>   <div class="full_page_photo no_photo">
          <div class="hgroup">
               <div class="hgroup_title animated bounceInUp skincolored">
                    <div class="container">
                         <h1 class=""> <?php echo $title?> </h1>
                    </div>
               </div>
               <div class="hgroup_subtitle animated bounceInUp ">
                    <div class="container">
<p>شما در حال مطالعه ی مطلب <?php echo ' '.$title.' هستید '?></p>                    </div>
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
          <section class="portfolio_slider_wrapper">
               <div class="container">
                    <div class="flexslider" id="portfolio_slider">
                         <ul class="slides">
                              <li class="item" data-thumb="/<?php echo $value['img1']?>" style="background-image: url(/<?php echo $value['img1']?>)">
                                   <div class="container"> <a href="/<?php echo $value['img1']?>" class="lightbox_portfolio" title="title on a"></a>
                                        <div class="carousel-caption">
                                             <p class="lead"><?php echo $value['dt1']?></p>
                                        </div>
                                   </div>
                              </li>
                              <li class="item" data-thumb="/<?php echo $value['img2']?>" style="background-image: url(/<?php echo $value['img2']?>)">
                                   <div class="container"> <a href="/<?php echo $value['img2']?>" class="lightbox_portfolio" title="title on a"></a>
                                        <div class="carousel-caption">
                                            <p class="lead"><?php echo $value['dt2']?></p>
                                        </div>
                                   </div>
                              </li>
                              <li class="item" data-thumb="/<?php echo $value['img3']?>" style="background-image: url(/<?php echo $value['img3']?>)">
                                   <div class="container"> <a href="/<?php echo $value['img3']?>" class="lightbox_portfolio" title="title on a"></a>
                                        <div class="carousel-caption">
                                            <p class="lead"><?php echo $value['dt3']?></p>
                                        </div>
                                   </div>
                              </li>
                              <li class="item" data-thumb="/<?php echo $value['img4']?>" style="background-image: url(/<?php echo $value['img4']?>)">
                                   <div class="container"> <a href="//<?php echo $value['img4']?>" class="lightbox_portfolio" title="title on a"></a>
                                        <div class="carousel-caption">
                                            <p class="lead"><?php echo $value['dt4']?></p>
                                        </div>
                                   </div>
                              </li>

                         </ul>
                    </div>
                    <div id="carousel" class="flexslider">
                         <ul class="slides">
                              <li> <img width="210px" height="135px" src="/<?php echo $value['img1']?>" alt=""> </li>
                              <li> <img width="210px" height="135px" src="/<?php echo $value['img2']?>" alt=""> </li>
                              <li> <img width="210px" height="135px" src="/<?php echo $value['img3']?>" alt=""> </li>
                              <li> <img width="210px" height="135px" src="/<?php echo $value['img4']?>" alt=""> </li>
                         </ul>
                    </div>
                    <div class="portfolio_details">
                         <div class="row">
                              <div class="col-sm-9 col-md-9">
                                   <h2 class="section_header">درباره پروژه</h2>
                                  <?php echo $value['text']?>
                              </div>
                              <div class="well col-sm-3 col-md-3">
                                   <p><strong>تاریخ:</strong><?php echo $value['dcrate']?></p>
                                   <p><strong>مشتری:</strong><?php echo $value['buy']?></p>
                                   <p><strong>دسته بندی:</strong> <?php echo $obj->Cats($value['cat_id'])['title']?></p>
                                   <p><strong>مکان:</strong> <?php echo $value['map']?></p>
                                   <p><strong>امتیاز:</strong><span class="rating r<?php echo 2*$value['star']?>"></span></p>
                              </div>
                         </div>
                        <ul class="pager">
                            <li class="next <?php if (!$obj->workper($value['id'])){echo ' disabled';} ?>"><a href="<?php if($obj->workper($value['id'])){echo $obj->workper($value['id']); }else{echo '';} ?>"><i class="fa fa-chevron-left"></i> قدیمی تر</a></li>
                            <li class="previous  <?php if (!$obj->worknext($value['id'])){echo ' disabled';} ?>"><a href="<?php if($obj->worknext($value['id'])){echo $obj->worknext($value['id']); }else{echo '';} ?>"><i class="fa fa-chevron-left"></i>جدیدتر</a></li>
                        </ul>
                    </div>
               </div>
          </section>
         <?php if(isset($like[0]['title'])) {?>
          <section class="portfolio_teasers_wrapper">
               <div class="container">
                    <h2 class="elegant centered section_header">پروژه های مرتبط<small></small></h2>
                    <div class="portfolio_strict row">
                        <?php

                            foreach ($like as $itme4) {

                            ?>
                            <div class="col-sm-4 col-md-4">
                                <div class="portfolio_item"><a href="/work/<?php echo $itme4['url']?>">
                                        <figure style="background-image:url(/<?php echo $itme4['img']?>)">
                                            <figcaption>
                                                <div class="portfolio_description">
                                                    <h3></h3>
                                                    <span class="cross"><?php echo $itme4['title']?></span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a></div>
                            </div>
                            <?php
                        }
?>
                    </div>
               </div>
          </section>
         <?php }else{

         } ?>
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
         </footer>     </div>
    <script src="/defult/js/jquery-1.10.2.min.js"></script>
    <script src="/defult/twitter-bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!--Pace Page Loader -->
    <script src="/defult/js/pace-0.5.1/pace.min.js"></script>
    <!--FlexSlider -->
    <script src="/defult/js/woothemes-FlexSlider-06b12f8/jquery.flexslider-min.js"></script>
    <!--Isotope Plugin -->
    <script src="/defult/js/isotope/jquery.isotope.min.js" type="text/javascript"></script>
    <!--To-Top Button Plugin -->
    <script type="text/javascript" src="/defult/js/jquery.ui.totop.js"></script>
    <!--Easing animations Plugin -->
    <script type="text/javascript" src="/defult/js/easing.js"></script>
    <!--WOW Reveal on scroll Plugin -->
    <script type="text/javascript" src="/defult/js/wow.min.js"></script>
    <!--Simple Text Rotator -->
    <script type="text/javascript" src="/defult/js/jquery.simple-text-rotator.js"></script>
    <!--The Theme Required Js -->
    <script type="text/javascript" src="/defult/js/cleanstart_theme.js"></script>
    <!--To collapse the menu -->
    <script type="text/javascript" src="/defult/js/collapser.js"></script>

</div>
</body>
</html>
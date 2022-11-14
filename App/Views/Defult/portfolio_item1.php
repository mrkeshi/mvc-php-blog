<?php
\Core\view::rander('defult/layout/header',[
        'title'=>$title,
    'menu'=>$menu
])
?>
<div class="full_page_photo no_photo">
          <div class="hgroup">
               <div class="hgroup_title animated bounceInUp skincolored">
                    <div class="container">
                         <h1 class=""><?php echo $value['title']?></h1>
                    </div>
               </div>
               <div class="hgroup_subtitle animated bounceInUp ">
                    <div class="container">
<p>شما در حال مشاهده ی مطلب <?php echo ' '.$value['title'].' هستید'?></p>                    </div>
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
                              <li class="item" data-thumb="/defult/images/portfolio/item/3.jpg" style="background-image: url(/defult/images/portfolio/item/3.jpg)">
                                   <div class="container"> <a href="i/defult/mages/portfolio/item/3.jpg" class="lightbox_portfolio" title="title on a"></a>
                                        <div class="carousel-caption">
                                             <p class="lead">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنع.</p>
                                        </div>
                                   </div>
                              </li>
                              <li class="item" data-thumb="/defult/images/portfolio/item/1.jpg" style="background-image: url(/defult/images/portfolio/item/1.jpg)">
                                   <div class="container"> <a href="/defult/images/portfolio/item/1.jpg" class="lightbox_portfolio" title="title on a"></a>
                                        <div class="carousel-caption">
                                             <p class="lead">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنع.</p>
                                        </div>
                                   </div>
                              </li>
                              <li class="item" data-thumb="/defult/images/portfolio/item/5.jpg" style="background-image: url(/defult/images/portfolio/item/5.jpg)">
                                   <div class="container"> <a href="/defult/images/portfolio/item/5.jpg" class="lightbox_portfolio" title="title on a"></a>
                                        <div class="carousel-caption">
                                             <p class="lead">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنع.</p>
                                        </div>
                                   </div>
                              </li>
                              <li class="item" data-thumb="/defult/images/portfolio/item/4.jpg" style="background-image: url(/defult/images/portfolio/item/4.jpg)">
                                   <div class="container"> <a href="/defult/images/portfolio/item/4.jpg" class="lightbox_portfolio" title="title on a"></a>
                                        <div class="carousel-caption">
                                             <p class="lead">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنع.</p>
                                        </div>
                                   </div>
                              </li>
                              <li class="item" data-thumb="images/portfolio/item/2.jpg" style="background-image: url(/defult/images/portfolio/item/2.jpg)">
                                   <div class="container"> <a href="/defult/images/portfolio/item/2.jpg" class="lightbox_portfolio" title="title on a"></a>
                                        <div class="carousel-caption">
                                             <p class="lead">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنع.</p>
                                        </div>
                                   </div>
                              </li>
                              <li class="item" data-thumb="images/portfolio/item/6.jpg" style="background-image: url(/defult/images/portfolio/item/6.jpg)">
                                   <div class="container"> <a href="/defult/images/portfolio/item/6.jpg" class="lightbox_portfolio" title="title on a"></a>
                                        <div class="carousel-caption">
                                             <p class="lead">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنع.</p>
                                        </div>
                                   </div>
                              </li>
                         </ul>
                    </div>
                    <div id="carousel" class="flexslider">
                         <ul class="slides">
                              <li> <img src="/defult/images/portfolio/item/3.jpg" alt=""> </li>
                              <li> <img src="/defult/images/portfolio/item/1.jpg" alt=""> </li>
                              <li> <img src="/defult/images/portfolio/item/5.jpg" alt=""> </li>
                              <li> <img src="/defult/images/portfolio/item/4.jpg" alt=""> </li>
                              <li> <img src="/defult/images/portfolio/item/2.jpg" alt=""> </li>
                              <li> <img src="/defult/images/portfolio/item/6.jpg" alt=""> </li>
                         </ul>
                    </div>
                    <div class="portfolio_details">
                         <div class="row">
                              <div class="col-sm-9 col-md-9">
                                   <h2 class="section_header">درباره پروژه</h2>
                                   <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیستری را برای طراحان رایانه ای و</p>
                                   <p>پروژه طراحی شده توسط <a href="http://mihanwebmaster.com/" target="_blank">میهن وبمستر</a> </p>
                              </div>
                              <div class="well col-sm-3 col-md-3">
                                   <p><strong>تاریخ:</strong> اردیبهشت 93</p>
                                   <p><strong>مشتری:</strong> شرکت ملی نفت</p>
                                   <p><strong>دسته بندی:</strong> طراحی</p>
                                   <p><strong>مکان:</strong> اروپا</p>
                                   <p><strong>امتیاز:</strong><span class="rating r8"></span></p>
                              </div>
                         </div>
                         <ul class="pager">
                              <li class="next disabled"><a href="#"><i class="fa fa-chevron-left"></i> قدیمی تر</a></li>
                              <li class="previous"><a href="portfolio_item_2.html">جدیدتر <i class="fa fa-chevron-right"></i></a></li>
                         </ul>
                    </div>
               </div>
          </section>
          <section class="portfolio_teasers_wrapper">
               <div class="container">
                    <h2 class="elegant centered section_header">پروژه های مرتبط<small></small></h2>
                    <div class="portfolio_strict row">
                         <div class="col-sm-4 col-md-4">
                              <div class="portfolio_item"> <a href="portfolio_item.html">
                                   <figure style="background-image:url(/defult/images/portfolio/b2.jpg)">
                                        <figcaption>
                                             <div class="portfolio_description">
                                                  <h3>پروژه میهن وبمستر</h3>
                                                  <span class="cross"></span>
                                                  <p>مردم</p>
                                             </div>
                                        </figcaption>
                                   </figure>
                                   </a> </div>
                         </div>
                         <div class="col-sm-4 col-md-4">
                              <div class="portfolio_item"> <a href="portfolio_item.html">
                                   <figure style="background-image:url(/defult/images/portfolio/t5.jpg)">
                                        <figcaption>
                                            <div class="portfolio_description">
                                                  <h3>پروژه میهن وبمستر</h3>
                                                  <span class="cross"></span>
                                                  <p>مردم</p>
                                             </div>
                                        </figcaption>
                                   </figure>
                                   </a> </div>
                         </div>
                         <div class="col-sm-4 col-md-4">
                              <div class="portfolio_item"> <a href="portfolio_item.html">
                                   <figure style="background-image:url(/defult/images/portfolio/p3.jpg)">
                                        <figcaption>
                                             <div class="portfolio_description">
                                                  <h3>پروژه میهن وبمستر</h3>
                                                  <span class="cross"></span>
                                                  <p>مردم</p>
                                             </div>
                                        </figcaption>
                                   </figure>
                                   </a> </div>
                         </div>
                    </div>
               </div>
          </section>
          <section class="twitter_feed_wrapper skincolored_section">
               <div class="container">
                    <div class="row">
                         <div class="twitter_feed_icon wow fadeInDown"><a href="https://twitter.com/PlethoraThemes"><i class="fa fa-twitter"></i></a></div>
                         <div id="twitter_flexslider" class="flexslider">
                              <ul class="slides">
                                   <li class="item">
                                        <blockquote>
                                             <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.<a href="http://mihanwebmaster.com/">میهن وبمستر</a></p>
                                        </blockquote>
                                   </li>
                                   <li class="item">
                                        <blockquote>
                                             <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.<a href="http://mihanwebmaster.com/">میهن وبمستر</a></p>
                                        </blockquote>
                                   </li>
                                   <li class="item">
                                        <blockquote>
                                             <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.<a href="http://mihanwebmaster.com/">میهن وبمستر</a></p>
                                        </blockquote>
                                   </li>
                              </ul>
                         </div>
                    </div>
               </div>
          </section>
         <?php  \Core\view::lt('footer',[],'defult')?>

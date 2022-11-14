<?php  \Core\view::lt('header',[
    'title'=>$title,
    'menu'=>$menu
],'defult')?>
<div class="full_page_photo no_photo">
          <div class="hgroup">
               <div class="hgroup_title animated bounceInUp skincolored">
                    <div class="container">
                         <h1 class="">نمونه کار</h1>
                    </div>
               </div>
               <div class="hgroup_subtitle animated bounceInUp ">
                    <div class="container">
                         <p>این نمونه کارها می توانند تبلیغ خوبی برای ما باشند!</p>
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
          <section class="portfolio_strict">
               <div class="container">
                    <ul class="portfolio_filters">
                        <li ><a href = "#" data-filter = ".f0" > بدون دسته</a ></li >

                        <?php
                        if($cat){

                        }
                        foreach ($cat as $value) {
if($obj->countWork($value['id'])){

                        ?>

                        <li><a href="#" data-filter=".f<?php echo $value['id'] ?>"><?php echo $value['title'] ?></a>
                        </li>


                    </ul>
                   <div class="row isotope_portfolio_container">
                       <?php if($obj->countWork(0)){      $value1=$obj->countWork(0) ?>

                       <div class="f0  col-xs-12 col-sm-6 col-md-4 col-lg-4">
                           <div class="portfolio_item"><a href="/work/<?php echo $value1[0]['url'] ?>">
                                   <figure style="background-image:url(/<?php echo $value1[0]['img'] ?>)">
                                       <figcaption>
                                           <div class="portfolio_description">
                                               <h3><?php echo $value1[0]['title'] ?></h3>
                                               <span class="cross"></span>
                                               <p></p>
                                           </div>
                                       </figcaption>
                                   </figure>
                               </a></div>

                       </div>
                       <?php
                       }

foreach ($obj->countWork($value['id']) as $item){
                        ?>
                         <div class="f<?php echo $value['id']?> cat_travel col-xs-12 col-sm-6 col-md-4 col-lg-4">
                              <div class="portfolio_item"> <a href="/work/<?php echo $item['url'] ?>">
                                   <figure style="background-image:url(/<?php echo $item['img'] ?>)">
                                        <figcaption>
                                             <div class="portfolio_description">
                                                  <h3><?php echo $item['title']?></h3>
                                                  <span class="cross"></span>
                                                  <p></p>
                                             </div>
                                        </figcaption>
                                   </figure>
                                   </a> </div>

                         </div>
<?php }}}?>
                    </div>
               </div>
          </section>
         <?php if($vighet['status']==1){

          ?>
          <section class="twitter_feed_wrapper skincolored_section">
               <div class="container">
                    <div class="row">
                         <div class="twitter_feed_icon wow fadeInDown"><a href="https://twitter.com/PlethoraThemes"><i class="fa fa-twitter"></i></a></div>
                         <div id="twitter_flexslider" class="flexslider">
                              <ul class="slides">
                                   <li class="item">
                                        <blockquote>
<p><?php echo $vighet['text1']?></p>
                                        </blockquote>
                                   </li>
                                   <li class="item">
                                        <blockquote>
                                            <p><?php echo $vighet['text2']?></p>
                                        </blockquote>
                                   </li>
                                   <li class="item">
                                        <blockquote>
                                            <p><?php echo $vighet['text3']?></p>
                                        </blockquote>
                                   </li>
                              </ul>
                         </div>
                    </div>
               </div>
          </section>
         <?php } \Core\view::lt('footer',[],'defult')?>

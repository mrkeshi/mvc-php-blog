<?php
\Core\view::rander('defult/layout/header',[
        'title'=>$title,
        'menu'=>$menu
])
?>
<?php
if($slider['status']==1) {


    ?>
    <section id="slider_wrapper" class="slider_wrapper full_page_photo">
        <div id="main_flexslider" class="flexslider">
            <ul class="slides">
                <li class="item" style="background-image: url('/<?php echo $slider['img1'] ?>')">
                    <div class="container">
                        <div class="carousel-caption animated bounceInUp">
                            <h1><?php echo $slider['titr1'] ?><br>
                            </h1>
                            <p class="lead skincolored"><?php echo $slider['text1'] ?></p>
                        </div>
                    </div>
                </li>
                <li class="item" style="background-image: url('/<?php echo $slider['img2'] ?>')">
                    <div class="container">
                        <div class="carousel-caption animated bounceInUp">
                            <h1><?php echo $slider['titr2'] ?><br>
                            </h1>
                            <p class="lead skincolored"><?php echo $slider['text2'] ?></p>
                        </div>
                    </div>
                </li>
                <li class="item" style="background-image: url('/<?php echo $slider['img3'] ?>')">
                    <div class="container">
                        <div class="carousel-caption animated bounceInUp">
                            <h1><?php echo $slider['titr3'] ?><br>
                            </h1>
                            <p class="lead skincolored"><?php echo $slider['text3'] ?></p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <?php
}
?>
     <div class="main">
          <div class="container triangles-of-section">
               <div class="triangle-up-left"></div>
               <div class="square-left"></div>
               <div class="triangle-up-right"></div>
               <div class="square-right"></div>
          </div>
         <?php if($box['status']==1) {

             ?>
             <section class="features_teasers_wrapper">
                 <div class="container">
                     <div class="row">
                         <div class="feature_teaser col-sm-4 col-md-4"><img class="center-block img-circle"
                                                                            style="width: 160px;height: 160px"
                                                                            alt="responsive"
                                                                            src="/<?php echo $box['img1'] ?>">
                             <h3><?php echo $box['titr1'] ?></h3>
                             <p><?php echo $box['text1'] ?></p>
                         </div>
                         <div class="feature_teaser col-sm-4 col-md-4"><img class="center-block img-circle"
                                                                            style="width: 160px;height: 160px"
                                                                            alt="responsive"
                                                                            src="/<?php echo $box['img2'] ?>">
                             <h3><?php echo $box['titr2'] ?></h3>
                             <p><?php echo $box['text2'] ?></p>
                         </div>
                         <div class="feature_teaser col-sm-4 col-md-4"><img class="center-block img-circle"
                                                                            style="width: 160px;height: 160px"
                                                                            alt="responsive"
                                                                            src="/<?php echo $box['img3'] ?>">
                             <h3><?php echo $box['titr3'] ?></h3>
                             <p><?php echo $box['text3'] ?></p>
                         </div>
                     </div>
                 </div>
             </section>
             <?php
         }
         ?>
         <?php
         if($section['status']==1) {


             ?>
             <section class="call_to_action dark_section">
                 <div class="container">
                     <h3><?php echo $section['titr1'] ?></h3>
                     <h4><?php echo $section['text'] ?></h4>
                     <a class="btn btn-primary"
                        href="<?php echo $section['url'] ?>"><?php echo $section['btnname'] ?></a></div>
             </section>

          <section class="portfolio_teasers_wrapper">
               <div class="container triangles-of-section">
                    <div class="triangle-up-left"></div>
                    <div class="square-left"></div>
                    <div class="triangle-up-right"></div>
                    <div class="square-right"></div>
               </div>
              <?php
              }

         ?><?php if($chapter1['status']==1){
                  if($chapter1['value']){
if($chapter1['table']=='worckcat_tbl'){
    $index='img';
}else{
    $index='image';
}

                      ?>
               <div class="container">
                    <h2 class="section_header fancy centered"><?php echo $chapter1['titr']?><small><?php echo $chapter1['text']?></small></h2>
                    <div class="portfolio_strict row">
                        <?php foreach ($chapter1['value'] as $item){

                         ?>
                         <div class="col-sm-4 col-md-4">
                              <div class="portfolio_item wow fadeInUp"> <a href="/<?php echo $chapter1['link'].'/'.$item['url']?>">
                                   <figure style="background-image:url(<?php echo '/'.$item[$index] ?>)">
                                        <figcaption>
                                             <div class="portfolio_description">
                                                  <h3><?php echo $item['title']?></h3>
                                                  <span class="cross"></span>
                                                  <p><?php echo $obj->selectSingleCaat($item['cat_id'],$chapter1['table'])['title']?></p>
                                             </div>
                                        </figcaption>
                                   </figure>
                                   </a> </div>
                         </div>
                          <?php } ?>

                    </div>
                    <div class="centered_button"><a class="btn btn-primary" href="/<?php if($chapter1['link']=='posts'){
                        echo 'blog';
                        }else{
                        echo 'work';
                        } ?>">نمونه های دیگر</a></div>
               </div>
              <?php

              }}
              ?><br>
              <?php if($chapter2['status']==1){
                  if($chapter2['value']){

                      if($chapter2['table']=='worckcat_tbl'){
                          $index1='img';
                      }else{
                          $index1='imgae';
                      }
                      ?>
                      <div class="container">
                          <h2 class="section_header fancy centered"><?php echo $chapter2['titr']?><small><?php echo $chapter2['text']?></small></h2>
                          <div class="portfolio_strict row">
                              <?php foreach ($chapter2['value'] as $item1){

                                  ?>
                                  <div class="col-sm-4 col-md-4">
                                      <div class="portfolio_item wow fadeInUp"> <a href="/<?php echo $chapter2['link'].'/'.$item1['url']?>">
                                              <figure style="background-image:url(<?php echo '/'.$item1[$index1] ?>)">
                                                  <figcaption>
                                                      <div class="portfolio_description">
                                                          <h3><?php echo $item1['title']?></h3>
                                                          <span class="cross"></span>
                                                          <p><?php echo $obj->selectSingleCaat($item1['cat_id'],$chapter2['table'])['title']?></p>
                                                      </div>
                                                  </figcaption>
                                              </figure>
                                          </a> </div>
                                  </div>
                              <?php } ?>

                          </div>
                          <div class="centered_button"><a class="btn btn-primary" href="/<?php if($chapter2['link']=='posts'){
                                  echo 'blog';
                              }else{
                                  echo 'work';
                              } ?>">نمونه های دیگر</a></div>
                      </div>
                      <?php

                  }}
              ?>
               <div class="clients_section wow fadeInUp">

               </div>
          </section>
         <?php
         if($pubv['status']==1) {


             ?>
             <section class="twitter_feed_wrapper skincolored_section">
                 <div class="container">
                     <div class="row">
                         <div class="twitter_feed_icon wow fadeInDown"><a href="http://127.0.0.10"><i
                                         class="fa fa-twitter"></i></a></div>
                         <div id="twitter_flexslider" class="flexslider">
                             <ul class="slides">
                                 <li class="item">
                                     <blockquote>
                                         <p><?php echo $pubv['text1'] ?></p>
                                     </blockquote>
                                 </li>
                                 <li class="item">
                                     <blockquote>
                                         <p><?php echo $pubv['text2'] ?></p>

                                     </blockquote>
                                 </li>
                                 <li class="item">
                                     <blockquote>
                                         <p><?php echo $pubv['text3'] ?></p>

                                     </blockquote>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </section>
             <?php
         }
         ?>
         <?php  \Core\view::lt('footer',[],'defult')?>

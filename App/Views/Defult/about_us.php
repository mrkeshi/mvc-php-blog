<?php  \Core\view::lt('header',[
    'title'=>$title,
    'menu'=>$menu
],'defult')?>

<div class="full_page_photo" style="background-image: url(defult/images/about_us.jpg);">
          <div class="hgroup">
               <div class="hgroup_title animated bounceInUp">
                    <div class="container">
                         <h1 class=""> <?php echo $page['title']?></h1>
                    </div>
               </div>
               <div class="hgroup_subtitle animated bounceInUp skincolored">
                    <div class="container">
                         <p><?php
                             if(!empty($page['up'])){
                             echo jdate(' d F Y ',$page['up']);
                             }else{
                             echo jdate(' d F Y',$page['date']);
                             }
                              ?>

                         </p>

                      </p>
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
          <section class="horizontal_teaser">
               <div class="container">
                    <div class="row">
                         <div class=" col-md-10  horizontal_teaser_left">
                              <h3 style="color: #0a6aa1"><?php echo $page['title']?></h3>
    <?php
    echo $page['text']
    ?>
                             </div>

                    </div>
               </div>
          </section>

         <?php  \Core\view::lt('footer',[],'defult')?>

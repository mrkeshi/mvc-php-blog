<?php  \Core\view::lt('header',[
    'title'=>$title,
    'menu'=>$menu
],'defult')?>

<div class="full_page_photo" style="background-image: url(images/portfolio/p3.jpg);"> </div>
     <div class="main">
          <div class="container triangles-of-section">
               <div class="triangle-up-left"></div>
               <div class="square-left"></div>
               <div class="triangle-up-right"></div>
               <div class="square-right"></div>
          </div>
          <section class="with_right_sidebar">
               <div class="container">
                   <h2 class="section_header elegant"><?php echo $value['title']?><small><i class="fa-time"></i> <?php echo jdate('d F Y',$value['date']).'  ' ?>   <?php echo count($comment).'نظر' ?></small> <a href="#post_comments"><i class="fa-comments-alt"></i></a></small></h2>
                    <div class="row">
                         <div id="leftcol" class="col-sm-8 col-md-8">
                              <article class="post">
                                   <div class="post_content">
                                            <?php
                                            echo $value['content']
                                            ?>
                                       </div>
                              </article>
                              <div id="post_comments">
                                   <h4>نظرات</h4>
                                   <div class="comment">
                                       <?php
                                       if($comment){
                                           foreach ($comment as $item) {

                                               ?>
                                               <div class="row">
                                                   <figure class="col-sm-2 col-md-2"><img class="img-circle"
                                                                                          src="/uploader/defult1.png"
                                                                                          alt=""></figure>
                                                   <div class="col-sm-10 col-md-10">
                                                       <div class="comment_name"><?php echo $item['name']?><a class="reply" href="#"></a>
                                                       </div>
                                                       <div class="comment_date"><i class="fa-time"></i><?php echo jdate('Y/m/d H:i',$item['datee'])?>
                                                       </div>
                                                       <div style="text-align: right" class="the_comment">
                                                          <?php
                                                          echo $item['text']
                                                          ?>
                                                       </div>
                                                   </div>
                                               </div>
                                               <?php
                                           }}
?>
                                   </div>
                              </div>
                              <div class="new_comment">
                                  <p>
                                      <?php
                                      if($mess!=null){
                                          echo $mess;
                                      }
                                      ?>
                                  </p>
                                   <h4>نظر خود را اضافه کنید</h4>
                                   <form method="post">
                                        <div class="row">
                                             <div class="col-sm-6 col-md-4">
                                                  <input class="form-control" name="frm[name]" placeholder="نام" type="text">
                                             </div>
                                             <div class="col-sm-6 col-md-4">
                                                  <input class="form-control" name="frm[email]" placeholder="ایمیل" type="text">

                                             </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-sm-12 col-md-8"><br/>
                                                  <textarea rows="7" placeholder="نظر" name="frm[text]" class="form-control"></textarea>
                                             </div>
                                        </div>
                                        <div class="row"><br/>
                                             <div class="col-sm-12 col-md-8"> <button name="btn" class="btn send btn-primary" href="#">ارسال نظر</button> </div>
                                        </div>
                                   </form>
                              </div>
                         </div>
<?php \Core\view::rander('defult/layout/sidebar',[]) ?>                    </div>
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

<?php  \Core\view::lt('header',[
    'title'=>$title,
    'menu'=>$menu
],'defult')?>
<div class="full_page_photo">
          <div style="background: darkturquoise;" id="map"></div>
          <div class="container">
               <div class="hgroup">
                    <div class="hgroup_title animated bounceInUp ">
                         <div class="container">
                              <h1>ارتباط با ما</h1>
                         </div>
                    </div>
                    <div class="hgroup_subtitle animated bounceInUp skincolored">
                         <div class="container">
<p>براحتی میتوانید با ما در ارتباط باشید</p>
                         </div>
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
          <div class="container">
               <section>
                    <div class="row">
                         <div class="office_address col-sm-6 col-md-4">
                              <div class="team_member"> <img src="/<?php echo $information['logo']?>"  alt="logo">
                                   <h5> <?php echo $information['name']?></h5>
                                   <small> <?php echo $information['titr']?></small><br>
                                   <address>
                                       <?php echo $information['address']?>
                                   </address>
                                   <abbr title="Phone">تلفن:</abbr> <?php echo $information['phone']?><br>
                                   <abbr title="Phone">ایمیل:</abbr> <a href="mailto:#"> <?php echo $information['email']?></a> </div>
                         </div>
                         <div class="contact_form col-sm-6 col-md-8">
                             <?php
                             if($error!=null){
                                 if($error===true){
                                     echo "<h2 style='color:green'>پیام با موفقیت ارسال شد</h2>";
                                 }else{
                                     echo "<h2 style='color:red'>خطا در ارسال پیام</h2>";
                                 }
                             }
                             ?>
                              <form name="contact_form" id="contact_form" method="post">
                                   <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                             <label>نام</label>
                                             <input name="form[name]" id="name" class="form-control" type="text" value="">
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                             <label>ایمیل</label>
                                             <input name="form[email]" id="email" class="form-control" type="text" value="">
                                        </div>
                                   </div>
                                   <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                             <label>موضوع</label>
                                             <input name="form[subject]" id="subject" class="form-control" type="text">
                                        </div>
                                   </div>
                                   <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                             <label>پیام</label>
                                             <textarea name="form[text]" id="message" rows="8" class="form-control"></textarea>
                                        </div>
                                        <div class="col-sm-12 col-md-12"><br/>
                                             <input  name='btn' type="submit"  class="btn btn-primary"  value="ثبت پیغام"> </div>
                                   </div>
                              </form>
                         </div>
                    </div>
               </section>
          </div>
         <?php if($v['status']==1){ ?>
          <section class="twitter_feed_wrapper skincolored_section">
               <div class="container">
                    <div class="row">
                         <div class="twitter_feed_icon wow fadeInDown"><a href="http://127.0.0.10"><i class="fa fa-twitter"></i></a></div>
                         <div id="twitter_flexslider" class="flexslider">
                              <ul class="slides">
                                   <li class="item">
                                        <blockquote>
    <?php echo $v['text1'] ?>
                                        </blockquote>
                                   </li>
                                   <li class="item">
                                        <blockquote>
                                            <?php echo $v['text2'] ?>
                                        </blockquote>
                                   </li>
                                   <li class="item">
                                        <blockquote>
                                            <?php echo $v['text3'] ?>
                                        </blockquote>
                                   </li>
                              </ul>
                         </div>
                    </div>
               </div>
          </section>
         <?php  } \Core\view::lt('footer',[],'defult')?>

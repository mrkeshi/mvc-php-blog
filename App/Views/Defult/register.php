<?php  \Core\view::lt('header',[
    'title'=>$title
],'defult')?>
<div class="full_page_photo no_photo">
          <div class="container">
               <div class="hgroup">
                    <div class="hgroup_title animated bounceInUp skincolored">
                         <div class="container">
                              <h1>ثبت نام یا ورود</h1>
                         </div>
                    </div>
                    <div class="hgroup_subtitle animated bounceInUp"></div>
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
          <section>
               <div class="container">
                    <div class="row">
                         <div class="col-sm-6 col-md-6">
                              <div class="signin">
                                   <div class="social_sign">
                                        <h3>از طریق حساب های اجتماعی خود وارد شوید</h3>
                                        <a class="fb" href="#facebook"><i class="fa fa-facebook"></i></a> <a class="tw" href="#twitter"><i class="fa fa-twitter"></i></a> <a class="gp" href="#googleplus"><i class="fa fa-google-plus"></i></a> </div>
                                   <div class="or">
                                        <div class="or_l"></div>
                                        <span>یا</span>
                                        <div class="or_r"></div>
                                   </div>
                                   <p class="sign_title">از طریق حساب کاربری خود در سایت وارد شوید</p>
                                   <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="form col-lg-8">
                                             <form>
                                                  <input placeholder="Email" class="form-control" type="text">
                                                  <input placeholder="Password" class="form-control" type="text">
                                                  <div class="forgot">
                                                       <div class="checkbox">
                                                            <label class="">
                                                                 <input type="checkbox">
                                                                 به یاد داشته باش </label>
                                                       </div>
                                                       <a href="#">فراموشی رمز عبور؟</a> </div>
                                                  <button type="submit" class="btn btn-primary">ورود</button>
                                             </form>
                                        </div>
                                        <div class="col-lg-2"></div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-sm-6 col-md-6">
                              <div class="signup">
                                   <form>
                                        <fieldset>
                                             <div class="social_sign">
                                                  <h3>هنوز حساب کاربری ندارید؟</h3>
                                                  <a><i class="fa fa-user"></i></a> </div>
                                             <p class="sign_title">یک حساب جدید بسازید. رایگان است!</p>
                                             <div class="row">
                                                  <div class="col-lg-2"></div>
                                                  <div class="col-lg-8">
                                                       <input id="Username" name="Username" placeholder="Username" class="form-control" required="" type="text">
                                                       <input id="Emailaddress" name="Email address" placeholder="Email address" class="form-control" required="" type="text">
                                                       <input id="Password" name="Password" placeholder="Password" class="form-control" required="" type="password">
                                                       <div class="checkbox">
                                                            <label class="">
                                                                 <input name="checkboxes" value="Option one" type="checkbox">
                                                                 من <a href="#">قوانین و مقررات</a> را مطالعه کرده ام.</label>
                                                       </div>
                                                  </div>
                                                  <div class="col-lg-2"></div>
                                             </div>
                                             <button type="submit" class="btn btn-success">ساخت حساب کاربری</button>
                                        </fieldset>
                                   </form>
                              </div>
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

<?php  \Core\view::lt('header',[
    'title'=>$title,
    'menu'=>$menu
],'defult')?>
<div class="full_page_photo no_photo">
          <div class="container">
               <div class="hgroup">
                    <div class="hgroup_title animated bounceInUp skincolored">
                         <div class="container">
                              <h1><?php if($header!==Null){echo $title;}else{echo 'وبلاگ';} ?></h1>
                         </div>
                    </div>
                    <div class="hgroup_subtitle animated bounceInUp ">
                         <div class="container">
                              <p><?php if($header!==Null){echo " شما در اینجا تمام مطالب بخش {$title} را مشاهده می کنید ";}else{echo 'وبلاگ';} ?></p>
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
          <section class="with_right_sidebar">
               <div class="container">
                    <div class="row">
                         <div id="leftcol" class="col-sm-8 col-md-8">
                             <?php
                             if($post){
                                 foreach ($post as $item) {

                                     ?>
                                     <article class="post">
                                         <div class="post_header">
                                             <h3 class="post_title"><a href="../posts/<?php echo $item['url']?>"><?php echo $item['title']?></a></h3>
                                             <div class="post_sub"><i class="fa-time"></i><?php echo jdate( '  Y/m/d  ',$item['date'])?><br><a
                                                      ><i
                                                             class="fa-comments-alt"></i><?php echo count($com->selectComment($item['url'])).'نظر'?></a></div>
                                         </div>
                                         <div class="post_content">
                                             <figure><a href="<?php echo $item['image'] ?>"><img width="750px" height="300px" alt="<?php echo $item['title']?>" src="/<?php echo $item['image'] ?>"></a>
                                             </figure>
                                             <p><?php $n=substr($item['content'] ,0,350);
                                                        echo $n.'...'
                                             ?></p>
                                             <a href="http://127.0.0.10/posts/<?php echo $item['url']?>" class="btn btn-primary">بیشتر بخوانید</a></div>
                                     </article>
                                     <?php
                                 }}
?>
<?php
if($pager!=Null){
    $ne=$pager;
}else{
    $ne='neo';
}
if($_SERVER['QUERY_STRING']=='blog' or $_SERVER['QUERY_STRING']==$ne ){
    $class='active';
}else{

    $n=explode('/',$_SERVER['QUERY_STRING']);
     $ali=end($n);
    $class='';
}

?>
                              <div class="pagination_wrapper">
                                   <ul class="pagination pagination-centered">
                                        <li class="<?php echo $class?>"><a href="http://127.0.0.10/<?php if($pager!=null){echo $pager;}else{echo 'blog';} ?>">1</a></li>
                                       <?php
                                                if($count/5>=1){$x=1;
                                                    for($i=5;$i<$count;$i+=5){

                                       ?>
                                        <li class="<?php
                                        if(isset($ali)){


                                            if($ali==$x){
                                                echo 'active';
                                            }
                                        }
                                        ?>"><a  href="http://127.0.0.10/<?php if($pager!=Null){echo $pager.'/page/'.$x;}else{echo 'blog/page/'.$x;}?>"><?php echo $x+=1?></a></li>
                                       <?php
                                                    }}
                                       ?>
                                   </ul>
                              </div>
                         </div>
                  <?php \Core\view::rander("defult/layout/sidebar",[]) ?>
                    </div>
               </div>
          </section>
           <section class="twitter_feed_wrapper skincolored_section">
               <div class="container">
                    <div class="row">
                         <div class="twitter_feed_icon wow fadeInDown"><a href="http://127.0.0.10"><i class="fa fa-twitter"></i></a></div>
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
         <?php  \Core\view::lt('footer',[],'defult')?>

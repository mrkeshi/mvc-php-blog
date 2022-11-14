<?php
$n = new \App\Model\defult\result();
$vighT = $n->select('vighettext_tbl')[0];
$ads = $n->select('ads')[0];
$tab = $n->tab()
?>
<div id="sidebar" class="col-sm-4 col-md-4">
    <aside class="widget">
        <h4><?php echo $vighT['title'] ?></h4>
        <p><?php echo $vighT['text'] ?></p>
    </aside>
    <style>
        .reza {
            height: 110px;
            width: 110px;
        }
    </style>
    <aside class="widget ads clearfix">
        <h4>تبلیغات</h4>
        <a href="<?php echo $ads['link1'] ?>"><img class="reza" src="/<?php echo $ads['img1'] ?>" alt=""></a> <a
                href="<?php echo $ads['link2'] ?>"><img class="reza" src="/<?php echo $ads['img2'] ?>" alt=""></a> <a
                href="<?php echo $ads['link3'] ?>"><img class="reza" src="/<?php echo $ads['img3'] ?>" alt=""></a>
    </aside>
    <aside class="widget">
        <h4>تب ها</h4>
        <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a data-toggle="tab" href="/#recent"><?php echo $tab['title1'] ?></a></li>
            <li class=""><a data-toggle="tab" href="/#tags"> <?php echo $tab['title2'] ?></a></li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div id="recent" class="tab-pane fade active in">
                <ul class="media-list">
                    <?php
                    if ($tab['type1'] == "post_tbl") {
                        foreach ($tab['result1'] as $item1) {

                            ?>

                            <li class="media"><img src="/<?php echo $item1['image'] ?>" style="float: right"
                                                   height="60px" width="60px" alt="">
                                <h5 class="media-heading"><a
                                            href="http://127.0.0.10/posts/<?php echo $item1['url'] ?>"><?php echo $item1['title'] ?></a>
                                </h5>

                            </li>
                        <?php }
                    } elseif ($tab['type1'] == 'work_tbl') {
                        foreach ($tab['result1'] as $item1) {
                            ?>
                            <li class="media"><img src="/<?php echo $item1['img'] ?>" style="float: right" height="60px"
                                                   width="60px" alt="">
                                <h5 class="media-heading"><a
                                            href="http://127.0.0.10/work/<?php echo $item1['url'] ?>"><?php echo $item1['title'] ?></a>
                                </h5>
                                <p></p>
                            </li>
                        <?php }
                    } else {
                        foreach ($tab['result1'] as $item1) {
                            $post=$n->postC($item1['post_id']);

                            ?>
                            <li class="media"><img src="/<?php echo $post['image'] ?>" style="float: right" height="60px"
                                                   width="60px" alt="">
                                <h5 class="media-heading"><a
                                            href="http://127.0.0.10/posts/<?php echo $post['url'] ?>"><?php echo $item1['name'].''.' در مطلب '.$post['title'] ?></a>
                                </h5>
                                <p><?php $sl = substr($item1['text'], 0, 80);
                                    echo $sl ?></p>
                            </li>
                        <?php }
                    } ?>
                </ul>
            </div>
            <div id="tags" class="tab-pane fade">
                <ul class="media-list">
                    <?php
                    if ($tab['type2'] == "post_tbl") {
                        foreach ($tab['result2'] as $item2) {

                            ?>

                            <li class="media"><img src="/<?php echo $item2['image'] ?>" style="float: right"
                                                   height="60px" width="60px" alt="">
                                <h5 class="media-heading"><a
                                            href="http://127.0.0.10/posts/<?php echo $item2['url'] ?>"><?php echo $item2['title'] ?></a>
                                </h5>

                            </li>
                        <?php }
                    } elseif ($tab['type2'] == 'work_tbl') {
                        foreach ($tab['result2'] as $item2) {
                            ?>
                            <li class="media"><img src="/<?php echo $item2['img'] ?>" style="float: right" height="60px"
                                                   width="60px" alt="">
                                <h5 class="media-heading"><a
                                            href="http://127.0.0.10/work/<?php echo $item2['url'] ?>"><?php echo $item2['title'] ?></a>
                                </h5>

                            </li>
                        <?php }
                    } else {
                        foreach ($tab['result2'] as $item2) {
                            $pos1t=$n->postC($item2['post_id']);

                            ?>
                            <li class="media"><img src="/<?php echo $post1['image'] ?>" style="float: right" height="60px"
                                                   width="60px" alt="">
                                <h5 class="media-heading"><a
                                            href="http://127.0.0.10/posts/<?php echo $post1['url'] ?>"><?php echo $item2['name'].''.' در مطلب '.$post1['title'] ?></a>
                                </h5>
                                <p><?php $sl2 = substr($item2['text'], 0, 80);
                                    echo $sl2 ?></p>
                            </li>
                        <?php }
                    } ?>
                </ul>
            </div>
        </div>
    </aside>
</div>

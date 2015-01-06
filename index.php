<?php get_header() ?>
    <div class="content">
        <div class="con-mid">
            <div class="col-1">
                <div class="col-lf">
                    <div class="line1">
                        <img src="<?php bloginfo('template_url') ?>/images/icon/files.png" alt="文件通知">
                        <p class="subtitle">文件通知</p>
                        <?php
                        $cat=get_term_by('id', 2, 'category');
                        $cat_links=get_category_link($cat->term_id);
                        ?>
                        <a href="<?php echo $cat_links;?>" class="more white">更多</a>
                    </div>
                    <div class="c-content">
                        <ul>
                            <?php query_posts('cat=2&showposts=8'); ?>
                            <?php while (have_posts()) : the_post(); ?>
                            <li><a href="<?php the_permalink(); ?>" class="c-title"><?php the_title(); ?></a>
                            <p class="gray rfloat"><?php  the_modified_time('Y/n/j');?></p>
                            </li>
                            <?php endwhile; wp_reset_query(); ?>
                        </ul>
                    </div>
                </div>
                <div id="fsD1" class="focus">
                    <div id="D1pic1" class="fPic">
                        <?php query_posts('cat=9&showposts=4'); ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <div class="fcon">  
                            <a href="<?php  $current_link = get_permalink($post->ID); echo $current_link; ?>">
                                <img src="<?php $medium_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(310,235));echo $medium_image_url[0];?> " />
                            </a>
                            <span class="shadow">
                            <a href="<?php  $current_link = get_permalink($post->ID); echo $current_link; ?>">
                            <?php  $comment_count = get_post($ID)->post_title; echo $comment_count; ?>
                            </a>
                            </span>
                        </div>
                        <?php endwhile; wp_reset_query(); ?>
                    </div>
                    <div class="fbg">
                        <div class="D1fBt" id="D1fBt">
                            <a href="javascript:void(0)" class="current"><i>1</i></a>
                            <a href="javascript:void(0)"><i>2</i></a>
                            <a href="javascript:void(0)"><i>3</i></a>
                            <a href="javascript:void(0)"><i>4</i></a>
                        </div>
                    </div>
                </div>

                <script type="text/javascript">
                Qfast.add('widgets', {
                    path: "<?php bloginfo('template_url') ?>/js/terminator2.2.min.js",
                    type: "js",
                    requires: ['fx']
                });
                Qfast(false, 'widgets', function() {
                    K.tabs({
                        id: 'fsD1', //焦点图包裹id  
                        conId: "D1pic1", //** 大图域包裹id  
                        tabId: "D1fBt",
                        tabTn: "a",
                        conCn: '.fcon', //** 大图域配置class       
                        auto: 1, //自动播放 1或0
                        effect: 'fade', //效果配置
                        eType: 'click', //** 鼠标事件
                        pageBt: true, //是否有按钮切换页码
                        bns: ['.prev', '.next'], //** 前后按钮配置class                          
                        interval: 3000 //** 停顿时间  
                    })
                })
                </script>
                <div class="col-rh">
                    <div class="line1 line2">
                        <img src="<?php bloginfo('template_url') ?>/images/icon/work.png" alt="工作动态">
                        <p class="subtitle blue bigfont down">工作动态</p>
                        <?php
                        $cat=get_term_by('id', 3, 'category');
                        $cat_links=get_category_link($cat->term_id);
                        ?>
                        <a href="<?php echo $cat_links;?>" class="more blue down blue-hover">更多</a>
                    </div>
                    <div class="c-content ">
                        <ul>
                            <?php query_posts('cat=3&showposts=8'); ?>
                            <?php while (have_posts()) : the_post(); ?>
                            <li><a href="<?php the_permalink(); ?>" class="c-title"><?php the_title(); ?></a>
                            <p class="gray rfloat"><?php  the_modified_time('Y/n/j');?></p>
                            </li>
                            <?php endwhile; wp_reset_query(); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-1 col-2">
                <div class="col-lf">
                    <div class="line1">
                        <img src="<?php bloginfo('template_url') ?>/images/icon/inform.png" alt="基地信息">
                        <p class="subtitle">基地信息</p>
                    </div>
                    <div class="middle" style="margin-top: 13px;">
                        <ul>
                            <li>
                                <div class="icon"></div>
                                <p>南京信息工程大学学科楼1号楼</p>
                            </li>
                            <li>
                                <div class="unit icon"></div>
                                <p>环境科学与工程学院</p>
                            </li>
                            <li>
                                <div class="mail icon"></div>
                                <a href="mailto:hkkepu@163.com">hkkepu@163.com</a>
                            </li>
                            <li>
                                <div class="phone icon"></div>
                                <p>025-58731430</p>
                            </li>
                            <li>
                                <div class="fax icon"></div>
                                <p>86+025-58731090</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="pic-rh">
                    <div class="line1 line2 line3">
                        <img src="<?php bloginfo('template_url') ?>/images/icon/media.png" alt="走进基地">
                        <p class="subtitle blue bigfont down">走进基地</p>
                    </div>
                    <div id="tj_container" class="tj_container">
                        <div class="tj_nav">
                            <span id="tj_prev" class="tj_prev">Previous</span>
                            <span id="tj_next" class="tj_next">Next</span>
                        </div>
                        <div class="tj_wrapper">
                            <ul class="tj_gallery">
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/1.jpg" alt="image01" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/2.jpg" alt="image02" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/3.jpg" alt="image03" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/4.jpg" alt="image04" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/5.jpg" alt="image05" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/6.jpg" alt="image06" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/7.jpg" alt="image07" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/8.jpg" alt="image08" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/9.jpg" alt="image09" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/10.jpg" alt="image10" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/11.jpg" alt="image11" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/12.jpg" alt="image12" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/13.jpg" alt="image13" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/14.jpg" alt="image14" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/15.jpg" alt="image15" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/16.jpg" alt="image16" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/17.jpg" alt="image17" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/18.jpg" alt="image18" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/19.jpg" alt="image19" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/20.jpg" alt="image20" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/21.jpg" alt="image20" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/22.jpg" alt="image20" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/23.jpg" alt="image20" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/24.jpg" alt="image20" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/25.jpg" alt="image20" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/26.jpg" alt="image20" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/27.jpg" alt="image20" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/28.jpg" alt="image20" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/29.jpg" alt="image20" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/30.jpg" alt="image20" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/31.jpg" alt="image20" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php bloginfo('template_url') ?>/images/hk/32.jpg" alt="image20" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <script type="text/javascript">
                    $(function() {
                        $('#tj_container').gridnav({
                            rows: 4,
                            type: {
                                mode: 'sequpdown', // use def | fade | seqfade | updown | sequpdown | showhide | disperse | rows
                                speed: 500, // for fade, seqfade, updown, sequpdown, showhide, disperse, rows
                                easing: '', // for fade, seqfade, updown, sequpdown, showhide, disperse, rows
                                factor: 50, // for seqfade, sequpdown, rows
                                reverse: false // for sequpdown
                            }
                        });
                    });
                    </script>
                </div>
                <div class="col-lf mar-top">
                    <div class="line1">
                        <img class="down down2" src="<?php bloginfo('template_url') ?>/images/icon/link.png" style="margin-top: 11px;" alt="友情链接">
                        <p class="subtitle">友情链接</p>
                    </div>
                    <div class="middle" style=" margin-top:12px;">
                        <div class="pic">
                            <a href="http://www.zhb.gov.cn/"></a>
                        </div>
                        <div class="pic link1">
                            <a href="http://www.cma.gov.cn/"></a>
                        </div>
                        <div class="pic link2">
                            <a href="http://www.nuist.edu.cn/newindex/"></a>
                        </div>
                        <div class="pic link3">
                            <a href="http://es.nuist.edu.cn/"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1">
                <div class="col-lf col-rb">
                    <div class="line1 line2 line4">
                        <img src="<?php bloginfo('template_url') ?>/images/icon/media.png" alt="媒体关注">
                        <p class="subtitle blue bigfont down">媒体关注</p>
                        <?php
                        $cat=get_term_by('id', 5, 'category');
                        $cat_links=get_category_link($cat->term_id);
                        ?>
                        <a href="<?php echo $cat_links;?>" class="more blue down blue-hover">更多</a>
                    </div>
                    <div class="c-content ">
                        <ul>
                            <?php query_posts('cat=5&showposts=8'); ?>
                            <?php while (have_posts()) : the_post(); ?>
                            <li><a href="<?php the_permalink(); ?>" class="c-title"><?php the_title(); ?></a>
                            <p class="gray rfloat"><?php  the_modified_time('Y/n/j');?></p>
                            </li>
                            <?php endwhile; wp_reset_query(); ?>
                        </ul>
                    </div>
                </div>
                <div class="col-mid">
                    <div class="line1 line2 line4">
                        <img src="<?php bloginfo('template_url') ?>/images/icon/video.png" alt="精彩视频">
                        <p class="subtitle blue bigfont down">精彩视频</p>
                    </div>
                    <video controls width="310" height="193" poster="<?php bloginfo('template_url') ?>/images/video_poster.jpg">
                        <source src="<?php bloginfo('template_url') ?>/video.mp4" type="video/mp4">
                        <source src="<?php bloginfo('template_url') ?>/video.ogv" type="video/ogv">
                        <source src="<?php bloginfo('template_url') ?>/video.webm" type="video/webm">
                    </video>
                </div>
                <div class="col-rh">
                    <div class="line1 line2">
                        <img src="<?php bloginfo('template_url') ?>/images/icon/download.png" alt="下载中心">
                        <p class="subtitle blue bigfont down">下载中心</p>
                        <?php
                        $cat=get_term_by('id', 8, 'category');
                        $cat_links=get_category_link($cat->term_id);
                        ?>
                        <a href="<?php echo $cat_links;?>" class="more blue down blue-hover">更多</a>
                    </div>
                    <div class="c-content ">
                        <ul>
                            <?php query_posts('cat=8&showposts=8'); ?>
                            <?php while (have_posts()) : the_post(); ?>
                            <li><a href="<?php the_permalink(); ?>" class="c-title"><?php the_title(); ?></a>
                            <p class="gray rfloat"><?php  the_modified_time('Y/n/j');?></p>
                            </li>
                            <?php endwhile; wp_reset_query(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php get_footer(); ?>

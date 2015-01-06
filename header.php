<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <title>
    <?php if (is_home()) {
        bloginfo('name');
    }elseif (is_category()) {
        single_cat_title;echo "-"; bloginfo('name');
    }elseif (is_single()||is_page()) {
        single_post_title();
    }elseif (is_search()) {
        echo "搜索结果"; echo "-";bloginfo('name');
    }elseif (is_404()) {
        echo "页面未找到！";
    }else{
        wp_title('',true);
    } ?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/style.css">
    <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery-1.6.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery.gridnav.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/koala.min.1.5.js"></script>

</head>

<body>
    <div class="header"></div>
    <div class="topbar">
        <ul>
           <?php
                        if( is_active_sidebar( 'spacious_header_sidebar' ) ) {
                        ?>                              
                        <div id="header-right-sidebar" class="clearfix">
                        <?php
                            // Calling the header sidebar if it exists.
                            if ( !dynamic_sidebar( 'spacious_header_sidebar' ) ):
                            endif;
                        ?>      
                        </div>
                        <?php
                        }
                        ?>
                        <nav id="site-navigation" class="main-navigation" role="navigation">
                            <?php
                                if ( has_nav_menu( 'primary' ) ) {                                  
                                    wp_nav_menu( array( 'theme_location' => 'primary' ) );
                                }
                                else {
                                    wp_page_menu();
                                }
                            ?>
                        </nav>
        </ul>
    </div>
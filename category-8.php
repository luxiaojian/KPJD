<?php get_header() ?>
    <div class="content">
    	<div class="con-mid">
    		<div class="s-line">
    			<div class="circle"></div>
    			<div class="s-title"><?php single_cat_title(); ?></div>
				<p class="s-float s-margin"><?php single_cat_title(); ?></p>
				<p class="s-float">首页></p>
    		</div>
    		<div class="ca-content">
    			<div class="p-middle">
                <?php if( have_posts()) : while (have_posts()):the_post(); ?>
                    <div class="p-record c-record">
                      <p class="p-title"><?php the_title(); ?></p>
                      <div class="s-line p-line">
                            <div class="p-user p-icon">
                                <i class="iconfont">&#xe601</i> 
                                <p style="margin:0;"><?php the_author(); ?></p>
                            </div>
                            <div class="p-date  p-icon">
                                <i class="iconfont">&#xe600</i>
                                <p style="margin:0;"><?php the_time( get_option( 'date_format' ) ); ?></p>
                            </div> 
                            <div class="button">
                                <a href="<?php the_permalink(); ?>">查看下载</a>
                            </div>
                      </div> 
                    </div>

                <?php endwhile; ?>
                    <?php if ( $wp_query->max_num_pages > 1 ) : ?>
                            <div class="page_navi"><?php par_pagenavi(9); ?></div>
                    <?php endif; ?>
                    
                <?php else : ?>
                    <p>没有找到任何文章！</p>
                <?php endif; ?>
                </div>
    		</div>
    	</div>
    </div>
   <?php get_footer(); ?>
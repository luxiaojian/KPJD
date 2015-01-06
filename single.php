<?php get_header() ?>
    <div class="content">
    	<div class="con-mid">
    		<div class="s-line">
    			<div class="circle"></div>
    			<div class="s-title"><?php $category = get_the_category(); echo $category[0]->cat_name;?></div>
				<p class="s-float s-margin"><?php $category = get_the_category(); echo $category[0]->cat_name;?></p>
				<p class="s-float">首页></p>
    		</div>
            <?php if (have_posts()):the_post(); update_post_caches($posts); ?>
    		<div class="s-content">
                <p class="p-title p-middle"><?php the_title(); ?></p>
    			<?php the_content(); ?>
    		</div>
            <?php else: ?>
            <p>这个页面没有内容</p>
            <?php endif; ?>
    	</div>
    </div>
   <?php get_footer(); ?>
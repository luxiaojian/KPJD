<?php get_header() ?>
    <div class="content">
    	<div class="con-mid">
    		<div class="s-line">
    			<div class="circle"></div>
    			<div class="s-title">组织简介</div>
				<p class="s-float s-margin">组织简介</p>
				<p class="s-float">首页></p>
    		</div>
            <?php if (have_posts()):the_post(); update_post_caches($posts); ?>
    		<div class="s-content">
    			<?php the_content(); ?>
    		</div>
            <?php else: ?>
            <p>这个页面没有内容</p>
            <?php endif; ?>
    	</div>
    </div>
    <div class="footer">
        <p>版权所有©2014-2015南京信v息工程大学环境科学学院 &nbsp&nbsp&nbsp&nbsp 南京信息工程大学多火工作室技术支持</p>
        <p>地址:江苏省南京市宁六路219号 邮编：210044 电话：86+025-58731090</p>
        <p>建议分辨率 1280*1024</p>
    </div>
</body>
</html>
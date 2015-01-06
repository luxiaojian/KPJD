<?php 
	register_nav_menus( array(	
		'primary' 	=> 'Primary Menu',
		'footer' 	=> 'Footer Menu'
	) );
?>


<?php 
add_theme_support( 'post-thumbnails' );

function diy_login_page() { echo '<link rel="stylesheet" href="' . get_bloginfo( 'template_directory' ) . '/login.css" type="text/css" media="all" />' . "\n"; } add_action( 'login_enqueue_scripts', 'diy_login_page' );
function my_login_redirect($redirect_to, $request){
if( empty( $redirect_to ) || $redirect_to == 'wp-admin/' || $redirect_to == admin_url() )
return home_url("/wp-admin/edit.php");//红色部分修改为你想要默认显示的模版
else
return $redirect_to;
}
add_filter("login_redirect", "my_login_redirect", 10, 3);


function par_pagenavi($range = 9){
	global $paged, $wp_query;
	if ( !$max_page ) {$max_page = $wp_query->max_num_pages;}
	if($max_page > 1){if(!$paged){$paged = 1;}
	//if($paged != 1){echo "<a href='" . get_pagenum_link(1) . "' class='extend' title='跳转到首页'> 返回首页 </a>";}
	previous_posts_link(' < ');
    if($max_page > $range){
		if($paged < $range){for($i = 1; $i <= ($range + 1); $i++){echo "<a href='" . get_pagenum_link($i) ."'";
		if($i==$paged)echo " class='current'";echo ">$i</a>";}}
    elseif($paged >= ($max_page - ceil(($range/2)))){
		for($i = $max_page - $range; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
		if($i==$paged)echo " class='current'";echo ">$i</a>";}}
	elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
		for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){echo "<a href='" . get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";}}}
    else{for($i = 1; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
    if($i==$paged)echo " class='current'";echo ">$i</a>";}}
	next_posts_link(' > ');
    //if($paged != $max_page){echo "<a href='" . get_pagenum_link($max_page) . "' class='extend' title='跳转到最后一页'> 最后一页 </a>";}
}
}
?>

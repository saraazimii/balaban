<?php

function load_stylesheets() {
	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style('bootstrap');

	wp_register_style('bull',get_template_directory_uri() . '/css/bull.css');
	wp_enqueue_style('bull');

	wp_register_style('swiper',get_template_directory_uri() . '/css/swiper.css');
	wp_enqueue_style('swiper');

	wp_register_style('dark',get_template_directory_uri() . '/css/dark.css');
	wp_enqueue_style('dark');

	wp_register_style('font-icons',get_template_directory_uri() . '/css/font-icons.css');
	wp_enqueue_style('font-icons');

	wp_register_style('animate',get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style('animate');

	wp_register_style('magnific-popup',get_template_directory_uri() . '/css/magnific-popup.css');
	wp_enqueue_style('magnific-popup');

	wp_register_style('responsive',get_template_directory_uri() . '/css/responsive.css');
	wp_enqueue_style('responsive');

	wp_register_style('customstyle',get_template_directory_uri() . '/css/customstyle.css');
	wp_enqueue_style('customstyle');

}	

function addjs() {
	wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js');
	wp_enqueue_script('jquery');
	
	wp_register_script('plugins', get_template_directory_uri() . '/js/plugins.js', array(), 1, 1, 1);
	wp_enqueue_script('plugins');
	
	wp_register_script('functions', get_template_directory_uri() . '/js/functions.js', array(), 1, 1, 1);
	wp_enqueue_script('functions');
}

function custom_pagination($numpages = '', $pagerange = '', $paged='') {
 
if (empty($pagerange)) {
$pagerange = 2;
}
 
global $paged;
 
if (empty($paged)) {
$paged = 1;
}
 
if ($numpages == '') {
global $wp_query;
 
$numpages = $wp_query->max_num_pages;
 
if(!$numpages) {
$numpages = 1;
}
}
 
$pagination_args = array(
'base'            => get_pagenum_link(1) . '%_%',
'format'          => 'page/%#%',
'total'           => $numpages,
'current'         => $paged,
'show_all'        => False,
'end_size'        => 1,
'mid_size'        => $pagerange,
'prev_next'       => True,
'prev_text'       => __('<'),
'next_text'       => __('>'),
'type'            => 'postname',
'add_args'        => false,
'add_fragment'    => ''
);
 
$paginate_links = paginate_links($pagination_args);
 
if ($paginate_links) {
echo "<ul class='pagination'>";

echo   $paginate_links  ;
echo "</ul>";
}
}


$page_variable=0;
$tel =0;
$email = ' ';

add_action('wp_enqueue_scripts','load_stylesheets');
add_action('wp_enqueue_scripts','addjs');
//add_action('wp_enqueue_scripts','custom_pagination');


?>
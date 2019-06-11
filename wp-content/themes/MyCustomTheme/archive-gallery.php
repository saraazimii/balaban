<?php
/**
* Template Name: Gallery
*
* @package WordPress
* @subpackage MyCustomTheme
*/
?>
<?php
global $page_variable;
$page_variable = 5;
get_header();

?>
		<section id="slider" class="slider-parallax" style="background-color: #222;">
					<?php 
					$count_posts = wp_count_posts( 'tour' )->publish;
					$args = array('post_type' => 'gallery', 'posts_per_page' => '12');
					$myQuery = new WP_Query($args);
					?>
					<?php if ($myQuery->have_posts()) { ?>
					<?php while ($myQuery->have_posts()) { $myQuery->the_post();  ?>
					<?php $is_header = get_post_meta(get_the_ID(), 'is_header', TRUE);
					if($is_header) { ?>
			<div id="oc-slider" class="owl-carousel carousel-widget" data-margin="0" data-items="1" data-pagi="false" data-loop="true" data-animate-in="rollIn" data-speed="450" data-animate-out="rollOut" data-autoplay="5000">
							<?php
							$image_id = intval(get_post_meta(get_the_ID(),'picture_1',TRUE));
							if ($image_id) {
							$image = wp_get_attachment_image_src($image_id, 'full');
							if ($image) {
							?>
				<a href="#"><img src="<?php echo $image[0] ?>" alt="Slider"></a>
							<?php } } ?>

			</div>
					<?php } } } ?>
		</section>
		
		
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
					<div class="col_full clearfix">



						<div class="masonry-thumbs col-3" data-big="2" data-lightbox="gallery">
											<?php 
					$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
					$count_posts = wp_count_posts( 'tour' )->publish;
					$args = array('post_type' => 'gallery', 'posts_per_page' => '12');
					$myQuery = new WP_Query($args);
					?>
					<?php if ($myQuery->have_posts()) { ?>
					<?php while ($myQuery->have_posts()) { $myQuery->the_post();  ?>
					<?php $is_header = get_post_meta(get_the_ID(), 'is_header', TRUE);
					if(! $is_header) { ?>
							<?php
							$image_id = intval(get_post_meta(get_the_ID(),'picture_1',TRUE));
							if ($image_id) {
							$image = wp_get_attachment_image_src($image_id, 'full');
							if ($image) {
							?>
							<a href="<?php echo $image[0] ?>" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo $image[0] ?>" alt="Gallery Thumb 1">
							
							<div class="overlay" style="top: 50%;"><h1 style="text-align:center; direction:rtl;background-color:#00000040;color:white"><?php echo the_title() ?></h1></div>
							
							</a>
							<?php } } ?> <?php } } } ?>
						</div>
					
					</div>
				</div>
			</div>
		</section>

<?php
get_footer(); ?>
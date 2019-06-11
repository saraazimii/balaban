<?php
/**
* Template Name: Tour
*
* @package WordPress
* @subpackage MyCustomTheme
*/
?>
<?php 
global $page_variable;
$page_variable = 3;
get_header(); ?>
<?php global $wp;
$current_url = home_url( add_query_arg( array(), $wp->request ) ); 
$postid = url_to_postid( $current_url ); ?>
<?php $my_query = new WP_Query('post_type=news&p=$postid');
$my_query->the_post();?>
<?php 
$imageid = intval(get_post_meta($postid, 'news_picture', TRUE));
$image = wp_get_attachment_image_src($imageid, 'full');
$slider_id = get_post_meta($postid, 'news_slider', TRUE);
$slider = wp_get_attachment_image_src( $slider_id, 'full');
?>
<?php
    function set_views($postid) {
		$key = 'views';
        $count = get_post_meta($postid, 'views', true); //retrieves the count

        if($count == ''){ //check if the post has ever been seen

            //set count to 0
            $count = 0;

            //just in case
            delete_post_meta($postid, $key);

            //set number of views to zero
            add_post_meta($postid, $key, '0');

        } else{ //increment number of views
            $count++;
            update_post_meta($postid, $key, $count);
        }
    }
set_views($postid);
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<section id="slider" class="slider-parallax" style="background-color: #222;">

			<div id="oc-slider" class="owl-carousel carousel-widget" data-margin="0" data-items="1" data-pagi="false" data-loop="true" data-animate-in="rollIn" data-speed="450" data-animate-out="rollOut" data-autoplay="5000">

				<a href="#"><img src="<?php echo $slider[0] ?>" alt="Slider"><div class="overlay" style="top: 50%;"><h2 style="text-align:center; direction:rtl;background-color: #00000069;color: #eeecec;padding: 10px 10px;"><?php echo get_the_title( $postid ) ?></h2></div></a>
				


			</div>

		</section>

		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">
					<div class="postcontent nobottommargin col_last clearfix" style="float:right; width:67%;direction:rtl">
<?php echo get_post_field('post_content', $postid); ?>
					</div>
					
					
						<div class="sidebar nobottommargin clearfix">
						<div class="sidebar-widgets-wrap">

							<div class="widget clearfix">

								<div class="tabs nobottommargin clearfix" id="sidebar-tabs">

									<ul class="tab-nav clearfix">
										<li class="divcenter" style="margin: 0; border: 0;"><a href="#tabs-1" style="font-family:BYekan;" >پربازدیدترین های وبلاگ</a></li>
									</ul>

									<div class="tab-container">

										<div class="tab-content clearfix" id="tabs-1">
											<div id="popular-post-list-sidebar">
											
										<?php
										$query = new WP_Query( array(
												'post_type'     => 'news', //your post type
												'posts_per_page' => 3, 
												'meta_key'      => 'views', //the metakey previously defined
												'orderby'       => 'meta_value_num',
												'order'         => 'DESC'
												)
												);

												while ($query->have_posts()) {
												$query->the_post();
												//whatever code you want
												?>
												<div class="spost clearfix" style="direction:rtl">
													<div class="entry-image" style="float:right">
													<?php
													$image_id = intval(get_post_meta(get_the_ID(),'news_picture',TRUE));
													if ($image_id) {
													$image = wp_get_attachment_image_src($image_id, 'medium');
													if ($image) {
													?>
														<a href="#" class="nobg"><img class="img-circle" src="<?php echo $image[0] ?>" alt=""></a>
													<?php } } ?>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="<?php echo the_permalink() ?>" style="font-family:BYekan;"><?php echo the_title() ?></a></h4>
														</div>
													</div>
												</div>
													<?php } ?>

											</div>
										</div>


									</div>

								</div>

							</div>

						</div>

					</div><!-- .sidebar end -->
						</div>
						</div>
						</section>
		
		<?php get_footer(); ?>
		

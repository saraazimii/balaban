<?php
/**
* Template Name: NewsArchive
*
* @package WordPress
* @subpackage MyCustomTheme
*/
?>


<?php 
global $page_variable;
$page_variable = 3;
get_header(); ?>

		<section id="slider" class="slider-parallax" style="background-color: #222;">

			<div id="oc-slider" class="owl-carousel carousel-widget" data-margin="0" data-items="1" data-pagi="false" data-loop="true" data-animate-in="rollIn" data-speed="450" data-animate-out="rollOut" data-autoplay="5000">

				<a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/parallax/scenery2.jpg" alt="Slider"><div class="overlay" style="top: 50%;"><h1 style="text-align:center; direction:rtl;">وبلاگ</h1></div></a>
				


			</div>

		</section>
		
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">
					<div class="postcontent nobottommargin col_last clearfix" style="float:right; width:67%;">
					<!-- Posts
					============================================= -->
						<div id="posts" class="small-thumbs">
							<?php 
							$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
							$count_posts = wp_count_posts( 'tour' )->publish;
							$args = array('post_type' => 'news', 'posts_per_page' => '12','paged' => $paged);
							$myQuery = new WP_Query($args);
							?>
							<?php if ($myQuery->have_posts()) { ?>
							<?php while ($myQuery->have_posts()) { $myQuery->the_post();  ?>

						<div class="entry clearfix" style="direction:rtl;padding:15px 15px 15px 15px" id="news-entry">
							<div class="entry-image">
							<?php
							$image_id = intval(get_post_meta(get_the_ID(),'news_picture',TRUE));
							if ($image_id) {
							$image = wp_get_attachment_image_src($image_id, 'medium');
							if ($image) {
							?>
								<a href="<?php echo $image[0] ?>" data-lightbox="image"><img class="image_fade" src="<?php echo $image[0] ?>" alt=""></a>
							<?php 
							}
							}
							?>
							</div>
							<div class="entry-c">
								<div class="entry-title">
									<h2><a href="<?php echo the_permalink() ?>"><?php echo the_title(); ?></a></h2>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> 10th February 2014</li>
								</ul>
								<div class="entry-content">
									<p><?php echo get_post_meta(get_the_ID(), 'short_description',TRUE)?></p>
									<a href="<?php echo the_permalink() ?>"class="button button-border button-rounded button-amber" style="float:left;"><span>ادامه مطلب</span><i class="icon-angle-left"></i></a>
								</div>
							</div>
						</div>
						<?php wp_reset_postdata(); ?>
						<?php } ?>
						<?php }  ?>
							<div class="col-sm-12 inner-sm">
							<?php custom_pagination($myQuery->max_num_pages, "", $paged); ?>
							</div>
						</div>
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
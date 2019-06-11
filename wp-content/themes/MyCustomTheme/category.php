
 <?php
 if(is_category('One Day')) { $cat = 'One Day'; $text = 'تورهای یک روزه'; }
 if(is_category('Multiple Days')) { $cat = 'Multiple Days'; $text = 'تورهای چند روزه'; }
 ?>
<?php $homeurl = get_home_url(); ?>
<?php
global $page_variable;
$page_variable = 4;
get_header(); ?>
		<section id="slider" class="slider-parallax" style="background-color: #222;">

			<div id="oc-slider" class="owl-carousel carousel-widget" data-margin="0" data-items="1" data-pagi="false" data-loop="true" data-animate-in="rollIn" data-speed="450" data-animate-out="rollOut" data-autoplay="5000">

				<a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/slider/full/1.jpg" alt="Slider"><div class="overlay" style="top: 50%;"><h2 style="text-align:center; direction:rtl;"><?php echo $text ?></h2></div></a>
				


			</div>

		</section>


		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">
					<ul class=" clearfix center"  style="margin-bottom:20px;list-style:none">
							
							<li id="list-filter" <?php if(is_category('One Day')) { ?> class="active" <?php } ?> style="display:inline;margin: 0 0 0 25px;"><a href="<?php echo $homeurl ?>/category/one-day/" class="button button-circle" style="font-family:BYekan;background-color:transparent;;color:black">تورهای یک روزه</a></li>
							<li id="list-filter" <?php if(is_category('Multiple Days')) { ?> class="active" <?php } ?> style="display:inline;margin: 0 0 0 25px;"><a href="<?php echo $homeurl ?>/category/multiple-days/"  class="button button-circle" style="font-family:BYekan;background-color:transparent;;color:black">تورهای چند روزه</a></li>
							<li id="list-filter" style="display:inline;margin: 0 0 0 25px;"><a class="button button-circle" href="<?php echo $homeurl ?>/tour/"  style="font-family:BYekan;background-color:transparent;color:black">همه تورها</a></li>
					</ul>
					<!-- Shop
					============================================= -->
					<div id="shop" class="shop grid-container clearfix" data-layout="fitRows">
					<?php 
					$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
					$count_posts = wp_count_posts( 'tour' )->publish;
					$args = array('post_type' => 'tour', 'posts_per_page' => '12','paged' => $paged, 'category_name'  => $cat);
					$myQuery = new WP_Query($args);
					?>
					<?php if ($myQuery->have_posts()) { ?>
					<?php while ($myQuery->have_posts()) { $myQuery->the_post();  ?>
					
						<div class="product clearfix" style="direction: rtl;">
							<div class="product-image">
							<?php
							$image_id = intval(get_post_meta(get_the_ID(),'tour_picture',TRUE));
							if ($image_id) {
							$image = wp_get_attachment_image_src($image_id, 'medium');
							if ($image) {
							?>
							<a href="<?php echo $image[0] ?>"><img src="<?php echo $image[0] ?>" alt="Checked Short Dress"></a>
							<?php 
							}
							}
							$status = get_post_meta(get_the_ID(),'status',TRUE);
							?>
								<?php if($status) { ?> <div class="sale-flash" style="font-family:BYekan;background-color:#197836;">جا دارد</div> <?php } ?>
								<?php if(! $status) { ?> <div class="sale-flash" style="font-family:BYekan;background-color:#bc1a1a;">پر شد</div> <?php } ?>
								<div class="product-overlay">
									<a href="<?php echo the_permalink() ?>" class="add-to-cart" style="width:100%;"><i class="icon-zoom-in"></i><span style="font-family:BYekan;"> مشاهده جزئیات</span></a>
								</div>
							</div>
							<div class="product-desc">
								<div class="product-title"><h3><a href="#"><?php echo the_title(); ?></a></h3></div>
								<?php
								$starting_day = get_post_meta(get_the_ID(), 'starting_day', TRUE);
								$starting_month = get_post_meta(get_the_ID(), 'starting_month', TRUE);
								$finish_day = get_post_meta(get_the_ID(), 'finish_day', TRUE);
								$finish_month = get_post_meta(get_the_ID(), 'finish_month', TRUE);
								if($finish_day && $finish_month) {
								?>
								<div class="product-price" style="font-family:BYekan;font-size:14px;">&nbspاز&nbsp<?php echo $starting_day; ?>&nbsp<?php echo $starting_month; ?>&nbspتا&nbsp<?php echo $finish_day; ?>&nbsp<?php echo $finish_month; ?>
								<?php
								}
								if(!$finish_day && !$finish_month) {
								?>
								<div class="product-price" style="font-family:BYekan;font-size:14px;"><?php echo $starting_day; ?>&nbsp<?php echo $starting_month; ?>
								<?php } ?>
								</div>
							</div>
						</div>

					<?php wp_reset_postdata(); ?>
					<?php } 
					?>
        
					<?php
					}  ?>
<?php  ?>
			<div class="col-sm-12 inner-sm">
		<?php custom_pagination($myQuery->max_num_pages, "", $paged); ?>
			</div>
<?php  ?>

					</div><!-- #shop end -->

				</div>

			</div>

		</section>
		
		<?php get_footer(); ?>
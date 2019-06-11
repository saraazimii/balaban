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
$page_variable = 4;
get_header(); ?>
<?php global $wp;
$current_url = home_url( add_query_arg( array(), $wp->request ) ); 
$postid = url_to_postid( $current_url ); ?>
<?php $my_query = new WP_Query('post_type=tour&p=$postid');
$my_query->the_post();?>
<?php 
$starting_day = get_post_meta($postid, 'starting_day', TRUE); 
$starting_month = get_post_meta($postid, 'starting_month', TRUE); 
$finish_day = get_post_meta($postid, 'finish_day', TRUE);
$finish_month = get_post_meta($postid, 'finish_month', TRUE);
$destination = get_post_meta($postid, 'destination', TRUE);
$starting_time = get_post_meta($postid, 'starting_time', TRUE);
$finish_time = get_post_meta($postid, 'finish_time', TRUE);
$cost = get_post_meta($postid, 'cost', TRUE);
$status = get_post_meta($postid, 'status', TRUE);
$imageid = intval(get_post_meta($postid, 'tour_picture', TRUE));
$imageid2 = intval(get_post_meta($postid, 'tour_picture_2', TRUE));
$imageid3 = intval(get_post_meta($postid, 'tour_picture_3', TRUE));
$imageid4 = intval(get_post_meta($postid, 'tour_picture_4', TRUE));
$image = wp_get_attachment_image_src($imageid, 'medium');  
$image2 = wp_get_attachment_image_src($imageid2, 'medium');  
$image3 = wp_get_attachment_image_src($imageid3, 'medium');  
$image4 = wp_get_attachment_image_src($imageid4, 'medium');  
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<section id="page-title" style="direction:rtl;">

			<div class="container clearfix">
				<h1 style="font-family:BYekan;"><?php echo get_the_title( $postid ); ?></h1>
			</div>

		</section><!-- #page-title end -->


		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="single-product">

						<div class="product">

							<div class="col_two_fifth">

								<!-- Product Single - Gallery
								============================================= -->
								<div class="product-image">
									<div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
										<div class="flexslider">
											<div class="slider-wrap" data-lightbox="gallery">
											<?php if($image) { ?>
												<div class="slide" data-thumb="<?php echo $image[0] ?>"><a href="<?php echo $image[0] ?>" title="Pink Printed Dress - Side View" data-lightbox="gallery-item"><img src="<?php echo $image[0] ?>" alt="Pink Printed Dress"></a></div>
											<?php } ?>
											<?php if($image2) { ?>
												<div class="slide" data-thumb="<?php echo $image2[0];?>"><a href="<?php echo $image2[0];?>" title="Pink Printed Dress - Side View" data-lightbox="gallery-item"><img src="<?php echo $image2[0];?>" alt="Pink Printed Dress"></a></div>
											<?php } ?>
											<?php if($image3) { ?>
												<div class="slide" data-thumb="<?php echo $image3[0];?>"><a href="<?php echo $image3[0];?>" title="Pink Printed Dress - Back View" data-lightbox="gallery-item"><img src="<?php echo $image3[0];?>" alt="Pink Printed Dress"></a></div>
											<?php } ?>
											<?php if($image4) { ?>
												<div class="slide" data-thumb="<?php echo $image4[0];?>"><a href="<?php echo $image4[0];?>" title="Pink Printed Dress - Back View" data-lightbox="gallery-item"><img src="<?php echo $image4[0];?>" alt="Pink Printed Dress"></a></div>
											<?php } ?>
											</div>
										</div>
									</div>
									<?php if($status) { ?> <div class="sale-flash" style="font-family:BYekan;">جا دارد</div> <?php } ?>
									<?php if(! $status) { ?> <div class="sale-flash" style="font-family:BYekan;">پر شد</div> <?php } ?>
								</div><!-- Product Single - Gallery End -->

							</div>

							<!--<div class="col_two_fifth product-desc">

								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero velit id eaque ex quae laboriosam nulla optio doloribus! Perspiciatis, libero, neque, perferendis at nisi optio dolor!</p>
								<p>Perspiciatis ad eveniet ea quasi debitis quos laborum eum reprehenderit eaque explicabo assumenda rem modi.</p>
								<ul class="iconlist">
									<li><i class="icon-caret-right"></i> Dynamic Color Options</li>
									<li><i class="icon-caret-right"></i> Lots of Size Options</li>
									<li><i class="icon-caret-right"></i> 30-Day Return Policy</li>
								</ul>
								<div class="panel panel-default product-meta">
									<div class="panel-body">
										<span itemprop="productID" class="sku_wrapper">SKU: <span class="sku">8465415</span></span>
										<span class="posted_in">Category: <a href="#" rel="tag">Dress</a>.</span>
										<span class="tagged_as">Tags: <a href="#" rel="tag">Pink</a>, <a href="#" rel="tag">Short</a>, <a href="#" rel="tag">Dress</a>, <a href="#" rel="tag">Printed</a>.</span>
									</div>
								</div>

							</div> -->

							<div class="col_two_fifth "style ="direction:rtl;">

								<h3 style="font-family:BYekan;margin-bottom:0px;"> توضیحات تور </h3>

								<div class="divider divider-center" style="margin:0;"><i class="icon-circle-blank"></i></div>

								<div class="feature-box fbox-plain fbox-dark fbox-small">
									<div class="fbox-icon">
										<i class="fa fa-bus"></i>
									</div>
									<h3>مقصد</h3>
									<p class="notopmargin"><?php echo $destination ?></p>
								</div>

								<div class="feature-box fbox-plain fbox-dark fbox-small">
									<div class="fbox-icon">
										<i class="icon-calendar"></i>
									</div>
									<h3>تاریخ رفت</h3>
									<p class="notopmargin"><?php echo $starting_day ?>&nbsp<?php echo $starting_month ?></p>
								</div>
								<div class="feature-box fbox-plain fbox-dark fbox-small">
									<div class="fbox-icon">
										<i class="icon-calendar"></i>
									</div>
									<h3>تاریخ برگشت</h3>
									<p class="notopmargin"><?php echo $finish_date ?></p>
								</div>
								<div class="feature-box fbox-plain fbox-dark fbox-small">
									<div class="fbox-icon">
										<i class="icon-clock"></i>
									</div>
									<h3>ساعت حرکت</h3>
									<p class="notopmargin"><?php echo $starting_time ?></p>
								</div>
								<div class="feature-box fbox-plain fbox-dark fbox-small">
									<div class="fbox-icon">
										<i class="icon-clock"></i>
									</div>
									<h3>ساعت بازگشت</h3>
									<p class="notopmargin"><?php echo $finish_time ?></p>
								</div>

								<div class="feature-box fbox-plain fbox-dark fbox-small">
									<div class="fbox-icon">
										<i class="icon-truck2"></i>
									</div>
									<h3>هزینه</h3>
									<p class="notopmargin"><?php echo $cost; ?></p>
								</div>

							</div>
							
							<div class="col_four_fifth product-desc" style="direction:rtl;">
								<?php echo get_post_field('post_content', $postid); ?>
							</div>



						</div>

					</div>


				</div>

			</div>

		</section>
		
		<?php get_footer(); ?>
		

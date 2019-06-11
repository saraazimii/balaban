<?php
/**
* Template Name: Homepage
*
* @package WordPress
* @subpackage MyCustomTheme
*/
?>
<?php 
global $page_variable;
$page_variable = 0;
get_header(); ?>
<?php 
$homeurl = get_home_url(); 
$why_choose_us_heading_1 = get_field( "why_choose_us_heading_1" );
$why_choose_us_heading_2 = get_field( "why_choose_us_heading_2" );
$why_choose_us_heading_3 = get_field( "why_choose_us_heading_3" );
$why_choose_us_heading_4 = get_field( "why_choose_us_heading_4" );
$why_choose_us_1 = get_field( "why_choose_us_1" );
$why_choose_us_2 = get_field( "why_choose_us_2" );
$why_choose_us_3 = get_field( "why_choose_us_3" );
$why_choose_us_4 = get_field( "why_choose_us_4" );
$why_choose_us_picture = get_field( "why_choose_us_picture" );
$holiday_tours_header_name = get_field( "holiday_tours_header_name" );
$slider_1_id = get_field( "slider_1" );
$slider_1 = wp_get_attachment_image_src( $slider_1_id, 'full');
$slider_2_id = get_field( "slider_2" );
$slider_2 = wp_get_attachment_image_src( $slider_2_id, 'full');
$slider_1_text = get_field('slider_1_text');
$slider_2_text = get_field('slider_2_text');
$slider_2_subtitle = get_field('slider_2_subtitle');
?>

<?php //$count_hero = count(get_field('hero')); ?>
<?php //$pics = get_field('pictures'); ?>

		<!--<section id="page-title" class="page-title-center" style="background-image:url("C:/wamp/Travel/wordpress/wp-content/themes/MyCustomTheme/images/blog/full/17.jpg")>


			
			<div class="container clearfix">
				<h1>Page Title Center</h1>
				<span>A Short Page Title Tagline</span>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Shortcodes</a></li>
					<li class="active">Page Titles</li>
				</ol>
			</div>
			

		</section>-->
		
		
		
		
				<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">

			<div class="slider-parallax-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark" style="background-image: url('<?php echo $slider_1[0] ?>');">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp"><?php echo $slider_1_text ?></h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200"></p>
								</div>
							</div>
						</div>
						<div class="swiper-slide" style="background-image: url('<?php echo $slider_2[0] ?>'); background-position: center top;">
							<div class="container clearfix">
								<div class="slider-caption">
									<h2 data-caption-animate="fadeInUp"><?php echo $slider_2_text ?></h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200"><?php echo $slider_2_subtitle ?></p>
								</div>
							</div>
						</div>
					</div>
					<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
					<div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>
				</div>

			</div>

		</section>
		
		<section id="content" style=" >
		<div class="content-wrap">
		
				<div class="container clearfix" style="margin-top: 30px;margin-bottom: 30px;">

					<div class="col_half nobottommargin">
					<div class="heading-block center">
						<h3 style="">تورهای <span style="color:#22a812">یک روزه</span></h3>
					</div>
						<div class="feature-box media-box">
						<?php 
						$count_posts = wp_count_posts( 'tour' )->publish;
						$args = array('post_type' => 'tour', 'posts_per_page' => '1', 'category_name'  => 'One Day');
						$myQuery = new WP_Query($args);
						?>
						<?php if ($myQuery->have_posts()) { ?>
						<?php while ($myQuery->have_posts()) { $myQuery->the_post();  ?>
							<div class="fbox-media" style="margin: 0px">
							<?php
							$image_id = intval(get_post_meta(get_the_ID(),'tour_picture',TRUE));
							if ($image_id) {
							$image = wp_get_attachment_image_src($image_id, 'full');
							if ($image) {
							?>
								<img src="<?php echo $image[0] ?>" alt="Why choose Us?">
							<?php } } ?>
							</div>
						<?php } } ?>
							<div class="fbox-desc">
								<div class="list-group"> 
									<?php 
									$count_posts = wp_count_posts( 'tour' )->publish;
									$args = array('post_type' => 'tour', 'posts_per_page' => '4', 'category_name'  => 'One Day');
									$myQuery = new WP_Query($args);
									?>
									<?php if ($myQuery->have_posts()) { ?>
									<?php while ($myQuery->have_posts()) { $myQuery->the_post();  ?>
									<a class="list-group-item" href="<?php echo the_permalink() ?>"><?php echo the_title() ?></a>
									<?php } } ?>
									<?php
									// Get the ID of a given category
									$category_id = get_cat_ID( 'One Day' );
									// Get the URL of this category
									$category_link = get_category_link( $category_id );
									?>
									<a href="<?php echo $category_link ?>" id="button-list-group-item" class="button button-border button-rounded button-amber"><span>مشاهده تمام تورهای یک روزه</span><i class="icon-angle-left"></i></a>
								</div>

								
							</div>
						</div>
						
					</div>

					<div class="col_half nobottommargin">
					<div class="heading-block center">
						<h3 style="">تورهای <span style="color:#22a812">چند روزه</span></h3>
					</div>
						<div class="feature-box media-box">
						<?php 
						$count_posts = wp_count_posts( 'tour' )->publish;
						$args = array('post_type' => 'tour', 'posts_per_page' => '1', 'category_name'  => 'Multiple Days');
						$myQuery = new WP_Query($args);
						?>
						<?php if ($myQuery->have_posts()) { ?>
						<?php while ($myQuery->have_posts()) { $myQuery->the_post();  ?>
							<div class="fbox-media" style="margin: 0px">
							<?php
							$image_id = intval(get_post_meta(get_the_ID(),'tour_picture',TRUE));
							if ($image_id) {
							$image = wp_get_attachment_image_src($image_id, 'full');
							if ($image) {
							?>
								<img src="<?php echo $image[0] ?>" alt="Why choose Us?">
							<?php } } ?>
							</div>
							<?php } } ?>
							<div class="fbox-desc">
								<div class="list-group"> 
									<?php 
									$count_posts = wp_count_posts( 'tour' )->publish;
									$args = array('post_type' => 'tour', 'posts_per_page' => '4', 'category_name'  => 'Multiple Days');
									$myQuery = new WP_Query($args);
									?>
									<?php if ($myQuery->have_posts()) { ?>
									<?php while ($myQuery->have_posts()) { $myQuery->the_post();  ?>
									<a class="list-group-item" href="<?php echo the_permalink() ?>"><?php echo the_title() ?></a>
									<?php } } ?>
									<?php
									// Get the ID of a given category
									$category_id = get_cat_ID( 'Multiple Days' );
									// Get the URL of this category
									$category_link = get_category_link( $category_id );
									?>
									<a href="<?php echo $category_link ?>" id="button-list-group-item" class="button button-border button-rounded button-amber"><span>مشاهده تمام تورهای چند روزه</span><i class="icon-angle-left"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="clear"></div>

				</div>
				</div>
				</section>
				
				
				<section id="content" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/parallax/scenery3.jpg')"" >
					<div class="content-wrap">
						<div class="container clearfix">
						<div class="heading-block center" style="margin-bottom: 30px;">
							<h2 style="">تورهای تعطیلات <span><?php echo $holiday_tours_header_name ?></span></h2>
							<span class="divcenter"></span>
						</div>

					<div id="oc-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="20" data-nav="true" data-pagi="false" data-items-xxs="1" data-items-xs="2" data-items-sm="3" data-items-md="4">
					<?php 
					$count_posts = wp_count_posts( 'tour' )->publish;
					$args = array('post_type' => 'tour', 'posts_per_page' => '6');
					$myQuery = new WP_Query($args);
					?>
					<?php if ($myQuery->have_posts()) { ?>
					<?php while ($myQuery->have_posts()) { $myQuery->the_post();  ?>
						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
							<?php
							$image_id = intval(get_post_meta(get_the_ID(),'tour_picture',TRUE));
							if ($image_id) {
							$image = wp_get_attachment_image_src($image_id, 'medium');
							if ($image) {
							?>
									<a href="<?php echo the_permalink() ?>">
										<img src="<?php echo $image[0] ?>" alt="Open Imagination">
									</a>
							<?php }}?>
									<div class="portfolio-overlay">
										<a href="<?php echo $image[0] ?>" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="<?php echo the_permalink() ?>" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc" style="background-color: #00000040;border-radius: 0 0 5px 5px;">
									<h3 style="text-align:center"><a style="color:#fff;" href="<?php echo the_permalink() ?>"><?php echo the_title() ?></a></h3>
								</div>
							</div>
						</div>
					<?php } } ?>
					</div>
					<a style="font-family:BYekan" href="#" class="button button-border button-rounded button-amber"><i class="icon-angle-left"></i>مشاهده تمام تورها</a>
						</div>
					</div>
				</section>
				
				
				
				
		<section id="content" style="" >
			<div class="content-wrap" style="    padding: 30px 0;">
				<div class="container clearfix">

					<div class="row topmargin-lg bottommargin-sm">

						<div class="heading-block center" style="margin-bottom: 30px;">
							<h2>همسفران ما چرا بالابان را انتخاب کرده اند؟</h2>
							<span class="divcenter"></span>
						</div>


						<div class="col-md-4 col-sm-6 bottommargin" style="direction:rtl;">

							<div class="feature-box fbox-right topmargin" data-animate="fadeIn">
								<div class="fbox-icon">
									<a href="#"><i class="icon-line-heart"></i></a>
								</div>
								<h3><?php echo $why_choose_us_heading_3 ?></h3>
								<p><?php echo $why_choose_us_3 ?></p>
							</div>


							<div class="feature-box fbox-right topmargin" data-animate="fadeIn" data-delay="200">
								<div class="fbox-icon">
									<a href="#"><i class="icon-line-heart"></i></a>
								</div>
								<h3><?php echo $why_choose_us_heading_4 ?></h3>
								<p><?php echo $why_choose_us_4 ?></p>
							</div>




						</div>

						<div class="col-md-4 hidden-sm bottommargin center">
							<img src="<?php echo $why_choose_us_picture ?>" alt="iphone 2">
						</div>

						<div class="col-md-4 col-sm-6 bottommargin" style="direction:rtl;">

							<div class="feature-box topmargin" data-animate="fadeIn">
								<div class="fbox-icon">
									<a href="#"><i class="icon-line-heart"></i></a>
								</div>
								<h3><?php echo $why_choose_us_heading_1 ?></h3>
								<p><?php echo $why_choose_us_1 ?></p>
							</div>

							<div class="feature-box topmargin" data-animate="fadeIn" data-delay="200">
								<div class="fbox-icon">
									<a href="#"><i class="icon-line-heart"></i></a>
								</div>
								<h3><?php echo $why_choose_us_heading_2 ?></h3>
								<p><?php echo $why_choose_us_2 ?></p>
							</div>



						</div>

					</div>

				</div>
		</div>
		</section>
		
		<section id="content" style="background-image:url('<?php echo get_template_directory_uri() ?>/images/parallax/green.jpg')">
			<div class="content-wrap">
				<div class="container clearfix">
						<div class="heading-block center" style="margin-bottom: 30px;">
							<h2 style="color:#fff">تازه ترین های وبلاگ</h2>
							<span class="divcenter"></span>
						</div>

					<div style="direction: rtl" id="oc-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="20" data-nav="true" data-pagi="false" data-items-xxs="1" data-items-xs="2" data-items-sm="3" data-items-md="4">
					<?php 
					$count_posts = wp_count_posts( 'news' )->publish;
					$args = array('post_type' => 'news', 'posts_per_page' => '6');
					$myQuery = new WP_Query($args);
					?>
					<?php if ($myQuery->have_posts()) { ?>
					<?php while ($myQuery->have_posts()) { $myQuery->the_post();  ?>
						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
							<?php
							$image_id = intval(get_post_meta(get_the_ID(),'news_picture',TRUE));
							if ($image_id) {
							$image = wp_get_attachment_image_src($image_id, 'medium');
							if ($image) {
							?>
									<a href="<?php echo the_permalink() ?>">
										<img src="<?php echo $image[0] ?>" alt="Open Imagination">
									</a>
							<?php }}?>
									<div class="portfolio-overlay">
										<a href="<?php echo $image[0] ?>" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="<?php echo the_permalink() ?>" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3 style="text-align:center"><a style="color:#fff;" href="<?php echo the_permalink() ?>"><?php echo the_title() ?></a></h3>
								</div>
							</div>
						</div>
					<?php } } ?>
					</div>
					<a style="font-family:BYekan" href="<?php echo $homeurl; ?>/news/" class="button button-border button-rounded button-amber"><i class="icon-angle-left"></i>مشاهده تمام مطالب وبلاگ</a>
				</div>
			</div>
		</section>
		
		
		<!--
		
		<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/parallax/fuman2.jpg'); padding: 120px 0px; background-position: 50% -15px;" data-stellar-background-ratio="0.3">

			<div class="container clearfix">
				<h1>گروه گردشگری بالابان</h1>
				<span>تورهای طبیعت گردی</span>
			</div>

		</section> -->
		
		<!--<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">


					<div class="fancy-title title-bottom-border">
						<h1>آخرین <span>تورها</span></h1>
					</div>
					
					<div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows"> -->

				
		
		
		


		
		
		
	
<?php get_footer(); ?>
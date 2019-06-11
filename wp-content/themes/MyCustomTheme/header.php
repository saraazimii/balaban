<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
	
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
<?php wp_head(); ?>
<?php $homeurl = get_home_url(); ?>
<?php //$hero = get_field('hero'); ?>
<?php
    global $page_variable;
	$page = get_page_by_path( "contact-us" );
	    if ($page) {
        $pageid = $page->ID;
    }


?>
<?php //$contactus = get_field('contact_us_content'); ?>
	
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	

</head>


<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="#" class="standard-logo" data-dark-logo="<?php echo the_field('logo', $pageid) ?>"><img src="<?php echo the_field('logo', $pageid) ?>" alt="Canvas Logo"></a>
						<a href="#" class="retina-logo" data-dark-logo="<?php echo the_field('logo', $pageid) ?>"><img src="<?php echo the_field('logo', $pageid) ?>" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="style-5">

						<ul>
							<li <?php if($page_variable == 0 ) {?> class="current" <?php } ?> ><a href="<?php echo $homeurl; ?>/"><div ><i class="icon-home2"></i>خانه</div></a></li>
							
							<li <?php if($page_variable == 4 ) {?> class="current" <?php } ?>><a href="<?php echo get_post_type_archive_link('tour'); ?>"><div><i class="icon-suitcase"></i>تورها</div></a>
							<ul>
								<li><a href="<?php echo $homeurl ?>/category/one-day/" style="font-family:BYekan;">تورهای یک روزه</a></li>
								<li><a href="<?php echo $homeurl ?>/category/multiple-days/" style="font-family:BYekan;">تورهای چند روزه</a></li>
							</ul>
							</li>
							<li <?php if($page_variable == 3 ) {?> class="current" <?php } ?>><a href="<?php echo get_post_type_archive_link('news'); ?>"><div><i class="icon-news"></i>اخبار</div></a></li>
							<li <?php if($page_variable == 5 ) {?> class="current" <?php } ?>><a href="<?php echo $homeurl; ?>/gallery/"><div><i class="icon-picture"></i>گالری</div></a></li>
							<li <?php if($page_variable == 2 ) {?> class="current" <?php } ?>><a href="<?php echo $homeurl; ?>/contact-us/"><div><i class="icon-phone3"></i>ارتباط با ما</div></a></li>
						</ul>

					</nav><!-- #primary-menu end -->
					<nav id="primary-menu" class="style-5" style="float:left;">

						<ul style="border:none;">
							<li><a href="<?php echo $homeurl; ?>/contact-us/"><div><i class="icon-phone3"></i><?php echo the_field('telephone', $pageid) ?></div></a></li>
						</ul>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->
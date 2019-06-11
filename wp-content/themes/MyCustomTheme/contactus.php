<?php
/**
* Template Name: ContactUs
*
* @package WordPress
* @subpackage MyCustomTheme
*/
?>
<?php
global $page_variable;
global $tel;
global $email;
$page_variable = 2;
get_header();
	$tel = get_field( "telephone" );
	$email = get_field( "email" );
	$telegram = get_field( "telegram_channel" );
	$insta = get_field( "instagram_link" );
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<section id="page-title" style="direction:rtl;">

			<div class="container clearfix">
				<h1 style="font-family:BYekan;">ارتباط با ما</h1>
			</div>

		</section><!-- #page-title end -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">



					<div class="row clear-bottommargin">

						<div class="col-md-3 col-sm-6 bottommargin clearfix">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-email3 fadeInUp animated" data-animate="fadeInUp" ></i></a>
								</div>
								<h3 style="font-family:BYekan">ایمیل<span class="subtitle" style="font-family:sans-serif;font-size: 14px;"><?php echo $email ?></span></h3>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 bottommargin clearfix">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-phone3 fadeInUp animated" data-animate="fadeInUp" ></i></a>
								</div>
								<h3 style="font-family:BYekan">شماره تماس<span class="subtitle" style="font-family:BYekan"><?php echo $tel ?></span></h3>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 bottommargin clearfix">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-instagram2 fadeInUp animated" data-animate="fadeInUp" ></i></a>
								</div>
								<h3 style="font-family:BYekan">اینستاگرام<span class="subtitle" style="font-family:sans-serif;font-size: 14px;"><?php echo $insta ?></span></h3>
							</div>
						</div>

						<div class="col-md-3 col-sm-6 bottommargin clearfix">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="fa fa-telegram fadeInUp animated" data-animate="fadeInUp" ></i></a>
								</div>
								<h3 style="font-family:BYekan">کانال تلگرام<span class="subtitle" style="font-family:sans-serif;font-size: 14px;"><?php echo $telegram ?></span></h3>
							</div>
						</div>

					</div><!-- Contact Info End -->

				</div>

			</div>

		</section>

<?php
get_footer();
?>
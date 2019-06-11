		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<?php $homeurl = get_home_url(); ?>
			<?php
			$page = get_page_by_path( "contact-us" );
	    if ($page) {
        $pageid = $page->ID;
		}
		?>
		
		
		<footer id="footer" class="dark notopborder">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="row clearfix">

						<div class="col-md-6" style="float: right;direction: rtl;">
								<div class=" bottommargin-sm">
									<ul>
										<li style="margin-bottom: 5px;font-family:BYekan;"><a href="<?php echo $homeurl; ?>/">خانه</a></li>
										<li style="margin-bottom: 5px;font-family:BYekan;"><a href="<?php echo get_post_type_archive_link('tour'); ?>">تورها</a></li>
										<li style="margin-bottom: 5px;font-family:BYekan;"><a href="<?php echo get_post_type_archive_link('news'); ?>">وبلاگ</a></li>
										<li style="margin-bottom: 5px;font-family:BYekan;"><a href="<?php echo $homeurl; ?>/gallery/">گالری</a></li>
										<li style="margin-bottom: 5px;font-family:BYekan;"><a href="<?php echo $homeurl; ?>/contact-us/">تماس با ما</a></li>
									</ul>
								</div>
							<div class="visible-sm bottommargin-sm"></div>

						</div>

						<div class="visible-sm visible-xs line"></div>

						<div class="col-md-6" style="float: right;direction: rtl;">

							<div class="widget subscribe-widget clearfix">
								<h4>عضویت در خبرنامه</h4>
								<p>جدیدترین تورهای ما را در ایمیل خود دریافت کنید!</p>
								<div class="widget-subscribe-form-result"></div>
								<form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
									<div style="margin-bottom: -10px;">
										<div class="row">
											<div class="col-sm-9" style="margin-bottom:10px;float:right;">
												<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control not-dark required email" placeholder="ایمیل خود را وارد کنید">
											</div>
											<div class="col-sm-3" style="margin-bottom:10px;">
												<button class="btn btn-block btn-success" type="submit" style="font-family:BYekan;">عضویت</button>
											</div>
										</div>
									</div>
								</form>
							</div>

						</div>

					</div>

					<div class="line"></div>

					<div class="row clearfix">

						<div class="col-md-6 col-sm-6">
							<div class="widget clearfix">
								<div class="clear-bottommargin-sm">
									<div class="row clearfix" style="direction: rtl;">

											<div class="footer-big-contacts" style="font-family:BYekan;">
												<span>با ما تماس بگیرید:</span>
												<?php echo the_field('telephone', $pageid) ?>
											</div>
											<div class="visible-sm visible-xs bottommargin-sm"></div>




									</div>
								</div>
							</div>
							<div class="visible-sm visible-xs bottommargin-sm"></div>
						</div>

						<div class="col-md-6 col-sm-6">
							<div class="widget clearfix">
								<div class="clear-bottommargin-sm">
									<div class="row clearfix" style="direction: rtl;">

										<div class="footer-big-contacts">
											<span>ارسال پیام:</span>
											<?php echo the_field('email', $pageid) ?>
										</div>
										<div class="visible-xs bottommargin-sm"></div>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container center uppercase clearfix">

					Copyrights &copy; 2019 All Rights Reserved

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->
		
		

	</div><!-- #wrapper end-->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
<?php wp_footer();?>

</body>
</html>
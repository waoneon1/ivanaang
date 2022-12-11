<section class="intro_section page_mainslider">
	<div class="flexslider">
		<ul class="slides">
			<?php foreach (get_field('slider') as $key => $item): ?>
			<li class="">
				<img class="hidden-xs visible-sm visible-md visible-lg" src="<?php echo $item['image']['url'] ?>" alt="">
				<img class="visible-xs hidden-sm hidden-md hidden-lg" src="<?php echo $item['image_mobile']['url'] ?>" alt="">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center text-md-right">
							<div class="slide_description_wrapper">
								<div class="slide_description text-center">
									<div class="heading text-center bottom_border bottommargin_25">
										<p class="text-uppercase josefin grey"><?php echo $item['title'] ?></p>
										<?php if ($item['logo']): ?>
											<img src="<?php echo $item['logo']['url'] ?>" alt="">
										<?php else: ?>
											<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo-iv.png" alt="">
										<?php endif ?>
									</div>
									<div class="bottommargin_40 text-left" style="">
										<p class="">
											<?php echo $item['description'] ?>
										</p>
										<div class="contacts-media-list">
											<div class="media">
												<div class="media-left">
													<p class="josefin text-uppercase bold">Phone</p>
												</div>
												<div class="media-body"><?php echo get_field('info', 'option')['phone'] ?></div>
											</div>
											<div class="media">
												<div class="media-left">
													<p class="josefin text-uppercase bold">E-mail</p>
												</div>
												<div class="media-body"><?php echo get_field('info', 'option')['email'] ?></div>
											</div>
										</div>
										<?php $sos = get_field('info', 'option')['social_media']; ?>
										<div class="page_social topmargin_20">
											<?php if ($sos['facebook']): ?>
												<a href="<?php echo get_field('info', 'option')['social_media']['facebook'] ?>" class="social-icon monochrome-icon rounded-icon soc-facebook"></a>
											<?php endif ?>
											<?php if ($sos['twitter']): ?>
												<a href="<?php echo get_field('info', 'option')['social_media']['twitter'] ?>" class="social-icon monochrome-icon rounded-icon soc-twitter"></a>
											<?php endif ?>
											<?php if ($sos['instagram']): ?>
											<a href="<?php echo get_field('info', 'option')['social_media']['instagram'] ?>" class="social-icon monochrome-icon rounded-icon soc-instagram"></a>
											<?php endif ?>
											<?php if ($sos['youtube']): ?>
												<a href="<?php echo get_field('info', 'option')['social_media']['youtube'] ?>" class="social-icon monochrome-icon rounded-icon soc-youtube"></a>
											<?php endif ?>
											<?php if ($sos['pinterest']): ?>
												<a href="<?php echo get_field('info', 'option')['social_media']['pinterest'] ?>" class="social-icon monochrome-icon rounded-icon soc-pinterest"></a>
											<?php endif ?>
											<?php if ($sos['tiktok']): ?>
												<a href="<?php echo get_field('info', 'option')['social_media']['tiktok'] ?>" class="social-icon monochrome-icon rounded-icon" style="border-radius: 999px;">
													<svg width="18px" height="18px" viewBox="0 0 512 512" id="icons" xmlns="http://www.w3.org/2000/svg"><path d="M412.19,118.66a109.27,109.27,0,0,1-9.45-5.5,132.87,132.87,0,0,1-24.27-20.62c-18.1-20.71-24.86-41.72-27.35-56.43h.1C349.14,23.9,350,16,350.13,16H267.69V334.78c0,4.28,0,8.51-.18,12.69,0,.52-.05,1-.08,1.56,0,.23,0,.47-.05.71,0,.06,0,.12,0,.18a70,70,0,0,1-35.22,55.56,68.8,68.8,0,0,1-34.11,9c-38.41,0-69.54-31.32-69.54-70s31.13-70,69.54-70a68.9,68.9,0,0,1,21.41,3.39l.1-83.94a153.14,153.14,0,0,0-118,34.52,161.79,161.79,0,0,0-35.3,43.53c-3.48,6-16.61,30.11-18.2,69.24-1,22.21,5.67,45.22,8.85,54.73v.2c2,5.6,9.75,24.71,22.38,40.82A167.53,167.53,0,0,0,115,470.66v-.2l.2.2C155.11,497.78,199.36,496,199.36,496c7.66-.31,33.32,0,62.46-13.81,32.32-15.31,50.72-38.12,50.72-38.12a158.46,158.46,0,0,0,27.64-45.93c7.46-19.61,9.95-43.13,9.95-52.53V176.49c1,.6,14.32,9.41,14.32,9.41s19.19,12.3,49.13,20.31c21.48,5.7,50.42,6.9,50.42,6.9V131.27C453.86,132.37,433.27,129.17,412.19,118.66Z"/></svg>
												</a>
											<?php endif ?>
										</div>
									</div>
								</div>
							</div>
							<!-- eof .slide_description_wrapper -->
						</div>
						<!-- eof .col-* -->
					</div>
					<!-- eof .row -->
				</div>
				<!-- eof .container -->
			
			</li>
			<?php endforeach ?>
		</ul>
	</div>
	<!-- eof flexslider -->
</section>

<section class="ls columns_margin_0 columns_padding_0 page_portfolio">
<!-- <section class="ls page_portfolio"> -->
	<div class="container toppadding_50 bottompadding_50">
		<div class="row">
			<div class="isotope-item col-sm-6 col-md-6 col-lg-6">
				<div class="heading toppadding_30">
					<p class="text-uppercase josefin grey fontsize_20">Brief Introduction</p>
					<h2 class="section_header topmargin_5 bottommargin_0"><?php echo get_field('introduction')['title'] ?></h2>
				</div>
			</div>
		</div>
		<div class="row">
		<?php foreach (get_field('introduction')['image'] as $key => $item): ?>
				<!-- <div class="iva-mobile-p isotope-item col-sm-6 col-md-4 col-lg-2"> -->
				<div class="isotope-item col-sm-6 col-md-4 col-lg-2 iva-brief">
					<div class="vertical-item gallery-item content-absolute text-center">
						<div class="item-media">
							<img class="iva-mobile-port-img" src="<?php echo $item['url'] ?>" alt="">
							<div class="media-links">
								<div class="links-wrap">
									<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="<?php echo $item['url'] ?>"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
		<?php endforeach ?>
		</div>
	</div>
</section>

<section class="cs parallax page_testimonials section_padding_100">
	<div class="flexslider">
		<ul class="slides">
			<?php foreach (get_field('testimonial')['testimonial_list'] as $key => $item): ?>
			<li>
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center text-md-right">
							<div class="slide_description_wrapper">
								<div class="slide_description text-center">
									<div class="quote-sign josefin grey bottommargin_50"></div>
									<div class="heading text-center">
										<h2 class="section_header bottommargin_0 grey"><?php echo get_field('testimonial')['title'] ?></h2>
										<p class="josefin text-uppercase grey"><?php echo get_field('testimonial')['subtitle'] ?></p>
									</div>
									<div class="row">
										<div class="col-md-8 col-md-offset-2">
											<blockquote class="no-border margin_0">
												<div class="row">
													<div class="col-sm-12 col-md-3 col-lg-2" style="justify-content: center;display: flex;">
														<!-- <img class="" src="" alt="" style="border-radius: 9999px;width: 100px;"> -->
														<?php //print_r($item['photo']['sizes']['']) ?>
														<picture>
														  	<source media="(max-width: 767px)" srcset="<?php echo $item['photo']['sizes']['shop_catalog'] ?>">
														   	<img src="<?php echo $item['photo']['sizes']['thumbnail'] ?>" style="border-radius: 9999px; max-width: 200px;">
														</picture>
													</div>
													<div class="col-sm-12 col-md-9 col-lg-10">
														<p class="testimonial-desc">
															<?php echo $item['description'] ?>
														</p>
													</div>
												</div>
												<div class="item-meta fontsize_16 topmargin_75">
													<span class="bold josefin fontsize_20 grey"><?php echo $item['name'] ?> - </span> <?php echo $item['position'] ?>
												</div>
											</blockquote>
										</div>
									</div>
								</div>
							</div>
							<!-- eof .slide_description_wrapper -->
						</div>
						<!-- eof .col-* -->
					</div>
					<!-- eof .row -->
				</div>
				<!-- eof .container -->
			</li>
			<?php endforeach ?>
		</ul>
	</div>
	<!-- eof flexslider -->
</section>

<?php 
	$args = array(
	  'post_type' => 'post',
	  'posts_per_page' => 4
	); 
?>
<section class="ls section_padding_top_110 section_padding_bottom_75 page_blog">
	<div class="container">
		<div style="width: 100%; display: flex; justify-content: center;">
			<div class="heading text-center toppadding_30 bottompadding_30">
				<h2 class="section_header bottommargin_0 grey">Latest News</h2>
				<p class="josefin text-uppercase grey">Blog</p>
			</div>
		</div>
		<div class="row">
			<?php $query = new WP_Query($args); ?>
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="isotope-item col-lg-3 col-md-4 col-sm-6 session">
					<article class="vertical-item item-type1 post">
						<div class="item-media" style="text-align: center">
							<img class="iva-blog-image" src="<?php echo get_the_post_thumbnail_url($post->id, 'iv_blog'); ?>" alt="<?php the_title() ?>">
						</div>
						<div class="item-content">
							<div class="categories-links bottommargin_5 highlight">
								<a href="#">Session</a>
							</div>
							<p class="fontsize_18 bold darklinks2 autotrim-2">
								<a href="<?php echo get_permalink() ?>"><?php the_title() ?></a>
							</p>
							<div class="item-meta">
								<?php echo iv_blurb(15) ?>
							</div>
						</div>
					</article>
				</div>
			<?php endwhile; wp_reset_query(); ?>
		</div>
		<!-- eof .isotope_container.row -->
	</div>
</section>
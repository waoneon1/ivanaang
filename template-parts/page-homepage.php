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
										<div class="page_social topmargin_20">
											<a href="<?php echo get_field('info', 'option')['social_media']['facebook'] ?>" class="social-icon monochrome-icon rounded-icon soc-facebook"></a>
											<a href="<?php echo get_field('info', 'option')['social_media']['twitter'] ?>" class="social-icon monochrome-icon rounded-icon soc-twitter"></a>
											<a href="<?php echo get_field('info', 'option')['social_media']['instagram'] ?>" class="social-icon monochrome-icon rounded-icon soc-instagram"></a>
											<a href="<?php echo get_field('info', 'option')['social_media']['youtube'] ?>" class="social-icon monochrome-icon rounded-icon soc-youtube"></a>
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
				<div class="iva-mobile-p isotope-item col-sm-6 col-md-4 col-lg-2">
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
												<?php echo $item['description'] ?>
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
							<img src="<?php echo get_the_post_thumbnail_url($post->id, 'iv_blog'); ?>" alt="<?php the_title() ?>">
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
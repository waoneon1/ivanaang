<section class="intro_section page_mainslider ds">
	<div class="flexslider">
		<ul class="slides">
			<?php $sliders = [
				[
					"subtitle" => "Professional Make Up artist",
					"content" => "Hello I'am Ivanna Ang. Makeup is my passion as I enjoy making people look & feel their best. ",
					"image" => "slide02.png"
				],[
					"subtitle" => "Makeup & Hair Stylist",
					"content" => "Hello I'am Ivanna Ang. Makeup is my passion as I enjoy making people look & feel their best. ",
					"image" => "slide03.png"
				],[
					"subtitle" => "Professional Make Up artist 2",
					"content" => "Hello I'am Ivanna Ang. Makeup is my passion as I enjoy making people look & feel their best. ",
					"image" => "slide04.png"
				]
			] ?>
			<?php foreach ($sliders as $key => $item): ?>
			<li class="">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/<?php echo $item['image'] ?>" alt="">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center text-md-right">
							<div class="slide_description_wrapper">
								<div class="slide_description text-center">
									<div class="heading text-center bottom_border bottommargin_25">
										<p class="text-uppercase josefin grey"><?php echo $item['subtitle'] ?></p>
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo-text.png" alt="">
									</div>
									<div class="bottommargin_40 text-left" style="">
										<p class="">
											<?php echo $item['content'] ?>
										</p>
										<div class="contacts-media-list">
											<div class="media">
												<div class="media-left">
													<p class="josefin text-uppercase bold">Phone</p>
												</div>
												<div class="media-body">0858 8006 5002</div>
											</div>
											<div class="media">
												<div class="media-left">
													<p class="josefin text-uppercase bold">E-mail</p>
												</div>
												<div class="media-body">makeup@ivannaang.com</div>
											</div>
										</div>
									</div>

									<div class="page_social topmargin_20">
										<a href="#" class="social-icon monochrome-icon rounded-icon soc-facebook"></a>
										<a href="#" class="social-icon monochrome-icon rounded-icon soc-twitter"></a>
										<a href="#" class="social-icon monochrome-icon rounded-icon soc-instagram"></a>
										<a href="#" class="social-icon monochrome-icon rounded-icon soc-youtube"></a>
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
	$data_works = [
		['image' => '01.png', 'category' => 'fashion'],
		['image' => '02.png', 'category' => 'studio'],
		['image' => '03.png', 'category' => 'session'],
		['image' => '04.png', 'category' => 'fashion'],
		['image' => '05.png', 'category' => 'studio'],
		['image' => '06.png', 'category' => 'session'],
		['image' => '07.png', 'category' => 'fashion'],
		['image' => '08.png', 'category' => 'studio'],
		['image' => '09.png', 'category' => 'session'],
		['image' => '01.png', 'category' => 'fashion'],
		['image' => '02.png', 'category' => 'studio'],
		['image' => '03.png', 'category' => 'session'],
		['image' => '04.png', 'category' => 'fashion'],
		['image' => '05.png', 'category' => 'studio'],
		['image' => '06.png', 'category' => 'session'],
	];
?>
<section class="ls columns_margin_0 columns_padding_0 page_portfolio">
	<div class="container toppadding_50 bottompadding_50">
		<div class="isotope-item col-sm-6 col-md-6 col-lg-6">
			<div class="heading toppadding_30">
				<p class="text-uppercase josefin grey fontsize_20">Brief Introduction</p>
				<h2 class="section_header topmargin_5 bottommargin_0">Our beautiful works</h2>
			</div>
		</div>
		<?php foreach ($data_works as $key => $value): ?>
			<div class="isotope-item col-sm-6 col-md-4 col-lg-2">
				<div class="vertical-item gallery-item content-absolute text-center">
					<div class="item-media">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/models_square/<?php echo $value['image'] ?>" alt="">
						<div class="media-links">
							<div class="links-wrap">
								<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="<?php echo get_template_directory_uri() ?>/assets/images/models_square/<?php echo $value['image'] ?>"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</section>

<section class="cs parallax page_testimonials section_padding_100">
	<div class="flexslider">
		<ul class="slides">
			<li>
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center text-md-right">
							<div class="slide_description_wrapper">
								<div class="slide_description text-center">
									<div class="quote-sign josefin grey bottommargin_50"></div>
									<div class="heading text-center">
										<h2 class="section_header bottommargin_0 grey">What people say</h2>
										<p class="josefin text-uppercase grey">Testimonial</p>
									</div>
									<div class="row">
										<div class="col-md-8 col-md-offset-2">
											<blockquote class="no-border margin_0">
												Mauris hendrerit eget orci ut pretium. Donec purus est, aliquet tempus rhoncus a, sollicitudin in erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque vel lacinia enim, a feugiat lorem. In vitae leo
												vulputate libero aliquam lacinia. Mauris rhoncus vel neque vitae.

												<div class="item-meta fontsize_16 topmargin_75">
													<span class="bold josefin fontsize_20 grey">Donald Phelps - </span> Manager Co.
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
			<li>
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center text-md-right">
							<div class="slide_description_wrapper">
								<div class="slide_description text-center">
									<div class="quote-sign josefin grey bottommargin_50"></div>
									<div class="heading text-center">
										<h2 class="section_header bottommargin_0 grey">What people say</h2>
										<p class="josefin text-uppercase grey">Testimonial</p>
									</div>
									<div class="row">
										<div class="col-md-8 col-md-offset-2">
											<blockquote class="no-border margin_0">
												Fusce mollis dapibus ipsum eu tempor. Vivamus tempus, nisi quis luctus placerat, diam lectus pretium felis, a laoreet risus odio nec elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum feugiat augue
												ac blandit imperdiet. Suspendisse ut massa fringilla.

												<div class="item-meta fontsize_16 topmargin_75">
													<span class="bold josefin fontsize_20 grey">Derrick Rodgers - </span> Manager
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
			<li>
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center text-md-right">
							<div class="slide_description_wrapper">
								<div class="slide_description text-center">
									<div class="quote-sign josefin grey bottommargin_50"></div>
									<div class="heading text-center">
										<h2 class="section_header bottommargin_0 grey">What people say</h2>
										<p class="josefin text-uppercase grey">Testimonial</p>
									</div>
									<div class="row">
										<div class="col-md-8 col-md-offset-2">
											<blockquote class="no-border margin_0">
												Mauris hendrerit eget orci ut pretium. Donec purus est, aliquet tempus rhoncus a, sollicitudin in erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque vel lacinia enim, a feugiat lorem. In vitae leo
												vulputate libero aliquam lacinia. Mauris rhoncus vel neque vitae.

												<div class="item-meta fontsize_16 topmargin_75">
													<span class="bold josefin fontsize_20 grey">Donald Phelps - </span> Manager Co.
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
			<li>
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center text-md-right">
							<div class="slide_description_wrapper">
								<div class="slide_description text-center">
									<div class="quote-sign josefin grey bottommargin_50"></div>
									<div class="heading text-center">
										<h2 class="section_header bottommargin_0 grey">What people say</h2>
										<p class="josefin text-uppercase grey">Testimonial</p>
									</div>
									<div class="row">
										<div class="col-md-8 col-md-offset-2">
											<blockquote class="no-border margin_0">
												Phasellus in efficitur sem. Mauris mi risus, efficitur in ultricies a, aliquam eu mi. Nullam justo mauris, venenatis id ipsum ac, ultrices gravida metus. Sed maximus augue nec mi porttitor, sed tempor elit facilisis. Vestibulum hendrerit pharetra consectetur.
												Sed nec bibendum nisi, ut vulputate mauris.

												<div class="item-meta fontsize_16 topmargin_75">
													<span class="bold josefin fontsize_20 grey">Minerva Ferguson - </span> Founder &amp; CEO
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
		</ul>
	</div>
	<!-- eof flexslider -->
</section>

<section class="ls section_padding_top_110 section_padding_bottom_75 page_blog">
	<div class="container">
		<div style="width: 100%; display: flex; justify-content: center;">
			<div class="heading text-center toppadding_30 bottompadding_30">
				<h2 class="section_header bottommargin_0 grey">Latest News</h2>
				<p class="josefin text-uppercase grey">Blog</p>
			</div>
		</div>
		<div class="">
			<div class="isotope-item col-lg-3 col-md-4 col-sm-6 session">
				<article class="vertical-item item-type1 post">
					<div class="item-media">
						<img src="https://html.modernwebtemplates.com/look/images/models_portrait/15.jpg" alt="s">
					</div>
					<div class="item-content">
						<div class="categories-links bottommargin_5 highlight">
							<a href="#">Session</a>
						</div>
						<p class="fontsize_18 bold darklinks2 autotrim-2">
							<a href="blog-single-right.html">
								<span class="text-uppercase">Elizabeth</span> - model experiment, Seoul, Korea model experiment, Seoul, Korea.</a>
						</p>
						<div class="item-meta">
							<p>
								Suspendisse vulputate nisl ut magna iaculis, vitae congue risus dictum. Integer dui.
							</p>
						</div>
					</div>
				</article>
			</div>
			<div class="isotope-item col-lg-3 col-md-4 col-sm-6 fashion studio">
				<article class="vertical-item item-type1 post">
					<div class="item-media">
						<img src="https://html.modernwebtemplates.com/look/images/models_portrait/03.jpg" alt="s">
					</div>
					<div class="item-content">
						<div class="categories-links bottommargin_5 highlight">
							<a href="#">Fashion</a>,
							<a href="#">Studio</a>
						</div>
						<p class="fontsize_18 bold darklinks2 autotrim-2">
							<a href="blog-single-right.html">
								<span class="text-uppercase">Nora</span> - model experience in 17 years, Bangkok, Thailand.</a>
						</p>
						<div class="item-meta">
							<p>
								Suspendisse vulputate nisl ut magna iaculis, vitae congue risus dictum. Integer dui.
							</p>
						</div>
					</div>
				</article>
			</div>
			<div class="isotope-item col-lg-3 col-md-4 col-sm-6 session">
				<article class="vertical-item item-type1 post">
					<div class="item-media">
						<img src="https://html.modernwebtemplates.com/look/images/models_portrait/23.jpg" alt="s">
					</div>
					<div class="item-content">
						<div class="categories-links bottommargin_5 highlight">
							<a href="#">Session</a>
						</div>
						<p class="fontsize_18 bold darklinks2 autotrim-2">
							<a href="blog-single-right.html">
								<span class="text-uppercase">Fiona</span> - first modeling experience, Seoul, Korea</a>
						</p>
						<div class="item-meta">
							<p>
								Suspendisse vulputate nisl ut magna iaculis, vitae congue risus dictum. Integer dui.
							</p>
						</div>
					</div>
				</article>
			</div>
			<div class="isotope-item col-lg-3 col-md-4 col-sm-6 session">
				<article class="vertical-item item-type1 post">
					<div class="item-media">
						<img src="https://html.modernwebtemplates.com/look/images/models_portrait/23.jpg" alt="s">
					</div>
					<div class="item-content">
						<div class="categories-links bottommargin_5 highlight">
							<a href="#">Session</a>
						</div>
						<p class="fontsize_18 bold darklinks2 autotrim-2">
							<a href="blog-single-right.html">
								<span class="text-uppercase">Fiona</span> - first modeling experience, Seoul, Korea</a>
						</p>
						<div class="item-meta">
							<p>
								Suspendisse vulputate nisl ut magna iaculis, vitae congue risus dictum. Integer dui.
							</p>
						</div>
					</div>
				</article>
			</div>
		</div>
		<!-- eof .isotope_container.row -->
	</div>
</section>
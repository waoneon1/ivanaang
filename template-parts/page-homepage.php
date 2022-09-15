<section class="intro_section page_mainslider ds">
	<div class="flexslider">
		<ul class="slides">
			<li class="">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/slide01.png" alt="">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center text-md-right">
							<div class="slide_description_wrapper">
								<div class="slide_description text-center">
									<div class="heading text-center bottom_border bottommargin_25">
										<p class="text-uppercase josefin grey">Makeup & Hair Stylist</p>
										<h1 class="text-uppercase topmargin_0">Ivanna <br />Ang</h1>
									</div>
									<p class="bottommargin_40">
										Hello I'am Ivanna Ang. Makeup is my passion as I enjoy making people look & feel their best. Curabitur condimentum eros ut elit dapibus, a facilisis dui tristique.
									</p>
									<a href="about.html" class="theme_button margin_0">Read more</a>
								</div>
							</div>
							<!-- eof .slide_description_wrapper -->
						</div>
						<!-- eof .col-* -->
					</div>
					<!-- eof .row -->
				</div>
				<!-- eof .container -->
				<div class="slide_social">
					<a href="#" class="social-icon monochrome-icon rounded-icon soc-facebook"></a>
					<a href="#" class="social-icon monochrome-icon rounded-icon soc-twitter"></a>
					<a href="#" class="social-icon monochrome-icon rounded-icon soc-instagram"></a>
				</div>
			</li>
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
		['image' => '09.png', 'category' => 'session']
	];
?>
<section class="ls columns_margin_0 columns_padding_0 page_portfolio">
	<div class="container-fluid">
		<div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">
			<div class="isotope-item col-xs-6 col-md-4 col-lg-3 text-center fashion studio session">
				<div class="vertical-item content-absolute vertical-center portfolio-filters">
					<div class="item-media">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/models_square/01.png" alt="">
					</div>
					<div class="item-content">
						<div class="display_table">
							<div class="display_table_cell text-left">
								<div class="heading bottommargin_35">
									<p class="text-uppercase josefin grey fontsize_20">Brief Introduction</p>
									<h2 class="section_header topmargin_5 bottommargin_0">Our beautiful works</h2>
								</div>
								<div class="filters isotope_filters">
									<a href="#" data-filter="*" class="selected">All</a>
									<a href="#" data-filter=".fashion">Wedding</a>
									<a href="#" data-filter=".studio">Prawedding</a>
									<a href="#" data-filter=".session">Graduation</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="isotope-item col-xs-6 col-md-4 col-lg-3 text-center fashion studio session">
				<div class="vertical-item content-absolute vertical-center portfolio-filters">
					<div class="item-media">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/models_square/01.png" alt="">
					</div>
				</div>
			</div>

			<?php foreach ($data_works as $key => $value): ?>
				<div class="isotope-item col-sm-6 col-md-4 col-lg-3 <?php echo $value['category'] ?>">
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

			<div class="isotope-item col-sm-6 col-md-4 col-lg-3 fashion studio session">
				<div class="vertical-item portfolio-load-more content-absolute vertical-center text-center">
					<div class="item-media">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/models_square/01.png" alt="">
					</div>
					<div class="item-content">
						<div class="display_table">
							<div class="display_table_cell darklinks">
								<a href="" class="theme_link fontsize_20">Load more works</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="cs section_padding_110 page_banner parallax" style="background-color: #d7e8ee !important">
	<div class="container">
		<div class="row topmargin_30 bottommargin_30">
			<div class="col-sm-12 text-center">
				<p class="margin_0 fontsize_40 josefin bold grey text-uppercase">Makeup is my passion as I enjoy making people look & feel their best</p>
				<p class="fontsize_30 josefin thin grey text-uppercase topmargin_5 bottommargin_50">Interesting to working with us?</p>
				<a href="#" class="theme_button margin_0">Contact</a>
			</div>
		</div>
	</div>
</section>

<section class="ls section_padding_top_110 section_padding_bottom_75 page_blog">
	<div class="container">
		<div class="isotope_container isotope blog_isotope row masonry-layout columns_margin_bottom_30" data-filters=".blog_filters">

			<div class="isotope-item col-lg-3 col-md-4 col-sm-6 fashion studio session news">

				<div class="vertical-item vertical-center blog-filters-container">
					<div class="item-content">
						<div class="display_table">
							<div class="display_table_cell text-left">
								<div class="heading bottommargin_45">
									<p class="text-uppercase josefin grey fontsize_20">Blog</p>
									<h2 class="section_header topmargin_5 bottommargin_0">Last News</h2>
								</div>
								<div class="filters blog_filters">
									<a href="#" data-filter="*" class="selected">All</a>
									<a href="#" data-filter=".fashion">Fashion</a>
									<a href="#" data-filter=".studio">Studio</a>
									<a href="#" data-filter=".session">Session</a>
									<a href="#" data-filter=".news">World News</a>
								</div>
								<p class="darklinks topmargin_90">
									<a href="blog-mosaic.html" class="theme_link">Discover more posts
										<i class="rt-icon2-chevron-thin-right" aria-hidden="true"></i>
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>

			</div>

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
						<div class="post-social lightgreylinks">
							<a href="#" class="social-icon soc-facebook"></a>
							<a href="#" class="social-icon soc-twitter"></a>
							<a href="#" class="social-icon soc-google"></a>
							<a href="#" class="social-icon soc-instagram"></a>
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
						<div class="post-social lightgreylinks">
							<a href="#" class="social-icon soc-facebook"></a>
							<a href="#" class="social-icon soc-twitter"></a>
							<a href="#" class="social-icon soc-google"></a>
							<a href="#" class="social-icon soc-instagram"></a>
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
						<div class="post-social lightgreylinks">
							<a href="#" class="social-icon soc-facebook"></a>
							<a href="#" class="social-icon soc-twitter"></a>
							<a href="#" class="social-icon soc-google"></a>
							<a href="#" class="social-icon soc-instagram"></a>
						</div>
					</div>
				</article>
			</div>

			<div class="isotope-item col-lg-3 col-md-4 col-sm-6 session studio">
				<article class="vertical-item item-type1 post">
					<div class="item-media">
						<img src="https://html.modernwebtemplates.com/look/images/models_portrait/15.jpg" alt="s">
					</div>
					<div class="item-content">
						<div class="categories-links bottommargin_5 highlight">
							<a href="#">Session</a>,
							<a href="#">Studio</a>
						</div>
						<p class="fontsize_18 bold darklinks2 autotrim-2">
							<a href="blog-single-right.html">
								<span class="text-uppercase">Bess</span> - model experience in the winter-spring season 2015.</a>
						</p>
						<div class="item-meta">
							<p>
								Suspendisse vulputate nisl ut magna iaculis, vitae congue risus dictum. Integer dui.
							</p>
						</div>
						<div class="post-social lightgreylinks">
							<a href="#" class="social-icon soc-facebook"></a>
							<a href="#" class="social-icon soc-twitter"></a>
							<a href="#" class="social-icon soc-google"></a>
							<a href="#" class="social-icon soc-instagram"></a>
						</div>
					</div>
				</article>
			</div>

			<div class="isotope-item col-lg-3 col-md-4 col-sm-6 session">
				<article class="vertical-item item-type1 post">
					<div class="item-media">
						<img src="https://html.modernwebtemplates.com/look/images/models_portrait/03.jpg" alt="s">
					</div>
					<div class="item-content">
						<div class="categories-links bottommargin_5 highlight">
							<a href="#">Session</a>
						</div>
						<p class="fontsize_18 bold darklinks2 autotrim-2">
							<a href="blog-single-right.html">
								<span class="text-uppercase">Lucille</span> - the first modeling experience in 13 years, Tokyo.</a>
						</p>
						<div class="item-meta">
							<p>
								Suspendisse vulputate nisl ut magna iaculis, vitae congue risus dictum. Integer dui.
							</p>
						</div>
						<div class="post-social lightgreylinks">
							<a href="#" class="social-icon soc-facebook"></a>
							<a href="#" class="social-icon soc-twitter"></a>
							<a href="#" class="social-icon soc-google"></a>
							<a href="#" class="social-icon soc-instagram"></a>
						</div>
					</div>
				</article>
			</div>

			<div class="isotope-item col-lg-3 col-md-4 col-sm-6 session fashion">
				<article class="vertical-item item-type1 post">
					<div class="item-media">
						<img src="https://html.modernwebtemplates.com/look/images/models_portrait/23.jpg" alt="s">
					</div>
					<div class="item-content">
						<div class="categories-links bottommargin_5 highlight">
							<a href="#">Session</a>,
							<a href="#">Fashion</a>
						</div>
						<p class="fontsize_18 bold darklinks2 autotrim-2">
							<a href="blog-single-right.html">
								<span class="text-uppercase">Rhoda</span> - first modeling experience, Thailand.</a>
						</p>
						<div class="item-meta">
							<p>
								Suspendisse vulputate nisl ut magna iaculis, vitae congue risus dictum. Integer dui.
							</p>
						</div>
						<div class="post-social lightgreylinks">
							<a href="#" class="social-icon soc-facebook"></a>
							<a href="#" class="social-icon soc-twitter"></a>
							<a href="#" class="social-icon soc-google"></a>
							<a href="#" class="social-icon soc-instagram"></a>
						</div>
					</div>
				</article>
			</div>

			<div class="isotope-item col-lg-3 col-md-4 col-sm-6 session studio">
				<article class="vertical-item item-type1 post">
					<div class="item-media">
						<img src="https://html.modernwebtemplates.com/look/images/models_portrait/15.jpg" alt="s">
					</div>
					<div class="item-content">
						<div class="categories-links bottommargin_5 highlight">
							<a href="#">Session</a>,
							<a href="#">Studio</a>
						</div>
						<p class="fontsize_18 bold darklinks2 autotrim-2">
							<a href="blog-single-right.html">
								<span class="text-uppercase">Edna</span> - model experience in 15 years, Mumbai, India.</a>
						</p>
						<div class="item-meta">
							<p>
								Suspendisse vulputate nisl ut magna iaculis, vitae congue risus dictum. Integer dui.
							</p>
						</div>
						<div class="post-social lightgreylinks">
							<a href="#" class="social-icon soc-facebook"></a>
							<a href="#" class="social-icon soc-twitter"></a>
							<a href="#" class="social-icon soc-google"></a>
							<a href="#" class="social-icon soc-instagram"></a>
						</div>
					</div>
				</article>
			</div>

			<div class="isotope-item col-lg-3 col-md-4 col-sm-6 session fashion">
				<article class="vertical-item item-type1 post">
					<div class="item-media">
						<img src="https://html.modernwebtemplates.com/look/images/models_portrait/03.jpg" alt="s">
					</div>
					<div class="item-content">
						<div class="categories-links bottommargin_5 highlight">
							<a href="#">Session</a>,
							<a href="#">Fashion</a>
						</div>
						<p class="fontsize_18 bold darklinks2 autotrim-2">
							<a href="blog-single-right.html">
								<span class="text-uppercase">Frances</span> - first modeling experience, Shanghai, China.</a>
						</p>
						<div class="item-meta">
							<p>
								Suspendisse vulputate nisl ut magna iaculis, vitae congue risus dictum. Integer dui.
							</p>
						</div>
						<div class="post-social lightgreylinks">
							<a href="#" class="social-icon soc-facebook"></a>
							<a href="#" class="social-icon soc-twitter"></a>
							<a href="#" class="social-icon soc-google"></a>
							<a href="#" class="social-icon soc-instagram"></a>
						</div>
					</div>
				</article>
			</div>

			<div class="isotope-item col-lg-3 col-md-4 col-sm-6 news">
				<article class="vertical-item item-type1 post">
					<div class="item-media">
						<img src="https://html.modernwebtemplates.com/look/images/models_portrait/23.jpg" alt="s">
					</div>
					<div class="item-content">
						<div class="categories-links bottommargin_5 highlight">
							<a href="#">World news</a>
						</div>
						<p class="fontsize_18 bold darklinks2 autotrim-2">
							<a href="blog-single-right.html">Cinderella story in the pages of the portal Niklife.</a>
						</p>
						<div class="item-meta">
							<p>
								Suspendisse vulputate nisl ut magna iaculis, vitae congue risus dictum. Integer dui.
							</p>
						</div>
						<div class="post-social lightgreylinks">
							<a href="#" class="social-icon soc-facebook"></a>
							<a href="#" class="social-icon soc-twitter"></a>
							<a href="#" class="social-icon soc-google"></a>
							<a href="#" class="social-icon soc-instagram"></a>
						</div>
					</div>
				</article>
			</div>

			<div class="isotope-item col-lg-3 col-md-4 col-sm-6 fashion studio">
				<article class="vertical-item item-type1 post">
					<div class="item-media">
						<img src="https://html.modernwebtemplates.com/look/images/models_portrait/15.jpg" alt="s">
					</div>
					<div class="item-content">
						<div class="categories-links bottommargin_5 highlight">
							<a href="#">fashion</a>,
							<a href="#">studio</a>
						</div>
						<p class="fontsize_18 bold darklinks2 autotrim-2">
							<a href="blog-single-right.html">
								<span class="text-uppercase">Susan</span> - for "Laha" magazine, Beirut, Lebanon.</a>
						</p>
						<div class="item-meta">
							<p>
								Suspendisse vulputate nisl ut magna iaculis, vitae congue risus dictum. Integer dui.
							</p>
						</div>
						<div class="post-social lightgreylinks">
							<a href="#" class="social-icon soc-facebook"></a>
							<a href="#" class="social-icon soc-twitter"></a>
							<a href="#" class="social-icon soc-google"></a>
							<a href="#" class="social-icon soc-instagram"></a>
						</div>
					</div>
				</article>
			</div>

			<div class="isotope-item col-lg-3 col-md-4 col-sm-6 session">
				<article class="vertical-item item-type1 post">
					<div class="item-media">
						<img src="https://html.modernwebtemplates.com/look/images/models_portrait/03.jpg" alt="s">
					</div>
					<div class="item-content">
						<div class="categories-links bottommargin_5 highlight">
							<a href="#">Session</a>
						</div>
						<p class="fontsize_18 bold darklinks2 autotrim-2">
							<a href="blog-single-right.html">
								<span class="text-uppercase">Beatrice</span> - for lookbook TM "WHO.A.U.", Korea.</a>
						</p>
						<div class="item-meta">
							<p>
								Suspendisse vulputate nisl ut magna iaculis, vitae congue risus dictum. Integer dui.
							</p>
						</div>
						<div class="post-social lightgreylinks">
							<a href="#" class="social-icon soc-facebook"></a>
							<a href="#" class="social-icon soc-twitter"></a>
							<a href="#" class="social-icon soc-google"></a>
							<a href="#" class="social-icon soc-instagram"></a>
						</div>
					</div>
				</article>
			</div>


		</div>
		<!-- eof .isotope_container.row -->
	</div>
</section>
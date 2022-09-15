<section class="page_breadcrumbs ls ms parallax section_padding_bottom_15 section_padding_top_75"
	style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/parallax/breadcrumbs4.jpg'); background-position: 50% 0px;" 
>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<div class="heading text-center bottom_border">
					<p class="text-uppercase josefin grey fontsize_20">Portofolio</p>
					<h1 class="section_header topmargin_5">My Works</h1>
				</div>
				<ol class="breadcrumb">
					<li>
						<a href="./">
							Home
						</a>
					</li>
					<li>
						<a href="#">Pages</a>
					</li>
					<li class="active">Portofolio</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<section class="ls section_padding_top_110 columns_margin_0 services">
	<div class="container">
		<div class="row">

			<div class="col-md-push-3 col-md-9 col-lg-push-4 col-lg-8">
				<div class="heading bottommargin_60">
					<p class="text-uppercase josefin grey fontsize_20">What we do</p>
					<h2 class="section_header bottommargin_0">Our services</h2>
				</div>
				<div class="row topmargin_5">
					<div class="col-sm-6">
						<div class="teaser media bottommargin_55">
							<div class="media-left">
								<div class="teaser_icon highlight size_normal">
									<i class="flaticon-sports"></i>
								</div>
							</div>
							<div class="media-body">
								<h4 class="media-heading">
									<a href="services.html">Prewedding</a>
								</h4>
								<p>Quisque vel tincidunt nisi. Nam vitae lorem vel erat laoreet egestas eu non enim. Nulla vitae facilisis ex. In a maximus ligula nunc.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="teaser media bottommargin_55">
							<div class="media-left">
								<div class="teaser_icon highlight size_normal">
									<i class="flaticon-megaphone"></i>
								</div>
							</div>
							<div class="media-body">
								<h4 class="media-heading">
									<a href="services.html">Film</a>
								</h4>
								<p>Vivamus gravida imperdiet tellus, consequat tincidunt dolor lobortis sed. Morbi sed sapien accumsan, pellentesque mi sed vehicula.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="teaser media bottommargin_55">
							<div class="media-left">
								<div class="teaser_icon highlight size_normal">
									<i class="flaticon-photo-camera"></i>
								</div>
							</div>
							<div class="media-body">
								<h4 class="media-heading">
									<a href="services.html">Makeup</a>
								</h4>
								<p>Pellentesque aliquet sodales libero sed interd. Sed enim ligula, ornare ac varius non, volutpat sit amet tellus. Nulla vitae urna.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="teaser media bottommargin_55">
							<div class="media-left">
								<div class="teaser_icon highlight size_normal">
									<i class="flaticon-shopping-bag"></i>
								</div>
							</div>
							<div class="media-body">
								<h4 class="media-heading">
									<a href="services.html">Fashion</a>
								</h4>
								<p>Vivamus gravida imperdiet tellus, consequat tincidunt dolor lobortis sed. Morbi sed sapien accumsan, pellentesque mi sed.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-pull-9 col-md-3 col-lg-pull-8 col-lg-4 text-center text-md-right to_animate" data-animation="fadeInLeft">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/model1.png" alt="" class="top-overlap-small">
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

<section class="ls page_portfolio section_padding_top_15 section_padding_bottom_110">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 text-center">
				<div class="with_background line-height0">
					<ul class="pagination @@size">
						<li>
							<a href="#">Prev</a>
						</li>
						<li class="active">
							<a href="#">01</a>
						</li>
						<li>
							<a href="#">02</a>
						</li>
						<li>
							<a href="#">03</a>
						</li>
						<li>
							<a href="#">04</a>
						</li>
						<li>
							<a href="#">05</a>
						</li>
						<li>
							<a href="#">Next</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="page_breadcrumbs ls ms parallax section_padding_bottom_15 section_padding_top_75"
	style="background-image: url(<?php echo get_field('banner')['url'] ?>); background-position: 50% 0px;" 
>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<div class="heading text-center bottom_border">
					<p class="text-uppercase josefin grey fontsize_20">Introduction</p>
					<h1 class="section_header topmargin_5">About Me</h1>
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
					<li class="active"> About Me</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<section class="ls section_padding_top_110 columns_margin_0 image-overflow">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-lg-offset-0 col-lg-6">
				<div class="heading bottommargin_40">
					<p class="text-uppercase josefin grey fontsize_20"><?php the_field('subtitle') ?></p>
					<h2 class="section_header topmargin_5 bottommargin_0"><?php the_field('title') ?></h2>
				</div>
				<p><?php the_field('description') ?></p>
			</div>
			<div class="col-md-offset-1 col-md-10 col-lg-offset-0 col-lg-6 text-center text-lg-right to_animate" data-animation="fadeInRight">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/model1.png" alt="" class="right-offset">
			</div>
		</div>
	</div>
</section>

<section class="ls section_padding_top_110 columns_margin_0 services">
	<div class="container">
		<div class="row">

			<div class="col-md-push-3 col-md-9 col-lg-push-4 col-lg-8">
				<div class="heading bottommargin_60">
					<p class="text-uppercase josefin grey fontsize_20"><?php echo get_field('service')['subtitle'] ?></p>
					<h2 class="section_header bottommargin_0"><?php echo get_field('service')['title'] ?></h2>
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
									<a href="services.html"><?php echo get_field('service')['lists'][0]['title'] ?></a>
								</h4>
								<?php echo get_field('service')['lists'][0]['description'] ?>
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
									<a href="services.html"><?php echo get_field('service')['lists'][1]['title'] ?></a>
								</h4>
								<?php echo get_field('service')['lists'][1]['description'] ?>
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
									<a href="services.html"><?php echo get_field('service')['lists'][2]['title'] ?></a>
								</h4>
								<?php echo get_field('service')['lists'][2]['description'] ?>
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
									<a href="services.html"><?php echo get_field('service')['lists'][3]['title'] ?></a>
								</h4>
								<?php echo get_field('service')['lists'][3]['description'] ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-pull-9 col-md-3 col-lg-pull-8 col-lg-4 text-center text-md-right to_animate" data-animation="fadeInLeft">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/slide03m.png" alt="" class="top-overlap-small">
			</div>
		</div>
	</div>
</section>

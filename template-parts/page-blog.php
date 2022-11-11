<section class="page_breadcrumbs ls ms parallax section_padding_bottom_15 section_padding_top_75"
	style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/parallax/breadcrumbs4.jpg'); background-position: 50% 0px;" 
>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<div class="heading text-center bottom_border">
					<p class="text-uppercase josefin grey fontsize_20">Last News</p>
					<h1 class="section_header topmargin_5">Blog</h1>
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
					<li class="active"> Blog</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<section class="ls page_portfolio section_padding_top_110">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
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
									</div>
								</div>
							</div>
						</div>

					</div>

					<?php 
						$args = array(
						  'post_type' => 'post',
						  'posts_per_page' => 4
						); 
					?>
					<?php $query = new WP_Query($args); ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 session">
							<article class="vertical-item item-type1 post">
								<div class="item-media">
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
		</div>
	</div>
</section>

<section class="hidden ls page_portfolio section_padding_top_15 section_padding_bottom_110">
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
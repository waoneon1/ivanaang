<section class="page_breadcrumbs ls ms parallax section_padding_bottom_15 section_padding_top_75"
	style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/parallax/breadcrumbs4.jpg'); background-position: 50% 0px;" 
>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<div class="heading text-center bottom_border">
					<p class="text-uppercase josefin grey fontsize_20">Course</p>
					<h1 class="section_header topmargin_5">Lets Learn with me</h1>
				</div>
				<ol class="breadcrumb">
					<li>
						<a href="./">
							Home
						</a>
					</li>
					<li>
						<a href="#">Course</a>
					</li>
					<li class="active">Lets Learn with me</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<section class="ls page_portfolio section_padding_top_100 section_padding_bottom_75">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-push-1">

				<?php $terms = get_terms( array(
			    'taxonomy' => 'course_category',
			    'hide_empty' => true,
				))?>
				<div class="filters isotope_filters bottommargin_60">
					<a href="#" data-filter="*" class="selected">All</a>
					<?php foreach ($terms as $key => $term): ?>
						<a href="#" data-filter=".<?php echo $term->slug ?>"><?php echo $term->name ?></a>
					<?php endforeach ?>
				</div>

				<div class="isotope_container isotope row masonry-layout columns_margin_top_0 columns_margin_bottom_30" data-filters=".isotope_filters">

					<?php 
						$args = array(
						  'post_type' => 'course',
						  'posts_per_page' => -1
						); 
					?>
					<?php $query = new WP_Query($args); ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<?php $terms = get_the_terms( $post->ID, 'course_category'); ?>
  					<?php $term = $terms[0]; ?>
						<div class="isotope-item col-lg-4 col-md-6 col-sm-12 <?php echo $term->slug ?>">
							<div class="vertical-item content-padding gallery-extended-item with_background text-center">
								<div class="item-media">
									<img src="<?php echo get_the_post_thumbnail_url($post->id, 'medium'); ?>" alt="<?php the_title() ?>">
									<div class="media-links">
										<a class="abs-link" title="" href=""></a>
									</div>
								</div>
								<div class="item-content">
									<h3 class="item-title" style="min-height: 40px;display: flex;align-items: center;justify-content: center;">
										<a href="gallery-single.html"><?php the_title() ?></a>
									</h3>
									<span class="categories-links">
										<a rel="category" href="#"><?php echo $term->name ?></a>
									</span>
									<?php the_content() ?>
									<div class="item-button">
										<a href="#" class="theme_button wide_button inverse">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; wp_reset_query(); ?>

				</div>
				<!-- eof .isotope_container.row -->

				<div class="row">
					<div class="col-sm-12 text-center">
						<img src="./img/loading.png" alt="" class="fa-spin">
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
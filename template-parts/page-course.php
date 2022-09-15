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

<?php 
	$data_portofolio = [
		['image' => '01.png', 'category' => 'fashion',  'title' => 'Consetetur sadipscing',  'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab molestias nulla dolore ipsa, exercitationem praesentium.'],
		['image' => '02.png', 'category' => 'studio',  'title' => 'Lorem sadipscing',  'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab molestias nulla dolore ipsa, exercitationem praesentium.'],
		['image' => '03.png', 'category' => 'session',  'title' => 'Content picingi',  'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab molestias nulla dolore ipsa, exercitationem praesentium.'],
		['image' => '04.png', 'category' => 'fashion',  'title' => 'Make up Tutorial',  'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab molestias nulla dolore ipsa, exercitationem praesentium.'],
		['image' => '05.png', 'category' => 'studio',  'title' => 'Praweding tutor',  'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab molestias nulla dolore ipsa, exercitationem praesentium.'],
		['image' => '06.png', 'category' => 'session',  'title' => 'Wedding',  'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab molestias nulla dolore ipsa, exercitationem praesentium.'],
		['image' => '07.png', 'category' => 'fashion',  'title' => 'Makeup Session',  'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab molestias nulla dolore ipsa, exercitationem praesentium.'],
		['image' => '08.png', 'category' => 'studio',  'title' => 'Lorem sadipscing',  'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab molestias nulla dolore ipsa, exercitationem praesentium.'],
		['image' => '09.png', 'category' => 'session',  'title' => 'Praweding tutor',  'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab molestias nulla dolore ipsa, exercitationem praesentium.'],
		['image' => '01.png', 'category' => 'fashion',  'title' =>'Make up Tutorial',  'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab molestias nulla dolore ipsa, exercitationem praesentium.'],
		['image' => '02.png', 'category' => 'studio',  'title' => 'Praweding tutor',  'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab molestias nulla dolore ipsa, exercitationem praesentium.'],
		['image' => '03.png', 'category' => 'session',  'title' =>'Make up Tutorial',  'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab molestias nulla dolore ipsa, exercitationem praesentium.']
	];
?>
<section class="ls page_portfolio section_padding_top_100 section_padding_bottom_75">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-push-1">


				<div class="filters isotope_filters bottommargin_60">
					<a href="#" data-filter="*" class="selected">All</a>
					<a href="#" data-filter=".fashion">Fashion</a>
					<a href="#" data-filter=".session">Session</a>
					<a href="#" data-filter=".studio">Studio</a>
				</div>

				<div class="isotope_container isotope row masonry-layout columns_margin_top_0 columns_margin_bottom_30" data-filters=".isotope_filters">

					<?php foreach ($data_portofolio as $key => $value): ?>
						<div class="isotope-item col-lg-4 col-md-6 col-sm-12 <?php echo $value['category'] ?>">
							<div class="vertical-item content-padding gallery-extended-item with_background text-center">
								<div class="item-media">
									<img src="<?php echo get_template_directory_uri() ?>/assets/images/models_square/<?php echo $value['image'] ?>" alt="">
									<div class="media-links">
										<a class="abs-link" title="" href="gallery-single.html"></a>
									</div>
								</div>
								<div class="item-content">
									<h3 class="item-title" style="min-height: 40px;display: flex;align-items: center;justify-content: center;">
										<a href="gallery-single.html"><?php echo $value['title'] ?></a>
									</h3>
									<span class="categories-links">
										<a rel="category" href="gallery-extended-2-cols.html"><?php echo $value['category'] ?></a>
									</span>
									<p><?php echo $value['content'] ?></p>
									<div class="item-button">
										<a href="gallery-single.html" class="theme_button wide_button inverse">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach ?>

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
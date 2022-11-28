<section class="ls ms columns_margin_0 columns_padding_0 page_portfolio">
	<div class="container-fluid">
		<div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters" style="position: relative; height: 660px;">
			
			<?php foreach (get_field('gallery') as $key => $item): ?>
				<?php $cats[] = $item['category'] ?>
			<?php endforeach ?>
			<?php $categories = array_unique($cats) ?>
			<?php $current = isset($_GET['cat']) && $_GET['cat'] ? $_GET['cat'] : 'all' ?>

			<div class="isotope-item col-xs-6 col-md-4 col-lg-3 text-center fashion studio session" style="position: absolute; left: 0%; top: 0px;">
				<div class="vertical-item content-absolute vertical-center portfolio-filters">
					<div class="item-media" style="width: 100%; height: 250px;"></div>
					<div class="item-content">
						<div class="display_table">
							<div class="display_table_cell text-left">
								<div class="heading bottommargin_20">
									<p class="text-uppercase josefin grey fontsize_20">Portfolio</p>
									<h2 class="section_header topmargin_5 bottommargin_0">Our beautiful works</h2>
								</div>
								<div class="filters">
									<a href="?cat=all" class="<?php echo $current == 'all' ? 'selected active' : '' ?>">All</a>
									<?php foreach ($categories as $key => $value): ?>
										<a href="?cat=<?php echo $value ?>" class="<?php echo $current == $value ? 'selected active' : '' ?>"><?php echo ucwords($value) ?></a>
									<?php endforeach ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
</section>

<!--  -->
<section class="ls columns_margin_0 columns_padding_0 page_portfolio">
	<div class="lists" style="outline: none;" data-flickity='{ 
		"pageDots": false, 
		"prevNextButtons": true, 
		"wrapAround": true,
		"autoPlay": 2000,
		"pauseAutoPlayOnHover": false
	}'>
		<?php foreach (get_field('gallery') as $key => $item): ?>
			<?php if ($current == $item['category'] || $current == 'all'): ?>
				<img 
					class="jg-modal-btn" data-id="modal-porto" src="<?php echo $item['image']['sizes']['medium']  ?>" alt="" style="width: auto;height: 350px;"
					data-url="<?php echo $item['image']['url']  ?>" 
				>
			<?php endif ?>
		<?php endforeach; ?>
	</div>
</section>

<div id="modal-porto" class="jg-modal">
	<div class="m-container" style="
		max-width: 600px;
		max-height: 600px;
		margin-top: 50px;
		box-shadow: none;
		background-color: transparent;
	">
  	<span class="m-close jg-modal-close" style="top: 30px;left: 10px;">&times;</span>
		<h4 class="mb-5 font-bold text-base text-center"></h4>
		<img class="jg-modal-content" src="" style="background-color: white; padding: 10px;">
	</div>
</div>
<section class="ls ms columns_margin_0 columns_padding_0 page_portfolio">
	<div class="container-fluid">
		<div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters" style="position: relative; height: 660px;">
			
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
								<div class="filters isotope_filters">
									<a href="#" data-filter="*" class="selected active">All</a>
									<a href="#" data-filter=".fashion" class="">Fashion</a>
									<a href="#" data-filter=".studio" class="">Studio</a>
									<a href="#" data-filter=".session" class="">Session</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
</section>

<section class="ls columns_margin_0 columns_padding_0 page_portfolio">
	<div class="lists" style="outline: none;" data-flickity='{ 
		"pageDots": false, 
		"prevNextButtons": true, 
		"wrapAround": true,
		"autoPlay": 2000,
		"pauseAutoPlayOnHover": false
	}'>
		<?php foreach (get_field('gallery') as $key => $item): ?>
			<img src="<?php echo $item['image']['sizes']['medium']  ?>" alt="" style="width: 350px;height: 350px;">
		<?php endforeach; ?>
	</div>
</section>
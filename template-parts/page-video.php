<section class="page_breadcrumbs ls ms parallax section_padding_bottom_15 section_padding_top_75"
	style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/parallax/breadcrumbs4.jpg'); background-position: 50% 0px;" 
>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<div class="heading text-center bottom_border">
					<p class="text-uppercase josefin grey fontsize_20">Videos</p>
					<h1 class="section_header topmargin_5">Gallery</h1>
				</div>
				<ol class="breadcrumb">
					<li>
						<a href="./">
							Home
						</a>
					</li>
					<li>
						<a href="#">Videos</a>
					</li>
					<li class="active">Gallery</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<section class="ls page_portfolio section_padding_top_100 section_padding_bottom_75">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">

				<div class="hidden filters isotope_filters bottommargin_60">
					<a href="#" data-filter="*" class="selected">All</a>
					<a href="#" data-filter=".fashion">Fashion</a>
					<a href="#" data-filter=".session">Session</a>
					<a href="#" data-filter=".studio">Studio</a>
				</div>

				<div class="isotope_container isotope row masonry-layout columns_margin_top_0 columns_margin_bottom_30" data-filters=".isotope_filters">
					<?php foreach (get_field('lists') as $key => $value): ?>

						<?php 
							//print_r( $value['videos']);
							$video = $value['videos'];

							preg_match('/title="(.+?)"/', $video, $matches_title );
							$title = $matches_title[1];	

							preg_match('/src="(.+?)"/', $video, $matches_url );
							$src = $matches_url[1];	

							preg_match('/embed(.*?)?feature/', $src, $matches_id );
							$id = $matches_id[1];
							$id = str_replace( str_split( '?/' ), '', $id );

						?>
						<div class="isotope-item col-lg-4 col-md-6 col-sm-12 fashion">
							<div class="vertical-item gallery-item small-item content-absolute text-center">
								<div class="iv-video jg-modal-btn" data-id="modal-id" 
									data-url="<?php echo $src ?>" 
									data-title="<?php echo $title ?>"
								>
									<img src="//i.ytimg.com/vi/<?php echo $id  ?>/hqdefault.jpg">
								</div>
								<!-- <button class="jg-modal-btn" data-id="modal-id">tess</button> -->
								<div class="item-content with_background">
									<h4 class="item-meta">
										<?php echo $title ?>
									</h4>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
				<!-- eof .isotope_container.row -->

				<div class="row hidden">
					<div class="col-sm-12 text-center">
						<div class="topmargin_20">
							<ul class="pagination small with_background">
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
		</div>
	</div>
</section>

<div id="modal-id" class="jg-modal">
	<div class="m-container" style="max-width: 800px;">
		<span class="m-close jg-modal-close">&times;</span>
		<div class="m-content">
			<h4 class="mb-5 font-bold text-base text-center"></h4>
			<iframe class="jg-youtube" title="PWK - REUNI JUARA SUCI 7 BERUJUNG KERIBUTAN, RIDWAN REMIN MAMAT ALKATIRI DAN DANY BELER KUMPUL SEMUA" width="800" height="450" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
		</div>
	</div>
</div>
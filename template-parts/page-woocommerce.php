<section class="page_breadcrumbs ls ms parallax section_padding_bottom_15 section_padding_top_75"
	style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/parallax/breadcrumbs4.jpg'); background-position: 50% 0px;" 
>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<div class="heading text-center bottom_border">
					<p class="text-uppercase josefin grey fontsize_20">Shop</p>
					<h1 class="section_header topmargin_5">Products</h1>
				</div>
				<ol class="breadcrumb">
					<li>
						<a href="./">
							Home
						</a>
					</li>
					<li>
						<a href="#">Shop</a>
					</li>
					<li class="active"> Products</li>
				</ol>
			</div>
		</div>
	</div>
</section>



<section class="ls section_padding_top_100 section_padding_bottom_75">
	<div class="container">
		<div class="row">

			<div class="col-sm-12 col-md-12 col-lg-12">
				<?php echo do_shortcode('[products limit="8" columns="4" paginate="true"]'); ?>
				<!-- eof .columns-* -->
			</div>
			<!--eof .col-sm-8 (main content)-->


			<!-- sidebar -->
			<!-- <aside class="col-sm-5 col-md-4 col-lg-4"></aside> -->
			<!-- eof aside sidebar -->


		</div>
	</div>
</section>
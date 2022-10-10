		<div class="preloader">
		<div class="preloader_image"></div>
	</div>


	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<div class="widget widget_search">
			<form method="get" class="searchform form-inline" action="/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="theme_button">Search</button>
			</form>
		</div>
	</div>

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<header class="page_header header_white columns_padding_0 table_section table_section_md">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-2 col-md-4 col-xs-12">
							<a href="<?php echo home_url( '/' ) ?>" class="logo top_logo">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo-text.png" alt="" style="max-width: 200px;">
							</a>
							<!-- header toggler -->
							<span class="toggle_menu">
								<span></span>
							</span>
						</div>
						<div class="col-lg-10 col-md-8 text-right">
							<!-- main nav start -->
							<nav class="mainmenu_wrapper">
								<ul class="mainmenu nav sf-menu">
									<?php $nav = get_field('header_navigation', 'option'); ?>
									<?php foreach ($nav as $key => $item): ?>
										<?php $active = link_active($item['list']['url']) ?>
										<li class="<?php echo $active ?>">
											<a href="<?php echo $item['list']['url'] ?>"><?php echo $item['list']['title'] ?></a>
										</li>
									<?php endforeach ?>
								</ul>
							</nav>
							<!-- eof main nav -->
						</div>
					</div>
				</div>
			</header>

			<?php 
				$events = get_field('event', 'option');
				$isEvents = false;
				$isNumber = 0;
				$currentDate = date('d/m/Y');
				foreach ($events as $key => $event) {
					if ($currentDate >= $event['event_start'] && $currentDate < $event['event_end']) {
						$isEvents = true;
						$isNumber = $key;
					}
				}
			?>
			
			<?php if ($isEvents): ?>
			<div class="event-wrapper active">
				<div class="event-body">
					<span class="event-close js-event-close dashicons dashicons-no-alt"></span>
					<?php if ($currentDate >= $events[$key]['event_start'] && $currentDate < $events[$key]['event_end']): ?>
						<img src="<?php echo $events[$key]['image']['url'] ?>">
					<?php endif ?>
				</div>
			</div>
			<?php endif ?>
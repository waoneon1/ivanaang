	<!-- <div class="preloader">
		<div class="preloader_image"></div>
	</div> -->


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

			<header class="page_header header_white table_section table_section_md">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-2 col-md-4 col-xs-12">
							<a href="<?php echo home_url( '/' ) ?>" class="logo top_logo">
								<?php if (get_field('logo', 'option')['header']): ?>
									<img src="<?php echo get_field('logo', 'option')['header']['url'] ?>" alt="" style="max-width: 270px;">
								<?php else: ?>
									<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo-iv.png" alt="" style="max-width: 270px;">
								<?php endif ?>
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
				//print_r($events);
				$isEvents = false;
				$isNumber = 0;
				$currentDate = date('Ymd');
				foreach ($events as $key => $event) {
					if ($currentDate >= $event['event_start'] && $currentDate < $event['event_end']) {
						$isEvents = true;
						$isNumber = $key;
					}
				}
			?>
			
			<?php if ($isEvents): ?>
			<div class="event-wrapper" data-active="<?php echo $event['event_start'] . "#" . $event['event_end'] ?>">
				<div class="event-body">
					<span 
						data-id="<?php echo $isNumber . "#" . $event['event_start'] . "#" . $event['event_end'] ?>"
						class="event-close js-event-close dashicons dashicons-no-alt"
					></span>
					<?php if ($currentDate >= $events[$isNumber]['event_start'] && $currentDate < $events[$isNumber]['event_end']): ?>
						<picture style="display: flex; justify-content: center;">
					    <!-- <source media="(min-width: 1200px)" srcset="/img/desktop-size.png"> -->
					    <source media="(min-width: 768px)" srcset="<?php echo $events[$isNumber]['image']['url'] ?>">
					    <img src="<?php echo $events[$isNumber]['image_on_mobile']['url'] ?>"/>
						</picture>
					<?php endif ?>
				</div>
			</div>
			<?php endif ?>
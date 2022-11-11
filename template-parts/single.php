<section class="ls section_padding_110">
	<div class="container">
		<div class="row">

			<div class="col-sm-10 col-sm-push-1">

				<article>
					<div class="entry-thumbnail">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
					</div>

					<header class="entry-header bottommargin_25">

						<div class="post-adds text-right">

							<span class="categories-links pull-left">
								<?php foreach (get_the_category() as $key => $cat): ?>
									<a href="<?php echo get_category_link($cat) ?>">
										<?php echo $cat->name ?> 
										<?php echo count(get_the_category()) && $key < (count(get_the_category()) - 1) ? ',' : '' ?>
									</a> 
								<?php endforeach ?>
							</span>

							<!-- <span class="views-count">
								<i class="flaticon-glasses highlight"></i>
								648 views
							</span> -->

							<!-- <span class="item-likes">
								<i class="fa fa-user highlight"></i>
								152 likes
							</span> -->

							<span class="greylinks comments-link">
								<i class="fa fa-user highlight"></i>
								<?php the_author() ?>
							</span>

						</div>
						<!-- .entry-meta -->

						<h3 class="entry-title topmargin_10">
							<?php the_title() ?>
						</h3>

						<span class="date fontsize_12">
							<time datetime="2016-08-01T15:05:23+00:00" class="entry-date">
								<?php echo esc_html( get_the_date() ) ?>
							</time>
						</span>

					</header>
					<!-- .entry-header -->

					<div class="entry-content">
						<?php the_content() ?>
					</div>
					<!-- .entry-content -->



				</article>


			</div>
			<!--eof .col-sm-8 (main content)-->

		</div>
	</div>
</section>
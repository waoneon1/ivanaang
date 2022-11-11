<section class="ls section_padding_110">
	<div class="container">
		<div class="row">

			<div class="col-md-6 col-lg-5 to_animate" data-animation="scaleAppear">

				<h3 class="widget-title2 entry-title"><?php echo get_field('contact', 'option')['title'] ?></h3>

				<?php echo get_field('contact', 'option')['description'] ?>

				<div class="contacts-media-list topmargin_30">
					<div class="media">
						<div class="media-left">
							<p class="josefin text-uppercase bold">Phone</p>
						</div>
						<div class="media-body"><?php echo get_field('info', 'option')['phone'] ?></div>
					</div>
					<div class="media">
						<div class="media-left">
							<p class="josefin text-uppercase bold">E-mail</p>
						</div>
						<div class="media-body"><?php echo get_field('info', 'option')['email'] ?></div>
					</div>
					<div class="media">
						<div class="media-left">
							<p class="josefin text-uppercase bold">Follow Us</p>
						</div>
						<div class="media-body">
							<div class="post-social greylinks">
								<a href="<?php echo get_field('info', 'option')['social_media']['facebook'] ?>" class="social-icon soc-facebook"></a>
								<a href="<?php echo get_field('info', 'option')['social_media']['twitter'] ?>" class="social-icon soc-twitter"></a>
								<a href="<?php echo get_field('info', 'option')['social_media']['instagram'] ?>" class="social-icon soc-instagram"></a>
								<a href="<?php echo get_field('info', 'option')['social_media']['youtube'] ?>" class="social-icon soc-youtube"></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-offset-1 col-md-6 to_animate" data-animation="scaleAppear">

				<!-- <form class="contact-form row columns_margin_0" method="post" action="/">

					<div class="col-sm-12">
						<div class="contact-form-name bottommargin_20">
							<label for="name">Name
								<span class="required">*</span>
							</label>
							<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Enter your Name">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="contact-form-email bottommargin_20">
							<label for="email">Email address
								<span class="required">*</span>
							</label>
							<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Enter your E-mail">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="contact-form-email bottommargin_20">
							<label for="phone">Mobile Phone
								<span class="required">*</span>
							</label>
							<input type="phone" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Enter your WhatsApp Number">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							<label for="billing_country" class="control-label">
								<span class="grey">Occasion </span>
								<span class="required">*</span>
							</label>
							<select class="form-control" name="billing_country" id="billing_country">
								<option value="">- Select your Occasion -</option>
								<option value="AX">Bridal</option>
								<option value="AF">Prewed</option>
								<option value="AL">Photoshoot</option>
								<option value="GA">Engagement</option>
								<option value="GM">Others</option>
							</select>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="contact-form-message bottommargin_20">
							<label for="message">Message</label>
							<textarea aria-required="true" rows="7" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
						</div>
					</div>

					<div class="col-sm-12">

						<div class="contact-form-submit topmargin_10">
							<button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button">Submit</button>
						</div>
					</div>

				</form> -->
				<div class="wp_plugin_wpform">
					<?php echo do_shortcode(get_field('contact', 'option')['shortcode']); ?>
				</div>
			</div>

		</div>
	</div>
</section>
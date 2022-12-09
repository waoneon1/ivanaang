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
						<?php $sos = get_field('info', 'option')['social_media']; ?>
						<div class="media-body">
							<div class="post-social greylinks">
								<?php if ($sos['facebook']): ?>
									<a href="<?php echo get_field('info', 'option')['social_media']['facebook'] ?>" class="social-icon soc-facebook"></a>
								<?php endif ?>
								<?php if ($sos['twitter']): ?>
									<a href="<?php echo get_field('info', 'option')['social_media']['twitter'] ?>" class="social-icon soc-twitter"></a>
								<?php endif ?>
								<?php if ($sos['instagram']): ?>
								<a href="<?php echo get_field('info', 'option')['social_media']['instagram'] ?>" class="social-icon soc-instagram"></a>
								<?php endif ?>
								<?php if ($sos['youtube']): ?>
									<a href="<?php echo get_field('info', 'option')['social_media']['youtube'] ?>" class="social-icon soc-youtube"></a>
								<?php endif ?>
								<?php if ($sos['pinterest']): ?>
									<a href="<?php echo get_field('info', 'option')['social_media']['pinterest'] ?>" class="social-icon soc-pinterest"></a>
								<?php endif ?>
								<?php if ($sos['tiktok']): ?>
									<a href="<?php echo get_field('info', 'option')['social_media']['tiktok'] ?>" class="social-icon" style="border-radius: 999px;">
										<svg width="18px" height="18px" viewBox="0 0 512 512" id="icons" xmlns="http://www.w3.org/2000/svg"><path d="M412.19,118.66a109.27,109.27,0,0,1-9.45-5.5,132.87,132.87,0,0,1-24.27-20.62c-18.1-20.71-24.86-41.72-27.35-56.43h.1C349.14,23.9,350,16,350.13,16H267.69V334.78c0,4.28,0,8.51-.18,12.69,0,.52-.05,1-.08,1.56,0,.23,0,.47-.05.71,0,.06,0,.12,0,.18a70,70,0,0,1-35.22,55.56,68.8,68.8,0,0,1-34.11,9c-38.41,0-69.54-31.32-69.54-70s31.13-70,69.54-70a68.9,68.9,0,0,1,21.41,3.39l.1-83.94a153.14,153.14,0,0,0-118,34.52,161.79,161.79,0,0,0-35.3,43.53c-3.48,6-16.61,30.11-18.2,69.24-1,22.21,5.67,45.22,8.85,54.73v.2c2,5.6,9.75,24.71,22.38,40.82A167.53,167.53,0,0,0,115,470.66v-.2l.2.2C155.11,497.78,199.36,496,199.36,496c7.66-.31,33.32,0,62.46-13.81,32.32-15.31,50.72-38.12,50.72-38.12a158.46,158.46,0,0,0,27.64-45.93c7.46-19.61,9.95-43.13,9.95-52.53V176.49c1,.6,14.32,9.41,14.32,9.41s19.19,12.3,49.13,20.31c21.48,5.7,50.42,6.9,50.42,6.9V131.27C453.86,132.37,433.27,129.17,412.19,118.66Z"/></svg>
									</a>
								<?php endif ?>
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
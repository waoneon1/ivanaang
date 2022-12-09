

			<section class="page_copyright ds ms doted_items table_section section_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-lg-4 text-center text-md-left">
							<p class="greylinks">&copy;Ivanna.ang 2022
							</p>
						</div>
						<?php $sos = get_field('info', 'option')['social_media']; ?>
						<div class="col-md-7 col-lg-8 text-right hidden-xs hidden-sm">
							<div class="lightgreylinks page_social">
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
			</section>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

<script type="text/javascript">
	jQuery(document).ready(function ($) { 
		let event = localStorage.getItem("ivanna-event");
		let active = $(".event-wrapper").data("active");

		if (event != active) {
			$(".event-wrapper").addClass("active");
			$("body").addClass("event-onbody");
			localStorage.removeItem("ivanna-event");
		} else {
			$(".event-wrapper").removeClass("active");
			$("body").removeClass("event-onbody");
		}

		$(".js-event-close").on( "click", function(e) {
			$(".event-wrapper").removeClass("active");
			$("body").removeClass("event-onbody");
			localStorage.setItem("ivanna-event", active);
	  });
	})
</script>
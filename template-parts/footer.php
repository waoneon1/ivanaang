

			<section class="page_copyright ds ms doted_items table_section section_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-lg-4 text-center text-md-left">
							<p class="greylinks">&copy;Ivanna.ang 2022
							</p>
						</div>
						<div class="col-md-7 col-lg-8 text-right hidden-xs hidden-sm">
							<div class="lightgreylinks page_social">
								<a href="<?php echo get_field('info', 'option')['social_media']['facebook'] ?>" class="social-icon soc-facebook"></a>
								<a href="<?php echo get_field('info', 'option')['social_media']['twitter'] ?>" class="social-icon soc-twitter"></a>
								<a href="<?php echo get_field('info', 'option')['social_media']['instagram'] ?>" class="social-icon soc-instagram"></a>
								<a href="<?php echo get_field('info', 'option')['social_media']['youtube'] ?>" class="social-icon soc-youtube"></a>
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
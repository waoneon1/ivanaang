

			<section class="page_copyright ds ms doted_items table_section section_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-lg-4 text-center text-md-left">
							<p class="greylinks">&copy;Ivanna.ang 2022
							</p>
						</div>
						<div class="col-md-7 col-lg-8 text-right hidden-xs hidden-sm">
							<div class="lightgreylinks page_social">
								<a href="#" class="social-icon soc-facebook"></a>
								<a href="#" class="social-icon soc-twitter"></a>
								<a href="#" class="social-icon soc-instagram"></a>
								<a href="#" class="social-icon soc-youtube"></a>
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
		if (event == "close") {
			$(".event-wrapper").removeClass("active");
			$("body").removeClass("event-onbody");
		}
		$(".js-event-close").on( "click", function(e) {
			$(".event-wrapper").removeClass("active");
			$("body").removeClass("event-onbody");
			localStorage.setItem("ivanna-event", "close");
	  });
	})
</script>
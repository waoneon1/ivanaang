<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ivanna.ang
 */

get_header();
?>

<section class="ls page_not_found section_padding_75">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<p class="not_found josefin grey">404</p>
				<h2>Oops, page not found!</h2>
				<p>
					<a href="<?php echo home_url( '/' ) ?>" class="theme_button">Back to home</a>
				</p>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();

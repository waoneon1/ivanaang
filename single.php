<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ivanna.ang
 */

get_header();

		while ( have_posts() ) :
			the_post();

			include get_template_directory() . '/template-parts/single.php'; 

		endwhile; // End of the loop.
		
get_footer();

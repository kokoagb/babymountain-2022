<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BabyMoutain
 */

get_header();
?>

<main id="primary" class="site-main container">

	<?php
	if (have_posts()) :

		if (is_home() && !is_front_page()) :
	?>
			<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>
	<?php
		endif;

		/* Start the Loop */
		while (have_posts()) :
			the_post();

			if (is_singular()) {
				get_template_part('template-parts/content', get_post_type());
			} else {
				get_template_part('template-parts/content', 'archive');
			}

		endwhile;

		the_posts_navigation(array(
			'prev_text' => bm_get_chevron_left() . ' Régebbi bejegyzések',
			'next_text' => 'Újabb bejegyzések ' . bm_get_chevron_right()
		));

	else :

		get_template_part('template-parts/content', 'none');

	endif;
	?>

</main><!-- #main -->

<?php
get_footer();

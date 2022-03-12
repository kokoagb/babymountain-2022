<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package BabyMoutain
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header container">
				<h1 class="page-title">Ez az oldal nem található</h1>
			</header><!-- .page-header -->

			<div class="page-content container">
				<p>Sajnos nem sikerült megtalálnunk a keresett oldalt, de itt láthatod legnépszerűbb termékeinket:</p>
				<?php echo do_shortcode('[products limit="4" columns="4" orderby="popularity" ]') ?>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();

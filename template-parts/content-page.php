<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BabyMoutain
 */

$defaults = array(
	'is_fullwidth' => false,
	'no_title' => false,
);

$args = wp_parse_args($args, $defaults);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (!$args['no_title']) : ?>
		<header class="entry-header <?php echo $args['is_fullwidth'] ? 'container-fluid' : 'container' ?>">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</header><!-- .entry-header -->
	<?php endif; ?>

	<div class="entry-content <?php echo $args['is_fullwidth'] ? 'container-fluid' : 'container' ?>">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'bm'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if (get_edit_post_link()) : ?>
		<footer class="entry-footer <?php echo $args['is_fullwidth'] ? 'container-fluid' : 'container' ?>">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__('Edit <span class="screen-reader-text">%s</span>', 'bm'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post(get_the_title())
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
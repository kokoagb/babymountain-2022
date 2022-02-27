<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bm
 */

?>

<footer class="site-footer">
	<div class="site-footer-inner position-relative" aria-hidden="true">
		<img class="site-footer-background img-fluid" src="<?php echo get_template_directory_uri(); ?>/static/images/footer.jpg" loading="lazy">
		<img class="site-footer-logo" src="<?php echo get_template_directory_uri(); ?>/static/images/logo.png" loading="lazy">
	</div>
	<nav class="p-2">
		<div class="container d-flex flex-column flex-xl-row">
			<?php bm_footer_menu(); ?>
			<strong class="ms-xl-auto mt-3 mt-xl-0">
				BabyMountain ©2022
			</strong>
		</div>
</nav>
</footer>

<?php wp_footer(); ?>

</body>
</html>

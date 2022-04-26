<?php

/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BabyMoutain
 */

?>

<footer class="site-footer mt-5 clear">
	<nav class="p-2 bg-white">
		<div class="container d-flex flex-column flex-xl-row">
			<?php bm_footer_menu(); ?>
			<?php bm_payment_icons(); ?>
			<strong class="ms-xl-auto mt-3 mt-xl-0">
				BabyMountain ©2022
			</strong>
		</div>
	</nav>
</footer>

<?php wp_footer(); ?>

</body>

</html>
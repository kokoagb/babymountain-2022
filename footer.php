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
	<?php if ($pagename !== 'silent-night') : ?>
		<form name="mc-embedded-subscribe-form" action="https://babymountain.us6.list-manage.com/subscribe/post?u=8c60bf97301e09f33b4d8dca3&amp;id=c26705cccb" method="post" novalidate class="email-subscription">
			<div class="text-center">
				<img class="email-subscription-image" src="<?php echo get_template_directory_uri(); ?>/static/images/mail.png" loading="lazy">
				<h3 class="mt-4 mb-3">IRATKOZZ FEL A HÍRLEVELÜNKRE!</h3>
			</div>
			<div class="input-group">
				<input type="email" name="EMAIL" placeholder="Email címem" class="newsletter-email form-control" />
				<button type="submit" value="Subscribe" name="subscribe" class="newsletter-submit btn btn-primary text-uppercase">
					Feliratkozom
				</button>
			</div>
			<small class="email-error form-text text-danger"></small>
			<div style="position: absolute; left: -5000px;" aria-hidden="true">
				<input type="text" name="b_8c60bf97301e09f33b4d8dca3_c26705cccb" tab-index="-1" value="" />
			</div>
			<div class="form-check text-justify mt-2">
				<input id="mailchimp-subscription-consent" type="checkbox" class="subscription-consent form-check-input" />
				<label class="form-check-label" for="mailchimp-subscription-consent">
					<small>
						Kérem a BabyMountain hírlevelét, benne híreket újdonságokról,
						értesítéseket érdekes blogbejegyzésekrõl, valamint a webshop
						legfrissebb kedvezményeirõl, hogy semmirõl se maradjak le és a
						legjobbat választhassam a kisbabám, gyermekem és a családom
						természetes gyógyulásához.
						<a href="/adatvedelmi-nyilatkozat/">
							<strong>
								Feliratkozásommal elfogadom az Adatvédelmi irányelveket.
							</strong>
						</a>
					</small>
					<small class="consent-error form-text text-danger"></small>
				</label>
			</div>
		</form>
		<div class="site-footer-inner position-relative" aria-hidden="true">
			<img class="site-footer-background img-fluid" src="<?php echo get_template_directory_uri(); ?>/static/images/footer.jpg" loading="lazy">
			<img class="site-footer-logo" src="<?php echo get_template_directory_uri(); ?>/static/images/logo.png" loading="lazy">
		</div>
	<?php endif; ?>
	<nav class="p-2 bg-white">
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
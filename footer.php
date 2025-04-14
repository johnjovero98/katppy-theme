<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package katppy
 */

?>

<!-- newsletter Widget -->
<section class="bg-gold-100 relative mt-[162px]">
	<div class="container mx-auto px-3 py-5">
		<div class="newsletter-img">
			<img src="<?php echo get_template_directory_uri() ?>/images/newsletter-img.webp" alt="graphic image of an open envelope with cat paw print">
		</div>

		<h2 class="text-h3 lg:text-h2 font-bold text-center">Get Updated!</h2>
		<p class="text-center">Subscribe to our newsletter for DIY tips, product launches, and special OFFERS 💜</p>

		<!-- Mailchimp form -->
		 <!-- change the action once the account is setup -->
		<div id="mc_embed_shell">
			<div id="mc_embed_signup">
				<form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_self" novalidate="">
					<div id="mc_embed_signup_scroll" class="flex justify-center mt-3">

						<div class="newsletter-form">
							<div class="mc-field-group w-full">
								<label class="hidden" for="mce-EMAIL">Email Address <span class="asterisk">*</span></label>
								<input type="email" name="EMAIL" class="required email tnp-email" id="mce-EMAIL"  value="" placeholder="janedoe@email.com" required>
							</div>

							<div id="mce-responses" class="clear foot">
								<div class="response" id="mce-error-response" style="display: none;"></div>
								<div class="response" id="mce-success-response" style="display: none;"></div>
							</div>

							<div aria-hidden="true" style="position: absolute; left: -5000px;">
								/* real people should not fill this in and expect good things - do not remove this or risk form bot signups */
								<input type="text" name="b_f1d1fe2d38c794ef2ffacd6c4_cd44b7bc20" tabindex="-1" value="">
							</div>

							<div class="tnp-field tnp-field-button">
								<input type="submit" name="subscribe" id="mc-embedded-subscribe" class="tnp-submit" value="Subscribe">
							</div>

						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<footer id="colophon" class="site-footer bg-gold-500">
	<div class="container mx-auto px-3 py-4 flex flex-col gap-3 lg:flex-row justify-between flex-wrap">
		<div class="max-w-[281px]">
			<img src="<?php echo get_template_directory_uri() ?>/images/katppy-logo.webp" alt="katppy logo">
		</div>

		<div class="flex flex-col gap-3 lg:flex-row lg:gap-7 justify-between">
			<!-- Product Links -->
			<div>
				<h3>Products</h3>
				<?php dynamic_sidebar('product-links'); ?>
			</div>

			<!-- Site Links -->
			<div>
				<h3>Site Links</h3>
				<?php dynamic_sidebar('site-links'); ?>
			</div>

			<!-- Social Media -->
			<div>
				<h3>Follow Us!</h3>
				<div class="flex flex-col justify-between gap-5">
					<?php dynamic_sidebar('social-media-links'); ?>

					<div class="max-w-[168px]">
						<img src="<?php echo get_template_directory_uri() ?>/images/stripe-pmt-logos.webp" alt="stripe payment logos">
					</div>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->

<div class="bg-black text-white p-[4.5px]">
	<div class="container mx-auto flex flex-col items-center lg:flex-row lg:justify-between">
		<p>&copy; 2025 Katppy DIY</p>
		<p class="flex items-center gap-[7px]">Web design by <span><img class="w-[50px]" src="<?php echo get_template_directory_uri() ?>/images/echo-digital-white-logo.svg" alt="echo digital logo"></span></p>
	</div>
</div>
</div><!-- #page -->
<?php wp_footer(); ?>

</body>

</html>
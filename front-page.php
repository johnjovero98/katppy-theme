<?php

/**
 * The template for displaying the landing page
 *
 * This is the template that displays the landing page by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package katppy
 */

get_header();
?>

<main id="primary" class="site-main home-page">
	<!-- Hero Banner -->
	<div class="hero-banner relative">
		<div class="hero-img w-full">
			<img class="object-cover w-full h-full" src="<?php echo get_template_directory_uri() ?>/images/hero-img-charms.jpg" alt="images of bear shaped charms">
		</div>

		<div class="hero-cta">
			<div class="container mx-auto">
				<h2 class="hero-heading">Craft it your way with Katppy DIY Supplies</h2>
				<p class="mb-3 text-p md:text-h5 leading-[1.5rem] font-medium text-balance">Bring your cute and creative projects to life!</p>
				<a class="cta-btn" href="<?php echo get_site_url(null,'shop') ?>">Shop Here</a>
				<div class="paw-sticker">
					<img src="<?php echo get_template_directory_uri() ?>/images/paw-sticker.png" alt="graphic image of a paw sticker style">
				</div>
			</div>
		</div>
	</div>

	<!-- Product Categories -->
	<section class="bg-gold-100 px-3 py-5 lg:py-4">
		<h2 class="text-center text-h2 mb-4">Shop by Categories</h2>

		<?php
		$args = [
			'taxonomy'   => 'product_cat',
			'hide_empty' => true
		];
		
		$query = new WP_Term_Query($args);

		if (!empty($query->terms)) : ?>
			<div class="product-categories-grid container mx-auto">
				<?php foreach ($query->terms as $category) :
					$thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
					$image_url = wp_get_attachment_url($thumbnail_id) ?: wc_placeholder_img_src(); // Fallback to placeholder image
				?>
					<div class="product-category">
						<a href="<?php echo esc_url(get_term_link($category)); ?>">
							<img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($category->name); ?>" />
						</a>

						<h3><?php echo esc_html($category->name); ?></h3>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</section>

	<!-- best sellers -->
	<section class="px-3 py-4">
		<div class="container mx-auto">
			<h2 class="text-center text-h2">Our Bestsellers</h2>

			<?php
			while (have_posts()) :
				the_post();

				get_template_part('template-parts/content', 'page');

				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;
			endwhile; // End of the loop.
			?>
		</div>
	</section>

	<!-- pop-up store section -->
	<section class="farmers-market container mx-auto">
		<div class="cat-img-container">
			<img src="<?php echo get_template_directory_uri() ?>/images/cat-shopping.png" alt="graphic image of a cat holding a shopping">
		</div>

		<div class="farmers-market-cta flex items-center">
			<div>
				<h2 class="text-h4 lg:text-h3 mb-3 text-balance max-w-[40ch]">Check out our pop-up store at your local farmers’ market and events!</h2>
				<a class="cta-btn relative z-20" href="<?php echo get_site_url(null,'events') ?>">Store Details</a>
			</div>

		</div>

		<div class="farmers-market-img-container">
			<img src="<?php echo get_template_directory_uri() ?>/images/farmers-market.png" alt="image of farmers' market">
		</div>
	</section>

	<!-- reviews and testimonials -->
	<section class="my-5 p-3 container mx-auto">
		<div class="flex flex-col md:flex-row md:justify-evenly gap-4">
			<div class="text-center flex flex-col items-center">
				<div class="delivery-img-container flex justify-center">
					<img src="<?php echo get_template_directory_uri() ?>/images/smooth-dispatch-icon.svg" alt="graphic image of a truck">
				</div>
				<h3 class="text-h4">Smooth Dispatch</h3>
				<p class="text-balance max-w-[25ch]">Has a history of dispatching on time with tracking.</p>
			</div>

			<div class="text-center flex flex-col items-center">
				<div class="reply-img-container flex justify-center">
					<img src="<?php echo get_template_directory_uri() ?>/images/speedy-replies-icon.svg" alt="graphic image of a paper plane">
				</div>
				<h3 class="text-h4">Speedy Replies</h3>
				<p class="text-balance max-w-[25ch]">Has a history of replying to messages quickly.</p>
			</div>

			<div class="text-center flex flex-col items-center">
				<div class="reviews-img-container flex justify-center">
					<img src="<?php echo get_template_directory_uri() ?>/images/rave-reviews-icon.svg" alt="grahic image of a text bubble">
				</div>
				<h3 class="text-h4">Rave Reviews</h3>
				<p class="text-balance max-w-[25ch]">Average product review rating of 4.8 or higher</p>
			</div>

		</div>

		<!-- customer testimonials widget -->
		<div class="customer-testimonial mt-5">
			<?php dynamic_sidebar('customer-testimonial'); ?>
		</div>

	</section>
</main><!-- #main -->
<?php
get_footer();

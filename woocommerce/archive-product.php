<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined('ABSPATH') || exit;
get_header('shop');
?>

<div class="shop-page container mx-auto px-3 py-4">
	<?php
	/**
	 * Hook: woocommerce_before_main_content.
	 *
	 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
	 * @hooked woocommerce_breadcrumb - 20
	 * @hooked WC_Structured_Data::generate_website_data() - 30
	 */
	do_action('woocommerce_before_main_content');
	?>

	<div class="mb-4 text-h1">
		<?php
		/**
		 * Hook: woocommerce_shop_loop_header.
		 *
		 * @since 8.6.0
		 *
		 * @hooked woocommerce_product_taxonomy_archive_header - 10
		 */
		do_action('woocommerce_shop_loop_header');
		?>
	</div>

	<div class="flex flex-col lg:flex-row gap-3 items-start">
		<!-- Shop page filter  -->
		<div class="shop-page-filter">
			<button class="filter-button" aria-controls="product-filter-wrapper" aria-expanded="false">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
					<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
				</svg>
				Filters
			</button>

			<div class="product-filter-wrapper" id="product-filter-wrapper" aria-hidden="true">
				<button class="filter-close-button" aria-label="Close filters">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
						<path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
					</svg>
				</button>

				<?php dynamic_sidebar('product-filter') ?>
			</div>
		</div>

		<!-- Shop page content (product cards) -->
		<div class="shop-page-content">
			<?php
			if (woocommerce_product_loop()) {
				echo '<div class="woocommerce-before-product-card-content">';
				/**
				 * Hook: woocommerce_before_shop_loop.
				 *
				 * @hooked woocommerce_output_all_notices - 10
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action('woocommerce_before_shop_loop');
				echo '</div>';

				// product cards
				woocommerce_product_loop_start();
				if (wc_get_loop_prop('total')) {
					while (have_posts()) {
						the_post();
						/**
						 * Hook: woocommerce_shop_loop.
						 */
						do_action('woocommerce_shop_loop');
						wc_get_template_part('content', 'product');
					}
				}

				woocommerce_product_loop_end();
				/**
				 * Hook: woocommerce_after_shop_loop.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action('woocommerce_after_shop_loop');
			} else {
				/**
				 * Hook: woocommerce_no_products_found.
				 *
				 * @hooked wc_no_products_found - 10
				 */
				do_action('woocommerce_no_products_found');
			}

			/**
			 * Hook: woocommerce_after_main_content.
			 *
			 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
			 */
			do_action('woocommerce_after_main_content');
			?>
		</div>
	</div>
</div>

<?php
get_footer('shop');

<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Katppy_Theme
 */

get_header();
?>

<main id="primary" class="site-main shipping-returns-page">

	<h1 class="text-h2 text-center p-4 mb-4 bg-gold-500 shadow-lg"><?php the_title(); ?></h1>

	<div class="flex flex-col lg:flex-row gap-4 items-start container mx-auto px-3">
		<picture class="lg:order-1 lg:sticky lg:top-[3rem]">
			<source media="(min-width:1024px)" srcset="<?php echo get_template_directory_uri() ?>/images/orange-box-cat.webp">
			<img class="w-full" src="<?php echo get_template_directory_uri() ?>/images/cat-in-box.webp" alt="Cat in a box.">
		</picture>


		<div class="w-full lg:w-[80%]">
			<!-- shipping policy -->
			<div class="mb-4">
				<?php
				$slug = 'shipping-policy';
				$args = array(
					'name'        => $slug,
					'post_type'   => 'post',
					'post_status' => 'publish',
					'posts_per_page' => 1
				);
				$query = new WP_Query($args);

				if ($query->have_posts()) :
					while ($query->have_posts()) : $query->the_post(); ?>
						<h2><?php the_title(); ?></h2>

						<div class="policy-content"><?php the_content(); ?></div>

				<?php endwhile;
					wp_reset_postdata();
				else :
					echo 'No post found.';
				endif;
				?>
			</div>

			<!-- return policy -->
			<div class="mb-4">
				<?php
				$slug = 'return-exchange-policy';
				$args = array(
					'name'        => $slug,
					'post_type'   => 'post',
					'post_status' => 'publish',
					'posts_per_page' => 1
				);

				$query = new WP_Query($args);

				if ($query->have_posts()) :
					while ($query->have_posts()) : $query->the_post(); ?>
						<h2><?php the_title(); ?></h2>

						<div class="policy-content"><?php the_content(); ?></div>

				<?php endwhile;
					wp_reset_postdata();
				else :
					echo 'No post found.';
				endif;
				?>

			</div>
		</div>
	</div>
</main><!-- #main -->

<?php
get_footer();

<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Katppy_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found container mx-auto px-3 py-4">
			<header class="page-header">
				<h1 class="page-title text-center text-h1 mb-4"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'katppy-theme' ); ?></h1>
			</header><!-- .page-header -->


			<div class="flex justify-center">
				<a class="button-404"href="<?php echo home_url(); ?>">Return to homepage</a>
			</div>

		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();

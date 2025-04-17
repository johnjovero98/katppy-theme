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
 * @package katppy
 */

get_header();
?>

<main id="primary" class="site-main about">
	<div class="container mx-auto px-3 py-4 flex flex-col md:flex-row gap-4">
		<aside class="md:sticky h-fit top-[3rem]">
			<div>
				<img class="rounded-lg shadow-xl border border-gray-100  max-w-full md:max-w-[250px]" src="<?php echo get_template_directory_uri() ?>/images/kat.webp" alt="image of Kat wrapped in a blanket">
			</div>

			<h2>Kat</h2>
			<p class="italic whitespace-nowrap">Chief Brand Ambassador</p>
		</aside>



		<div class="about-main-content">
			<!-- tab buttons -->
			<div class="tab">
				<button class="tablinks active" onclick="openContent(event, 'About')">About Us</button>
				<button class="tablinks" onclick="openContent(event, 'Gallery')">Decoden Gallery</button>
			</div>
			<!-- tab content -->
			<div id="About" class="tabcontent" style="display: block;">
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

			<div id="Gallery" class="tabcontent">
				<?php
				$slug = 'decoden-gallery';
				$args = array(
					'name'        => $slug,
					'post_type'   => 'post',
					'post_status' => 'publish',
					'posts_per_page' => 1
				);

				$query = new WP_Query($args);

				if ($query->have_posts()) :
					while ($query->have_posts()) : $query->the_post(); ?>
						<div><?php the_content(); ?></div>
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

<script>
	function openContent(evt, content) {
		var i, tabcontent, tablinks;

		tabcontent = document.getElementsByClassName("tabcontent");

		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		}
		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		}
		document.getElementById(content).style.display = "block";
		evt.currentTarget.className += " active";
	}
</script>

<?php
get_footer();

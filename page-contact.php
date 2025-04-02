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

<main id="primary" class="site-main contact-page text-p">

    <div class="container mx-auto px-3 py-4">
        <div class="flex flex-col xl:flex-row gap-4">
            <!-- contact instructions -->
            <section class="xl:w-1/2">
                <h2>Get in Touch</h2>
                <p>If you have any inquiries about our products, store policies or shipping– please call, email or fill out the provided form.</p>
                <p>We’ll get back to you as soon as possible!</p>
                <p><strong>Email:</strong> katppy.shop@gmail.com</p>
                <p><strong>Phone:</strong> +1 825 436 6499</p>

                <div class="flex justify-center">
                    <img class="w-[70%]" src="<?php echo get_template_directory_uri() ?>/images/bongo-cat-keyboard.png" alt="graphic image of a cat typing on a keyboard">
                </div>
            </section>

            <!-- contact form -->
            <section class="contact-form xl:w-1/2">
                <div class="relative z-20">
                    <h2>Contact Form</h2>
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
        </div>
    </div>
</main><!-- #main -->

<?php
get_footer();
?>
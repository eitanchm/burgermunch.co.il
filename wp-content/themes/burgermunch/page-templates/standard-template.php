<?php

/**
 * Template Name: Standard Page Template
 * 
 * Template for the menu page, custom layouts and design.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>

<!-- Start page title section -->

<section class="page-title-section">
    <h2 class="page-title"><?php wp_title(''); ?></h2>
    <img src="<?php echo get_template_directory_uri(); ?>/img/burger-background.png"
        alt="small-repeated-hamburger-background" class="burger-background" />
</section>

<!-- End page title section -->

<div class="wrapper" id="page-wrapper">

    <div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

        <div class="row row-align-center">

            <main class="site-main" id="main">

                <?php
                while (have_posts()) {
                    the_post();
                    get_template_part('loop-templates/content', 'page');
                }
                ?>

            </main><!-- #main -->

        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
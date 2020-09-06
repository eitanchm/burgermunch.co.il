<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<div class="footer-wrapper">
    <div class="footer-top">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="footer-link">
            <img src="<?php echo get_template_directory_uri(); ?>/img/burger-icon.png" alt="site-icon"
                class="footer-icon" />
        </a>
    </div>
    <div class="footer-bottom"></div>
</div>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
<?php

/**
 * Template Name: Home
 *
 * Template for the home page
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>

<section class="home-main-carousel">
    <div class="home-banner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/home-banner.jpg" alt="" class="banner-img" />
    </div>
</section>

<?php
get_footer();
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

<section class="home-card-section row">
    <div class="card brown-card col-sm4">
        <i class="fas fa-hamburger card-icon"></i>
    </div>
    <div class="card yellow-card col-sm4">
        <i class="fas fa-hamburger card-icon"></i>
    </div>
    <div class="card brown-card col-sm4">
        <i class="fas fa-hamburger card-icon"></i>
    </div>
    <div class="card yellow-card col-sm4">
        <i class="fas fa-hamburger card-icon"></i>
    </div>
</section>

<?php
get_footer();
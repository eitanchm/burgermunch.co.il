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
    <a href="/תפריט" class="card-link">
        <div class="card brown-card col-sm4">
            <i class="fa fa-check-circle card-icon"></i>
            <div class="text-wrap">
                <h3 class="card-text">תפריט</h3>
                <div class="div-line"></div>
                <h3 class="card-text">MENU</h3>
            </div>
        </div>
    </a>
    <a href="/תפריט" class="card-link">
        <div class="card yellow-card col-sm4">
            <i class="fa fa-check-circle card-icon"></i>
            <div class="text-wrap">
                <h3 class="card-text">משלוחים</h3>
                <div class="div-line"></div>
                <h3 class="card-text">DELIVERY</h3>
            </div>
        </div>
    </a>
    <a href="/תפריט" class="card-link">
        <div class="card brown-card col-sm4">
            <i class="fa fa-check-circle card-icon"></i>
            <div class="text-wrap">
                <h3 class="card-text">מאנץ' חדש</h3>
                <div class="div-line"></div>
                <h3 class="card-text">NEW MUNCH</h3>
            </div>
        </div>
    </a>
    <a href="/תפריט" class="card-link">
        <div class="card yellow-card col-sm4">
            <i class="fa fa-check-circle card-icon"></i>
            <div class="text-wrap">
                <h3 class="card-text">מועדון</h3>
                <div class="div-line"></div>
                <h3 class="card-text">CLUB</h3>
            </div>
        </div>
    </a>
</section>

<?php
get_footer();
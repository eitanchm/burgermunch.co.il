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

<!-- Start home main image carousel -->

<section class="home-main-carousel">
    <div class="home-banner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/home-banner.jpg" alt="" class="banner-img" />
    </div>
</section>

<!-- End home main image carousel -->

<!-- Start home card section row -->

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
    <a href="/צור-קשר" class="card-link">
        <div class="card yellow-card col-sm4">
            <i class="fa fa-check-circle card-icon"></i>
            <div class="text-wrap">
                <h3 class="card-text">משלוחים</h3>
                <div class="div-line"></div>
                <h3 class="card-text">DELIVERY</h3>
            </div>
        </div>
    </a>
    <a href="/החדשים" class="card-link">
        <div class="card brown-card col-sm4">
            <i class="fa fa-check-circle card-icon"></i>
            <div class="text-wrap">
                <h3 class="card-text">מאנץ' חדש</h3>
                <div class="div-line"></div>
                <h3 class="card-text">NEW MUNCH</h3>
            </div>
        </div>
    </a>
    <a href="/צור-קשר" class="card-link">
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

<!-- End home card section row -->

<!-- Start home restaurant branch section -->

<section class="home-branches-section">
    <div class="container-branches">
        <a href="/סניפים" class="card-link">
            <div class="circle-branches-button">
                <p class="top-text">סניפים</p>
                <br />
                <p class="bottom-text">למסעדות לחץ כאן</p>
            </div>
        </a>
    </div>
</section>

<!-- End home restaurant branch section -->

<?php
get_footer();
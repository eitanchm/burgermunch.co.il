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
        <div class="card col-sm4">
            <img src="<?php echo get_template_directory_uri(); ?>/img/menu.png" alt="">
        </div>
    </a>
    <a href="/צור-קשר" class="card-link">
        <div class="card col-sm4">
            <img src="<?php echo get_template_directory_uri(); ?>/img/deliveries.png" alt="">
        </div>
    </a>
    <a href="/החדשים" class="card-link">
        <div class="card col-sm4">
            <img src="<?php echo get_template_directory_uri(); ?>/img/new-munch.png" alt="">
        </div>
    </a>
    <a href="/צור-קשר" class="card-link">
        <div class="card col-sm4">
            <img src="<?php echo get_template_directory_uri(); ?>/img/club.png" alt="">
        </div>
    </a>
</section>

<!-- End home card section row -->

<!-- Start home restaurant branch section -->

<section class="home-branches-section">
    <div class="container-branches">
        <a href="/סניפים" class="card-link">
            <p class="top-text">סניפים</p>
            <p class="bottom-text">למסעדות לחץ כאן</p>
        </a>
    </div>
</section>

<!-- End home restaurant branch section -->

<!-- Start home join family section -->

<section class="home-join-family">
    <div class="headline-rows">
        <h3 class="top-row">רוצה להיות</h3>
        <h3 class="middle-row">חלק ממשפחת</h3>
        <h3 class="bottom-row">בורגר מאנץ'?</h3>
    </div>
    <a href="#" class="join-button">להצטרפות</a>
    <img src="<?php echo get_template_directory_uri(); ?>/img/burger-background.png"
        alt="small-repeated-hamburger-background" class="burger-background" />
</section>

<!-- End home join family section -->

<!-- Start home join club section -->

<section class="home-join-club">
    <div class="left-column">
        <div class="headline-rows">
            <h3 class="top-row">רוצה להיות</h3>
            <h3 class="middle-row">חבר מועדון</h3>
            <h3 class="bottom-row">בורגר מאנץ'?</h3>
        </div>
        <a href="#" class="join-button">להצטרפות</a>
    </div>
    <div class="right-column">
        <img src="<?php echo get_template_directory_uri(); ?>/img/VIP.png" alt="" />
    </div>
</section>

<!-- End home join club section -->

<?php
get_footer();
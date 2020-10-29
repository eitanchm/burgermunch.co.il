<?php

/**
 * Template Name: Menu Page Template
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
    <h2 class="page-title">תפריט</h2>
    <img src="<?php echo get_template_directory_uri(); ?>/img/burger-background.png"
        alt="small-repeated-hamburger-background" class="burger-background" />
</section>

<!-- End page title section -->

<!-- Start delivery number section -->

<section class="delivery-number-section">
    <img src="<?php echo get_template_directory_uri(); ?>/img/delivery-number.png" alt="">
</section>

<!-- End delivery number section -->

<!-- Start menu section -->

<section class="restaurant-menu-section">
    <div class="menu-row">
        <div class="yellow-menu-circle menu-tab">
            <img src="<?php echo get_template_directory_uri(); ?>/img/menu-item-1.png" alt="" class="menu-image-1">
            <div class="burger-toppings">
                <div class="red-circle">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/burger-topping-1.png" alt="">
                </div>
                <div class="red-circle">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/burger-topping-2.png" alt="">
                </div>
                <div class="red-circle">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/burger-topping-3.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="menu-row reverse-row">
        <div class="brown-menu-circle menu-tab">
            <img src="<?php echo get_template_directory_uri(); ?>/img/menu-item-2.png" alt="" class="menu-image-2">
        </div>
    </div>
    <div class="menu-row">
        <div class="yellow-menu-circle menu-tab">
            <img src="<?php echo get_template_directory_uri(); ?>/img/menu-item-3.png" alt="" class="menu-image-3">
        </div>
    </div>
    <div class="menu-row reverse-row">
        <div class="brown-menu-circle menu-tab">
            <img src="<?php echo get_template_directory_uri(); ?>/img/menu-item-4.png" alt="" class="menu-image-4">
        </div>
    </div>
</section>

<!-- End menu section -->

<?php
get_footer();
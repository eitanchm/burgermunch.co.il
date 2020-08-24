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

<section class="page-title-section">
    <h2 class="page-title">תפריט</h2>
    <img src="<?php echo get_template_directory_uri(); ?>/img/burger-background.png"
        alt="small-repeated-hamburger-background" class="burger-background" />
</section>

<section class="delivery-number-section">
    <h2 class="delivery-number">למשלוחים חייגו>> <span class="red-text">*2395</span> </h2>
</section>

<?php
get_footer();
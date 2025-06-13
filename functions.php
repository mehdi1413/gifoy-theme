<?php
/**
 * The main template file
 * @package gifoy
 */
defined('ABSPATH') || exit;

// SETUP THEME
require_once __DIR__ . '/Inc/theme-setup/theme-setup.php';

// MANAGE THEME ALL ASSETS
require_once __DIR__ . '/Inc/manage-assets/register-assets.php';

// ADD CATEGORY META BOX FUNCTION
require_once __DIR__ . '/class/term-meta/CategoryTermMeta.php';


remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title');
add_action('woocommerce_shop_loop_item_title' , 'gifoy_woocommerce_template_loop_product_title' , 10);

function gifoy_woocommerce_template_loop_product_title(): void
{
    echo '<h3 class="product-title"><a href="'. get_the_permalink().'">' . get_the_title() . '</a></h3>';
}
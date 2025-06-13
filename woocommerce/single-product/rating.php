<?php
/**
 * Single Product Rating
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/rating.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

global $product;

if (!wc_review_ratings_enabled()) {
    return;
}

$rating_count = $product->get_rating_count();
$review_count = $product->get_review_count();
$average = $product->get_average_rating();

if ($rating_count > 0) : ?>
    <div class="shop-single-rating">
        <?php
        $average = $product->get_average_rating();
        for ($i = 1; $i <= 5; $i++) {
            if ($i <= floor($average)) {
                echo '<i class="fas fa-star"></i>';
            } elseif ($i - $average <= 0.5) {
                echo '<i class="fas fa-star-half-alt"></i>';
            } else {
                echo '<i class="far fa-star"></i>';
            }
        }
        ?>
        <?php if (comments_open()) : ?>
            (<?php printf(_n('%s customer review', '%s customer reviews', $review_count, 'woocommerce'), '<span class="rating-count">' . esc_html($review_count) . '</span>'); ?>)
        <?php endif ?>
    </div>

<?php endif; ?>

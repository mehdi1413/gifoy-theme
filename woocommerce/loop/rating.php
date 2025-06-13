<?php
/**
 * Loop Rating
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/rating.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

if (!defined('ABSPATH')) {
    exit;
}

global $product;

if (!wc_review_ratings_enabled()) {
    return;
}

$rating_count = $product->get_rating_count();
$review_count = $product->get_review_count();
$average = $product->get_average_rating();
if ($rating_count > 0) : ?>
    <div class="product-rate">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            if ($i <= floor($average)) {
                echo '<i class="fas fa-star"></i>';
            } elseif ($i - $average <= 0.5) {
                echo '<i class="fas fa-star-half-alt"></i>';
            } else {
                echo '<i class="far fa-star"></i>';
            }
        } ?>
    </div>
<?php endif;
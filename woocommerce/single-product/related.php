<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     9.6.0
 */

if (!defined('ABSPATH')) {
    exit;
}
$heading = apply_filters('woocommerce_product_related_products_heading', __('Related products', 'woocommerce'));

if ($related_products) : ?>
    <div class="related products product-area related-item pt-40">
        <div class="container px-0">
            <div class="row">
                <?php if ($heading) : ?>
                    <div class="col-12">
                        <div class="site-heading-inline rtl">
                            <span class="site-title"><?php echo esc_html($heading); ?></span>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php woocommerce_product_loop_start(); ?>

        <?php foreach ($related_products as $related_product) : ?>
            <?php
            $post_object = get_post($related_product->get_id());
            setup_postdata($GLOBALS['post'] = $post_object); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found
            wc_get_template_part('content', 'product');
            ?>
        <?php endforeach; ?>
        <?php woocommerce_product_loop_end(); ?>
    </div>
<?php
endif;

wp_reset_postdata();
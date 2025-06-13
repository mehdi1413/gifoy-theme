<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.4.0
 */

defined('ABSPATH') || exit;

global $product;

// Check if the product is a valid WooCommerce product and ensure its visibility before proceeding.
if (!is_a($product, WC_Product::class) || !$product->is_visible()) {
    return;
}
?>
<div <?php wc_product_class('col-md-6 col-lg-3', $product); ?>>
    <div class="product-item">
        <?php
        /**
         * Hook: woocommerce_before_shop_loop_item.
         *
         * @hooked woocommerce_template_loop_product_link_open - 10
         */
        //        do_action('woocommerce_before_shop_loop_item'); ?>
        <div class="product-img">
            <a href="<?php echo get_the_permalink(); ?>">
                <?php
                /**
                 * Hook: woocommerce_before_shop_loop_item_title.
                 *
                 * @hooked woocommerce_show_product_loop_sale_flash - 10
                 * @hooked woocommerce_template_loop_product_thumbnail - 10
                 */
                do_action('woocommerce_before_shop_loop_item_title'); ?>
            </a>
            <div class="product-action-wrap">
                <div class="product-action">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#quickview" data-tooltip="tooltip" aria-label="مشاهده سریع" data-bs-original-title="مشاهده سریع"><i class="far fa-eye"></i></a>
                    <a href="#" data-tooltip="tooltip" aria-label="اضافه به لیست علاقه مندی ها" data-bs-original-title="اضافه به لیست علاقه مندی ها"><i class="far fa-heart"></i></a>
                    <a href="#" data-tooltip="tooltip" aria-label="افزودن به مقایسه" data-bs-original-title="افزودن به مقایسه"><i class="far fa-arrows-repeat"></i></a>
                </div>
            </div>
        </div>
        <div class="product-content">
            <div class="product-info">
                <?php
                /**
                 * Hook: woocommerce_shop_loop_item_title.
                 *
                 * @hooked woocommerce_template_loop_product_title - 10
                 */
                do_action('woocommerce_shop_loop_item_title');
                /**
                 * Hook: woocommerce_after_shop_loop_item_title.
                 *
                 * @hooked woocommerce_template_loop_rating - 5
                 * @hooked woocommerce_template_loop_price - 10
                 */
                do_action('woocommerce_after_shop_loop_item_title'); ?>
            </div>
            <?php
            /**
             * Hook: woocommerce_after_shop_loop_item.
             *
             * @hooked woocommerce_template_loop_product_link_close - 5
             * @hooked woocommerce_template_loop_add_to_cart - 10
             */
            do_action('woocommerce_after_shop_loop_item');
            ?>
        </div>
    </div>
</div>

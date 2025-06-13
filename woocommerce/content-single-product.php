<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

defined('ABSPATH') || exit;

global $product;
$images = $product->get_gallery_image_ids();
/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('shop-single py-90', $product); ?>>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6 col-xxl-6">
                <div class="summary entry-summary shop-single-details shop-single-info rtl">
                    <?php
                    /**
                     * Hook: woocommerce_single_product_summary.
                     *
                     * @hooked woocommerce_template_single_title - 5
                     * @hooked woocommerce_template_single_rating - 10
                     * @hooked woocommerce_template_single_price - 10
                     * @hooked woocommerce_template_single_excerpt - 20
                     * @hooked woocommerce_template_single_add_to_cart - 30
                     * @hooked woocommerce_template_single_meta - 40
                     * @hooked woocommerce_template_single_sharing - 50
                     * @hooked WC_Structured_Data::generate_product_data() - 60
                     */
                    do_action('woocommerce_single_product_summary');
                    ?>
                    <div class="shop-single-action">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-12 col-xl-6">
                                <div class="shop-single-btn">
                                    <a href="#" class="theme-btn"><span class="far fa-shopping-bag"></span>اضافه به سبد خرید</a>
                                    <a href="#" class="theme-btn theme-btn2" data-tooltip="tooltip" title="اضافه به لیست علاقه مندی ها"><span class="far fa-heart"></span></a>
                                    <a href="#" class="theme-btn theme-btn2" data-tooltip="tooltip" title="افزودن به مقایسه"><span class="far fa-arrows-repeat"></span></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-12 col-xl-6">
                                <div class="shop-single-share">
                                    <span>اشتراک گذاری: </span>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-lg-6 col-xxl-5">
                <div class="shop-single-gallery">
                    <a class="shop-single-video popup-youtube" href="https://www.youtube.com/watch?v=ckHzmP1evNU"
                       data-tooltip="tooltip" title="تماشای ویدئو">
                        <i class="far fa-play"></i>
                    </a>
                    <div class="flexslider-thumbnails">
                        <ul class="slides">
                            <li data-thumb="<?php echo get_the_post_thumbnail_url($product->get_id()); ?>" rel="adjustX:10, adjustY:">
                                <img src="<?php echo get_the_post_thumbnail_url($product->get_id()); ?>" alt="#">
                            </li>
                            <?php
                            if (is_array($images) && !empty($images)):
                                foreach ($images as $image): ?>
                                    <li data-thumb="<?php echo wp_get_attachment_url($image); ?>">
                                        <img src="<?php echo wp_get_attachment_url($image); ?>" alt="#">
                                    </li>
                                <?php endforeach;
                            endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php
            /**
             * Hook: woocommerce_before_single_product_summary.
             *
             * @hooked woocommerce_show_product_sale_flash - 10
             * @hooked woocommerce_show_product_images - 20
             */
//            do_action('woocommerce_before_single_product_summary');
            ?>
        </div>
        <?php
        /**
         * Hook: woocommerce_after_single_product_summary.
         *
         * @hooked woocommerce_output_product_data_tabs - 10
         * @hooked woocommerce_upsell_display - 15
         * @hooked woocommerce_output_related_products - 20
         */
        do_action('woocommerce_after_single_product_summary');
        ?>
    </div>
</div>

<?php do_action('woocommerce_after_single_product'); ?>

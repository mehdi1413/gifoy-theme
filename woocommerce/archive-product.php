<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined('ABSPATH') || exit;

get_header('shop');

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action('woocommerce_before_main_content'); ?>

    <div class="shop-area py-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop-sidebar">
                        <div class="shop-widget">
                            <div class="shop-search-form">
                                <h4 class="shop-widget-title">جستجو</h4>
                                <form action="#">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="جستجو">
                                        <button type="search"><i class="far fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="shop-widget">
                            <h4 class="shop-widget-title">دسته بندی</h4>
                            <ul class="shop-category-list">
                                <li><a href="#">خانه و زندگی<span>(15)</span></a></li>
                                <li><a href="#">مراقبت از پوشاک<span>(23)</span></a></li>
                                <li><a href="#">جواهرات و لوازم جانبی<span>(35)</span></a></li>
                                <li><a href="#">هدایای مناسبتی<span>(46)</span></a></li>
                                <li><a href="#">دفتر و لوازم التحریر<span>(39)</span></a></li>
                                <li><a href="#">هدایای شخصی<span>(79)</span></a></li>
                                <li><a href="#">جعبه هدایا<span>(28)</span></a></li>
                                <li><a href="#">موارد دیگر<span>(25)</span></a></li>
                            </ul>
                        </div>
                        <div class="shop-widget">
                            <h4 class="shop-widget-title">برندها</h4>
                            <ul class="shop-checkbox-list">
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="brand1">
                                        <label class="form-check-label" for="brand1">توولا<span>(12)</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="brand2">
                                        <label class="form-check-label" for="brand2">ساندوی<span>(15)</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="brand3">
                                        <label class="form-check-label" for="brand3">هدایای ساهو<span>(20)</span></label></div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="brand4">
                                        <label class="form-check-label" for="brand4">کاسترلی<span>(05)</span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="brand5">
                                        <label class="form-check-label" for="brand5">هدایای اصلی<span>(09)</span></label></div>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-widget">
                            <h4 class="shop-widget-title">محدوده قیمت</h4>
                            <div class="price-range-box">
                                <div class="price-range-input">
                                    <input type="text" id="price-amount" readonly="">
                                </div>
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 10%; width: 30%;"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 10%;"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 40%;"></span>
                                </div>
                            </div>
                        </div>
                        <div class="shop-widget">
                            <h4 class="shop-widget-title">فروش</h4>
                            <ul class="shop-checkbox-list">
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="sale1">
                                        <label class="form-check-label" for="sale1">در فروش</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="sale2">
                                        <label class="form-check-label" for="sale2">موجود در انبار</label></div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="sale3">
                                        <label class="form-check-label" for="sale3">خارج از انبار</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="sale4">
                                        <label class="form-check-label" for="sale4">تخفیف</label></div>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-widget">
                            <h4 class="shop-widget-title">رتبه بندی</h4>
                            <ul class="shop-checkbox-list rating">
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="rate1">
                                        <label class="form-check-label" for="rate1">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="rate2">
                                        <label class="form-check-label" for="rate2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fal fa-star"></i>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="rate3">
                                        <label class="form-check-label" for="rate3">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fal fa-star"></i>
                                            <i class="fal fa-star"></i>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="rate4">
                                        <label class="form-check-label" for="rate4">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fal fa-star"></i>
                                            <i class="fal fa-star"></i>
                                            <i class="fal fa-star"></i>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="rate5">
                                        <label class="form-check-label" for="rate5">
                                            <i class="fas fa-star"></i>
                                            <i class="fal fa-star"></i>
                                            <i class="fal fa-star"></i>
                                            <i class="fal fa-star"></i>
                                            <i class="fal fa-star"></i>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-widget">
                            <h4 class="shop-widget-title">رنگ ها</h4>
                            <ul class="shop-checkbox-list color">
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="color1">
                                        <label class="form-check-label" for="color1"><span
                                                    style="background-color: #606ddd"></span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="color2">
                                        <label class="form-check-label" for="color2"><span
                                                    style="background-color: #4caf50"></span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="color3">
                                        <label class="form-check-label" for="color3"><span
                                                    style="background-color: #17a2b8"></span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="color4">
                                        <label class="form-check-label" for="color4"><span
                                                    style="background-color: #ffc107"></span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="color5">
                                        <label class="form-check-label" for="color5"><span
                                                    style="background-color: #f44336"></span></label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-widget">
                            <h4 class="shop-widget-title">سایزها</h4>
                            <ul class="shop-checkbox-list">
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="size1">
                                        <label class="form-check-label" for="size1">بسیار کوچک</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="size2">
                                        <label class="form-check-label" for="size2">کوچک</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="size3">
                                        <label class="form-check-label" for="size3">متوسط</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="size4">
                                        <label class="form-check-label" for="size4">بزرگ</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="size5">
                                        <label class="form-check-label" for="size5">فوق العاده بزرگ</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-widget-banner mt-30 mb-50">
                            <div class="banner-img"
                                 style="background-image:url(assets/img/banner/shop-banner.jpg)"></div>
                            <div class="banner-content">
                                <h6>دریافت <span>35% تخفیف</span></h6>
                                <h4>مجموعه جدید جعبه هدایا</h4>
                                <a href="#" class="theme-btn">اکنون خرید کنید</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <?php
                    /**
                     * Hook: woocommerce_shop_loop_header.
                     *
                     * @since 8.6.0
                     *
                     * @hooked woocommerce_product_taxonomy_archive_header - 10
                     */
                    do_action('woocommerce_shop_loop_header');
                    if (woocommerce_product_loop()) {

                        /**
                         * Hook: woocommerce_before_shop_loop.
                         *
                         * @hooked woocommerce_output_all_notices - 10
                         * @hooked woocommerce_result_count - 20
                         * @hooked woocommerce_catalog_ordering - 30
                         */
                        do_action('woocommerce_before_shop_loop');

                        woocommerce_product_loop_start();

                        if (wc_get_loop_prop('total')) {
                            while (have_posts()) {
                                the_post();
                                /**
                                 * Hook: woocommerce_shop_loop.
                                 */
                                do_action('woocommerce_shop_loop');

                                wc_get_template_part('content', 'product');
                            }
                        }

                        woocommerce_product_loop_end();
                        /**
                         * Hook: woocommerce_after_shop_loop.
                         *
                         * @hooked woocommerce_pagination - 10
                         */
                        do_action('woocommerce_after_shop_loop');
                    } else {
                        /**
                         * Hook: woocommerce_no_products_found.
                         *
                         * @hooked wc_no_products_found - 10
                         */
                        do_action('woocommerce_no_products_found');
                    }
                    ?>
                </div>
                <?php
                /**
                 * Hook: woocommerce_after_main_content.
                 *
                 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                 */
                do_action('woocommerce_after_main_content'); ?>
            </div>
        </div>
    </div>
<?php
/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
//do_action('woocommerce_sidebar');

get_footer('shop');

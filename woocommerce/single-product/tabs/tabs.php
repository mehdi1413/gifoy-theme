<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.6.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters('woocommerce_product_tabs', array());

if (!empty($product_tabs)) : ?>
    <div class="shop-single-details rtl">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <?php
                $first = true;
                foreach ($product_tabs as $key => $product_tab) : ?>
                    <button class="nav-link <?php echo $first ? 'active' : ''; ?>"
                            id="nav-<?php echo esc_attr($key); ?>" data-bs-toggle="tab"
                            data-bs-target="#<?php echo esc_attr($key); ?>" type="button" role="tab"
                            aria-controls="<?php echo esc_attr($key); ?>" aria-selected="true">
                        <?php echo wp_kses_post(apply_filters('woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key)); ?>
                    </button>
                    <?php
                    $first = false;
                endforeach; ?>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <?php
            $first = true;
            foreach ($product_tabs as $key => $product_tab) : ?>
                <div class="tab-pane fade <?php echo $first ? 'active show' : ''; ?>" id="<?php echo esc_attr($key); ?>"
                     role="tabpanel" aria-labelledby="nav-<?php echo esc_attr($key); ?>">
                    <?php
                    if (isset($product_tab['callback'])) {
                        call_user_func($product_tab['callback'], $key, $product_tab);
                    }
                    ?>
                </div>
                <?php
                $first = false;
            endforeach; ?>
        </div>
    </div>
<?php endif; ?>

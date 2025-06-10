<?php
/**
 * Shop breadcrumb
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/breadcrumb.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     2.3.0
 * @see         woocommerce_breadcrumb()
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!empty($breadcrumb)) : ?>
    <div class="site-breadcrumb rtl">
        <div class="site-breadcrumb-bg" style="background: url(<?php echo get_template_directory_uri() . '/assets/img/breadcrumb/01.jpg'; ?>)"></div>
        <div class="container">
            <div class="site-breadcrumb-wrap">
                <ul class="breadcrumb-menu">
                    <?php foreach ($breadcrumb as $key => $crumb) :
                        if ($key === 0) {
                            echo '<li><a href="' . esc_url($crumb[1]) . '"><i class="far fa-home"></i>' . esc_html($crumb[0]) . '</a></li>';;
                        } elseif (!empty($crumb[1]) && sizeof($breadcrumb) !== $key + 1) {
                            echo '<li><a href="' . esc_url($crumb[1]) . '">' . esc_html($crumb[0]) . '</a></li>';
                        } else {
                            echo '<li class="active">' . esc_html($crumb[0]) . '</li>';
                        }
                    endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
<?php endif;
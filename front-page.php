<?php
/**
 * The front page template file
 * @package gifoy
 */
defined('ABSPATH') || exit; ?>
<?php get_header(); ?>

    <!-- popup search -->
    <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" class="form-control" placeholder="جستجو..." required>
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- popup search end -->
<?php get_template_part('template/wrapper/wrapper-start.php'); ?>
<?php get_template_part('template/front-page/category-section'); ?>
<?php get_template_part('template/front-page/hero-section'); ?>
<?php get_template_part('template/front-page/feature-section'); ?>
<?php get_template_part('template/front-page/product-section'); ?>
<?php get_template_part('template/front-page/small-banner-section'); ?>
<?php get_template_part('template/front-page/trending-product-section'); ?>
<?php get_template_part('template/front-page/video-section'); ?>
<?php get_template_part('template/front-page/popular-product-section'); ?>
<?php get_template_part('template/front-page/big-banner-section'); ?>
<?php get_template_part('template/front-page/fact-section'); ?>
<?php get_template_part('template/front-page/deal-section'); ?>
<?php get_template_part('template/front-page/about-section'); ?>
<?php get_template_part('template/front-page/choose-section'); ?>
<?php get_template_part('template/front-page/gallery-section'); ?>
<?php get_template_part('template/front-page/testimonial-section'); ?>
<?php get_template_part('template/front-page/blog-section'); ?>
<?php get_template_part('template/front-page/newsletter-section'); ?>
<?php get_template_part('template/front-page/brand-section'); ?>
<?php get_template_part('template/wrapper/wrapper-end.php'); ?>
<?php get_footer(); ?>
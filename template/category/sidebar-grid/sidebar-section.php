<?php
/**
 * The category sidebar section
 * @package gifoy
 */
defined('ABSPATH') || exit; ?>
<div class="col-lg-4 col-12">
    <aside class="sidebar rtl">
        <?php get_template_part('template/category/sidebar-grid/sidebar/search-section') ?>
        <?php get_template_part('template/category/sidebar-grid/sidebar/category-section') ?>
        <?php get_template_part('template/category/sidebar-grid/sidebar/latest-post-section') ?>
        <?php get_template_part('template/category/sidebar-grid/sidebar/share-section') ?>
        <?php get_template_part('template/category/sidebar-grid/sidebar/tag-section') ?>
    </aside>
</div>
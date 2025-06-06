<?php
/**
 * The single with sidebar layout template file
 * @package gifoy
 */
defined('ABSPATH') || exit; ?>
<div class="blog-area py-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-single-wrap">
                    <div class="blog-single-content">
                        <?php get_template_part('template/single/single-sidebar/post-thumbnail') ?>
                        <div class="blog-info rtl">
                            <?php get_template_part('template/single/single-sidebar/post-meta') ?>
                            <?php get_template_part('template/single/single-sidebar/post-content') ?>
                            <?php get_template_part('template/single/single-sidebar/post-author') ?>
                        </div>
                        <?php get_template_part('template/single/single-sidebar/post-comment') ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar rtl">
                    <?php get_template_part('template/single/single-sidebar/sidebar/search-section') ?>
                    <?php get_template_part('template/single/single-sidebar/sidebar/category-section') ?>
                    <?php get_template_part('template/single/single-sidebar/sidebar/recent-post-section') ?>
                    <?php get_template_part('template/single/single-sidebar/sidebar/social-section') ?>
                    <?php get_template_part('template/single/single-sidebar/sidebar/tag-section') ?>
                </aside>
            </div>
        </div>
    </div>
</div>
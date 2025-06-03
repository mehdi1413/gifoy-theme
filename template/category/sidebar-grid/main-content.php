<?php
/**
 * The category sidebar grid main content section
 * @package gifoy
 */
defined('ABSPATH') || exit; ?>
<?php get_template_part('template/breadcrumb/breadcrumb'); ?>
<div class="blog-area py-100">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8 col-12">
                <?php get_template_part('loop/loop-card-sidebar'); ?>
                <?php get_template_part('template/pagination/pagination'); ?>
            </div>
            <?php get_template_part('template/category/sidebar-grid/sidebar-section'); ?>
        </div>
    </div>
</div>
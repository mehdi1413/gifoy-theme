<?php
/**
 * The category grid main content section
 * @package gifoy
 */
defined('ABSPATH') || exit; ?>
<?php get_template_part('template/breadcrumb/breadcrumb'); ?>
<div class="blog-area py-100">
    <div class="container">
        <?php get_template_part('template/category/grid/title-box'); ?>
        <?php get_template_part('loop/loop-card'); ?>
        <?php get_template_part('template/pagination/pagination'); ?>
    </div>
</div>
<?php
/**
 * The category page template file
 * @package gifoy
 */
defined('ABSPATH') || exit;
$term_id = 0;
if (is_category() && ($term = get_queried_object()) && isset($term->term_id)) {
    $term_id = $term->term_id;
}
$category_style = get_term_meta($term_id, '_category_style', true); ?>
<?php get_header(); ?>
<?php get_template_part('template/search/search-popup') ?>
<?php get_template_part('template/wrapper/wrapper-start'); ?>
<?php
if (isset($category_style) && $category_style === 'sidebar-grid'):
    get_template_part('template/category/sidebar-grid/main-content');
else:
    get_template_part('template/category/grid/main-content');
endif; ?>
<?php get_template_part('template/wrapper/wrapper-end'); ?>
<?php get_footer(); ?>
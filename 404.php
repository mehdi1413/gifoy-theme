<?php
/**
 * The 404 error page template file
 * @package gifoy
 */
defined('ABSPATH') || exit; ?>
<?php get_header(); ?>
<?php get_template_part('template/search/search-popup') ?>
<?php get_template_part('template/wrapper/wrapper-start'); ?>
<?php get_template_part('template/breadcrumb/breadcrumb'); ?>
<?php get_template_part('template/404/main-content'); ?>
<?php get_template_part('template/wrapper/wrapper-end'); ?>
<?php get_footer(); ?>

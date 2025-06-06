<?php
/**
 * The single page template file
 * @package gifoy
 */
defined('ABSPATH') || exit; ?>
<?php get_header(); ?>
<?php get_template_part('template/search/search-popup') ?>
<?php get_template_part('template/wrapper/wrapper-start'); ?>
<?php get_template_part('template/breadcrumb/breadcrumb'); ?>
<?php get_template_part('template/single/single-simple/main-content'); ?>
<?php get_template_part('template/wrapper/wrapper-end'); ?>
<?php get_footer(); ?>
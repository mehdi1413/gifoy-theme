<?php
/**
 * Template Name: Contact Page
 * Template Post Type: page
 * @package gifoy
 */
defined('ABSPATH') || exit; ?>
<?php get_header(); ?>
<?php get_template_part('template/search/search-popup') ?>
<?php get_template_part('template/wrapper/wrapper-start'); ?>
<?php get_template_part('template/breadcrumb/breadcrumb'); ?>
<?php get_template_part('page-templates/contact-inner/contact-section'); ?>
<?php get_template_part('page-templates/contact-inner/newsletter-section'); ?>
<?php get_template_part('page-templates/contact-inner/map-section'); ?>
<?php get_template_part('template/wrapper/wrapper-end'); ?>
<?php get_footer(); ?>
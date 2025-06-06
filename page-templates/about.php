<?php
/**
 * Template Name: About Page
 * Template Post Type: page
 * @package gifoy
 */
defined('ABSPATH') || exit; ?>
<?php get_header(); ?>
<?php get_template_part('template/search/search-popup') ?>
<?php get_template_part('template/wrapper/wrapper-start'); ?>
<?php get_template_part('template/breadcrumb/breadcrumb'); ?>
<?php get_template_part('page-templates/about-inner/about-section'); ?>
<?php get_template_part('page-templates/about-inner/counter-section'); ?>
<?php get_template_part('page-templates/about-inner/video-section'); ?>
<?php get_template_part('page-templates/about-inner/testimonial-section'); ?>
<?php get_template_part('page-templates/about-inner/team-section'); ?>
<?php get_template_part('page-templates/about-inner/feature-section'); ?>
<?php get_template_part('page-templates/about-inner/instagram-section'); ?>
<?php get_template_part('page-templates/about-inner/brand-section'); ?>
<?php get_template_part('template/wrapper/wrapper-end'); ?>
<?php get_footer(); ?>

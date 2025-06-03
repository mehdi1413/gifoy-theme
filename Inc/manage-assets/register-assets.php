<?php
defined('ABSPATH') || exit;

add_action('wp_enqueue_scripts' , 'gifoy_register_assets');


function gifoy_register_assets(): void
{
    // REGISTER CSS FILES
    wp_register_style('bootstrap-rtl',get_template_directory_uri() . '/assets/css/bootstrap.rtl.min.css' ,'','');
    wp_register_style('fontawesome',get_template_directory_uri() . '/assets/css/all-fontawesome.min.css' ,'','');
    wp_register_style('animate',get_template_directory_uri() . '/assets/css/animate.min.css' ,'','','');
    wp_register_style('magnific-popup',get_template_directory_uri() . '/assets/css/magnific-popup.min.css' ,'','');
    wp_register_style('owl-carousel',get_template_directory_uri() . '/assets/css/owl.carousel.min.css' ,'','');
    wp_register_style('jquery-ui',get_template_directory_uri() . '/assets/css/jquery-ui.min.css' ,'','');
    wp_register_style('nice-select',get_template_directory_uri() . '/assets/css/nice-select.min.css' ,'','');
    wp_register_style('flex-slider',get_template_directory_uri() . '/assets/css/flex-slider.min.css' ,'','');
    wp_register_style('style',get_stylesheet_directory_uri() . '/style.css' ,'','');
    wp_register_style('rtl',get_template_directory_uri() . '/assets/css/rtl.css' ,'','');

    wp_enqueue_style('bootstrap-rtl');
    wp_enqueue_style('fontawesome');
    wp_enqueue_style('animate');
    wp_enqueue_style('magnific-popup');
    wp_enqueue_style('owl-carousel');
    wp_enqueue_style('jquery-ui');
    wp_enqueue_style('nice-select');
    wp_enqueue_style('flex-slider');
    wp_enqueue_style('style');
    wp_enqueue_style('rtl');

    // REGISTER JS FILES
	wp_register_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.min.js', '', '5.0.2', true );
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', '', '5.0.2', true );
    wp_register_script( 'imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', '', '5.0.2', true );
    wp_register_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', ['jquery'], '5.0.2', true );
    wp_register_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', '', '5.0.2', true );
    wp_register_script( 'appear', get_template_directory_uri() . '/assets/js/jquery.appear.min.js', ['jquery'], '5.0.2', true );
    wp_register_script( 'easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', ['jquery'], '5.0.2', true );
    wp_register_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', '', '5.0.2', true );
    wp_register_script( 'counter', get_template_directory_uri() . '/assets/js/counter-up.js', '', '5.0.2', true );
    wp_register_script( 'jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', ['jquery'], '5.0.2', true );
    wp_register_script( 'nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', ['jquery'], '5.0.2', true );
    wp_register_script( 'countdown', get_template_directory_uri() . '/assets/js/countdown.min.js', '', '5.0.2', true );
    wp_register_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', '', '5.0.2', true );
    wp_register_script( 'main', get_template_directory_uri() . '/assets/js/main.js', '', '5.0.2', true );
    wp_register_script( 'flex-slider', get_template_directory_uri() . '/assets/js/flex-slider.js', '', '', true );

    wp_enqueue_script('modernizr');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('imagesloaded');
    wp_enqueue_script('magnific-popup');
    wp_enqueue_script('isotope');
    wp_enqueue_script('appear');
    wp_enqueue_script('easing');
    wp_enqueue_script('owl-carousel');
    wp_enqueue_script('counter');
    wp_enqueue_script('jquery-ui');
    wp_enqueue_script('nice-select');
    wp_enqueue_script('countdown');
    wp_enqueue_script('wow');
    wp_enqueue_script('flex-slider');
    wp_enqueue_script('main');
}
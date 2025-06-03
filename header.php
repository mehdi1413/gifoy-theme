<?php
/**
* The header template file
* @package gifoy
*/
defined('ABSPATH') || exit; ?>
<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">
    <?php wp_head(); ?>
</head>
<body>
<!-- <?php get_template_part('template/header/preloader') ?> -->
<?php get_template_part('template/header/header') ?>

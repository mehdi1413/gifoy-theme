<?php
/**
 * The main template file
 * @package gifoy
 */
defined('ABSPATH') || exit;

// SETUP THEME
require_once __DIR__ . '/Inc/theme-setup/theme-setup.php';

// MANAGE THEME ALL ASSETS
require_once __DIR__ . '/Inc/manage-assets/register-assets.php';

// ADD CATEGORY META BOX FUNCTION
require_once __DIR__ . '/class/term-meta/CategoryTermMeta.php';
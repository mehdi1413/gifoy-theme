<?php
/**
 * The error page main content
 * @package gifoy
 */
defined('ABSPATH') || exit; ?>
<div class="error-area py-100 rtl">
    <div class="container">
        <div class="col-md-6 mx-auto">
            <div class="error-wrapper">
                <div class="error-img">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/error/01.png'; ?>" alt="not found image">
                </div>
                <h2>اوه... صفحه پیدا نشد!</h2>
                <p>صفحه‌ای که به دنبال آن هستید پیدا نشد، ممکن است که وجود نداشته باشد یا حذف شده باشد.</p>
                <a href="<?php echo esc_url(home_url()); ?>" class="theme-btn">
                    <i class="far fa-home"></i>
                    بازگشت به خانه
                </a>

            </div>
        </div>
    </div>
</div>
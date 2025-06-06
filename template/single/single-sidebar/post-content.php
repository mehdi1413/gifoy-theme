<?php
/**
 * The single with sidebar: post content section
 * @package gifoy
 */
defined('ABSPATH') || exit; ?>
<div class="blog-details">
    <?php the_content(); ?>
    <hr>
    <div class="blog-details-tags pb-20">
        <h5>تگ‌ها :</h5>
        <ul>
            <li><a href="#">فروشگاه</a></li>
            <li><a href="#">آنلاین</a></li>
            <li><a href="#">هدایا</a></li>
        </ul>
    </div>
</div>
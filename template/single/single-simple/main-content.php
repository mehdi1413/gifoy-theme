<?php
/**
 * The single simple layout template file
 * @package gifoy
 */
defined('ABSPATH') || exit; ?>
<div class="blog-single-area py-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xxl-9 mx-auto">
                <div class="blog-single-wrap">
                    <div class="blog-single-content">
                        <div class="blog-thumb-img">
                            <img src="assets/img/blog/single.jpg" alt="thumb">
                        </div>
                        <div class="blog-info rtl">
                            <?php get_template_part('template/single/single-simple/post-meta'); ?>
                            <?php get_template_part('template/single/single-simple/post-content'); ?>
                            <?php get_template_part('template/single/single-simple/post-author'); ?>
                            <?php get_template_part('template/single/single-simple/post-comment'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
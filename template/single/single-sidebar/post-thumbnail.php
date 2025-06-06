<?php
/**
 * The single simple: post thumbnail section
 * @package gifoy
 */
defined('ABSPATH') || exit; ?>

<div class="blog-thumb-img">
    <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('blog-full'); ?>
    <?php endif; ?>
</div>
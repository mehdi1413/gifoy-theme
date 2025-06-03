<?php
/**
 * The loop cart template file
 * @package gifoy
 */
defined('ABSPATH') || exit;

if (have_posts()): ?>
    <div class="row g-4">
        <?php while (have_posts()): the_post(); ?>
            <div class="col-md-6 col-lg-4">
                <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                    <?php if (has_post_thumbnail()): ?>
                        <div class="blog-item-img">
                            <?php the_post_thumbnail('blog-card'); ?>
                            <span class="blog-date"><i class="far fa-calendar-alt"></i><?php echo get_the_date(); ?></span>
                        </div>
                    <?php endif; ?>
                    <div class="blog-item-info rtl">
                        <div class="blog-item-meta">
                            <ul>
                                <li><a href="#"><i class="far fa-user-circle"></i> <?php echo get_the_author_meta('display_name',get_the_author_meta('ID')) ?></a>
                                </li>
                                <li><a href="#"><i class="far fa-comments"></i> 2.5k نظرات</a></li>
                            </ul>
                        </div>
                        <h4 class="blog-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h4>
                        <p>تغییرات زیادی در دسترس است که اکثر آنها دچار تغییرات تصادفی شده اند</p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
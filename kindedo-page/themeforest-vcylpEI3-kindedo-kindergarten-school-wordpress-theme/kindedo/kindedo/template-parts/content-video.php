<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kindedo
 */

$kindedo_video_url = function_exists('get_field') ? get_field('fromate_style') : NULL;
$categories = get_the_terms($post->ID, 'category');

$kindedo_blog_date = get_theme_mod('kindedo_blog_date', true);
$kindedo_blog_comments = get_theme_mod('kindedo_blog_comments', true);
$kindedo_blog_author = get_theme_mod('kindedo_blog_author', true);
$kindedo_blog_cat = get_theme_mod('kindedo_blog_cat', false);

if (is_single()) :
?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('ablog ablog-4 mb-50 format-video'); ?>>
        <?php if (has_post_thumbnail()) : ?>
            <div class="bd-blog-img position-relative">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('full', ['class' => 'img-responsive']); ?>
                </a>

                <?php if (!empty($kindedo_video_url)) : ?>
                    <a href="<?php print esc_url($kindedo_video_url); ?>" class="play-btn popup-video bd-pulse-btn"><i class="fas fa-play"></i></a>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <div class="ablog__text ablog__text4">
            <div class="bd-blog-meta mb-20">
                <ul>
                    <?php if (!empty($kindedo_blog_author)) : ?>
                        <li><a href="<?php print esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"> <i class="fas fa-user"></i> <?php print get_the_author(); ?></a></li>
                    <?php endif; ?>
                    <?php if (!empty($kindedo_blog_date)) : ?>
                        <li><i class="fas fa-calendar-days"></i> <?php the_time(get_option('date_format')); ?></li>
                    <?php endif; ?>

                    <?php if (!empty($kindedo_blog_comments)) : ?>
                        <li><a href="<?php comments_link(); ?>"> <i class="fa-solid fa-comment-dots"></i> <?php comments_number(); ?></a></li>
                    <?php endif; ?>
                </ul>
            </div>

            <h4 class="bd-blog-details-title mb-25">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h4>

            <div class="post-text mb-20">
                <?php the_content(); ?>
                <?php
                wp_link_pages([
                    'before'      => '<div class="page-links">' . esc_html__('Pages:', 'kindedo'),
                    'after'       => '</div>',
                    'link_before' => '<span class="page-number">',
                    'link_after'  => '</span>',
                ]);
                ?>
            </div>
            <?php print kindedo_get_tag(); ?>
        </div>
    </article>

<?php
else : ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('bd-blog mb-50 format-video'); ?> data-wow-delay=".3s">
        <?php if (has_post_thumbnail()) : ?>
            <div class="bd-blog-img m-img position-relative">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('full', ['class' => 'img-responsive']); ?>
                </a>

                <?php if (!empty($kindedo_video_url)) : ?>
                    <a href="<?php print esc_url($kindedo_video_url); ?>" class="play-btn bd-pulse-btn popup-video"><i class="fas fa-play"></i></a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="bd-blog-text">
            <div class="bd-blog-meta bd-blog-meta-2 mb-20">
                <ul>
                    <?php if (!empty($kindedo_blog_author)) : ?>
                        <li><a href="<?php print esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"> <i class="fas fa-user"></i> <?php print get_the_author(); ?></a></li>
                    <?php endif; ?>
                    <?php if (!empty($kindedo_blog_date)) : ?>
                        <li><i class="fas fa-calendar-days"></i> <?php the_time(get_option('date_format')); ?></li>
                    <?php endif; ?>

                    <?php if (!empty($kindedo_blog_comments)) : ?>
                        <li><a href="<?php comments_link(); ?>"> <i class="fa-solid fa-comment-dots"></i> <?php comments_number(); ?></a></li>
                    <?php endif; ?>
                </ul>
            </div>

            <div class="bd-blog-content-3">
                <h4 class="bd-blog-title mb-25">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h4>

                <div class="post-text mb-35">
                    <?php the_excerpt(); ?>
                </div>

                <!-- blog btn -->
                <?php
                $kindedo_blog_btn = get_theme_mod('kindedo_blog_btn', 'Read More');
                $kindedo_blog_btn_switch = get_theme_mod('kindedo_blog_btn_switch', true);
                ?>

                <?php if (!empty($kindedo_blog_btn_switch)) : ?>
                    <div class="bd-blog-read-btn mt-30">
                        <a href="<?php the_permalink(); ?>" class="bd-btn">
                            <span class="bd-btn-inner">
                                <span class="bd-btn-normal"><?php print esc_html($kindedo_blog_btn); ?></span>
                                <span class="bd-btn-hover"><?php print esc_html($kindedo_blog_btn); ?></span>
                            </span>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </article>
<?php
endif; ?>
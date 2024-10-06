<?php
$author_data = get_the_author_meta('description', get_query_var('author'));
$author_info = get_the_author_meta('kindedo_write_by');
$facebook_url = get_the_author_meta('kindedo_facebook');
$twitter_url = get_the_author_meta('kindedo_twitter');
$linkedin_url = get_the_author_meta('kindedo_linkedin');
$instagram_url = get_the_author_meta('kindedo_instagram');
$kindedo_url = get_the_author_meta('kindedo_youtube');
$kindedo_write_by = get_the_author_meta('kindedo_write_by');
$author_bio_avatar_size = 150;
if ($author_data != '') :
?>
    <div class="blog__author d-md-flex white-bg mb-50">
        <div class="blog__author-thumb mb-25 mr-25">
            <a href="<?php print esc_url(get_author_posts_url(get_the_author_meta('ID'))) ?>">
                <?php print get_avatar(get_the_author_meta('user_email'), $author_bio_avatar_size, '', '', ['class' => 'media-object img-circle']); ?>
            </a>
        </div>

        <div class="blog__author-content mb-25">
            <h5><a href="<?php print esc_url(get_author_posts_url(get_the_author_meta('ID'))) ?>"><?php print get_the_author(); ?></a></h5>

            <?php if (!empty($author_info)) : ?>
                <span><?php print esc_html($author_info); ?></span>
            <?php endif; ?>

            <p><?php the_author_meta('description'); ?></p>

            <div class="blog__author-social">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

<?php endif; ?>
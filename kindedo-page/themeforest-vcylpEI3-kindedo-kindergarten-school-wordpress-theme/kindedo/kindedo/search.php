<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package kindedo
 */

get_header();

$blog_column = is_active_sidebar('blog-sidebar') ? 8 : 12;

?>

<div class="blog-area pt-120 pb-70">
	<div class="container container-box">
		<div class="row">
			<div class="col-lg-<?php print esc_attr($blog_column); ?> blog-post-items">
				<div class="blog__wrapper mr-25 mb-60">
					<?php
					if (have_posts()) :
					?>
						<div class="result-bar page-header d-none">
							<h1 class="page-title"><?php esc_html_e('Search Results For:', 'kindedo'); ?> <?php print get_search_query(); ?></h1>
						</div>
						<?php
						while (have_posts()) : the_post();
							get_template_part('template-parts/content', 'search');
						endwhile;
						?>
						<div class="basic-pagination basic-pagination-2 mb-40">
							<?php kindedo_pagination('<i class="fal fa-long-arrow-left"></i>', '<i class="fal fa-long-arrow-right"></i>', '', ['class' => '']); ?>
						</div>
					<?php
					else :
						get_template_part('template-parts/content', 'none');
					endif;
					?>
				</div>
			</div>
			<?php if (is_active_sidebar('blog-sidebar')) { ?>
				<div class="col-lg-4 sidebar-blog right-side">
					<?php get_sidebar(); ?>
				</div>
			<?php
			}
			?>
		</div>
	</div>
</div>

<?php
get_footer();

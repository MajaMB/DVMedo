<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kindedo
 */

get_header();
?>

<?php
$kindedo_404_bg = get_theme_mod('kindedo_404_bg', get_template_directory_uri() . '/assets/img/bg/error-404.svg"');
$kindedo_error_404_text = get_theme_mod('kindedo_error_404_text', __('404', 'kindedo'));
$kindedo_error_title = get_theme_mod('kindedo_error_title', __('Page not found', 'kindedo'));
$kindedo_error_link_text = get_theme_mod('kindedo_error_link_text', __('Back To Home', 'kindedo'));
$kindedo_error_desc = get_theme_mod('kindedo_error_desc', __('Oops! The page you are looking for does not exist. It might have been moved or deleted.', 'kindedo'));
?>

<section class="bd-erro-area pt-120 pb-120">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-xl-6">
            <div class="bd-section-title-wrapper mb-45">
               <h2 class="bd-section-title mb-0"><?php print esc_html($kindedo_error_title); ?></h2>
               <p><?php print esc_html($kindedo_error_desc); ?></p>
            </div>
            <div class="bd-error-btn">
               <a href="<?php print esc_url(home_url('/')); ?>" class="bd-btn">
                  <span class="bd-btn-inner">
                     <span class="bd-btn-normal d-flex align-items-center"><i class="flaticon-hut"></i><?php print esc_html($kindedo_error_link_text); ?></span>
                     <span class="bd-btn-hover d-flex align-items-center"><i class="flaticon-hut"></i><?php print esc_html($kindedo_error_link_text); ?></span>
                  </span>
               </a>
            </div>
         </div>
         <div class="col-xl-6">
            <div class="bd-error-thumb-wrapper">
               <div class="bd-error-thumb">
                  <img src="<?php echo esc_url($kindedo_404_bg); ?>" alt="<?php print esc_attr__('Error 404', 'kindedo'); ?>">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php
get_footer();

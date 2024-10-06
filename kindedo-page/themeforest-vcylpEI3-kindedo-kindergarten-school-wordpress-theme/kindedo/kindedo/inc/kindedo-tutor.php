<?php
// kindedo lesson
function kindedo_lesson()
{
   global $post, $authordata;

   $tutor_lesson_count = tutor_utils()->get_lesson_count_by_course(get_the_ID());

?>
   <div class="student-course-linkter">
      <div class="course-lessons">
         <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.3284 1.38804H8.45409V0.691006C8.4569 0.629498 8.44718 0.56806 8.42553 0.510405C8.40388 0.452749 8.37075 0.400072 8.32813 0.355555C8.28551 0.311038 8.23429 0.275605 8.17757 0.251397C8.12085 0.227189 8.05979 0.214708 7.9981 0.214708C7.93641 0.214708 7.87536 0.227189 7.81864 0.251397C7.76191 0.275605 7.7107 0.311038 7.66808 0.355555C7.62546 0.400072 7.59232 0.452749 7.57067 0.510405C7.54902 0.56806 7.53931 0.629498 7.54212 0.691006V1.38899H0.671586C0.551501 1.38898 0.43625 1.4362 0.350808 1.52041C0.265367 1.60463 0.216618 1.71906 0.215126 1.8389V12.9849C0.215126 13.1057 0.263217 13.2216 0.34882 13.307C0.434423 13.3925 0.550525 13.4405 0.671586 13.4405H5.15964L4.20514 15.0892C4.17284 15.1411 4.15131 15.1989 4.14184 15.2592C4.13237 15.3195 4.13515 15.3812 4.15001 15.4404C4.16488 15.4996 4.19152 15.5553 4.22836 15.604C4.26519 15.6528 4.31148 15.6936 4.36445 15.7242C4.41743 15.7547 4.47602 15.7743 4.53674 15.7818C4.59746 15.7893 4.65907 15.7846 4.71791 15.7678C4.77675 15.7511 4.83162 15.7227 4.87925 15.6844C4.92689 15.6461 4.96632 15.5986 4.9952 15.5448L6.21243 13.4405H7.54212V15.3175C7.54746 15.4346 7.59784 15.5451 7.68276 15.6261C7.76769 15.7071 7.88064 15.7523 7.9981 15.7523C8.11557 15.7523 8.22851 15.7071 8.31344 15.6261C8.39837 15.5451 8.44875 15.4346 8.45409 15.3175V13.4405H9.78378L11.001 15.5448C11.0299 15.5986 11.0693 15.6461 11.117 15.6844C11.1646 15.7227 11.2195 15.7511 11.2783 15.7678C11.3371 15.7846 11.3988 15.7893 11.4595 15.7818C11.5202 15.7743 11.5788 15.7547 11.6318 15.7242C11.6847 15.6936 11.731 15.6528 11.7679 15.604C11.8047 15.5553 11.8313 15.4996 11.8462 15.4404C11.8611 15.3812 11.8638 15.3195 11.8544 15.2592C11.8449 15.1989 11.8234 15.1411 11.7911 15.0892L10.8366 13.4405H15.3284C15.4495 13.4405 15.5656 13.3925 15.6512 13.307C15.7368 13.2216 15.7849 13.1057 15.7849 12.9849V1.8389C15.7836 1.71889 15.735 1.60422 15.6495 1.51981C15.564 1.43539 15.4486 1.38804 15.3284 1.38804ZM14.8719 2.29825V10.6976H1.1271V2.29825H14.8719ZM14.8719 12.5293H1.1271V11.6087H14.8691L14.8719 12.5293Z" fill="#00bbae" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.54212 15.3175V13.4405H6.21243L4.9952 15.5448C4.96632 15.5986 4.92689 15.6461 4.87925 15.6844C4.83162 15.7227 4.77675 15.7511 4.71791 15.7678C4.65907 15.7846 4.59746 15.7893 4.53674 15.7818C4.47602 15.7743 4.41743 15.7547 4.36445 15.7242C4.31148 15.6936 4.26519 15.6528 4.22836 15.604C4.19152 15.5553 4.16488 15.4996 4.15001 15.4404C4.13515 15.3812 4.13237 15.3195 4.14184 15.2592C4.15131 15.1989 4.17284 15.1411 4.20514 15.0892L5.15964 13.4405H0.671586C0.550525 13.4405 0.434423 13.3925 0.34882 13.307C0.263217 13.2216 0.215126 13.1057 0.215126 12.9849V1.8389C0.216618 1.71906 0.265367 1.60463 0.350808 1.52041C0.43625 1.4362 0.551501 1.38898 0.671586 1.38899H7.54212V0.691006C7.53931 0.629498 7.54902 0.56806 7.57067 0.510405C7.59232 0.452749 7.62546 0.400072 7.66808 0.355555C7.7107 0.311038 7.76191 0.275605 7.81864 0.251397C7.87536 0.227189 7.93641 0.214708 7.9981 0.214708C8.05979 0.214708 8.12085 0.227189 8.17757 0.251397C8.23429 0.275605 8.28551 0.311038 8.32813 0.355555C8.37075 0.400072 8.40388 0.452749 8.42553 0.510405C8.44718 0.56806 8.4569 0.629498 8.45409 0.691006V1.38804H15.3284C15.4486 1.38804 15.564 1.43539 15.6495 1.51981C15.735 1.60422 15.7836 1.71889 15.7849 1.8389V12.9849C15.7849 13.1057 15.7368 13.2216 15.6512 13.307C15.5656 13.3925 15.4495 13.4405 15.3284 13.4405H10.8366L11.7911 15.0892C11.8234 15.1411 11.8449 15.1989 11.8544 15.2592C11.8638 15.3195 11.8611 15.3812 11.8462 15.4404C11.8313 15.4996 11.8047 15.5553 11.7679 15.604C11.731 15.6528 11.6847 15.6936 11.6318 15.7242C11.5788 15.7547 11.5202 15.7743 11.4595 15.7818C11.3988 15.7893 11.3371 15.7846 11.2783 15.7678C11.2195 15.7511 11.1646 15.7227 11.117 15.6844C11.0693 15.6461 11.0299 15.5986 11.001 15.5448L9.78378 13.4405H8.45409V15.3175C8.44875 15.4346 8.39837 15.5451 8.31344 15.6261C8.22851 15.7071 8.11557 15.7523 7.9981 15.7523C7.88064 15.7523 7.76769 15.7071 7.68276 15.6261C7.59784 15.5451 7.54746 15.4346 7.54212 15.3175ZM8.66922 13.6552V15.3272C8.66135 15.4996 8.58702 15.6622 8.46206 15.7814C8.3371 15.9005 8.17093 15.967 7.9981 15.967C7.82528 15.967 7.6591 15.9005 7.53415 15.7814C7.40919 15.6622 7.33508 15.4995 7.32721 15.3272L7.32677 15.3175L7.32699 13.6552H6.33663L5.18307 15.6494C5.14074 15.7273 5.08336 15.796 5.01425 15.8516C4.94417 15.908 4.86344 15.9497 4.77687 15.9743C4.6903 15.999 4.59965 16.006 4.51032 15.9949C4.42098 15.9839 4.33478 15.955 4.25683 15.9101C4.17889 15.8652 4.1108 15.805 4.0566 15.7333C4.0024 15.6616 3.9632 15.5797 3.94133 15.4925C3.91947 15.4054 3.91538 15.3147 3.92931 15.226C3.94305 15.1385 3.97402 15.0546 4.02044 14.9791L4.78688 13.6552H0.671586C0.493471 13.6552 0.32265 13.5846 0.196703 13.4589C0.0707562 13.3332 0 13.1627 0 12.9849V1.83623C0.00219478 1.65991 0.0739353 1.49155 0.199645 1.36765C0.325351 1.24374 0.494913 1.17427 0.671586 1.17428C0.671592 1.17428 0.671581 1.17428 0.671586 1.17428H7.32699V0.695424C7.32365 0.606718 7.33801 0.518214 7.36923 0.435056C7.40108 0.350227 7.44984 0.272724 7.51254 0.207227C7.57524 0.14173 7.6506 0.0895976 7.73406 0.0539803C7.81751 0.0183632 7.90734 0 7.9981 0C8.08887 0 8.17869 0.0183632 8.26215 0.0539803C8.34561 0.0895972 8.42096 0.141729 8.48367 0.207227C8.54637 0.272724 8.59512 0.350228 8.62698 0.435056C8.6582 0.518213 8.67255 0.606717 8.66922 0.695424V1.17333H15.3284C15.5053 1.17333 15.6751 1.24299 15.8008 1.3672C15.9266 1.4914 15.9981 1.66011 16 1.83668L16 1.8389L16 12.9849C16 13.1627 15.9292 13.3332 15.8033 13.4589C15.6773 13.5846 15.5065 13.6552 15.3284 13.6552H11.2093L11.9758 14.9791C12.0222 15.0545 12.0532 15.1385 12.0669 15.226C12.0808 15.3147 12.0767 15.4054 12.0549 15.4925C12.033 15.5797 11.9938 15.6616 11.9396 15.7333C11.8854 15.805 11.8173 15.8652 11.7394 15.9101C11.6614 15.955 11.5752 15.9839 11.4859 15.9949C11.3966 16.006 11.3059 15.999 11.2193 15.9743C11.1328 15.9497 11.052 15.908 10.982 15.8516C10.9128 15.796 10.8555 15.7273 10.8131 15.6494L9.65957 13.6552H8.66922ZM14.6568 10.4829V2.51295H1.34223V10.4829H14.6568ZM14.8719 12.5293L14.8691 11.6087H1.1271V12.5293H14.8719ZM14.6562 12.3146L14.6546 11.8234H1.34223V12.3146H14.6562ZM14.8719 2.29825H1.1271V10.6976H14.8719V2.29825Z" fill="#00bbae" />
         </svg>
         <span class="ms-1">
            <?php print esc_html($tutor_lesson_count); ?>
            <?php print esc_html__('Lessons', 'kindedo'); ?>
         </span>
      </div>
      <div class="course__student-info">
         <span class="me-1"><i class="far fa-user"></i></span> <?php echo (int) tutor_utils()->count_enrolled_users_by_course(); ?> <?php _e('Students', 'kindedo'); ?>
      </div>
      <div class="portfolio-price d-none">
         <?php
         $course_id = get_the_ID();
         $default_price = apply_filters('tutor-loop-default-price', __('Free', 'kindedo'));
         $price_html = '<span> ' . $default_price . '</span>';
         if (tutor_utils()->is_course_purchasable()) {
            $product_id = tutor_utils()->get_course_product_id($course_id);
            $product = wc_get_product($product_id);

            if ($product) {
               $price_html = '<span> ' . $product->get_price_html() . ' </span>';
            }
         }
         echo kindedo_kses_intermediate($price_html);
         ?>
      </div>
   </div>
<?php
}

add_action('kindedo_course_lesson', 'kindedo_lesson');

// kindedo course rating 
function kindedo_course_rating()
{
   global $post, $authordata;
   $trating_show = get_theme_mod('trating_show', true);
   $trating_count = get_theme_mod('trating_count', true);
?>
   <?php if (!empty($trating_show)) : ?>
      <div class="course-icon d-flex align-items-center">
         <?php
         $course_rating = tutor_utils()->get_course_rating();
         tutor_utils()->star_rating_generator($course_rating->rating_avg);
         ?>
         <?php if (!empty($trating_count)) : ?>
            <span class="tutor-single-rating-count">
               <?php echo '(' . kindedo_kses_intermediate($course_rating->rating_count) . ')'; ?>
            </span>
         <?php endif; ?>
      </div>
   <?php endif; ?>
<?php
}

add_action('kindedo_course_rating_info', 'kindedo_course_rating');

// kindedo instructor
function kindedo_instructor()
{
   global $post, $authordata;

   $profile_url = tutor_utils()->profile_url($authordata->ID);

   $course_rating = tutor_utils()->get_course_rating();

?>

   <div class="portfolio-user-content mt-20">
      <div class="portfolio-user">
         <div class="course__teacher-thumb mr-10">
            <?php echo get_avatar(get_the_author_meta('ID'), 32) ?>
         </div>
         <h6><a href="<?php echo esc_url($profile_url); ?>"> by <?php echo get_the_author_meta('display_name', get_the_author_meta('ID')); ?></a></h6>
      </div>
   </div>

<?php
}

add_action('kindedo_course_instructor', 'kindedo_instructor');

// kindedo footer
function kindedo_course_footer()
{
   global $post, $authordata;

   $profile_url = tutor_utils()->profile_url($authordata->ID);

?>
   <div class="course__more d-flex justify-content-between align-items-center mt-20">
      <div class="portfolio-price">
         <?php
         $course_id = get_the_ID();
         $default_price = apply_filters('tutor-loop-default-price', __('Free', 'kindedo'));
         $price_html = '<span> ' . $default_price . '</span>';
         if (tutor_utils()->is_course_purchasable()) {
            $product_id = tutor_utils()->get_course_product_id($course_id);
            $product = wc_get_product($product_id);

            if ($product) {
               $price_html = '<span> ' . $product->get_price_html() . ' </span>';
            }
         }
         echo kindedo_kses_intermediate($price_html);
         ?>
      </div>
      <div class="course__btn">
         <a href="<?php the_permalink(); ?>" class="course__btn-link">
            <?php _e('Learn More', 'kindedo'); ?>
            <i class="fa-solid fa-angle-right"></i>
         </a>
      </div>
   </div>
<?php
}

add_action('kindedo_course_footer_down', 'kindedo_course_footer');

// kindedo footer
function kindedo_course_enroll_info()
{
   global $post, $authordata;

   $profile_url = tutor_utils()->profile_url($authordata->ID);
   $tutor_lesson_count = tutor_utils()->get_lesson_count_by_course(get_the_ID());

   $disable_course_duration = get_tutor_option('disable_course_duration');
   $disable_total_enrolled = get_tutor_option('disable_course_total_enrolled');
   $disable_update_date = get_tutor_option('disable_course_update_date');
   $course_duration = get_tutor_course_duration_context();
   $disable_course_level = get_tutor_option('disable_course_level');
   $disable_course_share = get_tutor_option('disable_course_share');
?>
   <div class="course__video-content">
      <ul>
         <li class="d-flex align-items-center">
            <div class="course__video-info">
               <p><span><?php _e('Instructor :', 'kindedo'); ?></span> <?php echo get_the_author_meta('display_name', get_the_author_meta('ID')); ?></p>
            </div>
         </li>

         <?php if (!$disable_course_level) : ?>
            <li class="d-flex align-items-center">
               <div class="course__video-info">
                  <p><span><?php _e('Level :', 'kindedo'); ?></span> <?php echo get_tutor_course_level(); ?></p>
               </div>
            </li>
         <?php endif; ?>

         <li class="d-flex align-items-center">
            <div class="course__video-info">
               <p><span><?php _e('Lessons :', 'kindedo'); ?></span> <?php print esc_html($tutor_lesson_count); ?></p>
            </div>
         </li>

         <?php if (!empty($course_duration) && !$disable_course_duration) : ?>
            <li class="d-flex align-items-center">
               <div class="course__video-info">
                  <p><span><?php _e('Duration :', 'kindedo'); ?></span> <?php echo $course_duration; ?></p>
               </div>
            </li>
         <?php endif; ?>

         <?php if (!$disable_total_enrolled) : ?>
            <li class="d-flex align-items-center">
               <div class="course__video-info">
                  <p><span><?php _e('Enrolled :', 'kindedo'); ?></span> <?php echo (int) tutor_utils()->count_enrolled_users_by_course(); ?> <?php _e('Students', 'kindedo'); ?></p>
               </div>
            </li>
         <?php endif; ?>

         <?php if (!$disable_course_share) : ?>
            <li class="d-flex align-items-center mt-40">
               <div class="course__video-icon">
                  <i class="fas fa-share-alt"></i>
               </div>
               <div class="course__share-info d-flex align-items-center">
                  <?php
                  $tutor_social_share_icons = tutor_utils()->tutor_social_share_icons();
                  $share_config = array(
                     'title' => get_the_title(),
                     'text'  => get_the_excerpt(),
                     'image' => get_tutor_course_thumbnail('post-thumbnail', true),
                  );
                  ?>
                  <div class="tutor-social-share-wrap" data-social-share-config="<?php echo esc_attr(json_encode($share_config)); ?>">
                     <?php
                     foreach ($tutor_social_share_icons as $icon) {
                        echo '<button class="tutor_share ' . $icon['share_class'] . '"> ' .
                           $icon['icon_html'] .
                           ' </button>';
                     }
                     ?>
                  </div>
               </div>
            </li>
         <?php endif; ?>
      </ul>
   </div>
<?php
}

add_action('kindedo_course_enroll_info_list', 'kindedo_course_enroll_info');

// kindedo single tab
function kindedo_course_info_tab()
{
   global $post, $authordata;
   $course_tags = get_tutor_course_tags();
   $disable_course_share = get_tutor_option('disable_course_share');
   $kindedo_tutor_course_desc_tab_switch = get_theme_mod('kindedo_tutor_course_desc_tab_switch', true);
   $kindedo_tutor_course_curriculum_tab_switch = get_theme_mod('kindedo_tutor_course_curriculum_tab_switch', true);
   $kindedo_tutor_course_reviews_tab_switch = get_theme_mod('kindedo_tutor_course_reviews_tab_switch', true);
   $kindedo_tutor_course_instructor_tab_switch = get_theme_mod('kindedo_tutor_course_instructor_tab_switch', true);
?>
   <div class="course__tab-2 mb-45">
      <ul class="nav nav-tabs" id="courseTab" role="tablist">
         <?php if (!empty($kindedo_tutor_course_desc_tab_switch)): ?>
            <li class="nav-item" role="presentation">
               <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true"> <i class="icon_ribbon_alt"></i> <span><?php _e('Discription', 'kindedo'); ?></span> </button>
            </li>
         <?php endif; ?>

         <?php if (!empty($kindedo_tutor_course_curriculum_tab_switch)): ?>
            <li class="nav-item" role="presentation">
               <button class="nav-link " id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum" type="button" role="tab" aria-controls="curriculum" aria-selected="false"> <i class="icon_book_alt"></i> <span><?php _e('Curriculum', 'kindedo'); ?></span> </button>
            </li>
         <?php endif; ?>

         <?php if (!empty($kindedo_tutor_course_reviews_tab_switch)): ?>
            <li class="nav-item" role="presentation">
               <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false"> <i class="icon_star_alt"></i> <span><?php _e('Reviews', 'kindedo'); ?></span> </button>
            </li>
         <?php endif; ?>

         <?php if (!empty($kindedo_tutor_course_instructor_tab_switch)): ?>
            <li class="nav-item" role="presentation">
               <button class="nav-link" id="member-tab" data-bs-toggle="tab" data-bs-target="#member" type="button" role="tab" aria-controls="member" aria-selected="false"> <i class="fal fa-user"></i> <span><?php _e('Instructor', 'kindedo'); ?></span> </button>
            </li>
         <?php endif; ?>
      </ul>
   </div>
   <div class="course__tab-content mb-95">
      <div class="tab-content" id="courseTabContent">
         <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
            <div class="course__description">
               <?php tutor_course_content(); ?>
               <?php tutor_course_benefits_html(); ?>

               <?php if (is_array($course_tags) && count($course_tags)) : ?>
                  <div class="course__tag-2 mb-35 mt-35">
                     <i class="fal fa-tag"></i>
                     <?php
                     foreach ($course_tags as $course_tag) {
                        $tag_link = get_term_link($course_tag->term_id);
                        echo "<a href='$tag_link'> $course_tag->name<span>,</span> </a>";
                     }
                     ?>
                  </div>
               <?php endif; ?>


               <?php if (!$disable_course_share) : ?>
                  <div class="course__share">
                     <h3><?php _e('Share :', 'kindedo'); ?></h3>
                     <? php;
                     $tutor_social_share_icons = tutor_utils()->tutor_social_share_icons();
                     $share_config = array(
                        'title' => get_the_title(),
                        'text'  => get_the_excerpt(),
                        'image' => get_tutor_course_thumbnail('post-thumbnail', true),
                     );
                     ?>

                     <div class="tutor-social-share-wrap" data-social-share-config="<?php echo esc_attr(json_encode($share_config)); ?>">
                        <?php
                        foreach ($tutor_social_share_icons as $icon) {
                           echo '<button class="tutor_share ' . $icon['share_class'] . '"> ' .
                              $icon['icon_html'] .
                              ' </button>';
                        }
                        ?>
                     </div>
                  </div>

               <?php endif; ?>

            </div>
         </div>
         <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
            <div class="course__curriculum">
               <?php tutor_course_topics(); ?>
            </div>
         </div>
         <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
            <div class="course__review">
               <?php tutor_course_target_reviews_html(); ?>
               <?php tutor_course_target_review_form_html(); ?>
            </div>
         </div>
         <div class="tab-pane fade" id="member" role="tabpanel" aria-labelledby="member-tab">
            <div class="course__member mb-45">
               <?php tutor_course_instructors_html(); ?>
            </div>
         </div>



      </div>
   </div>
<?php
}

add_action('kindedo_course_info_tab_action', 'kindedo_course_info_tab');

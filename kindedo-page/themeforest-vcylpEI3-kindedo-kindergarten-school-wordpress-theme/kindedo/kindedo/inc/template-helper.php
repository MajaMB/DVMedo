<?php

/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package kindedo
 */

/**
 *
 * kindedo header
 */

add_action('kindedo_header_style', 'kindedo_header_default_style', 10);

// Header deafult
function kindedo_header_default_style()
{

    // Header Topbar
    $kindedo_topbar_phone = get_theme_mod('kindedo_topbar_phone', __('+88 0123 6985', 'kindedo'));
    $kindedo_topbar_email = get_theme_mod('kindedo_topbar_email', __('example@gmail.com', 'kindedo'));
    $kindedo_topbar_time = get_theme_mod('kindedo_topbar_time', __('8.00am-4.00pm', 'kindedo'));
    $kindedo_topbar_address = get_theme_mod('kindedo_topbar_address', __('14/A, Kilix Home Tower, NYC', 'kindedo'));
    $kindedo_topbar_address_link = get_theme_mod('kindedo_topbar_address_link', __('#', 'kindedo'));
    $kindedo_button_text = get_theme_mod('kindedo_button_text', __('Apply Now', 'kindedo'));
    $kindedo_button_link = get_theme_mod('kindedo_button_link', __('#', 'kindedo'));

    $kindedo_header_right = get_theme_mod('kindedo_header_right', false);
    $kindedo_topbar_switch = get_theme_mod('kindedo_topbar_switch', false);
    $kindedo_header_lang = get_theme_mod('kindedo_header_lang', false);
    $kindedo_search = get_theme_mod('kindedo_search', false);
?>

    <header>
        <div class="bd-header">
            <!-- header top area start  -->
            <?php if (!empty($kindedo_topbar_switch)) : ?>
                <div class="bd-header-top d-none d-lg-block p-relative">
                    <div class="bd-header-top-bg"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="bd-header-top-wrapper d-flex justify-content-between">
                                    <div class="bd-header-top-left">
                                        <div class="bd-header-meta-items d-flex align-items-center">
                                            <?php if (!empty($kindedo_topbar_email)) : ?>
                                                <div class="bd-header-meta-item d-flex align-items-center">
                                                    <div class="bd-header-meta-icon">
                                                        <i class="fas fa-envelope"></i>
                                                    </div>
                                                    <div class="bd-header-meta-text">
                                                        <p><a href="mailto:<?php print esc_attr($kindedo_topbar_email); ?>"><?php print esc_html($kindedo_topbar_email); ?></a></p>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if (!empty($kindedo_topbar_time)) : ?>
                                                <div class="bd-header-meta-item d-flex align-items-center">
                                                    <div class="bd-header-meta-icon">
                                                        <i class="fas fa-clock"></i>
                                                    </div>
                                                    <div class="bd-header-meta-text">
                                                        <p><?php print esc_html($kindedo_topbar_time); ?></p>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="bd-header-top-right d-flex align-items-center">
                                        <?php if (!empty($kindedo_topbar_address)) : ?>
                                            <div class="bd-header-meta-items">
                                                <div class="bd-header-meta-item d-flex align-items-center">
                                                    <div class="bd-header-meta-icon">
                                                        <i class="fas fa-map-marker-alt"></i>
                                                    </div>
                                                    <div class="bd-header-meta-text">
                                                        <p><a target="_blank" href="<?php print esc_url($kindedo_topbar_address_link); ?>"><?php print esc_html($kindedo_topbar_address); ?></a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($kindedo_header_lang)) : ?>
                                            <div class="bd-header-meta-items">
                                                <div class="cp-header-lang">
                                                    <div class="header__lang p-relative">
                                                        <a href="#"><span>English</span></a>
                                                        <?php kindedo_header_lang_defualt(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!-- header top area end -->

            <!-- header bottom area start -->
            <div class="bd-header-bottom">
                <div class="container">
                    <div class="mega-menu-wrapper p-relative">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="bd-header-logo pt-20 pb-20">
                                <?php kindedo_header_logo(); ?>
                            </div>
                            <?php if ($kindedo_header_right == false) : ?>
                                <div class="header-hamburger d-xl-none">
                                    <button type="button" class="hamburger-btn offcanvas-open-btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            <?php endif; ?>
                            <div class="d-none d-xl-block">
                                <div class="bd-main-menu d-none d-lg-flex align-items-center">
                                    <nav id="mobile-menu">
                                        <?php kindedo_header_menu(); ?>
                                    </nav>
                                    <?php if (!empty($kindedo_search)) : ?>
                                        <div class="bd-search-btn-wrapper d-none d-xxl-block">
                                            <button class="bd-search-open-btn">
                                                <i class="flaticon-search"></i>
                                            </button>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if (!empty($kindedo_header_right)) : ?>
                                <div class="bd-header-bottom-right d-flex justify-content-end align-items-center">
                                    <?php if (!empty($kindedo_topbar_phone)) : ?>
                                        <div class="bd-header-meta-item d-none bd-header-menu-meta d-xxl-flex align-items-center">
                                            <div class="bd-header-meta-icon">
                                                <i class="flaticon-phone-call"></i>
                                            </div>
                                            <div class="bd-header-meta-text">
                                                <p><a href="tel:<?php print esc_attr($kindedo_topbar_phone); ?>"><?php print esc_html($kindedo_topbar_phone); ?></a></p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($kindedo_button_text)) : ?>
                                        <div class="bd-header-btn d-none d-xxl-block">
                                            <a href="<?php print esc_url($kindedo_button_link); ?>" class="bd-btn">
                                                <span class="bd-btn-inner">
                                                    <span class="bd-btn-normal"><?php print esc_html($kindedo_button_text); ?></span>
                                                    <span class="bd-btn-hover"><?php print esc_html($kindedo_button_text); ?></span>
                                                </span>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <div class="header-hamburger">
                                        <button type="button" class="hamburger-btn offcanvas-open-btn">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header bottom area end -->
        </div>
    </header>

    <!-- Header Side Info -->
    <?php kindedo_mobile_info(); ?>
    <!--End Header Side Info -->

<?php
}


// kindedo_mobile_info
function kindedo_mobile_info()
{
    $kindedo_contact_info_hide = get_theme_mod('kindedo_contact_info_hide', false);
    $kindedo_side_info_social = get_theme_mod('kindedo_side_info_social', false);
    $kindedo_side_info_search_form = get_theme_mod('kindedo_side_info_search_form', false);
    $kindedo_about_info_hide = get_theme_mod('kindedo_about_info_hide', false);

    $kindedo_extra_contact_text = get_theme_mod('kindedo_extra_contact_text', __('Contact', 'kindedo'));
    $kindedo_topbar_address = get_theme_mod('kindedo_extra_address', __('12/A, Mirnada City Tower, NYC', 'kindedo'));
    $kindedo_extra_address_link = get_theme_mod('kindedo_extra_address_link', __('#', 'kindedo'));
    $kindedo_extra_email = get_theme_mod('kindedo_extra_email', __('support@mail.com', 'kindedo'));
    $kindedo_extra_phone = get_theme_mod('kindedo_extra_phone', __('326 222 666 00', 'kindedo'));
    $kindedo_extra_about_title = get_theme_mod('kindedo_extra_about_title', __('About Kindedo', 'kindedo'));
    $kindedo_extra_about_text = get_theme_mod('kindedo_extra_about_text', __('About Kindedo Text', 'kindedo'));
?>


    <div class="offcanvas__area">
        <div class="offcanvas__bg"></div>
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo logo">
                        <?php kindedo_header_logo(); ?>
                    </div>
                    <div class="offcanvas__close">
                        <button class="offcanvas__close-btn">
                            <i class="fa-thin fa-times"></i>
                        </button>
                    </div>
                </div>
                <?php if (!empty($kindedo_side_info_search_form)) : ?>
                    <div class="offcanvas__search mb-0">
                        <form method="get" action="<?php print esc_url(home_url('/')); ?>" class="filter-search-input">
                            <button type="submit"><i class="flaticon-search"></i></button>
                            <input type="search" name="s" value="<?php print esc_attr(get_search_query()) ?>" placeholder="<?php print esc_attr__('Search here', 'kindedo'); ?>">
                        </form>
                    </div>
                <?php endif; ?>
                <div class="mobile-menu fix mt-40"></div>
                <?php if (!empty($kindedo_about_info_hide)) : ?>
                    <div class="offcanvas__about d-none d-lg-block mt-30 mb-30">
                        <?php if (!empty($kindedo_extra_about_title)) : ?>
                            <h4><?php print esc_html($kindedo_extra_about_title); ?></h4>
                        <?php endif; ?>
                        <?php if (!empty($kindedo_extra_about_text)) : ?>
                            <p><?php print esc_html($kindedo_extra_about_text); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php if (!empty($kindedo_contact_info_hide)) : ?>
                    <div class="offcanvas__contact mt-30 mb-30">
                        <?php if (!empty($kindedo_extra_contact_text)) : ?>
                            <h4><?php print esc_html($kindedo_extra_contact_text); ?></h4>
                        <?php endif; ?>
                        <ul>
                            <?php if (!empty($kindedo_topbar_address)) : ?>
                                <li class="d-flex align-items-center gap-2">
                                    <div class="offcanvas__contact-icon">
                                        <a target="_blank" href="<?php print esc_url($kindedo_extra_address_link); ?>">
                                            <i class="fal fa-map-marker-alt"></i></a>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="<?php print esc_url($kindedo_extra_address_link); ?>"><?php print esc_html($kindedo_topbar_address); ?></a>
                                    </div>
                                </li>
                            <?php endif; ?>

                            <?php if (!empty($kindedo_extra_phone)) : ?>
                                <li class="d-flex align-items-center gap-2">
                                    <div class="offcanvas__contact-icon">
                                        <a href="tel:<?php print esc_attr($kindedo_extra_phone); ?>"><i class="far fa-phone"></i></a>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="tel:<?php print esc_attr($kindedo_extra_phone); ?>"><?php print esc_html($kindedo_extra_phone); ?></a>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <?php if (!empty($kindedo_extra_email)) : ?>
                                <li class="d-flex align-items-center gap-2">
                                    <div class="offcanvas__contact-icon">
                                        <a href="mailto:<?php print esc_attr($kindedo_extra_email); ?>"><i class="fal fa-envelope"></i></a>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="mailto:<?php print esc_attr($kindedo_extra_email); ?>"><?php print esc_html($kindedo_extra_email); ?></a>
                                    </div>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <?php if (!empty($kindedo_side_info_social)) : ?>
                    <div class="offcanvas__social">
                        <?php kindedo_header_social_profiles(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>

    <?php
}

/**
 * [kindedo_header_lang description]
 * @return [type] [description]
 */
function kindedo_header_lang_defualt()
{
    $kindedo_header_lang = get_theme_mod('kindedo_header_lang', false);
    if ($kindedo_header_lang) : ?>

        <ul class="header__lang-list cp-lang-list">
            <li><a href="#0" class="lang__btn"><?php print esc_html__('EN', 'kindedo'); ?> <i class="ti-arrow-down"></i></a>
                <?php do_action('kindedo_language'); ?>
            </li>
        </ul>

    <?php endif; ?>
<?php
}

/**
 * [kindedo_language_list description]
 * @return [type] [description]
 */
function _kindedo_language($mar)
{
    return $mar;
}
function kindedo_language_list()
{

    $mar = '';
    $languages = apply_filters('wpml_active_languages', NULL, 'orderby=id&order=desc');
    if (!empty($languages)) {
        $mar = '<ul>';
        foreach ($languages as $lan) {
            $active = $lan['active'] == 1 ? 'active' : '';
            $mar .= '<li class="' . $active . '"><a href="' . $lan['url'] . '">' . $lan['translated_name'] . '</a></li>';
        }
        $mar .= '</ul>';
    } else {
        //remove this code when send themeforest reviewer team
        $mar .= '<ul>';
        $mar .= '<li><a href="#">' . esc_html__('USA', 'kindedo') . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__('UK', 'kindedo') . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__('CA', 'kindedo') . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__('AU', 'kindedo') . '</a></li>';
        $mar .= ' </ul>';
    }
    print _kindedo_language($mar);
}
add_action('kindedo_language', 'kindedo_language_list');


// Preloader Function
function kindedo_preloader_func()
{
    $kindedo_preloader = get_theme_mod('kindedo_preloader', false);
    $kindedo_preloader_logo = get_theme_mod('preloader_logo', get_template_directory_uri() . '/assets/img/logo/logo.svg');
?>
    <?php if (!empty($kindedo_preloader)) : ?>
        <!-- pre loader area start -->
        <div id="loading">
            <div id="preloader">
                <div class="preloader-thumb-wrap">
                    <div class="preloader-thumb">
                        <div class="preloader-border"></div>
                        <?php if (!empty($kindedo_preloader_logo)) : ?>
                            <img src="<?php print esc_url($kindedo_preloader_logo); ?>" alt="<?php print esc_attr__('logo', 'kindedo'); ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- pre loader area end -->
    <?php endif; ?>
<?php
}
add_action('wp_body_open', 'kindedo_preloader_func');


// BackToTop Function
function kindedo_backtotop_func()
{
    $kindedo_backtotop = get_theme_mod('kindedo_backtotop', false);
?>
    <?php if (!empty($kindedo_backtotop)) {

        $enable = 'progress-wrap';
    } else {
        $enable = 'progress-wrap d-none';
    }
    ?>
    <div class="<?php echo esc_attr($enable); ?>">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
<?php
}
add_action('wp_body_open', 'kindedo_backtotop_func');


/*
* Header logo
*
* return string
*/

// header logo
function kindedo_header_logo()
{
?>
    <?php
    // Main logo
    $kindedo_logo = get_template_directory_uri() . '/assets/img/logo/logo.svg';
    $kindedo_site_logo = get_theme_mod('main_logo', $kindedo_logo);
    ?>

    <?php
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        ob_start();
        $kindedo_site_logo = !empty($kindedo_site_logo) ? $kindedo_site_logo : $kindedo_logo;
    ?>
        <a class="standard-logo" href="<?php print esc_url(home_url('/')); ?>">
            <img src="<?php print esc_url($kindedo_site_logo); ?>" alt="<?php print esc_attr__('logo', 'kindedo'); ?>" />
        </a>
    <?php
        print ob_get_clean();
    }
    ?>
<?php
}

// footer logo
function kindedo_footer_logo()
{ ?>
    <?php
    $kindedo_footer_logo = get_template_directory_uri() . '/assets/img/logo/cp-white-logo.png';
    $kindedo_footer_logo2 = get_theme_mod('kindedo_footer_logo', $kindedo_footer_logo);
    ?>
    <a href="<?php print esc_url(home_url('/')); ?>">
        <img src="<?php print esc_url($kindedo_footer_logo2); ?>" alt="<?php print esc_attr__('footer logo', 'kindedo'); ?>">
    </a>
<?php
}


/**
 * [kindedo_header_social_profiles description]
 * @return [type] [description]
 */
function kindedo_header_social_profiles()
{
    $kindedo_topbar_fb_url = get_theme_mod('kindedo_topbar_fb_url', __('#', 'kindedo'));
    $kindedo_topbar_twitter_url = get_theme_mod('kindedo_topbar_twitter_url', __('#', 'kindedo'));
    $kindedo_topbar_instagram_url = get_theme_mod('kindedo_topbar_instagram_url', __('#', 'kindedo'));
    $kindedo_topbar_vimeo_url = get_theme_mod('kindedo_topbar_vimeo_url', __('#', 'kindedo'));
    $kindedo_topbar_linkedin_url = get_theme_mod('kindedo_topbar_linkedin_url', __('#', 'kindedo'));
    $kindedo_topbar_youtube_url = get_theme_mod('kindedo_topbar_youtube_url', __('#', 'kindedo'));
?>

    <ul>
        <?php if (!empty($kindedo_topbar_fb_url)) : ?>
            <li><a href="<?php print esc_url($kindedo_topbar_fb_url); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
        <?php endif; ?>

        <?php if (!empty($kindedo_topbar_twitter_url)) : ?>
            <li><a href="<?php print esc_url($kindedo_topbar_twitter_url); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
        <?php endif; ?>

        <?php if (!empty($kindedo_topbar_instagram_url)) : ?>
            <li><a href="<?php print esc_url($kindedo_topbar_instagram_url); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
        <?php endif; ?>

        <?php if (!empty($kindedo_topbar_vimeo_url)) : ?>
            <li><a href="<?php print esc_url($kindedo_topbar_vimeo_url); ?>" target="_blank"><i class="fab fa-vimeo-v"></i></a></li>
        <?php endif; ?>

        <?php if (!empty($kindedo_topbar_linkedin_url)) : ?>
            <li><a href="<?php print esc_url($kindedo_topbar_linkedin_url); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
        <?php endif; ?>

        <?php if (!empty($kindedo_topbar_youtube_url)) : ?>
            <li><a href="<?php print esc_url($kindedo_topbar_youtube_url); ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
        <?php endif; ?>
    </ul>

<?php
}

function kindedo_footer_social_profiles()
{
    $kindedo_footer_fb_url = get_theme_mod('kindedo_footer_fb_url', __('#', 'kindedo'));
    $kindedo_footer_twitter_url = get_theme_mod('kindedo_footer_twitter_url', __('#', 'kindedo'));
    $kindedo_footer_instagram_url = get_theme_mod('kindedo_footer_instagram_url', __('#', 'kindedo'));
    $kindedo_footer_linkedin_url = get_theme_mod('kindedo_footer_linkedin_url', __('#', 'kindedo'));
    $kindedo_footer_youtube_url = get_theme_mod('kindedo_footer_youtube_url', __('#', 'kindedo'));
?>

    <ul>
        <?php if (!empty($kindedo_footer_fb_url)) : ?>
            <li>
                <a href="<?php print esc_url($kindedo_footer_fb_url); ?>">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
        <?php endif; ?>

        <?php if (!empty($kindedo_footer_twitter_url)) : ?>
            <li>
                <a href="<?php print esc_url($kindedo_footer_twitter_url); ?>">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
        <?php endif; ?>

        <?php if (!empty($kindedo_footer_instagram_url)) : ?>
            <li>
                <a href="<?php print esc_url($kindedo_footer_instagram_url); ?>">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
        <?php endif; ?>

        <?php if (!empty($kindedo_footer_linkedin_url)) : ?>
            <li>
                <a href="<?php print esc_url($kindedo_footer_linkedin_url); ?>">
                    <i class="fab fa-linkedin"></i>
                </a>
            </li>
        <?php endif; ?>

        <?php if (!empty($kindedo_footer_youtube_url)) : ?>
            <li>
                <a href="<?php print esc_url($kindedo_footer_youtube_url); ?>">
                    <i class="fab fa-youtube"></i>
                </a>
            </li>
        <?php endif; ?>
    </ul>
<?php
}


/**
 * [kindedo_header_menu description]
 * @return [type] [description]
 */
function kindedo_header_menu()
{
?>
    <?php
    wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => '',
        'container'      => '',
        'fallback_cb'    => 'kindedo_Navwalker_Class::fallback',
        'walker'         => new kindedo_Navwalker_Class,
    ]);
    ?>
<?php
}

/**
 * [kindedo_header_menu description]
 * @return [type] [description]
 */
function kindedo_mobile_menu()
{
?>
    <?php
    $kindedo_menu = wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => '',
        'container'      => '',
        'menu_id'        => 'mobile-menu-active',
        'echo'           => false,
    ]);

    $kindedo_menu = str_replace("menu-item-has-children", "menu-item-has-children has-children", $kindedo_menu);
    echo wp_kses_post($kindedo_menu);
    ?>
<?php
}

/**
 * [kindedo_search_menu description]
 * @return [type] [description]
 */
function kindedo_header_search_menu()
{
?>
    <?php
    wp_nav_menu([
        'theme_location' => 'header-search-menu',
        'menu_class'     => '',
        'container'      => '',
        'fallback_cb'    => 'kindedo_Navwalker_Class::fallback',
        'walker'         => new kindedo_Navwalker_Class,
    ]);
    ?>
<?php
}

/**
 * [kindedo_footer_menu description]
 * @return [type] [description]
 */
function kindedo_footer_menu()
{
    wp_nav_menu([
        'theme_location' => 'footer-menu',
        'menu_class'     => 'm-0',
        'container'      => '',
        'fallback_cb'    => 'kindedo_Navwalker_Class::fallback',
        'walker'         => new kindedo_Navwalker_Class,
    ]);
}


/**
 *
 * kindedo footer
 */
add_action('kindedo_footer_style', 'kindedo_footer_default_style', 10);


/**
 * footer  style_defaut
 */
function kindedo_footer_default_style()
{
    // Customizer
    $kindedo_footer_shape1 = get_theme_mod('kindedo_footer_shape1', false);
    $kindedo_footer_shape2 = get_theme_mod('kindedo_footer_shape2', false);
    $footer_bg_img = get_theme_mod('kindedo_footer_bg');
    $kindedo_footer_menu_switch = get_theme_mod('kindedo_footer_menu_switch', false);
    $kindedo_copyright_center = $kindedo_footer_menu_switch  ? 'col-lg-5' : 'col-md-12 text-center';

    // footer page
    $footer_privacy_text = get_theme_mod('footer_privacy_text', __('Privacy', 'kindedo'));
    $footer_privacy_link = get_theme_mod('footer_privacy_link', __('#', 'kindedo'));

    $footer_terms_text = get_theme_mod('footer_terms_text', __('Terms Condition', 'kindedo'));
    $footer_terms_link = get_theme_mod('footer_terms_link', __('#', 'kindedo'));

    $footer_contact_text = get_theme_mod('footer_contact_text', __('Contact', 'kindedo'));
    $footer_contact_link = get_theme_mod('footer_contact_link', __('#', 'kindedo'));

    // dashboard pages
    $kindedo_footer_bg_url_from_page = function_exists('get_field') ? get_field('kindedo_footer_bg') : '';
    $kindedo_footer_bg_color_from_page = function_exists('get_field') ? get_field('kindedo_footer_bg_color') : '';
    $kindedo_footer_bottom_bg_color_from_page = function_exists('get_field') ? get_field('kindedo_footer_bottom_bg_color') : '';
    $footer_bg_color = get_theme_mod('kindedo_footer_bg_color');
    $footer_bottom_bg_color = get_theme_mod('kindedo_footer_bottom_bg_color');

    // bg image
    $bg_img = !empty($kindedo_footer_bg_url_from_page['url']) ? $kindedo_footer_bg_url_from_page['url'] : $footer_bg_img;

    // bg color
    $bg_color = !empty($kindedo_footer_bg_color_from_page) ? $kindedo_footer_bg_color_from_page : $footer_bg_color;

    //bottom bg color
    $bottom_bg_color = !empty($kindedo_footer_bottom_bg_color_from_page) ? $kindedo_footer_bottom_bg_color_from_page : $footer_bottom_bg_color;

    // footer_columns
    $footer_columns = 0;
    $footer_widgets = get_theme_mod('footer_widget_number', 4);

    for ($num = 1; $num <= $footer_widgets; $num++) {
        if (is_active_sidebar('footer-' . $num)) {
            $footer_columns++;
        }
    }

    switch ($footer_columns) {
        case '1':
            $footer_class[1] = 'col-lg-12';
            break;
        case '2':
            $footer_class[1] = 'col-lg-6 col-md-6';
            $footer_class[2] = 'col-lg-6 col-md-6';
            break;
        case '3':
            $footer_class[1] = 'col-xl-4 col-lg-6 col-md-5';
            $footer_class[2] = 'col-xl-4 col-lg-6 col-md-7';
            $footer_class[3] = 'col-xl-4 col-lg-6';
            break;
        case '4':
            $footer_class[1] = 'col-lg-3 col-sm-6';
            $footer_class[2] = 'col-lg-3 col-sm-6';
            $footer_class[3] = 'col-lg-3 col-sm-6';
            $footer_class[4] = 'col-lg-3 col-sm-6';
            break;
        default:
            $footer_class = 'col-xl-3 col-lg-3 col-md-6';
            break;
    }

?>

    <!-- footer area start -->
    <footer>
        <div class="bd-footer-area">
            <!-- footer area bg here  -->
            <div class="bd-gradient-bg"></div>
            <?php if (is_active_sidebar('footer-1') or is_active_sidebar('footer-2') or is_active_sidebar('footer-3') or is_active_sidebar('footer-4')) : ?>
                <div data-background="<?php print esc_url($bg_img); ?>" data-bg="<?php print esc_attr($bg_color); ?>" class="bd-footer pt-90 pb-45">
                    <div class="container">
                        <div class="row">
                            <?php
                            if ($footer_columns > 3) {
                                print '<div class="col-lg-3 col-md-6 col-sm-6">';
                                dynamic_sidebar('footer-1');
                                print '</div>';

                                print '<div class="col-lg-3 col-md-6 col-sm-6">';
                                dynamic_sidebar('footer-2');
                                print '</div>';

                                print '<div class="col-lg-3 col-md-6 col-sm-6">';
                                dynamic_sidebar('footer-3');
                                print '</div>';

                                print '<div class="col-lg-3 col-md-6 col-sm-6">';
                                dynamic_sidebar('footer-4');
                                print '</div>';
                            } else {
                                for ($num = 1; $num <= $footer_columns; $num++) {
                                    if (!is_active_sidebar('footer-' . $num)) {
                                        continue;
                                    }
                                    print '<div class="' . esc_attr($footer_class[$num]) . '">';
                                    dynamic_sidebar('footer-' . $num);
                                    print '</div>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="bd-footer-copyright pt-25 pb-15" data-bg-color="<?php print esc_attr($bottom_bg_color); ?>">
                <div class="container">
                    <div class="bd-footer-copyright-wrap flex-wrap d-flex align-items-center <?php print (empty($kindedo_footer_menu_switch)) ? 'justify-content-center' : 'justify-content-between' ?>">
                        <div class="bd-footer-copyright-text mb-10">
                            <p><?php print kindedo_copyright_text(); ?></p>
                        </div>
                        <?php if (!empty($kindedo_footer_menu_switch)) : ?>
                            <div class="kd-footer2-page text-lg-end mb-15">
                                <ul>
                                    <?php if (!empty($footer_privacy_text)) : ?>
                                        <li><a href="<?php print esc_url($footer_privacy_link); ?>"><?php print esc_html($footer_privacy_text); ?></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($footer_terms_text)) : ?>
                                        <li><a href="<?php print esc_url($footer_terms_link); ?>"><?php print esc_html($footer_terms_text); ?></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($footer_contact_text)) : ?>
                                        <li><a href="<?php print esc_url($footer_contact_link); ?>"><?php print esc_html($footer_contact_text); ?></a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <?php
}


// kindedo_copyright_text
function kindedo_copyright_text()
{
    print get_theme_mod('kindedo_copyright', esc_html__('© 2023 All rights reserved | Design & Develop by BDevs', 'kindedo'));
}

/**
 * [kindedo_breadcrumb_func description]
 * @return [type] [description]
 */
function kindedo_breadcrumb_func()
{
    global $post;
    $breadcrumb_class = '';
    $breadcrumb_show = 1;
    $kindedo_breadcrumb_bg_color = get_theme_mod('kindedo_breadcrumb_bg_color', '#00BBAE');
    $hide_bg_img = function_exists('get_field') ? get_field('hide_breadcrumb_background_image') : '';

    if (is_front_page() && is_home()) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog', 'kindedo'));
        $breadcrumb_class = 'home_front_page';
    } elseif (is_front_page()) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog', 'kindedo'));
        $breadcrumb_show = 0;
    } elseif (is_home()) {
        if (get_option('page_for_posts')) {
            $title = get_the_title(get_option('page_for_posts'));
        }
    } elseif (is_home() && function_exists('tutor')) {
        if (get_option('page_for_posts')) {

            $user_name = sanitize_text_field(get_query_var('tutor_student_username'));
            $get_user = tutor_utils()->get_user_by_login($user_name);

            if ($get_user == NULL) {
                $title = get_the_title(get_option('page_for_posts'));
                $id = get_option('page_for_posts');
            } else {
                $title = ucwords($get_user->user_login);
            }
        }
    } elseif (is_single() && 'post' == get_post_type()) {
        $title = get_the_title();
    } elseif ('product' == get_post_type()) {
        $title = get_theme_mod('breadcrumb_shop_title', __('Shop', 'kindedo'));
    } elseif (is_single() && 'product' == get_post_type()) {
        $title = get_theme_mod('breadcrumb_product_details', __('Shop', 'kindedo'));
    } elseif (is_single() && 'bdevs-services' == get_post_type()) {
        $title = get_the_title();
    } elseif (is_single() && 'courses' == get_post_type()) {
        $title = esc_html__('Course Details', 'kindedo');
    } elseif (is_single() && 'bdevs-event' == get_post_type()) {
        $title = esc_html__('Event Details', 'kindedo');
    } elseif (is_single() && 'bdevs-cases' == get_post_type()) {
        $title = get_the_title();
    } elseif (is_search()) {

        $title = esc_html__('Search Results for : ', 'kindedo') . get_search_query();
    } elseif (is_404()) {
        $title = esc_html__('Page not Found', 'kindedo');
    } elseif (is_archive()) {
        $title = get_the_archive_title();
    } else {
        $title = get_the_title();
    }

    $_id = get_the_ID();

    if (is_single() && 'product' == get_post_type()) {
        $_id = $post->ID;
    } elseif (function_exists("is_shop") and is_shop()) {
        $_id = wc_get_page_id('shop');
    } elseif (is_home() && get_option('page_for_posts')) {
        $_id = get_option('page_for_posts');
    }

    $is_breadcrumb = function_exists('get_field') ? get_field('is_it_invisible_breadcrumb', $_id) : '';
    if (!empty($_GET['s'])) {
        $is_breadcrumb = null;
    }

    if (empty($is_breadcrumb) && $breadcrumb_show == 1) {

        $bg_img_from_page = function_exists('get_field') ? get_field('breadcrumb_background_image', $_id) : '';
        $hide_bg_img = function_exists('get_field') ? get_field('hide_breadcrumb_background_image', $_id) : '';

        // get_theme_mod
        $bg_img_url = get_template_directory_uri() . '/assets/img/bg/breadcrumb-bg.jpg';
        $bg_img = get_theme_mod('breadcrumb_bg_img', $bg_img_url);
        $breadcrumb_info_switch = get_theme_mod('breadcrumb_info_switch', true);

        $kindedo_breadcrumb_padding_top = function_exists('get_field') ? get_field('kindedo_breadcrumb_padding_top') : '175px';
        $kindedo_breadcrumb_padding_bottom = function_exists('get_field') ? get_field('kindedo_breadcrumb_padding_bottom') : '180px';

        if ($hide_bg_img && empty($_GET['s'])) {
            $bg_img = '';
        } else {
            $bg_img = !empty($bg_img_from_page) ? $bg_img_from_page['url'] : $bg_img;
        }

        $breadcrumb_shape_1 = get_theme_mod('breadcrumb_shape_1', get_template_directory_uri() . '/assets/img/shape/curved-line-2.png');
        $breadcrumb_shape_2 = get_theme_mod('breadcrumb_shape_2', get_template_directory_uri() . '/assets/img/shape/white-curved-line.png');

    ?>

        <?php if (!empty($breadcrumb_info_switch)) : ?>
            <!-- breadcrumb area start here -->
            <section class="bd-breadcrumb-area p-relative fix theme-bg <?php print esc_attr($breadcrumb_class); ?>" data-bg-color="<?php print esc_attr($kindedo_breadcrumb_bg_color); ?>" data-top-space="<?php print esc_attr($kindedo_breadcrumb_padding_top); ?>px" data-bottom-space="<?php print esc_attr($kindedo_breadcrumb_padding_bottom); ?>px">
                <!-- breadcrumb background image -->
                <div class="bd-breadcrumb-bg" data-background="<?php print esc_attr($bg_img); ?>"></div>
                <div class="bd-breadcrumb-wrapper mb-60 p-relative">
                    <div class="container">
                        <div class="bd-breadcrumb-shape d-none d-sm-block p-relative">
                            <?php if (!empty($breadcrumb_shape_1)) : ?>
                                <div class="bd-breadcrumb-shape-1">
                                    <img src="<?php print esc_url($breadcrumb_shape_1); ?>" alt="<?php print esc_attr__('logo', 'kindedo'); ?>">
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($breadcrumb_shape_2)) : ?>
                                <div class="bd-breadcrumb-shape-2">
                                    <img src="<?php print esc_url($breadcrumb_shape_2); ?>" alt="<?php print esc_attr__('shape', 'kindedo'); ?>">
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-10">
                                <div class="bd-breadcrumb d-flex align-items-center justify-content-center pt-60 pb-100">
                                    <div class="bd-breadcrumb-content text-center">
                                        <h3 class="bd-breadcrumb-title"><?php echo wp_kses_post($title); ?></h3>
                                        <div class="bd-breadcrumb-list">
                                            <nav aria-label="Breadcrumbs">
                                                <?php
                                                if (function_exists('bcn_display')) {
                                                    bcn_display();
                                                } ?>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bd-wave-wrapper bd-wave-wrapper-3">
                    <div class="bd-wave bd-wave-3" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/shape/wave-white-2.svg"></div>
                    <div class="bd-wave bd-wave-3" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/shape/wave-white.svg"></div>
                </div>
            </section>
        <?php endif; ?>
        <!-- breadcrumb area end here  -->

    <?php
    }
}

add_action('kindedo_before_main_content', 'kindedo_breadcrumb_func');

// kindedo_search_form
function kindedo_search_form()
{
    ?>
    <div class="bd-search-popup-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bd-search-popup">
                        <div class="bd-search-form">
                            <form method="get" action="<?php print esc_url(home_url('/')); ?>">
                                <div class="bd-search-input">
                                    <input type="search" class="main-search-input" name="s" value="<?php print esc_attr(get_search_query()) ?>" placeholder="<?php print esc_attr__('Search here...', 'kindedo'); ?>">
                                    <div class="bd-search-submit">
                                        <button type="submit"><i class="flaticon-search"></i></button>
                                    </div>
                                </div>
                            </form>
                            <div class="bd-search-close">
                                <div class="bd-search-close-btn">
                                    <button><i class="fa-thin fa-close"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- search popup overlay  -->
    <div class="bd-search-overlay"></div>
<?php
}

add_action('kindedo_before_main_content', 'kindedo_search_form');


/**
 *
 * pagination
 */
if (!function_exists('kindedo_pagination')) {

    function _kindedo_pagi_callback($pagination)
    {
        return $pagination;
    }

    //page navegation
    function kindedo_pagination($prev, $next, $pages, $args)
    {
        global $wp_query, $wp_rewrite;
        $menu = '';
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

        if ($pages == '') {
            global $wp_query;
            $pages = $wp_query->max_num_pages;

            if (!$pages) {
                $pages = 1;
            }
        }

        $pagination = [
            'base'      => add_query_arg('paged', '%#%'),
            'format'    => '',
            'total'     => $pages,
            'current'   => $current,
            'prev_text' => $prev,
            'next_text' => $next,
            'type'      => 'array',
        ];

        //rewrite permalinks
        if ($wp_rewrite->using_permalinks()) {
            $pagination['base'] = user_trailingslashit(trailingslashit(remove_query_arg('s', get_pagenum_link(1))) . 'page/%#%/', 'paged');
        }

        if (!empty($wp_query->query_vars['s'])) {
            $pagination['add_args'] = ['s' => get_query_var('s')];
        }

        $pagi = '';
        if (paginate_links($pagination) != '') {
            $paginations = paginate_links($pagination);
            $pagi .= '<ul>';
            foreach ($paginations as $key => $pg) {
                $pagi .= '<li>' . $pg . '</li>';
            }
            $pagi .= '</ul>';
        }

        print _kindedo_pagi_callback($pagi);
    }
}


function kindedo_style_functions()
{
    wp_enqueue_style('kindedo-custom', KINDEDO_THEME_CSS_DIR . 'kindedo-custom.css', []);

    // breadcrumb-bg-color
    $color_code = get_theme_mod('kindedo_breadcrumb_bg_color', '#00BBAE');
    if ($color_code != '') {
        $custom_css = '';
        $custom_css .= ".breadcrumb-bg.gray-bg{ background: " . $color_code . "}";

        wp_add_inline_style('kindedo-breadcrumb-bg', $custom_css);
    }

    // breadcrumb-spacing top
    $padding_px = get_theme_mod('kindedo_breadcrumb_spacing', '160px');
    if ($padding_px != '') {
        $custom_css = '';
        $custom_css .= ".breadcrumb-spacing{ padding-top: " . $padding_px . "}";

        wp_add_inline_style('kindedo-breadcrumb-top-spacing', $custom_css);
    }

    // breadcrumb-spacing bottom
    $padding_px = get_theme_mod('kindedo_breadcrumb_bottom_spacing', '160px');
    if ($padding_px != '') {
        $custom_css = '';
        $custom_css .= ".breadcrumb-spacing{ padding-bottom: " . $padding_px . "}";

        wp_add_inline_style('kindedo-breadcrumb-bottom-spacing', $custom_css);
    }

    // scrollup
    $scrollup_switch = get_theme_mod('kindedo_scrollup_switch', false);
    if ($scrollup_switch) {
        $custom_css = '';
        $custom_css .= "#scrollUp{ display: none !important;}";

        wp_add_inline_style('kindedo-scrollup-switch', $custom_css);
    }

    $logo_size = get_theme_mod('kindedo_logo_size', '165');
    if ($logo_size != '') {
        $custom_css = '';
        $custom_css .= ".standard-logo img { max-width: " . $logo_size . "px}";
        wp_add_inline_style('kindedo-custom', $custom_css);
    }

    // theme color
    $theme_color_code = get_theme_mod('kindedo_color_option', '#00BBAE');
    if ($color_code != '') {
        $custom_css = '';
        //background color
        $custom_css .= ".bd-promotion-counter-wrapper,bd-class-area-bg-2 .swiper-slide:nth-child(2n) .bd-class-2 .bd-class-btn a:hover,.bd-class-area-bg-2 .swiper-slide:nth-child(2n) .bd-class-2 .bd-class-btn a:hover::before,.bd-teacher-area-2.theme-bg,.bd-product-action-item a:hover, .bd-product-action-item button:hover,.bd-feature-area.theme-bg,.bd-promotion-list-2 ul li:nth-child(2) i,.product__icon a:hover,.ui-widget-content .ui-slider-handle,.ui-widget-content .ui-slider-range,.tagcloud a:hover,.basic-pagination ul li a:hover, .basic-pagination ul li a.current, .basic-pagination ul li span:hover, .basic-pagination ul li span.current,.product-additional-tab .nav-tabs .nav-item.active .nav-links,.bd-teacher-widget-social ul li a, .bd-class-btn-3 a:hover { background-color: " . $theme_color_code . "}";

        //background color
        $custom_css .= ".bd-joining-bg-overlay::after,.bd-teacher-overlay::before,.bd-teacher-bg-wrapper::before,.bd-teacher-bg-wrapper::after,.woocommerce span.onsale,.dp-cart-btn:hover,.blog-sidebar-widget ul li a::before  { background: " . $theme_color_code . "}";

        // color
        $custom_css .= ".bd-hero-social a:hover,.bd-promotion-list ul li::before,.bd-promotion-btn-2 a:hover,.hover-clr-1:hover,.bd-teacher-social ul li:hover a,.bd-testimonial-video-btn a:hover,.bd-blog-meta span i,.bd-blog-meta a:hover,.bd-blog-title a:hover,.bd-class-area-bg-2 .swiper-slide:nth-child(2n) .bd-class-2 .bd-class-icon-2 i,.bd-gallery-icon a:hover,.bd-dots-pagination.fill-pagination span,.bd-product-title a:hover,.product__title:hover,.widget_product_categories li a:hover, .widget_product_categories ul li a:hover::before, .product-widget-info .product-widget-title:hover,.product__title a:hover,.dp-cart-btn, .tp-single-content-info .tinv-wishlist .tinvwl_add_to_wishlist_button.tinvwl-icon-heart::before,.tinvwl_add_to_wishlist_button:hover, .bd-section-box .bd-section-subtitle,.woocommerce-cart-form table td.product-name a:hover,.button.wc-forward,.order-review-wrapper .woocommerce-checkout-payment .woocommerce-privacy-policy-text p a, .woocommerce-form-coupon-toggle::before,.woocommerce-info a:hover,.bd-teacher-widget-tag, .bd-class-title-3.bdevs-el-title a:hover, .bd-class-meta-price span,.bd-class-meta a:hover,.bd-blog-meta ul li i,.bd-blog-meta ul li a:hover,.widget-post-title a:hover,.blog-sidebar-widget ul li a:hover,.logged-in-as a:hover  { color: " . $theme_color_code . "}";

        // variable color
        $custom_css .= "html:root{
            --bd-theme-1: " . $theme_color_code . ";
        }";

        // border color
        $custom_css .= ".bd-class-area-bg-2 .swiper-slide:nth-child(2n),.bd-class-area-bg-2 .swiper-slide:nth-child(2n) .bd-class-2 .bd-class-icon-wrapper::before,.tagcloud a:hover,.basic-pagination ul li a:hover, .basic-pagination ul li a.current, .basic-pagination ul li span:hover, .basic-pagination ul li span.current,.dp-cart-btn,.woocommerce-checkout input:focus, .woocommerce-checkout textarea:focus,.order-review-wrapper,.bd-contact-input textarea:focus,.bd-contact-input input:focus { border-color: " . $color_code . "}";
        $custom_css .= ".ddddtre { stroke: " . $color_code . "}";
        wp_add_inline_style('kindedo-custom', $custom_css);
    }

    // Primary color
    $primary_color_code = get_theme_mod('kindedo_primary_color_option', '#FF9B24');
    if ($color_code != '') {
        $custom_css = '';
        //background color
        $custom_css .= ".bd-btn.bd-btn-grey::before,.bd-faq .accordion-button:not(.collapsed),.bd-teacher-social,.bd-feature-content:hover .bd-feature-icon,.bd-promotion-list-2 ul li i,.bd-counter-2-icon,.bd-teacher-skill .progress-bar,.bdevs-el-btn.theme-bg-2,.sidebar-search-form button  { background-color: " . $primary_color_code . "}";

        //background color
        $custom_css .= ".bd-blog-date,.bd-joining-line::before, .bd-joining-line-2::before,.bd-joining-line::before, .bd-joining-line-2::before,.bd-teacher-social-2,.bd-blog-date-2 span,.bd-dots-pagination.fill-pagination span,.bd-product-action-item a, .bd-product-action-item button,.bd-routine-table .table > thead,.bd-teacher-widget-social ul li a:hover,.bd-faq-number { background: " . $primary_color_code . "}";

        // color
        $custom_css .= ".bd-class-title a:hover,.bd-promotion-btn-2 a i,.bd-btn.btn-white:hover,.bd-teacher-title a:hover,.bd-hero-social-wrapper.is-white .bd-hero-social a:hover,.bd-class-2 .bd-class-icon-2 i,.bd-teacher-title-2 a:hover,.bd-teacher-view-btn a:hover,.bd-feature-icon i,.bd-program-details-list ul li::before { color: " . $primary_color_code . "}";

        // variable color
        $custom_css .= "html:root{
            --bd-theme-2: " . $primary_color_code . ";
        }";

        // border color
        $custom_css .= ".bd-btn.bd-btn-grey,.bd-class-wrapper .bd-class-btn .bd-btn:hover, 
        .bd-class-2 .bd-class-icon-wrapper::before,.preloader-border,.sidebar__widget-px form input:focus { border-color: " . $primary_color_code . "}";
        $custom_css .= ".progress-wrap svg.progress-circle path { stroke: " . $primary_color_code . "}";
        wp_add_inline_style('kindedo-custom', $custom_css);
    }

    // Secondary color
    $color_code = get_theme_mod('kindedo_secondary_color_option', '#FF9B24');
    if ($color_code != '') {
        $custom_css = '';
        //background color
        $custom_css .= ".bgfyughhbu  { background-color: " . $color_code . "}";
        // color
        $custom_css .= ".yguyhgh { color: " . $color_code . "}";
        // border color
        $custom_css .= ".fgyughjh { border-color: " . $color_code . "}";
        $custom_css .= ".dsdsdsds { stroke: " . $color_code . "}";
        wp_add_inline_style('kindedo-custom', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'kindedo_style_functions');


// kindedo_kses_intermediate
function kindedo_kses_intermediate($string = '')
{
    return wp_kses($string, kindedo_get_allowed_html_tags('intermediate'));
}

function kindedo_get_allowed_html_tags($level = 'basic')
{
    $allowed_html = [
        'b'      => [],
        'i'      => [],
        'u'      => [],
        'em'     => [],
        'br'     => [],
        'abbr'   => [
            'title' => [],
        ],
        'span'   => [
            'class' => [],
        ],
        'strong' => [],
        'a'      => [
            'href'  => [],
            'title' => [],
            'class' => [],
            'id'    => [],
        ],
    ];

    if ($level === 'intermediate') {
        $allowed_html['a'] = [
            'href' => [],
            'title' => [],
            'class' => [],
            'id' => [],
        ];
        $allowed_html['div'] = [
            'class' => [],
            'id' => [],
        ];
        $allowed_html['img'] = [
            'src' => [],
            'class' => [],
            'alt' => [],
        ];
        $allowed_html['del'] = [
            'class' => [],
        ];
        $allowed_html['ins'] = [
            'class' => [],
        ];
        $allowed_html['bdi'] = [
            'class' => [],
        ];
        $allowed_html['i'] = [
            'class' => [],
            'data-rating-value' => [],
        ];
    }

    return $allowed_html;
}


// WP kses allowed tags
// ----------------------------------------------------------------------------------------
function kindedo_kses($raw)
{

    $allowed_tags = array(
        'a'                         => array(
            'class'   => array(),
            'href'    => array(),
            'rel'  => array(),
            'title'   => array(),
            'target' => array(),
        ),
        'abbr'                      => array(
            'title' => array(),
        ),
        'b'                         => array(),
        'blockquote'                => array(
            'cite' => array(),
        ),
        'cite'                      => array(
            'title' => array(),
        ),
        'code'                      => array(),
        'del'                    => array(
            'datetime'   => array(),
            'title'      => array(),
        ),
        'dd'                     => array(),
        'div'                    => array(
            'class'   => array(),
            'title'   => array(),
            'style'   => array(),
        ),
        'dl'                     => array(),
        'dt'                     => array(),
        'em'                     => array(),
        'h1'                     => array(),
        'h2'                     => array(),
        'h3'                     => array(),
        'h4'                     => array(),
        'h5'                     => array(),
        'h6'                     => array(),
        'i'                         => array(
            'class' => array(),
        ),
        'img'                    => array(
            'alt'  => array(),
            'class'   => array(),
            'height' => array(),
            'src'  => array(),
            'width'   => array(),
        ),
        'li'                     => array(
            'class' => array(),
        ),
        'ol'                     => array(
            'class' => array(),
        ),
        'p'                         => array(
            'class' => array(),
        ),
        'q'                         => array(
            'cite'    => array(),
            'title'   => array(),
        ),
        'span'                      => array(
            'class'   => array(),
            'title'   => array(),
            'style'   => array(),
        ),
        'iframe'                 => array(
            'width'         => array(),
            'height'     => array(),
            'scrolling'     => array(),
            'frameborder'   => array(),
            'allow'         => array(),
            'src'        => array(),
        ),
        'strike'                 => array(),
        'br'                     => array(),
        'strong'                 => array(),
        'data-wow-duration'            => array(),
        'data-wow-delay'            => array(),
        'data-wallpaper-options'       => array(),
        'data-stellar-background-ratio'   => array(),
        'ul'                     => array(
            'class' => array(),
        ),
    );

    if (function_exists('wp_kses')) { // WP is here
        $allowed = wp_kses($raw, $allowed_tags);
    } else {
        $allowed = $raw;
    }

    return $allowed;
}

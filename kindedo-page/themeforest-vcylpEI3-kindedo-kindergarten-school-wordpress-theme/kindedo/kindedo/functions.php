<?php

/**
 * kindedo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kindedo
 */

if (!function_exists('kindedo_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function kindedo_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on kindedo, use a find and replace
         * to change 'kindedo' to the name of your theme in all the template files.
         */
        load_theme_textdomain('kindedo', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus([
            'main-menu' => esc_html__('Main Menu', 'kindedo'),
            'category-menu' => esc_html__('Category Menu', 'kindedo'),
            'header-search-menu' => esc_html__('Search Menu', 'kindedo'),
            'footer-menu' => esc_html__('Footer Menu', 'kindedo'),
        ]);

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ]);

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('kindedo_custom_background_args', [
            'default-color' => 'ffffff',
            'default-image' => '',
        ]));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        //Enable custom header
        add_theme_support('custom-header');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', [
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ]);

        /**
         * Enable suporrt for Post Formats
         *
         * see: https://codex.wordpress.org/Post_Formats
         */
        add_theme_support('post-formats', [
            'image',
            'audio',
            'video',
            'gallery',
            'quote',
        ]);

        // Add support for Block Styles.
        add_theme_support('wp-block-styles');

        // Add support for full and wide align images.
        add_theme_support('align-wide');

        // Add support for editor styles.
        add_theme_support('editor-styles');

        // Add support for responsive embedded content.
        add_theme_support('responsive-embeds');

        // Add support for woocommerce.
        add_theme_support('woocommerce');

        // Remove woocommerce defauly styles
        add_filter('woocommerce_enqueue_styles', '__return_false');

        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');

        // Default Block Widget Hide
        remove_theme_support('widgets-block-editor');

        add_image_size('kindedo-case-details', 1170, 600, ['center', 'center']);
    }
endif;
add_action('after_setup_theme', 'kindedo_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kindedo_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('kindedo_content_width', 640);
}
add_action('after_setup_theme', 'kindedo_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kindedo_widgets_init()
{

    /**
     * blog sidebar
     */
    register_sidebar([
        'name'          => esc_html__('Blog Sidebar', 'kindedo'),
        'id'            => 'blog-sidebar',
        'before_widget' => '<div id="%1$s" class="widget blog-sidebar-widget mb-50 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="sidebar-widget-title">',
        'after_title'   => '</h3>',
    ]);

    $footer_widgets = get_theme_mod('footer_widget_number', 4);

    // footer default
    for ($num = 1; $num <= $footer_widgets; $num++) {
        register_sidebar([
            'name'          => sprintf(esc_html__('Footer %1$s', 'kindedo'), $num),
            'id'            => 'footer-' . $num,
            'description'   => sprintf(esc_html__('Footer %1$s', 'kindedo'), $num),
            'before_widget' => '<div id="%1$s" class="footer-widget bd-footer-widget bd-footer-widget-' . $num . ' footer-col-' . $num . ' mb-60 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="bd-footer-widget-title mb-30">',
            'after_title'   => '</h4>',
        ]);
    }

    /**
     * Service Widget
     */
    register_sidebar(
        [
            'name'          => esc_html__('Service Sidebar', 'kindedo'),
            'id'            => 'services-sidebar',
            'description'   => esc_html__('Widgets in this area will be shown on Service Details Sidebar.', 'kindedo'),
            'before_widget' => '<div class="sidebar__widget mb-40 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="sidebar-title mb-25"><h4>',
            'after_title'   => '</h4></div>',
        ]
    );

    /**
     * Portfolio Widget
     */
    register_sidebar(
        [
            'name'          => esc_html__('Portfolio Sidebar', 'kindedo'),
            'id'            => 'portfolio-sidebar',
            'description'   => esc_html__('Widgets in this area will be shown on Portfolio Details Sidebar.', 'kindedo'),
            'before_widget' => '<div class="sidebar__widget mb-40">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="sidebar-title mb-25">',
            'after_title'   => '</h4>',
        ]
    );

    // Product Sidebar
    register_sidebar(array(
        'name' => esc_html__('Product Sidebar', 'kindedo'),
        'id' => 'product-sidebar',
        'before_widget' => '<div id="%1$s" class="product-widgets side-cat %2$s mb-45">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="product-widget-title">',
        'after_title' => '</h6>',
    ));
}
add_action('widgets_init', 'kindedo_widgets_init');

/**
 * Enqueue scripts and styles.
 */

define('KINDEDO_THEME_DIR', get_template_directory());
define('KINDEDO_THEME_URI', get_template_directory_uri());
define('KINDEDO_THEME_CSS_DIR', KINDEDO_THEME_URI . '/assets/css/');
define('KINDEDO_THEME_JS_DIR', KINDEDO_THEME_URI . '/assets/js/');
define('KINDEDO_THEME_INC', KINDEDO_THEME_DIR . '/inc/');

/**
 * kindedo_scripts description
 * @return [type] [description]
 */
function kindedo_scripts()
{

    /**
     * all css files
     */

    wp_enqueue_style('kindedo-fonts', kindedo_fonts_url(), array(), '1.0.0');
    wp_enqueue_style('bootstrap', KINDEDO_THEME_CSS_DIR . 'bootstrap.css', array());
    wp_enqueue_style('fontawesomepro', KINDEDO_THEME_CSS_DIR . 'font-awesome-pro.css', []);
    wp_enqueue_style('meanmenu', KINDEDO_THEME_CSS_DIR . 'meanmenu.css', [], time());
    wp_enqueue_style('animate', KINDEDO_THEME_CSS_DIR . 'animate.min.css', []);
    wp_enqueue_style('swiper-bundle', KINDEDO_THEME_CSS_DIR . 'swiper-bundle.css', []);
    wp_enqueue_style('slick', KINDEDO_THEME_CSS_DIR . 'slick.css', []);
    wp_enqueue_style('nouislider', KINDEDO_THEME_CSS_DIR . 'nouislider.css', []);
    wp_enqueue_style('back-to-top', KINDEDO_THEME_CSS_DIR . 'backtotop.css', []);
    wp_enqueue_style('magnific-popup', KINDEDO_THEME_CSS_DIR . 'magnific-popup.css', []);
    wp_enqueue_style('nice-select', KINDEDO_THEME_CSS_DIR . 'nice-select.css', []);
    wp_enqueue_style('kindedo-flaticon', KINDEDO_THEME_CSS_DIR . 'flaticon_kindedo.css', []);
    wp_enqueue_style('odometer', KINDEDO_THEME_CSS_DIR . 'odometer.css', []);
    wp_enqueue_style('kindedo-spacing', KINDEDO_THEME_CSS_DIR . 'spacing.css', []);
    wp_enqueue_style('kindedo-woocommerce-shop', KINDEDO_THEME_CSS_DIR . 'woocommerce-shop.css', [], time());
    wp_enqueue_style('kindedo-core', KINDEDO_THEME_CSS_DIR . 'kindedo-core.css', [], time());
    wp_enqueue_style('kindedo-custom', KINDEDO_THEME_CSS_DIR . 'kindedo-custom.css', [], time());
    wp_enqueue_style('tutor-responsive', KINDEDO_THEME_CSS_DIR . 'tutor-responsive.css', [], time());
    wp_enqueue_style('kindedo-style', get_stylesheet_uri());

    // all js
    wp_enqueue_script('bootstrap-bundle', KINDEDO_THEME_JS_DIR . 'bootstrap-bundle.js', ['jquery'], '', true);
    wp_enqueue_script('waypoints', KINDEDO_THEME_JS_DIR . 'waypoints.js', ['jquery'], false, true);
    wp_enqueue_script('jquery-meanmenu', KINDEDO_THEME_JS_DIR . 'jquery.meanmenu.min.js', ['jquery'], false, true);
    wp_enqueue_script('backtotop', KINDEDO_THEME_JS_DIR . 'backtotop.js', ['jquery'], '', true);
    wp_enqueue_script('swiper-bundle', KINDEDO_THEME_JS_DIR . 'swiper-bundle.js', ['jquery'], false, true);
    wp_enqueue_script('slick', KINDEDO_THEME_JS_DIR . 'slick.js', ['jquery'], false, true);
    wp_enqueue_script('nouislider', KINDEDO_THEME_JS_DIR . 'nouislider.js', ['jquery'], false, true);
    wp_enqueue_script('magnific-popup', KINDEDO_THEME_JS_DIR . 'magnific-popup.js', ['jquery'], false, true);
    wp_enqueue_script('parallax', KINDEDO_THEME_JS_DIR . 'parallax.js', ['jquery'], false, true);
    wp_enqueue_script('nice-select', KINDEDO_THEME_JS_DIR . 'nice-select.js', ['jquery'], '', true);
    wp_enqueue_script('wow', KINDEDO_THEME_JS_DIR . 'wow.min.js', ['jquery'], false, true);
    wp_enqueue_script('isotope-pkgd', KINDEDO_THEME_JS_DIR . 'isotope-pkgd.js', ['imagesloaded'], false, true);
    wp_enqueue_script('jquery-appear', KINDEDO_THEME_JS_DIR . 'jquery.appear.js', ['jquery'], '', true);
    wp_enqueue_script('jquery-odometer', KINDEDO_THEME_JS_DIR . 'jquery.odometer.min.js', ['jquery'], '', true);
    wp_enqueue_script('kindedo-main', KINDEDO_THEME_JS_DIR . 'kindedo-main.js', ['jquery'], time(), true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'kindedo_scripts');

/*
Register Fonts
 */

function kindedo_fonts_url()
{
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ('off' !== _x('on', 'Google font: on or off', 'kindedo')) {
        $font_url = 'https://fonts.googleapis.com/css2?' . urlencode('family=Fredoka:wght@400;500;600;700&display=swap');
    }
    return $font_url;
}


// wp_body_open
if (!function_exists('wp_body_open')) {
    function wp_body_open()
    {
        do_action('wp_body_open');
    }
}

/**
 * Implement the Custom Header feature.
 */
require KINDEDO_THEME_INC . 'custom-header.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require KINDEDO_THEME_INC . 'template-functions.php';


/**
 * Custom template helper function for this theme.
 */
require KINDEDO_THEME_INC . 'template-helper.php';

/**
 * initialize kirki customizer class.
 */
include_once KINDEDO_THEME_INC . 'kirki-customizer.php';
include_once KINDEDO_THEME_INC . 'class-kindedo-kirki.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require KINDEDO_THEME_INC . 'jetpack.php';
}


/**
 * include kindedo functions file
 */
require_once KINDEDO_THEME_INC . 'class-navwalker.php';
require_once KINDEDO_THEME_INC . 'class-tgm-plugin-activation.php';
require_once KINDEDO_THEME_INC . 'add_plugin.php';

if (class_exists('WooCommerce')) {
    require_once KINDEDO_THEME_INC . '/woocommerce/woo-hooks-functions.php';
}
if (  function_exists('tutor') ) {
    require KINDEDO_THEME_INC . 'kindedo-tutor.php';
}

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function kindedo_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}
add_action('wp_head', 'kindedo_pingback_header');

/**
 *
 * comment section
 *
 */
add_filter('comment_form_default_fields', 'kindedo_comment_form_default_fields_func');

function kindedo_comment_form_default_fields_func($default)
{

    $default['author'] = '<div class="row">
    <div class="col-xl-6 col-md-6">
    	<div class="cp-input-field">
        	<input type="text" name="author" placeholder="' . esc_attr__('Your Name', 'kindedo') . '">
        </div>
    </div>';
    $default['email'] = '<div class="col-xl-6 col-md-6">
		<div class="cp-input-field">
        <input type="text" name="email" placeholder="' . esc_attr__('Your Email', 'kindedo') . '">
    	</div>
    </div>';
    // $default['url'] = '';
    $defaults['comment_field'] = '';

    $default['url'] = '<div class="col-xl-12">
		<div class="cp-input-field">
        <input type="text" name="url" placeholder="' . esc_attr__('Website', 'kindedo') . '">
    	</div>
    </div>';
    return $default;
}

add_action('comment_form_top', 'kindedo_add_comments_textarea');
function kindedo_add_comments_textarea()
{
    if (!is_user_logged_in()) {
        echo '<div class="row"><div class="col-xl-12"><div class="cp-input-field"><textarea id="comment" name="comment" cols="60" rows="6" placeholder="' . esc_attr__('Write your comment here...', 'kindedo') . '" aria-required="true"></textarea></div></div></div>';
    }
}

add_filter('comment_form_defaults', 'kindedo_comment_form_defaults_func');

function kindedo_comment_form_defaults_func($info)
{
    if (!is_user_logged_in()) {
        $info['comment_field'] = '';
        $info['submit_field'] = '%1$s %2$s</div>';
    } else {
        $info['comment_field'] = '<div class="cp-input-field"><textarea id="comment" name="comment" cols="30" rows="10" placeholder="' . esc_attr__('Comment *', 'kindedo') . '"></textarea></div>';
    }

    $info['submit_button'] = '<div class="col-xl-12">
                                <button class="bd-btn mt-10" type="submit">
                                    <span class="bd-btn-inner">
                                        <span class="bd-btn-normal">' . esc_html__('Post Comment', 'kindedo') . '</span>
                                        <span class="bd-btn-hover">' . esc_html__('Post Comment', 'kindedo') . '</span>
                                    </span>
                                </button>
                            </div>';

    $info['title_reply_before'] = '<div class="post-comments-title">
                                        <h2>';
    $info['title_reply_after'] = '</h2></div>';
    $info['comment_notes_before'] = '';

    return $info;
}

if (!function_exists('kindedo_comment')) {
    function kindedo_comment($comment, $args, $depth)
    {
        $GLOBAL['comment'] = $comment;
        extract($args, EXTR_SKIP);
        $args['reply_text'] = 'Reply <i class="fal fa-reply"></i>';
        $replayClass = 'comment-depth-' . esc_attr($depth);
?>
        <li id="comment-<?php comment_ID(); ?>">
            <div class="comments-box">
                <div class="comments-avatar">
                    <?php print get_avatar($comment, 102, null, null, ['class' => []]); ?>
                </div>
                <div class="comments-text">
                    <div class="avatar-name">
                        <h5><?php print get_comment_author_link(); ?></h5>
                        <span><?php comment_time(get_option('date_format')); ?></span>
                    </div>
                    <?php comment_text(); ?>
                    <?php comment_reply_link(array_merge($args, ['depth' => $depth, 'max_depth' => $args['max_depth']])); ?>
                </div>
            </div>
    <?php
    }
}

/**
 * shortcode supports for removing extra p, spance etc
 *
 */
add_filter('the_content', 'kindedo_shortcode_extra_content_remove');
/**
 * Filters the content to remove any extra paragraph or break tags
 * caused by shortcodes.
 *
 * @since 1.0.0
 *
 * @param string $content  String of HTML content.
 * @return string $content Amended string of HTML content.
 */
function kindedo_shortcode_extra_content_remove($content)
{

    $array = [
        '<p>['    => '[',
        ']</p>'   => ']',
        ']<br />' => ']',
    ];
    return strtr($content, $array);
}

// kindedo_search_filter_form
if (!function_exists('kindedo_search_filter_form')) {
    function kindedo_search_filter_form($form)
    {

        $form = sprintf(
            '<div class="sidebar__widget-px"><div class="search-px"><form class="sidebar-search-form" action="%s" method="get">
      	<input type="text" value="%s" required name="s" placeholder="%s">
      	<button type="submit"> <i class="fas fa-search"></i>  </button>
		</form></div></div>',
            esc_url(home_url('/')),
            esc_attr(get_search_query()),
            esc_html__('Search', 'kindedo')
        );

        return $form;
    }
    add_filter('get_search_form', 'kindedo_search_filter_form');
}

add_action('admin_enqueue_scripts', 'kindedo_admin_custom_scripts');

function kindedo_admin_custom_scripts()
{
    wp_enqueue_media();
    wp_enqueue_style('customizer-style', get_template_directory_uri() . '/inc/css/customizer-style.css', array());
    wp_register_script('kindedo-admin-custom', get_template_directory_uri() . '/inc/js/admin_custom.js', ['jquery'], '', true);
    wp_enqueue_script('kindedo-admin-custom');
}

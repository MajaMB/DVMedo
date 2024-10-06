<?php

/**
 * kindedo customizer
 *
 * @package kindedo
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Added Panels & Sections
 */
function kindedo_customizer_panels_sections($wp_customize)
{

    //Add panel
    $wp_customize->add_panel('kindedo_customizer', [
        'priority' => 10,
        'title'    => esc_html__('Kindedo Customizer', 'kindedo'),
    ]);

    /**
     * Customizer Section
     */
    $wp_customize->add_section('header_top_setting', [
        'title'       => esc_html__('Header Topbar Setting', 'kindedo'),
        'description' => '',
        'priority'    => 10,
        'capability'  => 'edit_theme_options',
        'panel'       => 'kindedo_customizer',
    ]);

    $wp_customize->add_section('header_social', [
        'title'       => esc_html__('Header Social', 'kindedo'),
        'description' => '',
        'priority'    => 11,
        'capability'  => 'edit_theme_options',
        'panel'       => 'kindedo_customizer',
    ]);

    $wp_customize->add_section('section_header_logo', [
        'title'       => esc_html__('Header Setting', 'kindedo'),
        'description' => '',
        'priority'    => 12,
        'capability'  => 'edit_theme_options',
        'panel'       => 'kindedo_customizer',
    ]);

    $wp_customize->add_section('blog_setting', [
        'title'       => esc_html__('Blog Setting', 'kindedo'),
        'description' => '',
        'priority'    => 13,
        'capability'  => 'edit_theme_options',
        'panel'       => 'kindedo_customizer',
    ]);

    $wp_customize->add_section('header_side_setting', [
        'title'       => esc_html__('Side Info', 'kindedo'),
        'description' => '',
        'priority'    => 14,
        'capability'  => 'edit_theme_options',
        'panel'       => 'kindedo_customizer',
    ]);

    $wp_customize->add_section('breadcrumb_setting', [
        'title'       => esc_html__('Breadcrumb Setting', 'kindedo'),
        'description' => '',
        'priority'    => 15,
        'capability'  => 'edit_theme_options',
        'panel'       => 'kindedo_customizer',
    ]);

    $wp_customize->add_section('blog_setting', [
        'title'       => esc_html__('Blog Setting', 'kindedo'),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'kindedo_customizer',
    ]);

    $wp_customize->add_section('footer_setting', [
        'title'       => esc_html__('Footer Settings', 'kindedo'),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'kindedo_customizer',
    ]);

    $wp_customize->add_section('color_setting', [
        'title'       => esc_html__('Color Setting', 'kindedo'),
        'description' => '',
        'priority'    => 17,
        'capability'  => 'edit_theme_options',
        'panel'       => 'kindedo_customizer',
    ]);

    $wp_customize->add_section('404_page', [
        'title'       => esc_html__('404 Page', 'kindedo'),
        'description' => '',
        'priority'    => 18,
        'capability'  => 'edit_theme_options',
        'panel'       => 'kindedo_customizer',
    ]);

    $wp_customize->add_section('typo_setting', [
        'title'       => esc_html__('Typography Setting', 'kindedo'),
        'description' => '',
        'priority'    => 21,
        'capability'  => 'edit_theme_options',
        'panel'       => 'kindedo_customizer',
    ]);

    $wp_customize->add_section('slug_setting', [
        'title'       => esc_html__('Slug Settings', 'kindedo'),
        'description' => '',
        'priority'    => 22,
        'capability'  => 'edit_theme_options',
        'panel'       => 'kindedo_customizer',
    ]);
    $wp_customize->add_section('kextra_setting', [
        'title'       => esc_html__('Extra Settings', 'kindedo'),
        'description' => '',
        'priority'    => 23,
        'capability'  => 'edit_theme_options',
        'panel'       => 'kindedo_customizer',
    ]);
}

add_action('customize_register', 'kindedo_customizer_panels_sections');

function _header_top_fields($fields)
{

    // Topbar On/Off
    $fields[] = [
        'type'     => 'toggle',
        'settings' => 'kindedo_topbar_switch',
        'label'    => esc_html__('Topbar On/Off', 'kindedo'),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'kindedo'),
            'off' => esc_html__('Disable', 'kindedo'),
        ],
    ];

    // topbar language
    $fields[] = [
        'type'     => 'toggle',
        'settings' => 'kindedo_header_lang',
        'label'    => esc_html__('Language On/Off', 'kindedo'),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'kindedo'),
            'off' => esc_html__('Disable', 'kindedo'),
        ],
        'active_callback' => [
            [
                'setting'  => 'kindedo_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    // topbar email
    $fields[] = [
        'type'     => 'text',
        'settings' => 'kindedo_topbar_email',
        'label'    => esc_html__('Email', 'kindedo'),
        'section'  => 'header_top_setting',
        'default'  => esc_html__('support@kindedo.com', 'kindedo'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'kindedo_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    // topbar time
    $fields[] = [
        'type'     => 'text',
        'settings' => 'kindedo_topbar_time',
        'label'    => esc_html__('Time Text', 'kindedo'),
        'section'  => 'header_top_setting',
        'default'  => esc_html__('8.00am-4.00pm', 'kindedo'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'kindedo_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    // topbar address
    $fields[] = [
        'type'     => 'text',
        'settings' => 'kindedo_topbar_address',
        'label'    => esc_html__('Top Bar Address', 'kindedo'),
        'section'  => 'header_top_setting',
        'default'  => esc_html__('14/A, Kilix Home Tower, NYC', 'kindedo'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'kindedo_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    // topbar order link
    $fields[] = [
        'type'     => 'link',
        'settings' => 'kindedo_topbar_address_link',
        'label'    => esc_html__('Top Bar Address URL', 'kindedo'),
        'section'  => 'header_top_setting',
        'default'  => esc_html__('#', 'kindedo'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'kindedo_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'toggle',
        'settings' => 'kindedo_preloader',
        'label'    => esc_html__('Preloader On/Off', 'kindedo'),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'kindedo'),
            'off' => esc_html__('Disable', 'kindedo'),
        ],
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'preloader_logo',
        'label'       => esc_html__('Preloader Logo', 'kindedo'),
        'description' => esc_html__('Upload Your Logo.', 'kindedo'),
        'section'     => 'header_top_setting',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo.svg',
        'active_callback' => [
            [
                'setting'  => 'kindedo_preloader',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];



    $fields[] = [
        'type'     => 'toggle',
        'settings' => 'kindedo_backtotop',
        'label'    => esc_html__('Back To Top On/Off', 'kindedo'),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'kindedo'),
            'off' => esc_html__('Disable', 'kindedo'),
        ],
    ];

    $fields[] = [
        'type'     => 'toggle',
        'settings' => 'kindedo_search',
        'label'    => esc_html__('Search On/Off', 'kindedo'),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'kindedo'),
            'off' => esc_html__('Disable', 'kindedo'),
        ],
    ];

    $fields[] = [
        'type'     => 'toggle',
        'settings' => 'kindedo_header_right',
        'label'    => esc_html__('Header Right On/Off', 'kindedo'),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'kindedo'),
            'off' => esc_html__('Disable', 'kindedo'),
        ],
    ];

    // topbar phone
    $fields[] = [
        'type'     => 'text',
        'settings' => 'kindedo_topbar_phone',
        'label'    => esc_html__('Phone', 'kindedo'),
        'section'  => 'header_top_setting',
        'default'  => esc_html__('+88 0123 6985', 'kindedo'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'kindedo_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    // button
    $fields[] = [
        'type'     => 'text',
        'settings' => 'kindedo_button_text',
        'label'    => esc_html__('Button Text', 'kindedo'),
        'section'  => 'header_top_setting',
        'default'  => esc_html__('Apply now', 'kindedo'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'kindedo_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'link',
        'settings' => 'kindedo_button_link',
        'label'    => esc_html__('Button URL', 'kindedo'),
        'section'  => 'header_top_setting',
        'default'  => esc_html__('#', 'kindedo'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'kindedo_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    return $fields;
}
add_filter('kirki/fields', '_header_top_fields');

/*
Header Social
 */
function _header_social_fields($fields)
{

    $fields[] = [
        'type'     => 'toggle',
        'settings' => 'kindedo_topbar_social_switch',
        'label'    => esc_html__('Header Social On/Off', 'kindedo'),
        'section'  => 'header_social',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'kindedo'),
            'off' => esc_html__('Disable', 'kindedo'),
        ],
    ];

    // header section social
    $fields[] = [
        'type'     => 'text',
        'settings' => 'kindedo_topbar_fb_url',
        'label'    => esc_html__('Facebook Url', 'kindedo'),
        'section'  => 'header_social',
        'default'  => esc_html__('#', 'kindedo'),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'kindedo_topbar_twitter_url',
        'label'    => esc_html__('Twitter Url', 'kindedo'),
        'section'  => 'header_social',
        'default'  => esc_html__('#', 'kindedo'),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'kindedo_topbar_linkedin_url',
        'label'    => esc_html__('Linkedin Url', 'kindedo'),
        'section'  => 'header_social',
        'default'  => esc_html__('#', 'kindedo'),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'kindedo_topbar_instagram_url',
        'label'    => esc_html__('Instagram Url', 'kindedo'),
        'section'  => 'header_social',
        'default'  => esc_html__('#', 'kindedo'),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'kindedo_topbar_vimeo_url',
        'label'    => esc_html__('Vimeo Url', 'kindedo'),
        'section'  => 'header_social',
        'default'  => esc_html__('#', 'kindedo'),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'kindedo_topbar_youtube_url',
        'label'    => esc_html__('Youtube Url', 'kindedo'),
        'section'  => 'header_social',
        'default'  => esc_html__('#', 'kindedo'),
        'priority' => 10,
    ];


    return $fields;
}
add_filter('kirki/fields', '_header_social_fields');

/*
Header Settings
 */
function _header_header_fields($fields)
{
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'main_logo',
        'label'       => esc_html__('Header Logo', 'kindedo'),
        'description' => esc_html__('Upload Your Logo.', 'kindedo'),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo.svg',
    ];

    $fields[] = [
        'type'        => 'slider',
        'settings'    => 'kindedo_logo_size',
        'label'       => esc_html__('Header Logo Size', 'kindedo'),
        'description' => esc_html__('Header Logo Size', 'kindedo'),
        'section'     => 'section_header_logo',
        'default' => '130px',
        'choices'     => [
            'min'  => 100,
            'max'  => 400,
            'step' => 4,
        ],
    ];

    return $fields;
}
add_filter('kirki/fields', '_header_header_fields');

/*
Header Side Info
 */
function _header_side_fields($fields)
{
    // side info settings
    $fields[] = [
        'type'     => 'toggle',
        'settings' => 'kindedo_contact_info_hide',
        'label'    => esc_html__('Side Contact Info On/Off', 'kindedo'),
        'section'  => 'header_side_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'kindedo'),
            'off' => esc_html__('Disable', 'kindedo'),
        ],
    ];

    // contact text
    $fields[] = [
        'type'     => 'text',
        'settings' => 'kindedo_extra_contact_text',
        'label'    => esc_html__('Contact Text', 'kindedo'),
        'section'  => 'header_side_setting',
        'default'  => esc_html__('Contact', 'kindedo'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'kindedo_contact_info_hide',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    // topbar address
    $fields[] = [
        'type'     => 'text',
        'settings' => 'kindedo_extra_address',
        'label'    => esc_html__('Address', 'kindedo'),
        'section'  => 'header_side_setting',
        'default'  => esc_html__('12/A, Mirnada City Tower, NYC', 'kindedo'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'kindedo_contact_info_hide',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    // topbar order link
    $fields[] = [
        'type'     => 'link',
        'settings' => 'kindedo_extra_address_link',
        'label'    => esc_html__('Address URL', 'kindedo'),
        'section'  => 'header_side_setting',
        'default'  => esc_html__('#', 'kindedo'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'kindedo_contact_info_hide',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    // Phone
    $fields[] = [
        'type'     => 'text',
        'settings' => 'kindedo_extra_email',
        'label'    => esc_html__('Email', 'kindedo'),
        'section'  => 'header_side_setting',
        'default'  => esc_html__('support@mail.com', 'kindedo'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'kindedo_contact_info_hide',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'kindedo_extra_phone',
        'label'    => esc_html__('Phone Number', 'kindedo'),
        'section'  => 'header_side_setting',
        'default'  => esc_html__('326 222 666 00', 'kindedo'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'kindedo_contact_info_hide',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];


    // about on/off
    $fields[] = [
        'type'     => 'toggle',
        'settings' => 'kindedo_about_info_hide',
        'label'    => esc_html__('Side About Info On/Off', 'kindedo'),
        'section'  => 'header_side_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'kindedo'),
            'off' => esc_html__('Disable', 'kindedo'),
        ],
    ];

    // about title
    $fields[] = [
        'type'     => 'text',
        'settings' => 'kindedo_extra_about_title',
        'label'    => esc_html__('About Title', 'kindedo'),
        'section'  => 'header_side_setting',
        'default'  => esc_html__('About Kindedo', 'kindedo'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'kindedo_about_info_hide',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    // about text
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'kindedo_extra_about_text',
        'label'    => esc_html__('About Text', 'kindedo'),
        'section'  => 'header_side_setting',
        'default'  => esc_html__('About Kindedo Text', 'kindedo'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'kindedo_about_info_hide',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];


    $fields[] = [
        'type'     => 'toggle',
        'settings' => 'kindedo_side_info_search_form',
        'label'    => esc_html__('Search On/Off', 'kindedo'),
        'section'  => 'header_side_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'kindedo'),
            'off' => esc_html__('Disable', 'kindedo'),
        ],
    ];

    $fields[] = [
        'type'     => 'toggle',
        'settings' => 'kindedo_side_info_social',
        'label'    => esc_html__('Social On/Off', 'kindedo'),
        'section'  => 'header_side_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'kindedo'),
            'off' => esc_html__('Disable', 'kindedo'),
        ],
    ];

    return $fields;
}
add_filter('kirki/fields', '_header_side_fields');

/*
_header_page_title_fields
 */
function _header_page_title_fields($fields)
{
    // Breadcrumb Setting
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'breadcrumb_bg_img',
        'label'       => esc_html__('Breadcrumb Background Image', 'kindedo'),
        'description' => esc_html__('Breadcrumb Background Image', 'kindedo'),
        'section'     => 'breadcrumb_setting',
        'default'     => get_template_directory_uri() . '/assets/img/bg/breadcrumb-bg.jpg',
    ];


    $fields[] = [
        'type'        => 'color',
        'settings'    => 'kindedo_breadcrumb_bg_color',
        'label'       => __('Breadcrumb BG Color', 'kindedo'),
        'description' => esc_html__('This is a Breadcrumb bg color control.', 'kindedo'),
        'section'     => 'breadcrumb_setting',
        'default'     => '#00BBAE',
        'priority'    => 10,
    ];

    // Breadcrumb Shape 1
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'breadcrumb_shape_1',
        'label'       => esc_html__('Breadcrumb Shape 1 Image', 'kindedo'),
        'description' => esc_html__('Breadcrumb Shape 1 Image', 'kindedo'),
        'section'     => 'breadcrumb_setting',
        'default'     => get_template_directory_uri() . '/assets/img/shape/curved-line-2.png',
    ];

    // Breadcrumb Shape 2
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'breadcrumb_shape_2',
        'label'       => esc_html__('Breadcrumb Shape 2 Image', 'kindedo'),
        'description' => esc_html__('Breadcrumb Shape 2 Image', 'kindedo'),
        'section'     => 'breadcrumb_setting',
        'default'     => get_template_directory_uri() . '/assets/img/shape/white-curved-line.png',
    ];

    $fields[] = [
        'type'     => 'toggle',
        'settings' => 'breadcrumb_info_switch',
        'label'    => esc_html__('Breadcrumb Info switch', 'kindedo'),
        'section'  => 'breadcrumb_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'kindedo'),
            'off' => esc_html__('Disable', 'kindedo'),
        ],
    ];
    return $fields;
}
add_filter('kirki/fields', '_header_page_title_fields');

/*
Header Social
 */
function _header_blog_fields($fields)
{
    // Blog Setting
    $fields[] = [
        'type'     => 'toggle',
        'settings' => 'kindedo_blog_btn_switch',
        'label'    => esc_html__('Blog BTN On/Off', 'kindedo'),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'kindedo'),
            'off' => esc_html__('Disable', 'kindedo'),
        ],
    ];

    $fields[] = [
        'type'     => 'toggle',
        'settings' => 'kindedo_blog_cat',
        'label'    => esc_html__('Blog Category Meta On/Off', 'kindedo'),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'kindedo'),
            'off' => esc_html__('Disable', 'kindedo'),
        ],
    ];

    $fields[] = [
        'type'     => 'toggle',
        'settings' => 'kindedo_blog_author',
        'label'    => esc_html__('Blog Author Meta On/Off', 'kindedo'),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'kindedo'),
            'off' => esc_html__('Disable', 'kindedo'),
        ],
    ];
    $fields[] = [
        'type'     => 'toggle',
        'settings' => 'kindedo_blog_date',
        'label'    => esc_html__('Blog Date Meta On/Off', 'kindedo'),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'kindedo'),
            'off' => esc_html__('Disable', 'kindedo'),
        ],
    ];
    $fields[] = [
        'type'     => 'toggle',
        'settings' => 'kindedo_blog_comments',
        'label'    => esc_html__('Blog Comments Meta On/Off', 'kindedo'),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'kindedo'),
            'off' => esc_html__('Disable', 'kindedo'),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'kindedo_blog_btn',
        'label'    => esc_html__('Blog Button text', 'kindedo'),
        'section'  => 'blog_setting',
        'default'  => esc_html__('Read More', 'kindedo'),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title',
        'label'    => esc_html__('Blog Title', 'kindedo'),
        'section'  => 'blog_setting',
        'default'  => esc_html__('Blog', 'kindedo'),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title_details',
        'label'    => esc_html__('Blog Details Title', 'kindedo'),
        'section'  => 'blog_setting',
        'default'  => esc_html__('Blog Details', 'kindedo'),
        'priority' => 10,
    ];
    return $fields;
}
add_filter('kirki/fields', '_header_blog_fields');

/*
Footer
 */
function _header_footer_fields($fields)
{
    // Footer Setting

    $fields[] = [
        'type'        => 'select',
        'settings'    => 'footer_widget_number',
        'label'       => esc_html__('Widget Number', 'kindedo'),
        'section'     => 'footer_setting',
        'default'     => '4',
        'placeholder' => esc_html__('Select an option...', 'kindedo'),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            '4' => esc_html__('Widget Number 4', 'kindedo'),
            '3' => esc_html__('Widget Number 3', 'kindedo'),
            '2' => esc_html__('Widget Number 2', 'kindedo'),
        ],
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'kindedo_footer_bg',
        'label'       => esc_html__('Footer Background Image.', 'kindedo'),
        'description' => esc_html__('Footer Background Image.', 'kindedo'),
        'section'     => 'footer_setting',
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'kindedo_footer_bg_color',
        'label'       => __('Footer BG Color', 'kindedo'),
        'description' => esc_html__('This is a Footer bg color control.', 'kindedo'),
        'section'     => 'footer_setting',
        'default'     => '#FFF6EB',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'kindedo_footer_bottom_bg_color',
        'label'       => __('Footer Bottom BG Color', 'kindedo'),
        'description' => esc_html__('This is a Footer bottom bg color control.', 'kindedo'),
        'section'     => 'footer_setting',
        'default'     => '#EBFFFE;',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'kindedo_footer_shape1',
        'label'       => esc_html__('Footer Shape One Image', 'kindedo'),
        'description' => esc_html__('Upload Shape.', 'kindedo'),
        'section'     => 'footer_setting',
        'default'     => 0,
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'kindedo_footer_shape2',
        'label'       => esc_html__('Footer Shape Two Image', 'kindedo'),
        'description' => esc_html__('Upload Shape.', 'kindedo'),
        'section'     => 'footer_setting',
        'default'     => 0,
    ];

    $fields[] = [
        'type'     => 'toggle',
        'settings' => 'kindedo_footer_menu_switch',
        'label'    => esc_html__('Footer Menu On/Off', 'kindedo'),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__('Enable', 'kindedo'),
            'off' => esc_html__('Disable', 'kindedo'),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'footer_privacy_text',
        'label'    => esc_html__('Privacy Text', 'kindedo'),
        'section'  => 'footer_setting',
        'default'  => esc_html__('Privacy', 'kindedo'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'kindedo_footer_menu_switch',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'link',
        'settings' => 'footer_privacy_link',
        'label'    => esc_html__('Privacy URL', 'kindedo'),
        'section'  => 'footer_setting',
        'default'  => esc_html__('#', 'kindedo'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'kindedo_footer_menu_switch',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'footer_terms_text',
        'label'    => esc_html__('Terms Condition Text', 'kindedo'),
        'section'  => 'footer_setting',
        'default'  => esc_html__('Terms Condition', 'kindedo'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'kindedo_footer_menu_switch',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'link',
        'settings' => 'footer_terms_link',
        'label'    => esc_html__('Terms URL', 'kindedo'),
        'section'  => 'footer_setting',
        'default'  => esc_html__('#', 'kindedo'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'kindedo_footer_menu_switch',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'footer_contact_text',
        'label'    => esc_html__('Contact Text', 'kindedo'),
        'section'  => 'footer_setting',
        'default'  => esc_html__('Contact', 'kindedo'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'kindedo_footer_menu_switch',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type' => 'link',
        'settings' => 'footer_contact_link',
        'label' => esc_html__('Contact URL', 'kindedo'),
        'section' => 'footer_setting',
        'default' => esc_html__('#', 'kindedo'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting' => 'kindedo_footer_menu_switch',
                'operator' => '==',
                'value' => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'kindedo_copyright',
        'label'    => esc_html__('Copy Right', 'kindedo'),
        'section'  => 'footer_setting',
        'default'  => esc_html__('© 2023 All rights reserved | Design & Develop by BDevs', 'kindedo'),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'footer_copyright_switch',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];
    return $fields;
}
add_filter('kirki/fields', '_header_footer_fields');

// color
function kindedo_color_fields($fields)
{
    // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'kindedo_color_option',
        'label'       => __('Theme Color', 'kindedo'),
        'description' => esc_html__('This is a Theme color control.', 'kindedo'),
        'section'     => 'color_setting',
        'default'     => '#00BBAE',
        'priority'    => 10,
    ];


    $fields[] = [
        'type'        => 'color',
        'settings'    => 'kindedo_primary_color_option',
        'label'       => __('Primary Color', 'kindedo'),
        'description' => esc_html__('This is a Primary color control.', 'kindedo'),
        'section'     => 'color_setting',
        'default'     => '#FF9B24',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'kindedo_secondary_color_option',
        'label'       => __('Secondary Color', 'kindedo'),
        'description' => esc_html__('This is a Primary color control.', 'kindedo'),
        'section'     => 'color_setting',
        'default'     => '#DB1C29',
        'priority'    => 10,
    ];


    return $fields;
}
add_filter('kirki/fields', 'kindedo_color_fields');

// 404
function kindedo_404_fields($fields)
{
    // 404 settings
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'kindedo_404_bg',
        'label'       => esc_html__('404 Image.', 'kindedo'),
        'description' => esc_html__('404 Image.', 'kindedo'),
        'section'     => '404_page',
        'default'  => get_template_directory_uri() . '/assets/img/bg/error-404.svg',
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'kindedo_error_title',
        'label'    => esc_html__('Not Found Title', 'kindedo'),
        'section'  => '404_page',
        'default'  => esc_html__('Page not found', 'kindedo'),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'kindedo_error_desc',
        'label'    => esc_html__('404 Description Text', 'kindedo'),
        'section'  => '404_page',
        'default'  => esc_html__('Oops! The page you are looking for does not exist. It might have been moved or deleted', 'kindedo'),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'kindedo_error_link_text',
        'label'    => esc_html__('404 Link Text', 'kindedo'),
        'section'  => '404_page',
        'default'  => esc_html__('Back To Home', 'kindedo'),
        'priority' => 10,
    ];
    return $fields;
}
add_filter('kirki/fields', 'kindedo_404_fields');

/**
 * Added Fields
 */
function kindedo_typo_fields($fields)
{
    // typography settings
    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_body_setting',
        'label'       => esc_html__('Body Font', 'kindedo'),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'body',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h_setting',
        'label'       => esc_html__('Heading h1 Fonts', 'kindedo'),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h1',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h2_setting',
        'label'       => esc_html__('Heading h2 Fonts', 'kindedo'),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h2',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h3_setting',
        'label'       => esc_html__('Heading h3 Fonts', 'kindedo'),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h3',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h4_setting',
        'label'       => esc_html__('Heading h4 Fonts', 'kindedo'),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h4',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h5_setting',
        'label'       => esc_html__('Heading h5 Fonts', 'kindedo'),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h5',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h6_setting',
        'label'       => esc_html__('Heading h6 Fonts', 'kindedo'),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h6',
            ],
        ],
    ];
    return $fields;
}

add_filter('kirki/fields', 'kindedo_typo_fields');

/**
 * Added Fields
 */
function kindedo_slug_setting($fields)
{
    // slug settings
    $fields[] = [
        'type'     => 'text',
        'settings' => 'kindedo_sv_slug',
        'label'    => esc_html__('Service Slug', 'kindedo'),
        'section'  => 'slug_setting',
        'default'  => esc_html__('ourservices', 'kindedo'),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'kindedo_port_slug',
        'label'    => esc_html__('Portfolio Slug', 'kindedo'),
        'section'  => 'slug_setting',
        'default'  => esc_html__('ourportfolio', 'kindedo'),
        'priority' => 10,
    ];

    return $fields;
}

add_filter('kirki/fields', 'kindedo_slug_setting');


/* product settings */
function kindedo_product_fields($fields)
{

    $fields[] = [
        'type'     => 'toggle',
        'settings' => 'prating_show',
        'label'    => esc_html__('Product Rating On/Off', 'kindedo'),
        'section'  => 'kextra_setting',
        'default'  => true,
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'toggle',
        'settings' => 'pcart_show',
        'label'    => esc_html__('Cart Button On/Off', 'kindedo'),
        'section'  => 'kextra_setting',
        'default'  => true,
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'toggle',
        'settings' => 'pquick_show',
        'label'    => esc_html__('Quick View On/Off', 'kindedo'),
        'section'  => 'kextra_setting',
        'default'  => true,
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'toggle',
        'settings' => 'pwishlist_show',
        'label'    => esc_html__('Wishlist On/Off', 'kindedo'),
        'section'  => 'kextra_setting',
        'default'  => true,
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'toggle',
        'settings' => 'trating_show',
        'label'    => esc_html__('Tutor Rating On/Off', 'kindedo'),
        'section'  => 'kextra_setting',
        'default'  => true,
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'toggle',
        'settings' => 'trating_count',
        'label'    => esc_html__('Tutor Rating Count', 'kindedo'),
        'section'  => 'kextra_setting',
        'default'  => true,
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'toggle',
        'settings' => 'tsingle_meta',
        'label'    => esc_html__('Tutor Details Meta', 'kindedo'),
        'section'  => 'kextra_setting',
        'default'  => true,
        'priority' => 10,
    ];

    return $fields;
}
add_filter('kirki/fields', 'kindedo_product_fields');

/**
 * This is a short hand function for getting setting value from customizer
 *
 * @param string $name
 *
 * @return bool|string
 */
function kindedo_THEME_option($name)
{
    $value = '';
    if (class_exists('kindedo')) {
        $value = Kirki::get_option(kindedo_get_theme(), $name);
    }

    return apply_filters('kindedo_THEME_option', $value, $name);
}

/**
 * Get config ID
 *
 * @return string
 */
function kindedo_get_theme()
{
    return 'kindedo';
}

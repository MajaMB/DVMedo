<?php

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme madison for publication on ThemeForest
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

add_action('tgmpa_register', 'kindedo_register_required_plugins');

function kindedo_register_required_plugins()
{
    /*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */

    $url = 'https://codeskdhaka.com/wp/kindedo/source/';

    $plugins = [
        [
            'name'         => esc_html__('Elementor Page Builder', 'kindedo'),
            'slug'         => 'elementor',
            'required'     => true,
        ],
        [
            'name'         => esc_html__('Bdevs Toolkit ', 'kindedo'),
            'slug'         => 'bdevs-toolkit',
            'source'       => 'bdevs-toolkit.zip',
            'required'     => true,
        ],
        [
            'name'         => esc_html__('Bdevs Elementor ', 'kindedo'),
            'slug'         => 'bdevs-elementor',
            'source'       => 'bdevs-elementor.zip',
            'required'     => true,
        ],
        [
            'name'         => esc_html__('Advanced Custom Fields', 'kindedo'),
            'slug'         => 'advanced-custom-fields-pro',
            'source'       => 'advanced-custom-fields-pro.zip',
            'required'     => true,
        ],
        [
            'name'         => esc_html__('Tutor LMS', 'kindedo'),
            'slug'         => 'tutor',
            'required'     => false,
        ],
        [
            'name'         => esc_html__('Generic Elements For Elementor', 'kindedo'),
            'slug'         => 'generic-elements-for-elementor',
            'required'     => true,
        ],
        [
            'name'         => esc_html__('WP Classic Editor', 'kindedo'),
            'slug'         => 'classic-editor',
            'required'     => false,
        ],
        [
            'name'         => esc_html__('Contact Form 7', 'kindedo'),
            'slug'         => 'contact-form-7',
            'required'     => false,
        ],
        [
            'name'         => esc_html__('One Click Demo Import', 'kindedo'),
            'slug'         => 'one-click-demo-import',
            'required'     => false,
        ],
        [
            'name'         => esc_html__('Mailchimp For WP', 'kindedo'),
            'slug'         => 'mailchimp-for-wp',
            'required'     => false,
        ],
        [
            'name'         =>  esc_html__('Kirki Customizer Framework', 'kindedo'),
            'slug'         => 'kirki',
            'required'     => false,
        ],
        [
            'name'         =>  esc_html__('Breadcrumb NavXT', 'kindedo'),
            'slug'         => 'breadcrumb-navxt',
            'required'     => false,
        ],
        [
            'name'         => esc_html__('WooCommerce', 'kindedo'),
            'slug'         => 'woocommerce',
            'required'     => false,
        ],
        [
            'name'         => esc_html__('TI WooCommerce Wishlist', 'kindedo'),
            'slug'         => 'ti-woocommerce-wishlist',
            'required'     => false,
        ],
        [
            'name'         => esc_html__('Woo Smart Quick View', 'kindedo'),
            'slug'         => 'woo-smart-quick-view',
            'required'     => false,
        ],
    ];
    $config = [
        'id'           => 'kindedo', // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => $url, // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true, // Show admin notices or not.
        'dismissable'  => true, // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '', // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false, // Automatically activate plugins after installation or not.
        'message'      => '', // Message to output right before the plugins table.

        'strings'      => [
            'page_title'                      => esc_html__('Install Required Plugins', 'kindedo'),
            'menu_title'                      => esc_html__('Install Plugins', 'kindedo'),
            'installing'                      => esc_html__('Installing Plugin: %s', 'kindedo'),
            'updating'                        => esc_html__('Updating Plugin: %s', 'kindedo'),
            'oops'                            => esc_html__('Something went wrong with the plugin API.', 'kindedo'),
            'notice_can_install_required'     => _n_noop(
                'This theme requires the following plugin: %1$s.',
                'This theme requires the following plugins: %1$s.',
                'kindedo'
            ),
            'notice_can_install_recommended'  => _n_noop(
                'This theme recommends the following plugin: %1$s.',
                'This theme recommends the following plugins: %1$s.',
                'kindedo'
            ),
            'notice_ask_to_update'            => _n_noop(
                'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
                'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
                'kindedo'
            ),
            'notice_ask_to_update_maybe'      => _n_noop(
                'There is an update available for: %1$s.',
                'There are updates available for the following plugins: %1$s.',
                'kindedo'
            ),
            'notice_can_activate_required'    => _n_noop(
                'The following required plugin is currently inactive: %1$s.',
                'The following required plugins are currently inactive: %1$s.',
                'kindedo'
            ),
            'notice_can_activate_recommended' => _n_noop(
                'The following recommended plugin is currently inactive: %1$s.',
                'The following recommended plugins are currently inactive: %1$s.',
                'kindedo'
            ),
            'install_link'                    => _n_noop(
                'Begin installing plugin',
                'Begin installing plugins',
                'kindedo'
            ),
            'update_link'                     => _n_noop(
                'Begin updating plugin',
                'Begin updating plugins',
                'kindedo'
            ),
            'activate_link'                   => _n_noop(
                'Begin activating plugin',
                'Begin activating plugins',
                'kindedo'
            ),
            'return'                          => esc_html__('Return to Required Plugins Installer', 'kindedo'),
            'plugin_activated'                => esc_html__('Plugin activated successfully.', 'kindedo'),
            'activated_successfully'          => esc_html__('The following plugin was activated successfully:', 'kindedo'),
            'plugin_already_active'           => esc_html__('No action taken. Plugin %1$s was already active.', 'kindedo'),
            'plugin_needs_higher_version'     => esc_html__('Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'kindedo'),
            'complete'                        => esc_html__('All plugins installed and activated successfully. %1$s', 'kindedo'),
            'dismiss'                         => esc_html__('Dismiss this notice', 'kindedo'),
            'notice_cannot_install_activate'  => esc_html__('There are one or more required or recommended plugins to install, update or activate.', 'kindedo'),
            'contact_admin'                   => esc_html__('Please contact the administrator of this site for help.', 'kindedo'),
            'nag_type'                        => '',
        ],
    ];
    tgmpa($plugins, $config);
}

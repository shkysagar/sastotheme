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
 * @version    2.6.1 for parent theme Creta for publication on ThemeForest
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 *
 * Depending on your implementation, you may want to change the include call:
 *
 * Parent Theme:
 * require_once get_template_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Child Theme:
 * require_once get_stylesheet_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Plugin:
 * require_once dirname( __FILE__ ) . '/path/to/class-tgm-plugin-activation.php';
 */

require_once ( get_template_directory(). '/includes/tgm_activation/class-tgm-plugin-activation.php');

add_action('tgmpa_register', 'magikCreta_register_required_plugins');

function magikCreta_register_required_plugins()
{

    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(


        array(
            'name' => 'Redux Framework', // The plugin name.
            'slug' => 'redux-framework', // The plugin slug (typically the folder name).
            'required' => true, // If false, the plugin is only 'recommended' instead of required.

        ),

        array(
            'name' => 'WooCommerce', // The plugin name.
            'slug' => 'woocommerce', // The plugin slug (typically the folder name).
            'required' => true, // If false, the plugin is only 'recommended' instead of required.

        ),


        array(
            'name' => 'YITH Woocommerce Compare', // The plugin name.
            'slug' => 'yith-woocommerce-compare', // The plugin slug (typically the folder name).
            'required' => true, // If false, the plugin is only 'recommended' instead of required.

        ),

        array(
            'name' => 'YITH WooCommerce Quick View', // The plugin name.
            'slug' => 'yith-woocommerce-quick-view', // The plugin slug (typically the folder name).
            'required' => true, // If false, the plugin is only 'recommended' instead of required.

        ),
        array(
            'name' => 'YITH WooCommerce Wishlist', // The plugin name.
            'slug' => 'yith-woocommerce-wishlist', // The plugin slug (typically the folder name).
            'required' => true, // If false, the plugin is only 'recommended' instead of required.

        ),
         array(
            'name' => 'MailChimp for WordPress', // The plugin name.
            'slug' => 'mailchimp-for-wp', // The plugin slug (typically the folder name).
            'required' => false, // If false, the plugin is only 'recommended' instead of required.

        )
    );

  /*
     * Array of configuration settings. Amend each line as needed.
     *
     * TGMPA will start providing localized text strings soon. If you already have translations of our standard
     * strings available, please help us make TGMPA even better by giving us access to these translations or by
     * sending in a pull-request with .po file(s) with the translations.
     *
     * Only uncomment the strings in the config array if you want to customize the strings.
     */
    $config = array(
        'id'           => 'creta',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.

        /*
        'strings'      => array(
            'page_title'                      => __( 'Install Required Plugins', 'creta' ),
            'menu_title'                      => __( 'Install Plugins', 'creta' ),
            'installing'                      => __( 'Installing Plugin: %s', 'creta' ), // %s = plugin name.
            'oops'                            => __( 'Something went wrong with the plugin API.', 'creta' ),
            'notice_can_install_required'     => _n_noop(
                'This theme requires the following plugin: %1$s.',
                'This theme requires the following plugins: %1$s.',
                'creta'
            ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop(
                'This theme recommends the following plugin: %1$s.',
                'This theme recommends the following plugins: %1$s.',
                'creta'
            ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop(
                'Sorry, but you do not have the correct permissions to install the %1$s plugin.',
                'Sorry, but you do not have the correct permissions to install the %1$s plugins.',
                'creta'
            ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop(
                'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
                'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
                'creta'
            ), // %1$s = plugin name(s).
            'notice_ask_to_update_maybe'      => _n_noop(
                'There is an update available for: %1$s.',
                'There are updates available for the following plugins: %1$s.',
                'creta'
            ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop(
                'Sorry, but you do not have the correct permissions to update the %1$s plugin.',
                'Sorry, but you do not have the correct permissions to update the %1$s plugins.',
                'creta'
            ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop(
                'The following required plugin is currently inactive: %1$s.',
                'The following required plugins are currently inactive: %1$s.',
                'creta'
            ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop(
                'The following recommended plugin is currently inactive: %1$s.',
                'The following recommended plugins are currently inactive: %1$s.',
                'creta'
            ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop(
                'Sorry, but you do not have the correct permissions to activate the %1$s plugin.',
                'Sorry, but you do not have the correct permissions to activate the %1$s plugins.',
                'creta'
            ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop(
                'Begin installing plugin',
                'Begin installing plugins',
                'creta'
            ),
            'update_link'                     => _n_noop(
                'Begin updating plugin',
                'Begin updating plugins',
                'creta'
            ),
            'activate_link'                   => _n_noop(
                'Begin activating plugin',
                'Begin activating plugins',
                'creta'
            ),
            'return'                          => __( 'Return to Required Plugins Installer', 'creta' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'creta' ),
            'activated_successfully'          => __( 'The following plugin was activated successfully:', 'creta' ),
            'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'creta' ),  // %1$s = plugin name(s).
            'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'creta' ),  // %1$s = plugin name(s).
            'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'creta' ), // %s = dashboard link.
            'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'creta' ),

            'nag_type'                        => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        ),
        */
    );

    tgmpa( $plugins, $config );
}

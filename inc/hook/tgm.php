<?php
/**
 * TGM implementation.
 *
 * @package Mediclean
 */

require_once get_template_directory() . '/lib/tgm/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'mediclean_register_recommended_plugins' );

/**
 * Register recommended plugins.
 *
 * @since 1.0.0
 */
function mediclean_register_recommended_plugins() {

	// Plugins.
	$plugins = array(
		array(
			'name' => __( 'Contact Form 7', 'mediclean' ),
			'slug' => 'contact-form-7',
		),
		array(
			'name'             => __( 'Github Updater', 'mediclean' ),
			'slug'             => 'github-updater',
			'source'           => get_template_directory() . '/plugins/github-updater.zip',
			'force_activation' => true,
		),
	);

	// TGM configurations.
	$config = array(
	);

	// Register now.
	tgmpa( $plugins, $config );

}


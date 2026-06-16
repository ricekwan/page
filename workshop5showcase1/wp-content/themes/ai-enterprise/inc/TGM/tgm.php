<?php
	
load_template( get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php' );

/**
 * Recommended plugins.
 */
function ai_enterprise_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Essential Blocks', 'ai-enterprise' ),
			'slug'             => 'essential-blocks',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	ai_enterprise_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'ai_enterprise_register_recommended_plugins' );
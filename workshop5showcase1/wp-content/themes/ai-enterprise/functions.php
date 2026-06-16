<?php
/**
 * AI Enterprise functions and definitions
 *
 * @package AI Enterprise
 */

if ( ! function_exists( 'ai_enterprise_setup' ) ) :
function ai_enterprise_setup() {

	global $content_width;

	if ( ! isset( $content_width ) ) {
		$content_width = 640;
	}

	// Theme version
	if ( ! defined( 'AI_ENTERPRISE_VERSION' ) ) {
		define( 'AI_ENTERPRISE_VERSION', wp_get_theme()->get( 'Version' ) );
	}

	// Load text domain
	load_theme_textdomain( 'ai-enterprise', get_template_directory() . '/languages' );

	// Theme supports
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );

	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff',
	) );

	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );

	// WooCommerce
	add_theme_support( 'woocommerce' );

	// Editor styles
	add_editor_style( array( 'assets/css/editor-style.css' ) );
	
	require get_parent_theme_file_path( '/inc/dashboard/dashboard.php' );

	require get_parent_theme_file_path( '/inc/admin/theme-upsell.php' );

    require get_parent_theme_file_path( '/inc/customizer/customizer.php' );

}
endif;
add_action( 'after_setup_theme', 'ai_enterprise_setup' );

/**
 * Enqueue scripts and styles
 */
function ai_enterprise_scripts() {

	$ai_enterprise_version = AI_ENTERPRISE_VERSION;

	// Main stylesheet
	wp_enqueue_style(
		'ai-enterprise-basic-style',
		get_stylesheet_uri(),
		array(),
		$ai_enterprise_version
	);

	// Animate CSS
	wp_enqueue_style(
		'animate-css',
		get_template_directory_uri() . '/assets/css/animate.css',
		array(),
		$ai_enterprise_version
	);

	// Font Awesome
	wp_enqueue_style(
		'fontawesome',
		get_template_directory_uri() . '/assets/font-awesome/css/all.css',
		array(),
		'7.0.0'
	);

	// Owl Carousel CSS
	wp_enqueue_style(
		'owl-carousel-style',
		get_template_directory_uri() . '/assets/css/owl-carousel.css',
		array(),
		$ai_enterprise_version
	);

	// WOW JS
	wp_enqueue_script(
		'wow-js',
		get_template_directory_uri() . '/assets/js/wow.js',
		array( 'jquery' ),
		$ai_enterprise_version,
		true
	);

	// Owl Carousel JS
	wp_enqueue_script(
		'owl-carousel-js',
		get_template_directory_uri() . '/assets/js/owl-carousel.js',
		array( 'jquery' ),
		$ai_enterprise_version,
		true
	);

	// Main Script
	wp_enqueue_script(
		'ai-enterprise-main-script',
		get_template_directory_uri() . '/assets/js/script.js',
		array( 'jquery', 'wow-js' ),
		$ai_enterprise_version,
		true
	);

	// RTL support
	wp_style_add_data( 'ai-enterprise-basic-style', 'rtl', 'replace' );
}
add_action( 'wp_enqueue_scripts', 'ai_enterprise_scripts' );


function ai_enterprise_enqueue_admin_script($hook) {
    // Enqueue admin JS for notices
    wp_enqueue_script('ai-enterprise-welcome-notice', get_template_directory_uri() . '/inc/dashboard/ai-enterprise-welcome-notice.js', array('jquery'), '', true);
    
    // Localize script to pass data to JavaScript
    wp_localize_script('ai-enterprise-welcome-notice', 'ai_enterprise_localize', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('ai_enterprise_welcome_nonce'),
        'dismiss_nonce' => wp_create_nonce('ai_enterprise_welcome_nonce'), // Nonce for dismissal
        'redirect_url' => admin_url('themes.php?page=ai-enterprise-guide-page')
    ));
}
add_action('admin_enqueue_scripts', 'ai_enterprise_enqueue_admin_script');

function ai_enterprise_admin_theme_style() {
   wp_enqueue_style('ai-enterprise-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
   wp_enqueue_style('ai-enterprise-admin-upsell-style', esc_url(get_template_directory_uri()) . '/assets/css/admin-style.css');
}
add_action('admin_enqueue_scripts', 'ai_enterprise_admin_theme_style');

add_filter( 'woocommerce_enable_setup_wizard', '__return_false' );

// add_action( 'admin_init', function() {
//     update_option( 'essential_blocks_quick_setup_shown', true );
//     update_option( 'essential_blocks_user_type', 'old' );
//     remove_submenu_page( 'admin.php', 'eb-quick-setup' );
// });

// Block Patterns.
require get_template_directory() . '/block-patterns.php';
require get_template_directory() . '/custom-setting.php';
require get_template_directory() .'/inc/TGM/tgm.php';
require_once get_template_directory() . '/inc/dashboard/welcome-notice.php';

/**
 * Redirect to Pro upsell page after theme activation
 */

add_action('after_switch_theme', 'ai_enterprise_redirect_after_activation');
function ai_enterprise_redirect_after_activation() {
    if ( ! get_option( 'ai_enterprise_activation_redirect', false ) ) {
        update_option( 'ai_enterprise_activation_redirect', true );
        wp_safe_redirect( admin_url( 'themes.php?page=ai-enterprise-pro' ) );
        exit;
    }
}

add_action( 'admin_bar_menu', 'ai_enterprise_add_upgrade_button', 100 );

function ai_enterprise_add_upgrade_button( $ai_enterprise_wp_admin_bar ) {

    $ai_enterprise_theme_name = wp_get_theme()->get( 'Name' );

    $ai_enterprise_args = array(
        'id'    => 'ai_enterprise_upgrade',
        'title' => '<span style="color:#fff;font-weight:600;">
            🚀 Upgrade to ' . esc_html( $ai_enterprise_theme_name ) . ' Pro - 20% OFF 
            <span style="background:#ff5722;color:#fff;padding:2px 8px;border-radius:3px;margin-left:6px;">
                Buy Now
            </span>
        </span>',
        'href'  => esc_url( AI_ENTERPRISE_BUY_PRO ),
        'meta'  => array(
            'class'  => 'ai-enterprise-upgrade-btn',
            'title'  => 'Upgrade to Pro',
            'target' => '_blank'
        )
    );

    $ai_enterprise_wp_admin_bar->add_node( $ai_enterprise_args );
}
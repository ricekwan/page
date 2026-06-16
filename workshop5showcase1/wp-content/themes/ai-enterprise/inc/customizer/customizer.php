<?php
/**
 * AI Enterprise: Customizer
 *
 * @subpackage AI Enterprise
 * @since 1.0
 */

function ai_enterprise_customize_register( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/inc/customizer/customizer.css');

	$wp_customize->add_section('ai_enterprise_premium_features_section', array(
		'title'    => __('🔒 Unlock Premium Features', 'ai-enterprise'),
		'priority' => 2,
	));
	
	$wp_customize->add_setting('ai_enterprise_premium_features');
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'ai_enterprise_premium_features',
			array(
				'section'     => 'ai_enterprise_premium_features_section',
				'type'        => 'hidden',
				'description' => '<div style="background: linear-gradient(135deg, #2B136B 0%, #A47AE2 100%); padding: 20px; border-radius: 8px; text-align: center; color: #fff;">
									<h3 style="margin-top: 0; color: #fff;">' . __('Unlock Advanced Features', 'ai-enterprise') . '</h3>
									<p style="margin: 15px 0;">' . __('Upgrade to Pro to get:', 'ai-enterprise') . '</p>
									<ul style="list-style: none; padding: 0; text-align: left; max-width: 300px; margin: 20px auto;">
										<li style="margin-bottom: 10px;">✓ ' . __('12+ Premium Header Layouts', 'ai-enterprise') . '</li>
										<li style="margin-bottom: 10px;">✓ ' . __('Advanced Footer Builder', 'ai-enterprise') . '</li>
										<li style="margin-bottom: 10px;">✓ ' . __('Typography Controls', 'ai-enterprise') . '</li>
										<li style="margin-bottom: 10px;">✓ ' . __('WooCommerce Styling Options', 'ai-enterprise') . '</li>
										<li style="margin-bottom: 10px;">✓ ' . __('Priority Support', 'ai-enterprise') . '</li>
										<li style="margin-bottom: 10px;">✓ ' . __('One-Click Demo Import', 'ai-enterprise') . '</li>
									</ul>
									<a href="' . esc_url(admin_url('themes.php?page=ai-enterprise-pro')) . '" 
									   style="display: inline-block; background: #fff; color: #667eea; padding: 12px 30px; text-decoration: none; border-radius: 4px; font-weight: 600; margin: 10px 5px; transition: all 0.3s;">
									   ' . __('View All Features', 'ai-enterprise') . '
									</a>
									<a href="' . esc_url(AI_ENTERPRISE_BUY_PRO) . '" target="_blank" 
									   style="display: inline-block; background: #ffc107; color: #333; padding: 12px 30px; text-decoration: none; border-radius: 4px; font-weight: 600; margin: 10px 5px;">
									   ' . __('Upgrade Now 🚀', 'ai-enterprise') . '
									</a>
									<a href="' . esc_url(AI_ENTERPRISE_BUNDLE_LINK) . '" target="_blank" 
									   style="display: inline-block; background: #28a745; color: #fff; padding: 12px 30px; text-decoration: none; border-radius: 4px; font-weight: 600; margin: 10px 5px;">
									   ' . __('WordPress Bundle 🎁', 'ai-enterprise') . '
									</a>
								  </div>',
			)
		)
	);
}
add_action( 'customize_register', 'ai_enterprise_customize_register' );
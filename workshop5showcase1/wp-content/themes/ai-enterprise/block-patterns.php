<?php
/**
 * AI Enterprise: Block Patterns
 *
 * @since AI Enterprise 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since AI Enterprise 1.0
 *
 * @return void
 */
function ai_enterprise_register_block_patterns() {
	$ai_enterprise_block_pattern_categories = array(
		'ai-enterprise'    => array( 'label' => esc_html__( 'AI Enterprise', 'ai-enterprise' ) ),
	);

	$ai_enterprise_block_pattern_categories = apply_filters( 'ai_enterprise_block_pattern_categories', $ai_enterprise_block_pattern_categories );

	foreach ( $ai_enterprise_block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'ai_enterprise_register_block_patterns', 9 );

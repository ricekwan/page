<?php
/**
 * Theme Upsell Page
 * 
 * @package AI Enterprise
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Add theme upsell page to admin menu
 */
add_action( 'admin_menu', 'ai_enterprise_add_theme_page' );
function ai_enterprise_add_theme_page() {
    add_theme_page(
        __( 'Upgrade to PRO', 'ai-enterprise' ),
        __( 'Upgrade to PRO', 'ai-enterprise' ),
        'manage_options',
        'ai-enterprise-pro',
        'ai_enterprise_pro_page_callback'
    );
}
/**
 * Render theme upsell page
 */
function ai_enterprise_pro_page_callback() {
    ?>
    <div class="wrap ot-pro-wrap">
        <h1><?php esc_html_e('Upgrade to AI Enterprise Pro 🚀', 'ai-enterprise'); ?></h1>
        
        <div class="ot-pro-hero">
            <div class="hero-content">
                <div class="hero-left">
                    <h2><?php esc_html_e('Take Your AI Enterprise Business to the Next Level', 'ai-enterprise'); ?></h2>
                    <p class="subtitle"><?php esc_html_e('Get access to premium features, advanced layouts, and priority support', 'ai-enterprise'); ?></p>
                    <div class="button-group">
                        <?php
                        // Check if theme is FSE (block theme) or customizer based
                        if ( function_exists( 'wp_is_block_theme' ) && wp_is_block_theme() ) {
                            // Block theme - link to Site Editor
                            $editor_url = admin_url( 'site-editor.php' );
                            $editor_text = __('Site Editor', 'ai-enterprise');
                            $editor_icon = 'dashicons-layout';
                        } else {
                            // Classic theme - link to Customizer
                            $editor_url = admin_url( 'customize.php' );
                            $editor_text = __('Customize', 'ai-enterprise');
                            $editor_icon = 'dashicons-admin-customizer';
                        }
                        // Check if the Ovation Elements plugin is active
                        $is_plugin_active = is_plugin_active('ovation-elements/ovation-elements.php');
                        ?>
                        <a class="button button-hero button-primary theme-install" id="install-activate-button" href="#" style="display:<?php echo $is_plugin_active ? 'none' : 'inline-flex'; ?> !important;">
                            <span class="dashicons dashicons-download"></span>
                            <?php _e('Begin Installation', 'ai-enterprise'); ?>
                        </a>
                        <a class="button button-hero button-success" id="view-site-button" href="<?php echo esc_url( home_url('/') ); ?>" target="_blank" style="display:<?php echo $is_plugin_active ? 'inline-flex' : 'none'; ?> !important;">
                            <span class="dashicons dashicons-admin-site"></span>
                            <?php _e('View Site', 'ai-enterprise'); ?>
                        </a>
                        <a target="_blank" href="<?php echo esc_url( $editor_url ); ?>" class="button button-hero button-customize" style="display:<?php echo $is_plugin_active ? 'inline-flex' : 'none'; ?> !important;">
                            <span class="dashicons <?php echo esc_attr( $editor_icon ); ?>"></span>
                            <?php echo esc_html( $editor_text ); ?>
                        </a>
                        <a href="<?php echo esc_url( AI_ENTERPRISE_LIVE_DEMO ); ?>" target="_blank" class="button button-hero button-demo">
                            <span class="dashicons dashicons-visibility"></span>
                            <?php esc_html_e('Live Demo', 'ai-enterprise'); ?>
                        </a>
                        <a href="<?php echo esc_url( AI_ENTERPRISE_BUY_PRO ); ?>" target="_blank" class="button button-primary button-hero button-pro">
                            <span class="dashicons dashicons-star-filled"></span>
                            <?php esc_html_e('Get Pro Theme', 'ai-enterprise'); ?>
                        </a>
                        <a href="<?php echo esc_url( AI_ENTERPRISE_FREE_DOC ); ?>" target="_blank" class="button button-hero button-docs">
                            <span class="dashicons dashicons-book"></span>
                            <?php esc_html_e('Documentation', 'ai-enterprise'); ?>
                        </a>
                        <a href="<?php echo esc_url( AI_ENTERPRISE_BUNDLE_LINK ); ?>" target="_blank" class="button button-hero button-bundle">
                            <span class="dashicons dashicons-cart"></span>
                            <?php esc_html_e('WordPress Theme Bundle', 'ai-enterprise'); ?>
                        </a>
                    </div>
                </div>
                <div class="hero-right">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="<?php esc_attr_e('AI Enterprise Theme Screenshot', 'ai-enterprise'); ?>" class="theme-screenshot">
                </div>
            </div>
        </div>

        <div class="ot-pro-features">
            <h2><?php esc_html_e('Why Upgrade to Pro?', 'ai-enterprise'); ?></h2>
            
            <div class="feature-grid">
                <div class="feature-box">
                    <span class="dashicons dashicons-layout"></span>
                    <h3><?php esc_html_e('Different styling Options', 'ai-enterprise'); ?></h3>
                    <p><?php esc_html_e('This content will change based on different styling options.', 'ai-enterprise'); ?></p>
                </div>
                
                <div class="feature-box">
                    <span class="dashicons dashicons-admin-customizer"></span>
                    <h3><?php esc_html_e('Section Reordering Option', 'ai-enterprise'); ?></h3>
                    <p><?php esc_html_e('Sections can be reordered or rearranged as per your preference.', 'ai-enterprise'); ?></p>
                </div>
                
                <div class="feature-box">
                    <span class="dashicons dashicons-editor-table"></span>
                    <h3><?php esc_html_e('Footer Builder', 'ai-enterprise'); ?></h3>
                    <p><?php esc_html_e('Create custom footers with advanced widgets', 'ai-enterprise'); ?></p>
                </div>
                
                <div class="feature-box">
                    <span class="dashicons dashicons-art"></span>
                    <h3><?php esc_html_e('Typography Controls', 'ai-enterprise'); ?></h3>
                    <p><?php esc_html_e('Full control over fonts, sizes, and text styling', 'ai-enterprise'); ?></p>
                </div>
                
                <div class="feature-box">
                    <span class="dashicons dashicons-cart"></span>
                    <h3><?php esc_html_e('WooCommerce Styling', 'ai-enterprise'); ?></h3>
                    <p><?php esc_html_e('Advanced WooCommerce integration with custom product layouts', 'ai-enterprise'); ?></p>
                </div>
                
                <div class="feature-box">
                    <span class="dashicons dashicons-admin-tools"></span>
                    <h3><?php esc_html_e('Advanced Options', 'ai-enterprise'); ?></h3>
                    <p><?php esc_html_e('Advanced theme options available for themes', 'ai-enterprise'); ?></p>
                </div>
                
                <div class="feature-box">
                    <span class="dashicons dashicons-performance"></span>
                    <h3><?php esc_html_e('Performance Optimized', 'ai-enterprise'); ?></h3>
                    <p><?php esc_html_e('3X faster loading with optimized code and assets', 'ai-enterprise'); ?></p>
                </div>
                
                <div class="feature-box">
                    <span class="dashicons dashicons-sos"></span>
                    <h3><?php esc_html_e('Priority Support', 'ai-enterprise'); ?></h3>
                    <p><?php esc_html_e('Get expert help within 24 hours through our priority support system', 'ai-enterprise'); ?></p>
                </div>
                
                <div class="feature-box">
                    <span class="dashicons dashicons-admin-appearance"></span>
                    <h3><?php esc_html_e('Unlimited Color Schemes', 'ai-enterprise'); ?></h3>
                    <p><?php esc_html_e('Customize every color to match your brand identity with unlimited color options', 'ai-enterprise'); ?></p>
                </div>
                
                <div class="feature-box">
                    <span class="dashicons dashicons-download"></span>
                    <h3><?php esc_html_e('One-Click Demo Import', 'ai-enterprise'); ?></h3>
                    <p><?php esc_html_e('Import complete demo content with just one click and get started instantly', 'ai-enterprise'); ?></p>
                </div>
            </div>
        </div>

        <div class="ot-pro-comparison">
            <h2><?php esc_html_e('Free vs Pro Comparison', 'ai-enterprise'); ?></h2>
            
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th><?php esc_html_e('Feature', 'ai-enterprise'); ?></th>
                        <th><?php esc_html_e('Free', 'ai-enterprise'); ?></th>
                        <th class="pro-col"><?php esc_html_e('Pro', 'ai-enterprise'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php esc_html_e('Typography Controls', 'ai-enterprise'); ?></td>
                        <td><?php esc_html_e('Limited', 'ai-enterprise'); ?></td>
                        <td class="pro-col"><?php esc_html_e('Full Control', 'ai-enterprise'); ?></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('WooCommerce Styling', 'ai-enterprise'); ?></td>
                        <td>❌</td>
                        <td class="pro-col">✅</td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Custom Widgets', 'ai-enterprise'); ?></td>
                        <td><?php esc_html_e('Basic', 'ai-enterprise'); ?></td>
                        <td class="pro-col"><?php esc_html_e('Advanced', 'ai-enterprise'); ?></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Color Schemes', 'ai-enterprise'); ?></td>
                        <td><?php esc_html_e('Limited', 'ai-enterprise'); ?></td>
                        <td class="pro-col"><?php esc_html_e('Unlimited', 'ai-enterprise'); ?></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Demo Import', 'ai-enterprise'); ?></td>
                        <td>❌</td>
                        <td class="pro-col">✅</td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Priority Support', 'ai-enterprise'); ?></td>
                        <td>❌</td>
                        <td class="pro-col">✅</td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Custom Post Types', 'ai-enterprise'); ?></td>
                        <td>❌</td>
                        <td class="pro-col">✅</td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Page Builder Integration', 'ai-enterprise'); ?></td>
                        <td><?php esc_html_e('Gutenberg', 'ai-enterprise'); ?></td>
                        <td class="pro-col"><?php esc_html_e('Gutenberg/Customizer', 'ai-enterprise'); ?></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Speed Optimization', 'ai-enterprise'); ?></td>
                        <td><?php esc_html_e('Standard', 'ai-enterprise'); ?></td>
                        <td class="pro-col"><?php esc_html_e('Advanced (3X Faster)', 'ai-enterprise'); ?></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Sticky Header', 'ai-enterprise'); ?></td>
                        <td>❌</td>
                        <td class="pro-col">✅</td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Preloader Options', 'ai-enterprise'); ?></td>
                        <td>❌</td>
                        <td class="pro-col">✅</td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Blog Layouts', 'ai-enterprise'); ?></td>
                        <td><?php esc_html_e('1', 'ai-enterprise'); ?></td>
                        <td class="pro-col"><?php esc_html_e('Advanced', 'ai-enterprise'); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="ot-pro-testimonials">
            <h2><?php esc_html_e('What Our Users Say', 'ai-enterprise'); ?></h2>
            
        <div class="testimonial-grid">
            <div class="testimonial-box">
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <p><?php esc_html_e('"I was looking for a clean and professional theme for My AI website and this theme delivered exactly that. Setup was quick and the layout looks very modern."', 'ai-enterprise'); ?></p>
                <span class="author"><?php esc_html_e('- John D.', 'ai-enterprise'); ?></span>
            </div>

            <div class="testimonial-box">
                <div class="stars">⭐⭐⭐⭐</div>
                <p><?php esc_html_e('"The theme design is professional and easy to customize. The documentation helped me set up my accounting website without any issues."', 'ai-enterprise'); ?></p>
                <span class="author"><?php esc_html_e('- Sarah M.', 'ai-enterprise'); ?></span>
            </div>

            <div class="testimonial-box">
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <p><?php esc_html_e('"Very flexible and beginner-friendly. I was able to adjust colors, sections, and layouts directly from the Customizer. Highly recommended."', 'ai-enterprise'); ?></p>
                <span class="author"><?php esc_html_e('- Michael R.', 'ai-enterprise'); ?></span>
            </div>

            <div class="testimonial-box">
                <div class="stars">⭐⭐⭐⭐</div>
                <p><?php esc_html_e('"The mobile responsive design works perfectly. Most of my clients visit from their phones, and the site looks clean and professional."', 'ai-enterprise'); ?></p>
                <span class="author"><?php esc_html_e('- Emily T.', 'ai-enterprise'); ?></span>
            </div>

            <div class="testimonial-box">
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <p><?php esc_html_e('"Great theme for tax professionals. The service sections and homepage layout helped me present my services clearly to potential clients."', 'ai-enterprise'); ?></p>
                <span class="author"><?php esc_html_e('- David L.', 'ai-enterprise'); ?></span>
            </div>

            <div class="testimonial-box">
                <div class="stars">⭐⭐⭐⭐</div>
                <p><?php esc_html_e('"Customer support is very helpful and responsive. They guided me during setup and solved my issue quickly."', 'ai-enterprise'); ?></p>
                <span class="author"><?php esc_html_e('- Jennifer K.', 'ai-enterprise'); ?></span>
            </div>

            <div class="testimonial-box">
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <p><?php esc_html_e('"Fast loading and SEO friendly. After launching my website with this theme, I started receiving more inquiries from clients."', 'ai-enterprise'); ?></p>
                <span class="author"><?php esc_html_e('- Robert H.', 'ai-enterprise'); ?></span>
            </div>

            <div class="testimonial-box">
                <div class="stars">⭐⭐⭐⭐</div>
                <p><?php esc_html_e('"A very good theme with useful features for financial and consulting businesses. Easy to install and configure."', 'ai-enterprise'); ?></p>
                <span class="author"><?php esc_html_e('- Lisa P.', 'ai-enterprise'); ?></span>
            </div>
        </div>
        </div>

        <div class="ot-pro-cta">
            <h2><?php esc_html_e('Ready to Upgrade?', 'ai-enterprise'); ?></h2>
            <p><?php esc_html_e('Join hundreds of satisfied customers who upgraded to Pro', 'ai-enterprise'); ?></p>
            <a href="<?php echo esc_url( AI_ENTERPRISE_BUY_PRO ); ?>" target="_blank" class="button button-primary button-hero">
                <?php esc_html_e('Get AI Enterprise Pro Now', 'ai-enterprise'); ?> →
            </a>
        </div>

        <div class="ot-pro-footer">
            <p><?php printf( __('Need help? Contact our <a href="%s" target="_blank">support</a> team anytime.', 'ai-enterprise'), esc_url( AI_ENTERPRISE_SUPPORT ) ); ?></p>
        </div>
    </div>
    <?php
}

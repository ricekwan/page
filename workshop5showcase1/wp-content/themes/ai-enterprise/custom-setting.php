<?php 

function ai_enterprise_add_admin_menu() {
    add_menu_page(
        'Theme Settings', // Page title
        'Theme Settings', // Menu title
        'manage_options', // Capability
        'ai-enterprise-theme-settings', // Menu slug
        'ai_enterprise_settings_page' // Function to display the page
    );
}
add_action( 'admin_menu', 'ai_enterprise_add_admin_menu' );

function ai_enterprise_settings_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Theme Settings', 'ai-enterprise' ); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields( 'ai_enterprise_settings_group' );
            do_settings_sections( 'ai-enterprise-theme-settings' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function ai_enterprise_register_settings() {
    register_setting( 'ai_enterprise_settings_group', 'ai_enterprise_enable_animations' );

    add_settings_section(
        'ai_enterprise_settings_section',
        __( 'Animation Settings', 'ai-enterprise' ),
        null,
        'ai-enterprise-theme-settings'
    );

    add_settings_field(
        'ai_enterprise_enable_animations',
        __( 'Enable Animations', 'ai-enterprise' ),
        'ai_enterprise_enable_animations_callback',
        'ai-enterprise-theme-settings',
        'ai_enterprise_settings_section'
    );
}
add_action( 'admin_init', 'ai_enterprise_register_settings' );

function ai_enterprise_enable_animations_callback() {
    $checked = get_option( 'ai_enterprise_enable_animations', true );
    ?>
    <input type="checkbox" name="ai_enterprise_enable_animations" value="1" <?php checked( 1, $checked ); ?> />
    <?php
}


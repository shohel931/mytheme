<?php 


// Theme Settings API
function footer_settings_page() {
    add_option_page(
        'Footer Setting',
        'Footer',
        'manage_options',
        'footer-settings',
        'footer_settings_page'
    );
}
add_action('admin_menu','footer_settings_page');

function footer_settings_page() {
    ?>
    <div class="wrap">
        <h1>Footer Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('footer-settings-group');
            do_settings_sections('footer-settings-group');
            ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Footer Text</th>
                    <td><input type="text" name="footer_text" value="<?php echo get_option('footer_text'); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Footer Link</th>
                    <td><input type="text" name="footer_link" value="<?php echo get_option('footer_link'); ?>" /></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}
add_action('admin_init', 'footer_settings_init');
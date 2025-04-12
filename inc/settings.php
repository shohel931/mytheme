<?php 





function my_custom_settings_menu() {
    add_options_page(
        'Header',     // Page title
        'Header',     // Menu title
        'manage_options',        // Capability
        'header',     // Menu slug
        'header-setting' // Callback function
    );
}
add_action('admin_menu', 'my_custom_settings_menu');

function settings_api() {
    add_settings_field('footer', 'Footer', 'footer_func', 'Header');
    add_settings_field('coppy', 'Coppyright', 'coppy_func', 'Header');
    
    register_setting('Header','footer');
    register_setting('Header','coppy');
    
    }
    add_action('admin_init','settings_api');

    
function footer_func(){
    ?>
    <input type="text" name="footer" value="<?php echo get_option('footer'); ?>" placeholder="Footer" class="regular-text" />
    <?php
}

function coppy_func(){
    ?>
    <input type="text" name="coppy" value="<?php echo get_option('coppy'); ?>" placeholder="Coppyright" class="regular-text" />
    <?php
}
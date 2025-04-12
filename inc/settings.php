<?php 

function settings_api() {
add_settings_field('footer', 'Footer', 'footer_func', 'media');
add_settings_field('coppy', 'Coppyright', 'coppy_func', 'media');

register_setting('media','footer');
register_setting('media','coppy');

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
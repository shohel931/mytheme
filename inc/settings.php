<?php 

function settings_api() {
add_settings_field('coppy', 'Coppyright'. 'coppy_func', 'genarel');

}
add_action('admin_init','settings_api');


function coppy_func(){
    echo 'Hello World';
}
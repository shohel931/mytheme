<?php
// Logo Update
function logo_update($wp_customize) {
  $wp_customize->add_section('theme_logo',array(
    'title' => __('Logo Update', 'mytheme'),
    'description' => 'If you interested to update your logo.',
  ));

  $wp_customize-> add_setting('theme_setting_logo', array(
    'default' => esc_url( get_template_directory_uri() ). '/img/logo.png',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'theme_setting_logo', array(
    'label' => 'Logo Update',
    'setting' => 'theme_setting_logo',
    'section' =>'theme_logo',
  )));




    //* Coppyright Area
  $wp_customize-> add_section('coppyright_section', array(
    'title' =>__('Coppyright Section', 'mytheme'),
    'description' => 'If you interested to update your footer section, you can do ithere.'
  ));

  $wp_customize-> add_setting('theme_copyright_section', array(
    'default' => 'All Right Reserved @ plowv.com',
  ));

  $wp_customize-> add_control('theme_copyright_section', array(
    'label' => 'Coppyright Section',
    'description' => 'If you interested to update your footer section, you can do it here.',
    'setting' => 'theme_copyright_section',
    'section' => 'coppyright_section', 
  ));

}
add_action('customize_register', 'logo_update');


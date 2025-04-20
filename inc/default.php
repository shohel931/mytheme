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




  //color picker
  $wp_customize-> add_section('color_picker', array(
    'title' => __('Color Picker', 'mytheme'),
    'description' => 'If you interested to update your color, you can do it here.'
  )); 
  $wp_customize->add_setting('theme_color_picker', array( 
    'default' => '#ffffff',
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme_color_picker', array(
    'label' => 'Color Picker',
    'description' => 'If you interested to update your color, you can do it here.',
    'setting' => 'theme_color_picker',
    'section' => 'color_picker',
  )));  


}
add_action('customize_register', 'logo_update');


// Navigation Menu Color Picker
function mytheme_customize_register($wp_customize) {
  // Navigation Menu Color Section
  $wp_customize->add_section('menu_colors', array(
      'title'    => __('Nav Menu Colors', 'mytheme'),
      'priority' => 30,
  ));

  // Menu Background Color Setting
  $wp_customize->add_setting('menu_bg_color', array(
      'default'   => '#333333',
      'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'menu_bg_color_control', array(
      'label'    => __('Menu Background Color', 'mytheme'),
      'section'  => 'menu_colors',
      'settings' => 'menu_bg_color',
  )));

  // Menu Text Color Setting
  $wp_customize->add_setting('menu_text_color', array(
      'default'   => '#ffffff',
      'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'menu_text_color_control', array(
      'label'    => __('Menu Text Color', 'mytheme'),
      'section'  => 'menu_colors',
      'settings' => 'menu_text_color',
  )));
}
add_action('customize_register', 'mytheme_customize_register');





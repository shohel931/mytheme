<?php 

//Enqueue Files

function css_ja_file_calling() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_register_style('main', get_template_directory_uri().'/css/main.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('main');
    
    
    // jQuary calling
    wp_enqueue_script( 'jquary');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', 'true');
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true');
    
    }
    add_action('wp_enqueue_scripts', 'css_ja_file_calling');
    
    // Google fonts calling
    function google_fonts(){
      wp_enqueue_style('google_font', 'https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap', false);
      wp_enqueue_style('font_awesoum', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css', array(), '6.7.2', false);
      wp_enqueue_style('boxicons', 'https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css', false);
    }
    add_action('wp_enqueue_scripts', 'google_fonts');



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

}
add_action('customize_register', 'logo_update');




// Menu Register
include_once('inc/menu_register.php');

// Widgets Register
include_once('inc/widgets_register.php');


if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
      'page_title'    => 'Theme General Settings',
      'menu_title'    => 'Theme Settings',
      'menu_slug'     => 'theme-general-settings',
      'capability'    => 'edit_posts',
      'redirect'      => false
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'Theme Header Settings',
      'menu_title'    => 'Header',
      'parent_slug'   => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'Theme Footer Settings',
      'menu_title'    => 'Footer',
      'parent_slug'   => 'theme-general-settings',
  ));

}
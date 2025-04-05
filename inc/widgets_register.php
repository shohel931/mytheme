<?php 
// Sidebar Register

function theme_widgets_register(){
  register_sidebar( array(
    'name'       =>__('Footer Area 1', 'mytheme'),
    'id'  => 'footer-1',
    'description' => __('Apperas in the sidebar in blog page and also other pages', 'mytheme'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget_title">',
    'after_title' => '</h2>',
  ));

  register_sidebar( array(
    'name'       =>__('Footer Area 2', 'mytheme'),
    'id'  => 'footer-2',
    'description' => __('Apperas in the sidebar in blog page and also other pages', 'mytheme'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget_title">',
    'after_title' => '</h2>',
  ));

  register_sidebar( array(
    'name'       =>__('Footer Area 3', 'mytheme'),
    'id'  => 'footer-3',
    'description' => __('Apperas in the sidebar in blog page and also other pages', 'mytheme'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget_title">',
    'after_title' => '</h2>',
  ));

  register_sidebar( array(
    'name'       =>__('Footer Area 4', 'mytheme'),
    'id'  => 'footer-4',
    'description' => __('Apperas in the sidebar in blog page and also other pages', 'mytheme'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget_title">',
    'after_title' => '</h2>',
  ));

  
}

add_action('widgets_init', 'theme_widgets_register');
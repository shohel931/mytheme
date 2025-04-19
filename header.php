<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
<?php wp_head();?> 
</head>
<body <?php body_class();?>>

<header id="header_area">
    <!-- header.php ফাইলে <head> এর ভিতরে লিখুন -->
<style>
  body {
    background-color: <?php echo get_theme_mod('theme_color_picker', '#ffffff'); ?>;
  }
</style>

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('theme_setting_logo'); ?>" alt=""></a>    
            </div>
            <div class="col-sm-9">
            <?php wp_nav_menu( array('theme_location' => 'main_manu', 'manu_id' => 'nav') ); ?>
            </div>
        </div>
    </div>
</header>

<style>
  /* ধরুন আপনার মেনুর ক্লাস: .main-navigation */
  .menu-main-menu-container {
    background-color: <?php echo get_theme_mod('menu_bg_color', '#333333'); ?>;
  }

  .menu-main-menu-container a {
    color: <?php echo get_theme_mod('menu_text_color', '#ffffff'); ?>;
  }

  /* হোভার কালার না চাইলেও এভাবে দিতে পারেন */
  .menu-main-menu-container a:hover {
    opacity: 0.8;
  }
</style>

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
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            <a href=""><img src="<?php echo get_theme_mod('theme_setting_logo'); ?>" alt=""></a>    
            </div>
            <div class="col-md-6">
                <ul id="nav">
                    <li><a href="#">Home <i class="fa-solid fa-angle-down"></i></a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services <i class="fa-solid fa-angle-down"></i></a></li>
                    <li><a href="#">Blog <i class="fa-solid fa-angle-down"></i></a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</header>



<?php wp_footer(); ?>
</body>
</html>
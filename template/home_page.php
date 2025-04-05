<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>


<section id="hero_area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2><?php echo get_field(''); ?> Welcome to Our Website</h2>
                <p><?php echo get_field(''); ?>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at erat nec nisi facilisis bibendum.</p>
                <a href="#" class="btn btn-primary"><?php echo get_field(''); ?>Get Started</a>
            </div>
            <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri(); ?>/img/hero_image.png" alt="Hero Image" class="img-fluid">
            </div>
        </div>
    </div>
</section>




<?php get_footer(); ?>
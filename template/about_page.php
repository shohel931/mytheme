<?php
/**
 * Template Name: About Page
 */

get_header(); ?>


<section id="about_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2><?php echo get_field(''); ?>Working Closely With <br> Customers In Our <br> MYMT </h2>
                <p><?php echo get_field(''); ?></p>
                <br>
                <a href="#"><?php echo get_field(''); ?>Get Start Now</a>
            </div>
            <div class="col-sm-6">
                <img src="<?php echo get_template_directory_uri(). '/img/about.png' ?>" alt="">
            </div>
        </div>
    </div>
</section>




<section id="section_area2">
    <div class="container">
        <div class="row">
            <div class="col-sm-7"></div>
            <div class="col-sm-5"></div>
        </div>
    </div>
</section>





<?php get_footer(); ?>
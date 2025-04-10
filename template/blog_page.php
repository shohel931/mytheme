<?php
/**
 * Template Name: Blog Page
 */

get_header(); ?>


<section id="blog_hero">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <h2><?php echo get_field('title'); ?></h2>
                <p><?php echo get_field('description'); ?></p>
                <br>
                <a href="#"><?php echo get_field('button'); ?></a>
            </div>
            <div class="col-sm-5">
                <?php $image= get_field('image'); ?>
                <img src="<?php echo $image; ?>" alt="">
            </div>
        </div>
    </div>
</section>



<section id="blog_area2">
    <div class="blog_title1">
        <h3><?php echo get_field(''); ?></h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
            <?php $image= get_field(''); ?>
            <img src="<?php echo $image; ?>" alt="">
                <img src="<?php echo get_template_directory_uri(). '/img/png.png' ?>" alt="">
                <h3><?php echo get_field(''); ?></h3>
                <p><?php echo get_field(''); ?></p>
            </div>
            <div class="col-sm-5">
            <?php $image= get_field(''); ?>
            <img src="<?php echo $image; ?>" alt="">
                <img src="<?php echo get_template_directory_uri(). '/img/png.png' ?>" alt="">
                <h3><?php echo get_field(''); ?></h3>
                <p><?php echo get_field(''); ?></p>
            </div>
        </div>
    </div>
</section>










<?php get_footer(); ?>
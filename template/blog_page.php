<?php
/**
 * Template Name: Blog Page
 */

get_header(); ?>


<section id="blog_hero">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <h2><?php echo get_field(''); ?>Analytics & Reporting <br> Service For Your <br> Business</h2>
                <p><?php echo get_field(''); ?>An enim nullam tempor sapien gravida donec enim <br> ipsum porta justo congue magna at</p>
                <br>
                <a href="#"><?php echo get_field(''); ?>Get Start Now</a>
            </div>
            <div class="col-sm-5">
                <?php $image= get_field(''); ?>
                <img src="<?php echo $image; ?>" alt="">
                <img src="<?php echo get_template_directory_uri(). '/img/about.png' ?>" alt="">
            </div>
        </div>
    </div>
</section>














<?php get_footer(); ?>
<?php
/**
 * Template Name: Blog Page
 */

get_header(); ?>


<section id="blog_hero">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <h2><?php echo get_field(''); ?></h2>
                <p><?php echo get_field(''); ?></p>
                <br>
                <a class="btn btn-primary" href="#"><?php echo get_field(''); ?></a>
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
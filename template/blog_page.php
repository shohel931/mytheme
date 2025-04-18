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
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <div class="blog_title1">
        <h3><?php echo get_field('title_'); ?></h3>
    </div>

    <div class="blog_main_bx">
        <div class="sub_blog_bx">
        <?php $image= get_field('box_1_image'); ?>
            <img src="<?php echo $image; ?>" alt="">
                <h4><?php echo get_field('box_1_title'); ?></h4>
                <p><?php echo get_field('box_1_description'); ?></p>
        </div>
        <div class="sub_blog_bx">
        <?php $image= get_field('box_2_image'); ?>
            <img src="<?php echo $image; ?>" alt="">
                <h4><?php echo get_field('box_2_title_'); ?></h4>
                <p><?php echo get_field('box_2_description'); ?></p>
        </div>
    </div>
            </div>
        </div>
    </div>
   
</section>



<section id="blog_area3">
    <div class="main_blog">
        <div class="sub_blog">
        <?php $image= get_field('box_1_image'); ?>
        <img src="<?php echo $image; ?>" alt="">
            <h4><?php echo get_field('box_1_title'); ?></h4>
            <p><?php echo get_field('box_1_description'); ?></p>
        </div>
        <div class="sub_blog">
        <?php $image= get_field('box_2_image_'); ?>
        <img src="<?php echo $image; ?>" alt="">
            <h4><?php echo get_field('box_2_title'); ?></h4>
            <p><?php echo get_field('box_2_description'); ?></p>
        </div>
        <div class="sub_blog">
        <?php $image= get_field('box_3_image'); ?>
        <img src="<?php echo $image; ?>" alt="">
            <h4><?php echo get_field('box_3_title'); ?></h4>
            <p><?php echo get_field('box_3_description'); ?></p>
        </div>
        <div class="sub_blog">
        <?php $image= get_field('box_4_image'); ?>
        <img src="<?php echo $image; ?>" alt="">
            <h4><?php echo get_field('box_4_title'); ?></h4>
            <p><?php echo get_field('box_4_description'); ?></p>
        </div>
    </div>
</section>







<section id="service_area4">
    <div class="serv_title">
    <h3><?php echo get_field('title'); ?></h3>
    </div>
    <div class="serv_main_bx">
        <div class="sub_serv_bx">
        <?php $image= get_field('box_1_image'); ?>
        <img src="<?php echo $image; ?>" alt="">
            <h4><?php echo get_field('box_1_title'); ?></h4>
            <p><?php echo get_field('box_1_description'); ?></p>
        </div>
        <div class="sub_serv_bx">
        <?php $image= get_field('box_2_image'); ?>
        <img src="<?php echo $image; ?>" alt="">
            <h4><?php echo get_field('box_2_title_'); ?></h4>
            <p><?php echo get_field('box_2_description'); ?></p>
        </div>
        <div class="sub_serv_bx">
        <?php $image= get_field('box_3_image'); ?>
        <img src="<?php echo $image; ?>" alt="">
            <h4><?php echo get_field('box_3_title_'); ?></h4>
            <p><?php echo get_field('box_3_description'); ?></p>
        </div>
    </div>
</section>










<?php get_footer(); ?>
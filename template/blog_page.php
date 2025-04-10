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
        <?php $image= get_field(''); ?>
        <img src="<?php echo $image; ?>" alt="">
        <img src="<?php echo get_template_directory_uri(). '/img/blwork3.jpg' ?>" alt="">
            <h4><?php echo get_field(''); ?>Our Co-Founders Tuomo Riekki</h4>
            <p><?php echo get_field(''); ?>Our Co-Founders Tuomo Riekki And Kristo Ovaska are</p>
        </div>
        <div class="sub_blog">
        <?php $image= get_field(''); ?>
        <img src="<?php echo $image; ?>" alt="">
        <img src="<?php echo get_template_directory_uri(). '/img/blwork3.jpg' ?>" alt="">
            <h4><?php echo get_field(''); ?>Our Co-Founders Tuomo Riekki</h4>
            <p><?php echo get_field(''); ?>Our Co-Founders Tuomo Riekki And Kristo Ovaska are</p>
        </div>
        <div class="sub_blog">
        <?php $image= get_field(''); ?>
        <img src="<?php echo $image; ?>" alt="">
        <img src="<?php echo get_template_directory_uri(). '/img/blwork3.jpg' ?>" alt="">
            <h4><?php echo get_field(''); ?>Our Co-Founders Tuomo Riekki</h4>
            <p><?php echo get_field(''); ?>Our Co-Founders Tuomo Riekki And Kristo Ovaska are</p>
        </div>
        <div class="sub_blog">
        <?php $image= get_field(''); ?>
        <img src="<?php echo $image; ?>" alt="">
        <img src="<?php echo get_template_directory_uri(). '/img/blwork3.jpg' ?>" alt="">
            <h4><?php echo get_field(''); ?>Our Co-Founders Tuomo Riekki</h4>
            <p><?php echo get_field(''); ?>Our Co-Founders Tuomo Riekki And Kristo Ovaska are</p>
        </div>
    </div>
</section>






<?php get_footer(); ?>
<?php
/**
 * Template Name: Contact Page
 */

get_header(); ?>




























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
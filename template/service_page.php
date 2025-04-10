<?php
/**
 * Template Name: Service Page
 */

get_header(); ?>




<section id="service_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <h2><?php echo get_field('title'); ?></h2>
                <p><?php echo get_field('title_description'); ?></p>
                <br>
                <a class="btn btn-primary" href="#"><?php echo get_field('button'); ?></a>
            </div>
            <div class="col-sm-3">
            <?php $image= get_field('image_1'); ?>
            <img src="<?php echo $image; ?>" alt="">
            </div>
            <div class="col-sm-2">
            <?php $image= get_field('image_2'); ?>
            <img src="<?php echo $image; ?>" alt="">
            </div>
            <div class="col-sm-2">
            <?php $image= get_field('image_3'); ?>
            <img src="<?php echo $image; ?>" alt="">
            </div>
        </div>
    </div>
</section>





<section id="service_area1">
    <div class="service_title">
    <h2><?php echo get_field('section_1_title'); ?></h2>
    </div>
    <div class="main_service">
        <div class="sub_service">
        <?php $image= get_field('section_1_box_1_icon'); ?>
        <img src="<?php echo $image; ?>" alt="">
            <h4><?php echo get_field('section_1_box1_title'); ?></h4>
            <p><?php echo get_field('section_1_box1_description'); ?></p>
             <br>
             <a href=""><?php echo get_field('section_1_box1button'); ?> <i class="fa-solid fa-arrow-right fa-bounce"></i></a>
        </div>
        <div class="sub_service">
        <?php $image= get_field('section_1_box_2_icon_'); ?>
        <img src="<?php echo $image; ?>" alt="">
            <h4><?php echo get_field('section_1_box_2_title'); ?></h4>
            <p><?php echo get_field('section_1_box_2_description_'); ?></p>
             <br>
             <a href=""><?php echo get_field('section_1_box_2_button_'); ?> <i class="fa-solid fa-arrow-right fa-bounce"></i></a>
        </div>
        <div class="sub_service">
        <?php $image= get_field('section_1_box_3_icon_'); ?>
        <img src="<?php echo $image; ?>" alt="">
            <h4><?php echo get_field('section_1_box_3_title_'); ?></h4>
            <p><?php echo get_field('section_1_box_3_description_'); ?></p>
             <br>
             <a href=""><?php echo get_field('section_1_box_3_button_'); ?> <i class="fa-solid fa-arrow-right fa-bounce"></i></a>
        </div>
    </div>
    <div class="main_service">
        <div class="sub_service">
        <?php $image= get_field('section_1_box_4_icon_'); ?>
        <img src="<?php echo $image; ?>" alt="">
            <h4><?php echo get_field('section_1_box_4_title_'); ?></h4>
            <p><?php echo get_field('section_1_box_4_description'); ?></p>
             <br>
             <a href=""><?php echo get_field('section_1_box_4_button_'); ?> <i class="fa-solid fa-arrow-right fa-bounce"></i></a>
        </div>
        <div class="sub_service">
        <?php $image= get_field('section_1_box_5_icon_'); ?>
        <img src="<?php echo $image; ?>" alt="">
            <h4><?php echo get_field('section_1_box_5_title_'); ?></h4>
            <p><?php echo get_field('section_1_box_5_description_'); ?></p>
             <br>
             <a href=""><?php echo get_field('section_1_box_5_button_'); ?> <i class="fa-solid fa-arrow-right fa-bounce"></i></a>
        </div>
        <div class="sub_service">
        <?php $image= get_field('section_1_box_6_icon_'); ?>
        <img src="<?php echo $image; ?>" alt="">
            <h4><?php echo get_field('section_1_box_6_title'); ?></h4>
            <p><?php echo get_field('section_1_box_6_description_'); ?></p>
             <br>
             <a href=""><?php echo get_field('section_1_box_6_button_'); ?> <i class="fa-solid fa-arrow-right fa-bounce"></i></a>
        </div>
    </div>
</section>







<section id="section_area2">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
            <h2><?php echo get_field('section_2_title'); ?></h2>
            <p><?php echo get_field('section_2_description'); ?></p>
            <div class="slider">
          <div>I am a slide.</div>
         <div>I am another slide.</div>
         <div>I am  slide.</div>
         </div>
            </div>
            <div class="col-sm-7">
                <div class="area_box">
                    <h2 class="number" data-target="<?php echo get_field('section_2_box_1_title'); ?>"></h2>
                    <p><?php echo get_field('section_2_box_1_description'); ?></p>
                </div>
                <div class="area_box">
                <h2 class="number" data-target="<?php echo get_field('section_2_box_2_title_'); ?>"></h2>
                <p><?php echo get_field('section_2_box_2_description_'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>








<?php get_footer(); ?>
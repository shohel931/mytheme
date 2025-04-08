<?php
/**
 * Template Name: About Page
 */

get_header(); ?>


<section id="about_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2><?php echo get_field('hero_area_title'); ?></h2>
                <p><?php echo get_field('hero_area_description'); ?></p>
                <br>
                <a href="#"><?php echo get_field('hero_area_button'); ?></a>
            </div>
            <div class="col-sm-6"><?php $image= get_field('hero_area_image'); ?>
            <img src="<?php echo $image; ?>" alt="">
            </div>
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






<section id="section_area3">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
            <?php $image= get_field('section_3_image'); ?>
            <img src="<?php echo $image; ?>" alt="">
            </div>
            <div class="col-sm-7">
            <h2><?php echo get_field('section_3_title'); ?></h2>
            <p><?php echo get_field('section_3_description'); ?></p>
           
            <div class="main_box_area">
                <div class="sub_box_area">
                    <div class="icon_box">
                    <?php $image= get_field('section_3_box_1_icon'); ?>
                    <img src="<?php echo $image; ?>" alt="">
                    </div>
                    <div class="google_box">
                    <h4><?php echo get_field('section_3_box_1_title'); ?></h4>
                    </div>
                </div>
                <div class="sub_box_area">
                    <div class="icon_box">
                    <?php $image= get_field('section_3_box_2_icon'); ?>
                    <img src="<?php echo $image; ?>" alt="">
                    </div>
                    <div class="google_box">
                    <h4><?php echo get_field('section_3_box_2_title_'); ?></h4>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>







<section id="section_area4">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
            <h2><?php echo get_field('section_4_title'); ?></h2>
            <p><?php echo get_field('section_4_description'); ?></p>
            <br>
            <a href="#"><?php echo get_field('section_4_button'); ?></a>
            </div>
            <div class="col-sm-6">
            <?php $image= get_field('section_4_image'); ?>
            <img src="<?php echo $image; ?>" alt="">
            </div>
        </div>
    </div>
</section>





<?php get_footer(); ?>
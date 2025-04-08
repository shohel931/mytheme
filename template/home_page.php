<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>


<section id="hero_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <h2><?php echo get_field('hero_area_title'); ?></h2>
                <p><?php echo get_field('hero_area_title_description'); ?></p>
                <br>
                <a href="#" class="btn btn-primary"><?php echo get_field('hero_area_button'); ?></a>
            </div>
            <div class="col-sm-7">
                <?php $image= get_field('hero_area_image'); ?>
                <img src="<?php echo $image; ?>" alt="">
            </div>
        </div>
    </div>
</section>


<section id="section_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="box">
                    <div class="sub_box">
                    <?php $image= get_field('section_2_box_1_image'); ?>
                    <img src="<?php echo $image; ?>" alt="">
                    </div>
                    <div class="sub_box">
                        <h2  class="number" data-target="<?php the_field('section_2_box_1_title'); ?>"></h2>
                        <p><?php echo get_field('section_2_box_1_description'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
            <div class="box">
                    <div class="sub_box">
                    <?php $image= get_field('section_2_box_2_image_'); ?>
                    <img src="<?php echo $image; ?>" alt="">
                    </div>
                    <div class="sub_box">
                    <h2  class="number" data-target="<?php the_field('section_2_box_2_title'); ?>"></h2>
                        <p><?php echo get_field('section_2_box_2_description'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
            <div class="box">
                    <div class="sub_box">
                    <?php $image= get_field('section_2_box_3_image'); ?>
                    <img src="<?php echo $image; ?>" alt="">
                    </div>
                    <div class="sub_box">
                    <h2  class="number" data-target="<?php the_field('section_2_box_3_title'); ?>"></h2>
                        <p><?php echo get_field('section_2_box_3_description_'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="section_area2">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <h2><?php echo get_field('section_3_title'); ?></h2>
                <p><?php echo get_field('section_3_description'); ?></p>

                <div class="box_area">
                    <div class="main_sub_box">
                    <div class="sub_box_area">
                    <?php $image= get_field('section_3_box_1_icon'); ?>
                    <img src="<?php echo $image; ?>" alt="">
                    </div>
                    <div class="sub_box_area">
                        <h4><?php echo get_field('section_3_box_1_title'); ?></h4>
                        <p><?php echo get_field('section_3_box_1_description'); ?></p>
                    </div>
                    </div>
                </div>

                <div class="box_area">
                <div class="main_sub_box">
                    <div class="sub_box_area">
                    <?php $image= get_field('section_3_box_2_icon_'); ?>
                    <img src="<?php echo $image; ?>" alt="">
                    </div>
                    <div class="sub_box_area">
                    <h4><?php echo get_field('section_3_box_2_title_'); ?></h4>
                    <p><?php echo get_field('section_3_box_2_description'); ?></p>
                    </div>
                    </div>
                </div>

                <div class="box_area">
                <div class="main_sub_box">
                    <div class="sub_box_area">
                    <?php $image= get_field('section_3_box_3_icon'); ?>
                    <img src="<?php echo $image; ?>" alt="">
                    </div>
                    <div class="sub_box_area">
                    <h4><?php echo get_field('section_3_box_3_title_'); ?></h4>
                    <p><?php echo get_field('section_3_box_3_description'); ?></p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
            <?php $image= get_field('section_3_image'); ?>
            <img src="<?php echo $image; ?>" alt="">
            </div>
        </div>
    </div>
</section>


<section id="section_area3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
            <?php $image= get_field('section_4_image'); ?>
            <img src="<?php echo $image; ?>" alt="">
            </div>
            <div class="col-sm-6">
                <h3><?php echo get_field('section_4_title'); ?></h3>
                <p><?php echo get_field('section_4_description'); ?></p>
                <br>
                <a href="#" class="btn btn-primary"><?php echo get_field('section_4_button'); ?></a>
            </div>
        </div>
    </div>
</section>




<section id="section_area5">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h2><?php echo get_field('section_5_title'); ?></h2>
                <p><?php echo get_field('section_5_description'); ?></p>
                <br>
                <a href="#" class="btn btn-primary"><?php echo get_field('section_5_button'); ?></a>
            </div>
            <div class="col-sm-6">
            <?php $image= get_field('section_5_image'); ?>
            <img src="<?php echo $image; ?>" alt="">
            </div>
        </div>
    </div>
</section>



<section id="section_area6">
    <div class="title">
    <h2><?php echo get_field('section_6_title'); ?></h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <?php $image= get_field('section_6_image'); ?>
            <img src="<?php echo $image; ?>" alt="">
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>
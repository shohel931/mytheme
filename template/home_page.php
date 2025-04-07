<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>


<section id="hero_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2><?php echo get_field(''); ?> Welcome to Our Website</h2>
                <p><?php echo get_field(''); ?>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Quisque at erat nec nisi facilisis bibendum.</p>
                <a href="#" class="btn btn-primary"><?php echo get_field(''); ?>Get Started</a>
            </div>
            <div class="col-sm-6">
                <img src="<?php echo get_template_directory_uri(); ?>/img/image1.png" alt="Hero Image" class="img-fluid">
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
                        <img src="<?php echo get_template_directory_uri(). '/img/icon.png'  ?>" alt="">
                    </div>
                    <div class="sub_box">
                        <h2><?php echo get_field(''); ?>15k+</h2>
                        <p><?php echo get_field(''); ?>Active user</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
            <div class="box">
                    <div class="sub_box">
                        <img src="<?php echo get_template_directory_uri(). '/img/icon2.png'  ?>" alt="">
                    </div>
                    <div class="sub_box">
                        <h2><?php echo get_field(''); ?>15k+</h2>
                        <p><?php echo get_field(''); ?>Active Now</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
            <div class="box">
                    <div class="sub_box">
                        <img src="<?php echo get_template_directory_uri(). '/img/icon3.png'  ?>" alt="">
                    </div>
                    <div class="sub_box">
                        <h2><?php echo get_field(''); ?>15k+</h2>
                        <p><?php echo get_field(''); ?>Active Now</p>
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
                <h2><?php echo get_field(''); ?>We Are Focus On <br> Your Ultimate Goal</h2>
                <p><?php echo get_field(''); ?>An enim nullam tempor sapien gravida donec enim ipsum porta justo congue magna at pretium</p>

                <div class="box_area">
                    <div class="main_sub_box">
                    <div class="sub_box_area">
                        <img src="<?php echo get_template_directory_uri(). '/img/icon4.png'  ?>" alt="">
                    </div>
                    <div class="sub_box_area">
                        <h4><?php echo get_field(''); ?>Automatic Time Tracking</h4>
                        <p><?php echo get_field(''); ?>Time Tracking is never been easier.</p>
                    </div>
                    </div>
                </div>

                <div class="box_area">
                <div class="main_sub_box">
                    <div class="sub_box_area">
                    <img src="<?php echo get_template_directory_uri(). '/img/icon5.png'  ?>" alt="">
                    </div>
                    <div class="sub_box_area">
                    <h4><?php echo get_field(''); ?>Automatic Time Tracking</h4>
                    <p><?php echo get_field(''); ?>Time Tracking is never been easier.</p>
                    </div>
                    </div>
                </div>

                <div class="box_area">
                <div class="main_sub_box">
                    <div class="sub_box_area">
                    <img src="<?php echo get_template_directory_uri(). '/img/icon6.png'  ?>" alt="">
                    </div>
                    <div class="sub_box_area">
                    <h4><?php echo get_field(''); ?>Automatic Time Tracking</h4>
                    <p><?php echo get_field(''); ?>Time Tracking is never been easier.</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <img src="<?php echo get_template_directory_uri(). '/img/image.png' ?>" alt="">
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
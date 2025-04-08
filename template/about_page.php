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
            <img src="<?php echo get_template_directory_uri(). '/img/about1.png' ?>" alt="">
            </div>
            <div class="col-sm-7">
            <h2><?php echo get_field(''); ?>We Are Un 6 Years <br> Experience In This Field</h2>
            <p><?php echo get_field(''); ?>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            <div class="google_box*+-">
            <img src="<?php echo get_template_directory_uri(). '/img/.png' ?>" alt="">
            <h4><?php echo get_field(''); ?>Get Insights Only Google Can Give</h4>
            </div>
            <div class="google_box">
            <img src="<?php echo get_template_directory_uri(). '/img/.png' ?>" alt="">
            <h4><?php echo get_field(''); ?>Get Insights Only Google Can Give</h4>
            </div>
            </div>
        </div>
    </div>
</section>







<section id="section_area4">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
            <h2><?php echo get_field(''); ?>Supply <br> Chain Optimization</h2>
            <p><?php echo get_field(''); ?>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            <a href="#"><?php echo get_field(''); ?>Read More</a>
            </div>
            <div class="col-sm-6">
            <img src="<?php echo get_template_directory_uri(). '/img/.png' ?>" alt="">
            </div>
        </div>
    </div>
</section>





<?php get_footer(); ?>
<?php
/**
 * Template Name: About Page
 */

get_header(); ?>


<section id="about_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2><?php echo get_field(''); ?>Working Closely With <br> Customers In Our <br> MYMT </h2>
                <p><?php echo get_field(''); ?>An enim nullam tempor sapien gravida donec enim <br> ipsum porta justo congue magna at</p>
                <br>
                <a href="#"><?php echo get_field(''); ?>Get Start Now</a>
            </div>
            <div class="col-sm-6">
                <img src="<?php echo get_template_directory_uri(). '/img/about.png' ?>" alt="">
            </div>
        </div>
    </div>
</section>




<section id="section_area2">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
            <h2><?php echo get_field(''); ?>We Are Un 6 Years <br> Experience In This Field </h2>
            <p><?php echo get_field(''); ?>An enim nullam tempor sapien gravida donec enim <br> ipsum porta justo congue magna at</p>
            <div class="slider">
          <div>I am a slide.</div>
         <div>I am another slide.</div>
         <div>I am  slide.</div>
         </div>
            </div>
            <div class="col-sm-5">
                <div class="area_box">
                    <h2><?php echo get_field(''); ?>15k</h2>
                    <p><?php echo get_field(''); ?>Happy Customer</p>
                </div>
                <div class="area_box">
                <h2><?php echo get_field(''); ?>400+</h2>
                <p><?php echo get_field(''); ?>Complete Work</p>
                </div>
            </div>
        </div>
    </div>
</section>






<section id="section_area3">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
            <img src="<?php echo get_template_directory_uri(). '/img/about.png' ?>" alt="">
            </div>
            <class="col-sm-5">
            <h2><?php echo get_field(''); ?>We Are Un 6 Years <br> Experience In This Field</h2>
            <p><?php echo get_field(''); ?>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            <div class="google_box">
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



<?php get_footer(); ?>
<?php
/**
 * Template Name: Service Page
 */

get_header(); ?>




<section id="service_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <h2><?php echo get_field(''); ?>We Serve Lot Of <br> Services For <br> Customers</h2>
                <p><?php echo get_field(''); ?>An enim nullam tempor sapien gravida donec enim <br> ipsum porta justo congue magna at</p>
                <br>
                <a class="btn btn-primary" href="#"><?php echo get_field(''); ?>Get Start Now</a>
            </div>
            <div class="col-sm-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ser.png" alt="service" class="img-responsive">
            </div>
            <div class="col-sm-2">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ser1.png" alt="service" class="img-responsive">
            </div>
            <div class="col-sm-2">
            <img src="<?php echo get_template_directory_uri(); ?>/img/ser2.png" alt="service" class="img-responsive">
            </div>
        </div>
    </div>
</section>





<section id="service_area1">
    <div class="main_service">
        <div class="sub_service">
            <img src="" alt="">
            <h4><?php echo get_field(''); ?>Analytics And Reportind</h4>
            <p><?php echo get_field(''); ?>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
             <br>
             <a href=""><?php echo get_field(''); ?>Read More <i class="fa-solid fa-arrow-right fa-bounce"></i></a>
        </div>
        <div class="sub_service">
        <img src="" alt="">
            <h4><?php echo get_field(''); ?>Analytics And Reportind</h4>
            <p><?php echo get_field(''); ?>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
             <br>
             <a href=""><?php echo get_field(''); ?>Read More <i class="fa-solid fa-arrow-right fa-bounce"></i></a>
        </div>
        <div class="sub_service">
        <img src="" alt="">
            <h4><?php echo get_field(''); ?>Analytics And Reportind</h4>
            <p><?php echo get_field(''); ?>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
             <br>
             <a href=""><?php echo get_field(''); ?>Read More <i class="fa-solid fa-arrow-right fa-bounce"></i></a>
        </div>
    </div>
    <div class="main_service">
        <div class="sub_service">
        <img src="" alt="">
            <h4><?php echo get_field(''); ?>Analytics And Reportind</h4>
            <p><?php echo get_field(''); ?>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
             <br>
             <a href=""><?php echo get_field(''); ?>Read More <i class="fa-solid fa-arrow-right fa-bounce"></i></a>
        </div>
        <div class="sub_service">
        <img src="" alt="">
            <h4><?php echo get_field(''); ?>Analytics And Reportind</h4>
            <p><?php echo get_field(''); ?>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
             <br>
             <a href=""><?php echo get_field(''); ?>Read More <i class="fa-solid fa-arrow-right fa-bounce"></i></a>
        </div>
        <div class="sub_service">
        <img src="" alt="">
            <h4><?php echo get_field(''); ?>Analytics And Reportind</h4>
            <p><?php echo get_field(''); ?>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
             <br>
             <a href=""><?php echo get_field(''); ?>Read More <i class="fa-solid fa-arrow-right fa-bounce"></i></a>
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
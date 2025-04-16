<?php
/**
 * Template Name: Contact Page
 */

get_header(); ?>



<section id="contact_hero">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="hero_text">
                    <h2><?php echo get_field('title'); ?></h2>
                    <p><?php echo get_field('description'); ?></p>
                <div class="main_contact">
                <div class="contact_form">
                    <form action="">
                        <input type="text" placeholder="First name" required>
                        <input type="text" placeholder="Last name" required>
                        <br>
                        <input type="email" placeholder="Email" required>
                        <input type="number" placeholder="Phone" required>
                        <br>
                        <input class="message" type="text-area" placeholder="Message" required>
                        <br>
                        <input class="checkbox" type="checkbox" required><span>I agree to the </span> <a href="#">terms and conditions</a>
                        <br>
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                    </form>
                </div>
                <div class="contact_form1">
                    <p>Address</p>
                    <h5>123 Maint st Anytown, USA</h5>
                    <br>
                    <p>Support</p>
                    <h5>+01234567890</h5>
                    <h5>sinfo@mymt.com</h5>
                </div>
                </div>
                
            </div>
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
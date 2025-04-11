<?php
/**
 * Template Name: Contact Page
 */

get_header(); ?>



<section id="contact_hero">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main_contact">
                <div class="contact_form">
                    <form action="">
                        <input type="text" placeholder="First name" required>
                        <input type="text" placeholder="Last name" required>
                        <br>
                        <input type="email" placeholder="Email" required>
                        <input type="number" placeholder="Phone" required>
                        <br>
                        <input type="text-area" placeholder="Message" required>
                        <br>
                        <input type="checkbox" required> I agree to the <a href="#">terms and conditions</a>
                        <br>
                        <button type="submit">Submit</button>
                        <button type="reset">Reset</button>
                    </form>
                </div>
                <div class="contact_form">
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
<?php
/**
 * The template for displaying the footer
 */

?>

<section id="area_all">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="area_all_content">
                    <h3><?php echo get_field('footer_box_title'); ?></h3>
                    <p><?php echo get_field('footer_box_description'); ?></p>
                    <form action="">
                        <input  type="email"  placeholder="<?php echo get_field('footer_box_input'); ?> " required>
                        <button type="submit"><?php echo get_field('footer_box_button'); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>





 



<footer id="footer_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
      <?php dynamic_sidebar( 'footer-1' ); ?>
            </div>
            <div class="col-sm-3">
      <?php dynamic_sidebar( 'footer-2' ); ?>
            </div>
            <div class="col-sm-3">
      <?php dynamic_sidebar( 'footer-3' ); ?>
            </div>
            <div class="col-sm-3">
      <?php dynamic_sidebar( 'footer-4' ); ?>
            </div>
        </div>
    </div>
    <div class="coppyright_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <a href="#">Tram's & Condition</a>
                </div>
                <div class="col-sm-6">
                    <p><?php echo get_theme_mod('theme_copyright_section'); ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>



<?php wp_footer(); ?>
</body>
</html>
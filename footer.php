<?php
/**
 * Template Name: Footer Area
 */

?>

<section id="area_all">
    
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
<?php
/**
 * Footer Area
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
                        <input  type="email"  placeholder="<?php echo get_field('footer_box__placeholder'); ?> " required>
                        <button type="submit"><?php echo get_field('footer_box_button'); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="bg.png" alt="bg" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="chicago.jpg" alt="Chicago" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="ny.jpg" alt="New York" class="d-block" style="width:100%">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>




 



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
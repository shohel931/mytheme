<?php get_header(); ?>
<?php
// Template Name: Blog Page

 if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div><?php the_excerpt(); ?></div>
    <?php endwhile; ?>
<?php else : ?>
    <p>কোনো পোস্ট পাওয়া যায়নি।</p>
<?php endif; ?>




<?php get_footer(); ?>
<?php get_header(); ?>
<?php
// Template Name: Blog Page

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1><?php the_title(); ?></h1>
            <div class="post-meta">
                <span>Published on: <?php echo get_the_date(); ?></span>
                <span>By: <?php the_author(); ?></span>
            </div>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
            <div class="post-categories">
                <span>Categories: <?php the_category(', '); ?></span>
            </div>
            <div class="post-tags">
                <span><?php the_tags('Tags: ', ', '); ?></span>
            </div>
        </article>
    <?php endwhile;
else :
    echo '<p>No posts found.</p>';
endif;






<?php get_footer(); ?>
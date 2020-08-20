<?php
/**
 * The template for displaying the front page.
 *
 * This is the template that displays on the front page only.
 * Set this in settings > reading > static page
 *
 */

get_header();?>
<div class="home_head">
        <div class="home_head_content"> 
           <img src="<?php echo get_field('logo-home', 'option')["url"]; ?>" alt="<?php echo get_field('logo-favicon', 'option')["alt"]; ?>" class="home_image">
          
        </div>
</div>

<?php while (have_posts()) : the_post(); ?>

<div class="about_container"> 
        <div class="page-builder">
            <?php the_content(); ?>
        </div>

</div>
<?php endwhile; ?>

<?php get_footer(); ?>

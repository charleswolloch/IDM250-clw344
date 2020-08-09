<?php
/**
 * The template for displaying all project posts.
 *
 */
?>
<?php get_header();?>
<main class="main-content">
  <?php while (have_posts()) : the_post(); ?>
    
        <!-- Main Content -->
        <div class="post_head">
          <div class="post_head_content"> 
          <h1 class="post_title"><?php the_title(); ?></h1>
           <?php the_post_thumbnail('thumbnail', array('class'=> 'post_image')); ?> 
          
        </div>
          </div>
    <div class="container">
          <div class="page-builder">
            <?php the_content(); ?>
          </div>
        

        
    </div>


  <?php endwhile; ?>
</main>
<?php get_footer(); ?>

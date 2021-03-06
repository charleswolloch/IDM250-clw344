<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
?>
<?php get_header();?>
<main class="main-content">
  <div class="container">
    <h1 class="archive__title"><?php echo single_term_title(); ?></h1>

    <div class="archive__desc">
      <?php echo term_description();?>
    </div>

    <div class="article__flex">  
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="container_archive"> 
				
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('large', array( 'class' => 'search-result-thumbnail' )); ?>
        <h2> <?php the_title(); ?> </h2>

        </a>
      
    </div>
        <?php endwhile; ?>
      <?php else: ?>
        <h2>Sorry, no post found</h2>
      <?php endif; ?>
    </div>

  </div>
</main>

<?php get_footer(); ?>
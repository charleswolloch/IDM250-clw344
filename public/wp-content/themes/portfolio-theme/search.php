<?php get_header();?>

<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="post_head"> 
			<div class="search-bar">        
				<form action="/" method="get">          
				<input type="text" name="s" id="seachField" value="<?php the_search_query(); ?>" placeholder="<?php _e( 'Search...' ); ?>" class="search-bar-input">         
				<input type="submit" value="Search" class="search-bar-submit">        
				</form>
			</div>
		
		<?php if (have_posts()) : ?>

		
			<header class="post_head_content">
				<h1 class="post_title">
					<?php printf(__('Search Results for : %s', '_mbbasetheme'), '<span>' . get_search_query() . '</span>'); ?></h1>
			</header><!-- .page-header -->
		</div>
		
			<?php /* Start the Loop */ ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="container_archive"> 
				
					<a href="<?php the_permalink(); ?>">
		        	<?php the_post_thumbnail('large', array( 'class' => 'search-result-thumbnail' )); ?>
					<h2> <?php the_title(); ?> </h2>

					</a>
				
			</div>
		

			<?php endwhile; ?>


		<?php else : ?>

			<h2>No Results Found</h2>

		<?php endif; ?>

		</main><!-- #main -->
  </section><!-- #primary -->
<?php get_footer(); ?>

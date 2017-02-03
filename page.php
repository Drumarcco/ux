<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="blog-background">

<div class="post-card">
  <h1><?php the_title(); ?></h1>
  
  <?php the_content(); ?>
</div>
	
</div>
	
	
	<?php endwhile; ?> 
	<?php endif; ?>
	
		
	<?php get_footer(); ?>
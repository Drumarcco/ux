<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="article" <?php post_class(); ?>>
    <?php if ( is_sticky() ) : ?><div class="post-title"><?php _e( 'Featured', 'simplestyle' ); ?></div><?php endif; ?>
	<h1><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h1>
	<div class="date"><?php the_date(); ?></div>
	
	<?php the_content( __( 'read more ...', 'simplestyle' ) ); ?>
	
	<div class="clear"></div>
	
	<p><div class="tags"><?php the_tags('<span class="tags">Tags </span> ',' &bullet; ','</br>'); ?>
   </div></p>
	
		
	</div>
	<div id="border-bottom"></div>
	
	
	
	<?php endwhile; ?> 
	<?php endif; ?>
	
	 <div id="buttons">
	
	 <?php next_posts_link('<div id="left"><table class="links"><tr><td><div id="posts-button">&laquo;</div></td><td class="text">Previous page</td></tr></table></div>') ?>
	 
	 <?php previous_posts_link('<div id="right"><table class="links"><tr><td class="text">Next page</td><td><div id="posts-button2">&raquo;</div></td></tr></table></div>'); ?>
	 
	 </div>
	
	<?php get_footer(); ?>
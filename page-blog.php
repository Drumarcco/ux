<?php
/*
Template Name: TEMPLATE BLOG
*/
?>

<?php get_header(); ?>
<article class="post-full post-full__2columns">
	<header class="post-full-header">
		<h1 class="post-full-title">Closer is Better: The Nearsoft Blog</h1>
	</header>
	<div class="post-full-content">
    
    <div class="featured-post">
    <?php
       
    $args = array(
      'posts_per_page'	=> 1,
      'post_type'		=> 'post',
      'meta_key'		=> 'featured_post_toggle',
      'meta_value'	=> '1'
    );
    
    $the_query = new WP_Query( $args ); ?>
    <?php if( $the_query->have_posts() ): while( $the_query->have_posts() ) : $the_query->the_post(); ?>
      
      <?php include('_partials/post-summary.php'); ?>
      
      <?php endwhile; ?>
    <?php endif; ?>
    
    <?php wp_reset_query(); ?>
    
    </div>
    
		<?php $the_query = new WP_Query( 'posts_per_page=10' ); ?>

    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
			
			<?php
			include('_partials/post-summary.php');
			endwhile; wp_reset_postdata();
			include('_partials/blog-pagination.php');
		?>

	</div>
	<div class="post-full-sidebar">
		<?php get_sidebar("blog"); ?>
	</div>
</article>

<?php get_footer(); ?>











	

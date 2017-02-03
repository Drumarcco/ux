<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<div class="blog-background">

<div class="post-card blog-content">

<div class="float-70">

  <?php
  $query = 'posts_per_page=10';
  $queryObject = new WP_Query($query);
  // The Loop...
  if ($queryObject->have_posts()) {
  	while ($queryObject->have_posts()) {
  		$queryObject->the_post(); ?>
  		
  		<div class="single-blogpost">
    		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    		<div class="timestamp">
      		By <span class="author"><?php the_field('blog_author'); ?></span><span class="time"> <?php the_date(); ?></span>
    		</div>
      		
      		<div class="post-thumbnail" style="background: url(<?php the_post_thumbnail_url(); ?>) no-repeat center center; background-size: cover;"></div>

        		<?php the_excerpt() ?>

      		
      		<a class="learnmore" href="<?php the_permalink(); ?>">Continue Reading > ></a>
      		
  		</div>
  		
  <?php		
  	}
  }
  ?>
</div>

<div class="sidebar">
<!--
  <ul>
    <?php wp_list_categories( array(
        'orderby' => 'name'
    ) ); ?> 
  </ul>
-->
</div>    


</div>

</div>



<?php get_footer(); ?>
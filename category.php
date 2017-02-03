<?php get_header(); ?>
<div class="episodesindex">
  
  <div class="cont-h1">
    <h1><?php single_cat_title( '', true ); ?></h1>
  </div>
  
  <div class="blogposts">

  <?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post();  ?>
  
    <a href="<?php the_permalink() ?>" class="loop-single">
      <div class="thumb" style="background: url(<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true); echo $thumb_url[0]; ?>) no-repeat center center; background-size: cover;"></div>
      <div class="excerpt">
      		<h1><?php the_title(); ?></h2>
          <div>
            <?php the_excerpt() ?>
          </div>
    	</div>
    </a>
  
  <?php endwhile; ?>
  
  <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
  <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
  
  <?php else : ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; ?>
  
  </div>
</div>
<?php get_footer(); ?>
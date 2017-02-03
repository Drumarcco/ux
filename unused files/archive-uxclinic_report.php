<?php get_header(); ?>

<div class="episodesindex">
  
<div class="cont-h1">
  <h1>Reports</h1>
</div>

<div class="the_content">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<div class="loop-single">
    <a href="<?php the_permalink(); ?>"><div class="thumb" style="background: url(<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true); echo $thumb_url[0]; ?>) no-repeat center center; background-size: cover;"></div></a>
    <div class="excerpt">
      <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
      <?php the_excerpt(); ?>
    </div>

  </div>
<?php endwhile; endif; ?>
  </div>
</div>

<?php include 'inc-submit.php'; ?>
	
<?php get_footer(); ?>
<?php get_header(); ?>

<div class="post-full">

<div class="cont-h1">
  <h1>UX Team Webinars</h1>
</div>



<div class="the_content">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<a href="<?php the_permalink(); ?>" class="loop-single" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="bg-op"></div>
    		<div class="thumb" style="background: url(<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true); echo $thumb_url[0]; ?>) no-repeat center center; background-size: cover;"></div>
    	<div class="excerpt">
      		<h1><?php the_title(); ?></h2>
      		<?php the_excerpt(); ?>
    	</div>
  	</a>

<?php endwhile; endif; ?>
  </div>
</div>

<?php include 'inc-contact.php'; ?>
<?php get_footer(); ?>

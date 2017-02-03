<?php get_header('blog'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="blog-background">

<div class="post-card">
  
  <h1><?php the_title(); ?></h1>
  <?php if( get_field('podcast_toggle') )
      {
        echo "<h2 class='podcast-subtitle'>";
      }
      else
      {
        echo "<h2 style='display:none;'>";
      }
  ?>
    <?php the_field('podcast_subtitle'); ?>
  </h2>
  
  <div class="date">Published by <span class="author"> <?php the_field('blog_author'); ?></span> on <?php the_date(); ?><span class="cats"><?php the_category(); ?></span></div>
  
  

  
  <div class="podcast-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
  
  
  </div><!-- podcast-image -->
  

  <div class="post-content">
	  <?php the_content( __( 'read more ...', 'simplestyle' ) ); ?>
	</div>
  
  <?php endwhile; ?>
	<?php endif; ?>
	
</div>

<div class="share-bar">
  <h3>Share this post</h3>
  
  <div class="share-center">
  
  <a class="facebook" href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php the_permalink(); ?>&p[images][0]=<?php the_post_thumbnail_url(); ?>&p[title]=<?php the_title(); ?>&p[summary]=<?php the_excerpt(); ?>"></a>
  
  <a class="twitter" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?> <?php the_permalink(); ?>"></a>
  
  <a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&summary=<?php the_excerpt(); ?>&source=LinkedIn"></a>
  
  <a class="google" href="https://plus.google.com/share?url={<?php the_permalink(); ?>}"></a>
  </div>
  
</div>

</div>








<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"><\/script>')</script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/remodal.js"></script>

<!-- Events -->
<script>
  $(document).on('opening', '.remodal', function () {
    console.log('opening');
  });

  $(document).on('opened', '.remodal', function () {
    console.log('opened');
  });

  $(document).on('closing', '.remodal', function (e) {
    console.log('closing' + (e.reason ? ', reason: ' + e.reason : ''));
  });

  $(document).on('closed', '.remodal', function (e) {
    console.log('closed' + (e.reason ? ', reason: ' + e.reason : ''));
  });

  $(document).on('confirmation', '.remodal', function () {
    console.log('confirmation');
  });

  $(document).on('cancellation', '.remodal', function () {
    console.log('cancellation');
  });
  
  $('[data-remodal-id=modal2]').remodal({
    modifier: 'with-red-theme'
  });
</script>

<script>
$('.expand-content').click(function(){
    $('.hidden-content').slideToggle('slow');
});
</script>

<script>
$(function(){
$(".collapse-button").click(function () {
    $(".collapse-button").slideToggle("slow");
    ($(".collapse-button").text() === "Read all notes") ? $(".collapse-button").text("Collapse notes") : $(".collapse-button").text("Read all notes");
});
});
</script>


	
		
	<?php get_footer(); ?>
<?php get_header(); ?>

<div class="events-index">

<div class="cont-h1">
  <h1>UX Team Upcoming Events</h1>
</div>

<div class="the_content">

<ul>  
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<li class="single-event">
  <div class="thumb-image" style="background-image: url(<?php the_field('ev-img'); ?>)"></div>
  <h2><?php the_title(); ?></h2>
  <div class="timeanddate"><?php the_field('ev-tad'); ?></div>
  <div class="excerpt"><?php the_field('ev-description'); ?></div>
  <a class="button" target="_blank" href="<?php the_field('ev-cta-url'); ?>"><?php the_field('ev-cta-text'); ?></a>
</li>

<div class="content-separator"></div>

<?php endwhile; endif; ?>
</ul>


<h2>Past Events</h2>

<?php $args = array( 'post_type' => 'uxclinic_webinars', 'posts_per_page' => 9 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();?>
  <?php the_title(); ?>
  
<?php endwhile;
?>





  </div><!-- content -->
</div><!-- events index -->




<?php get_footer(); ?>

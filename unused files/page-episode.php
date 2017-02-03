<?php
/*
Template Name: EPISODE
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <section class="episode-hero">
    <div class="cont-h1">
      <h1><?php echo get_the_title(); ?></h1>
    </div>
    <div class="video-wrapper">
      <?php the_field('episode_hero_video'); ?>
    </div>
    <p><?php the_field('episode_hero_description'); ?>
    <a href="<?php the_field('episode_hero_report_button_url'); ?>" class="button report-button">See the report</a>
    </p>

    <div class="sub-episode-hero">
    <p> <?php the_field('episode_hero_client_description'); ?></p>
    <img src=" <?php the_field('episode_hero_client_image'); ?>" class="client-img">
    </div>
  </section>

  <section class="episode-resources">
    <h2>Download some useful design resources:</h2>
    <ol>
      <?php if( have_rows('episode_resource_item') ) : while ( have_rows('episode_resource_item') ) : the_row(); ?>
      <li>
        <a href="<?php the_sub_field('episode_resource_link');?>" target="_blank" >
          <img src="<?php the_sub_field('episode_resource_image');?>">
        </a>
      </li>
      <?php endwhile; else : endif; ?>
    </ol>
  </section>
  
  <?php include 'inc-signup.php'; ?>
  
  <?php include 'inc-episodes.php'; ?>

<?php endwhile; ?><?php endif; ?>
<?php get_footer(); ?>

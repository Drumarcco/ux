<section class="episodes">
  <?php query_posts('page_id=2'); if (have_posts()) : while (have_posts()) : the_post(); ?>
  <h2><?php the_field('home_episodes_title'); ?></h2>
  <a class="button" href="http://theuxclinic.com/episodes">See all episodes</a>
  <?php endwhile; ?><?php endif; WP_reset_query(); ?>

  <ul>
    <?php query_posts( array( 'post_type' => 'uxclinic_casestudy', 'posts_per_page' => 3) ); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <li>
      <a href="<?php the_permalink(); ?>">
        <span class="vid-flag"></span>

        <div class="image-container" style="background: url(<?php the_field('episode_featured_image'); ?>); background-size: cover;">

        </div>

        <h3><?php the_field('episode_featured_episode_number');?><span><?php the_field('episode_featured_episode_client');?></span></h3>
        <p><?php the_field('episode_featured_episode_description');?></p>
      </a>
    </li>
    <?php endwhile; endif; wp_reset_query(); ?>
  </ul>
</section>

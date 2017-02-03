<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <section class="report-hero" style="background: url(<?php the_field('report_hero_background_image'); ?>) no-repeat; background-size: cover;">
    <img src="<?php the_field('report_hero_client_logo'); ?>">
    <p><?php the_field('report_hero_description'); ?></p>
    <a class="button" href="<?php the_field('report_hero_button_url'); ?>" ><?php the_field('report_hero_button_label'); ?></a>
  </section>

  <section class="report-casestudy">
    <div class="border-class">
      <div class ="report-textcont">
        <h3>Our Process: <span> <?php the_field('report_case_study_client'); ?></span></h3>
        <p><?php the_field('report_case_study_description'); ?></p>
      </div>
      <img src="<?php the_field('report_case_study_image'); ?>" />
    </div>
  </section>

  <section class="report-analysis">
    <div class ="report-textcont">
      <h3>Outcomes and Recomendations: <span><?php the_field('report_analysis_method'); ?></span></h3>
      <p><?php the_field('report_analysis_description'); ?></p>
    </div>
    <img src="<?php the_field('report_analysis_image'); ?>" />
  </section>

  <section class="report-download">
    <h2><?php the_field('report_download_label'); ?></h2>
    <a class="button download-btn" target="_blank" href="<?php the_field('report_download_button_url'); ?>"><?php the_field('report_download_button_label'); ?></a>
  </section>

  <section class="report-pagination">
    <div class="previouspost">
<?php if(get_adjacent_post(false, '', true)) { echo previous_post_link('%link'); }
else { echo '<span style="display:none;">"'.get_the_title().'" is the oldest post, no further articles. </span>'; } ; ?>
</div>
<div class="nexpost">
<?php if(get_adjacent_post(false, '', false)) { echo next_post_link('%link'); }
else { echo '<span style="display:none;">"'.get_the_title().'" is the latest post: no newer articles. </span>'; } ; ?>
</div>
  </section>

  <?php include 'inc-submit.php'; ?>

<?php endwhile; ?><?php endif; ?>
<?php get_footer(); ?>

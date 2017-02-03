<?php
/*
Template Name: REPORT
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <section class="report-hero" style="background: url(<?php the_field('report_hero_background_image'); ?>) no-repeat; background-size: cover;">
    <img src="<?php the_field('report_hero_client_logo'); ?>">
    <p><?php the_field('report_hero_description'); ?></p>
    <h3>-Design Method-</h3>
    <span class="designmethod"><?php the_field('report_hero_design_method'); ?></span>
  </section>

  <section class="report-casestudy">
    <div class="border-class">
      <div class ="report-textcont">
        <h3>Case Study <span> <?php the_field('report_case_study_client'); ?></span></h3>
        <p><?php the_field('report_case_study_description'); ?></p>
      </div>
      <img src="<?php the_field('report_case_study_image'); ?>" />
    </div>
  </section>

  <section class="report-analysis">
    <div class ="report-textcont">
      <h3>Preliminary Analysis <span><?php the_field('report_analysis_method'); ?></span></h3>
      <p><?php the_field('report_analysis_description'); ?></p>
    </div>
    <img src="<?php the_field('report_analysis_image'); ?>" />
  </section>

  <section class="report-download">
    <h2><?php the_field('report_download_label'); ?></h2>
    <a class="button download-btn" href="<?php the_field('report_download_button_url'); ?>"><?php the_field('report_download_button_label'); ?></a>
  </section>

  <section class="report-pagination">
  </section>

  <?php include 'inc-submit.php'; ?>

<?php endwhile; ?><?php endif; ?>
<?php get_footer(); ?>

<?php get_header('new'); ?>

<div class="blog-background">
<div class="post-card">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <!-- Toggles the new format info -->
  
  <?php if( get_field('new_format_toggle') )
      {
        echo "<div>";
      }
      else
      {
        echo "<div style='display:none;'>";
      }
  ?>

  <section class="ncs-hero" style="background: url(<?php the_field('new_format_background_picture'); ?>)no-repeat center center; background-size: cover;">
    <h1><?php the_field('new_format_challenge'); ?></h1>
    <h3><?php the_field('new_format_client'); ?></h3>
  </section>
  
  <section class="ncs-struggles">
    <h2>They were struggling with:</h2>
    
    <img src="<?php the_field('new_format_struggle_image'); ?>" />
    
    <ul>
      <?php if( have_rows('new_format_struggle') ) : while ( have_rows('new_format_struggle') ) : the_row(); ?>
      <li><?php the_sub_field('struggle_single');?></li>
      <?php endwhile; else : endif; ?>
    </ul>
  </section>
  
  <section class="ncs-how" style="background: url(<?php the_field('new_format_how_background'); ?>)no-repeat center center; background-size: cover;">
    <h2>How we did it?</h2>
    
    <ul>
      <?php if( have_rows('new_format_how_steps') ) : while ( have_rows('new_format_how_steps') ) : the_row(); ?>
      <li><?php the_sub_field('new_format_how_step');?></li>
      <?php endwhile; else : endif; ?>
    </ul>
  </section>

  <section class="ncs-findings">
    <h2>UX Findings & Solutions</h2>
    <p><?php the_field('new_format_findings_description'); ?></p>
    
    <div class="findingsslider">
    <ul class="bxslider">
      
      <?php $c = 0; ?>
      <?php if( have_rows('new_format_findings_slider') ) : while ( have_rows('new_format_findings_slider') ) : the_row(); ?>
      
      <?php if($c == 0){
        echo "<li>";
      }
      ?>
      
        <div class="slider-item">
          <img src="<?php the_sub_field('finding_slider');?>" /><div class="slider-description"><?php the_sub_field('finding_description');?></div>
        </div>
        
      <?php
        $c++;
        if($c >1){
          echo "</li>";
          $c = 0;
        }
      ?>
      <?php endwhile; else : endif; ?>
      
      
      
    </ul>
    </div>
    
<!--
    <script>
      $(document).ready(function(){
        $('.bxslider').bxSlider();
      });
    </script>
-->

  <script>
        $('.bxslider').bxSlider({

        });
      </script>
  </section>
  
  <section class="ncs-takeaways">
    <h2>Takeaways</h2>
    <ul>
      <?php if( have_rows('new_format_takeaways') ) : while ( have_rows('new_format_takeaways') ) : the_row(); ?>
      <li><?php the_sub_field('new_takeaway');?></li>
      <?php endwhile; else : endif; ?>
    </ul>
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
  
  
  </div>
  <!-- Case studies new format ends here -->
        
  
  
  <!-- Toggles the new format info -->
  
  <?php if( get_field('new_format_toggle') )
      {
        echo "<div style='display:none;'>";
      }
      else
      {
        echo "<div>";
      }
  ?>
  
  <section class="report-hero">
    <div>
      <h1 class="title-new-casestudy"><?php echo get_the_title(); ?></h1>
    </div>
    <h2 class="subtitle-new-casestudy"><?php the_field('case_study_subtitle'); ?></h2>
  </section>
        
  <?php if( get_field('cover_image_toggle') )
      {
        echo "<section class='display-our-work experts'>";
      }
      else
      {
          echo "<section class='display-our-work experts' style='display:none;'>";
      }
  ?>
   <?php $image = get_field('display_our_work'); if( !empty($image) ): ?>
      <div class="display-work-cont">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="casestudy_hero_img"/>
        <?php endif; ?>
  </section>

  <?php if( get_field('ux_solution_toggle') )
      {
        echo "<section class='report-casestudy'>";
      }
      else
      {
          echo "<section class='report-casestudy' style='display:none;'>";
      }
  ?>
    <div class="border-class">
      <div class ="report-textcont">
        <h2>UX Solution: <span><?php the_field('casestudy_hero_method'); ?></span></h2>
        <p><?php the_field('casestudy_hero_description'); ?></p>
        <p><a href="<?php the_field('diy_link'); ?>" target="_blank" class="scnd-case-link margin-top-diy"><?php the_field('diy_link_label'); ?></a></p>
      </div>


        <?php $image = get_field('casestudy_hero_image'); if( !empty($image) ): ?>
      <div class="process-img-cont">
        <a class="gallery" href="<?php echo $image['url']; ?>" title="<?php the_field('footnote_process_img'); ?>">
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="casestudy_hero_img"/>
        </a>

        <?php endif; ?>
        <h5><?php the_field('footnote_process_img'); ?></h5>
      </div>
    </div>
  </section>

  <?php if( get_field('ux_findings_toggle') )
      {
        echo "<section class='report-analysis'>";
      }
      else
      {
          echo "<section class='report-analysis' style='display:none;'>";
      }
  ?>
    <div class="border-class">
      <div class ="report-textcont">
        <h2>UX Findings for: <span><?php the_field('case_study_company_title'); ?></span></h2>
        <p><?php the_field('casestudy_outcome_description'); ?></p>
      </div>
      <?php $image = get_field('casestudy_outcome_image2'); if( !empty($image) ): ?>
      <div class="process-img-cont">
        <a class="gallery" href="<?php echo $image['url']; ?>" title="<?php the_field('footnote_img_outcomes'); ?>">
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="casestudy_outcome_img"/>
        </a>
      <?php endif; ?>
        <h5><?php the_field('footnote_img_outcomes'); ?></h5>
        </div>
    </div>
  </section>

  <?php if( get_field('video_toggle') )
      {
        echo "<section class='episode-hero casestudy-video-hero'>";
      }
      else
      {
          echo "<section class='episode-hero casestudy-video-hero' style='display:none;'>";
      }
  ?>
      <h2 class="video-h3-title">Watch Our <span><?php the_field('case_study_episode'); ?></span></h2>
    <div class="video-wrapper">
      <?php the_field('casestudy_video_video'); ?>
    </div>
    <p>
      <?php the_field('casestudy_video_description'); ?>

      <?php if( get_field('calendar_button_toggle') )
        {
          echo "<div style='display: block; position: relative; top: 20px;'>";
        }
        else
        {
            echo "<div style='display: none;'>";
        }
      ?>

      <a class="button report-button" href="<?php the_field('calendar_button_url'); ?>" target="_blank"><?php the_field('calendar_button_label'); ?></a>
    </div>

    </p>

  </section>

  <?php if( get_field('report_download_stuff_toogle') )
      {
        echo "<section class='report-download'>";
      }
      else
      {
          echo "<section class='report-download' style='display:none;'>";
      }
  ?>
    <h2><?php the_field('report_download_label'); ?></h2>
    <a class="button orange" Target="_blank" href="<?php the_field('casestudy_video_report_button_url'); ?>"><?php the_field('casestudy_video_report_button_label'); ?></a>
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
  
  </div> <!-- old post format ends here -->


<?php endwhile; ?><?php endif; ?>

</div>


<?php get_footer('crop'); ?>
</div>

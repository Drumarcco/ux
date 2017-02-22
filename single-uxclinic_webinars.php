<?php get_header('fbpixel'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div <?php if( get_field('webinar_toggle') ) echo "style='display:none;'" ?>>
    <section class="workshop-hero webinar-hero-reset" 
      style="background-image: url(<?php the_field('webinar_background_image') ?>)!important;">
      <div class="workshop-hero-content">
        <h2><?php the_field('webinar_title'); ?></h2>
        <a href="#int-des" class="button arrow-button orange">Save your spot!</a>
      </div>

      <script>
        $(document).ready(function() {
          titleKeywords('.workshop-hero-content h2', '<?php echo get_field('title_keywords') ?>');
        });
      </script>
    
      <div class="content-footer">
        <div class="content-footer-left">
          <div class="calendar-icon"></div>
          <span>Thu January 19th, 2017 at 3:00 pm PST</span>
        </div>
        <div class="content-footer-right">
          <span>SHARE |</span>
          <a class="twitter-circle" target="_blank" 
            href="https://twitter.com/intent/tweet?url=https://goo.gl/y8wyUt&text=<?php the_title(); ?>. Save your spot!&hashtags=NearsoftUXWebinar">
          </a>
          <a class="facebook-circle" target="_blank" 
            href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php the_permalink(); ?>&p[images][0]=<?php the_post_thumbnail_url(); ?>&p[title]=<?php the_title(); ?>&p[summary]=<?php the_excerpt(); ?>">
          </a>
          <a class="google-circle" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>">
          </a>
        </div>
      </div>
    </section>

    <div id="webinar-description" class="margin-container">
      <section class="e-can uxcontent">
        <h2>Improve your software product</h2>
        <p><?php the_field('webinar_full_description'); ?></p>
      </section>

      <section class="webinar-cta">
        <h2>Don't miss this webinar!</h2>
        <a href="#int-des" class="button arrow-button orange">Save your spot!</a>
      </section>

      <section class="participants">
        <h2>Participants</h2>
        <div class="participant">
          <div class="picture misael"></div>
          <div class="participant-info">
            <h3>Misael León</h3>
            <h4>Product Designer</h4>
            <div class="webinar-partner partner-nearsoft"></div>
            <a class="social-link social-linkedin" href="https://www.linkedin.com/in/misaelleon" target="_blank">LinkedIn</a>
            <a class="social-link social-twitter" href="https://twitter.com/misaello?lang=en" target="_blank">Twitter</a>
          </div>
        </div>
    
        <div class="participant">
          <div class="picture georgie"></div>
          <div class="participant-info">
            <h3>Georgie Bottomley</h3>
            <h4>Senior UX Researcher</h4>
            <div class="webinar-partner partner-atlassian"></div>
            <a class="social-link social-linkedin" href="https://www.linkedin.com/in/georgiebottomley" target="_blank">LinkedIn</a>
            <a class="social-link social-twitter" href="https://twitter.com/bottomley_g?lang=en" target="_blank">Twitter</a>
        </div>
      </section>


      <div class="remodal" data-remodal-id="int-des" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
        <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>  
        <div class="minilogo"></div>
        <h2>Join our UX Team next January 19, to learn How to Do User Research in Agile Teams.</h2>
        <div class="form-center">
          <?php echo do_shortcode( '[easy_sign_up phone="0" fnln="0"]' ); ?>
        </div>
      </div>
    </div>
  </div>

  <div class="single-webinar" <?php if( !get_field('webinar_toggle')) echo "style='display:none;'" ?>>    
    <div class="single-webinar-header">
        <div class="video-wrapper">
          <?php the_field('webinar_embed_code'); ?>
        </div>
        <h1 class="title"><?php the_field('webinar_title'); ?></h1>

        <script>
          $(document).ready(function() {
            titleKeywords('.single-webinar .title', '<?php echo get_field('title_keywords') ?>');
          });
      </script>
    </div>
    <div class="full-description">
      <h2>Improve your software product</h2>
      <?php the_field('webinar_full_description'); ?>
    </div>
    <div class="watch-more">
      <a href="<?php echo get_post_type_archive_link('uxclinic_webinars'); ?>" class="button arrow-button">
        Watch more Webinars
      </a>
      <div class="webinars-wrapper">
        <h2>Watch more Webinars</h2>
        <div class="webinars">
          <?php 
            $args = array(
              'posts_per_page' => 4,
              'orderby' => 'rand',
              'post_status' => 'publish',
              'post_type' => 'uxclinic_webinars'
            );

            $webinars = new WP_Query($args);
            $webinar_id = get_post()->ID;
            $count = 0;
            if ( $webinars->have_posts()) : while ( $webinars->have_posts() ) : $webinars->the_post();
          ?>
            <?php if ($webinar_id != get_post()->ID && $count < 3): $count++; ?>
              <?php 
                $webinar_meta = get_post_meta(get_post()->ID);
                $background_url = wp_get_attachment_image_src($webinar_meta["webinar_background_image"][0], array(500, 500))[0];
              ?>
              <a class="webinar" href="<?php the_permalink(); ?>">
                <div class="thumbnail" style="background-image: url(<?php echo $background_url; ?>);"></div>
                <div class="webinar-title">
                  <?php the_title()?>
                  <div class="learn">Learn More</div>
                </div>
              </a>
            <?php endif; ?>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </div>
<!-- Case studies new format ends here -->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"><\/script>')</script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/remodal.js"></script>

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

<?php endwhile; ?><?php endif; ?>

<?php get_footer(); ?>
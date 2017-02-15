<?php get_header('fbpixel'); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php if( get_field('webinar_toggle') )
    {
      echo "<div style='display:none;'>";
    }
    else
    {
      echo "<div>";
    }
?>

<!-- Before Webinar blocks -->
<section class="workshop-hero webinar-hero-reset" style="background-image: url(<?php the_field('webinar_background_image') ?>)!important;">
  
  <div class="workshop-hero-content">
    <h2><?php the_field('webinar_title'); ?></h2>
    <a href="#int-des" class="button arrow-button orange">Save your spot!</a>
  </div>
  
  <div class="content-footer">
    <div class="content-footer-left">
      <div class="calendar-icon"></div>
      <span>Thu January 19th, 2017 at 3:00 pm PST</span>
    </div>
    <div class="content-footer-right">
      <span>SHARE |</span>
      <a class="twitter-circle" target="_blank" href="https://twitter.com/intent/tweet?url=https://goo.gl/y8wyUt&text=<?php the_title(); ?>. Save your spot!&hashtags=NearsoftUXWebinar"></a>
      <a class="facebook-circle" target="_blank" href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php the_permalink(); ?>&p[images][0]=<?php the_post_thumbnail_url(); ?>&p[title]=<?php the_title(); ?>&p[summary]=<?php the_excerpt(); ?>"></a>
      <a class="google-circle" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"></a>
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

</div><!-- remodal ends here -->

</div><!-- margin container ends here -->
</div>

<!-- past format ends here -->


<!-- Toggles the new format info -->


<div class="rude-test">
<?php if( get_field('webinar_toggle') )
    {
      echo "<div>";
    }
    else
    {
      echo "<div style='display:none;'>";
    }
?>

<div class="blog-background">
<div class="post-card">
  
  <section class="ncs-hero" style="background: url(http://ux.nearsoft.com/wp/wp-content/uploads/2015/06/Screen-Shot-2016-01-18-at-9.43.52-AM.png) no-repeat center center; background-size: cover;">
    <h1><?php the_field('webinar_title'); ?></h1>
    <h3><?php the_field('webinar_description'); ?></h3>
  </section>

  <section class='casestudy-video-hero2'>
<!--
    <h2 class="video-h3-title2">Watch Our Webinar</h2>
    <p>
      <?php the_field('webinar_video_sidetext'); ?>
    </p>
-->
    <div class="video-wrapper">
      <?php the_field('webinar_embed_code'); ?>
    </div>

  </section>
  
  <section class="report-download">
    <a class="button report-button green" Target="_blank" href="<?php the_field('webinar_slides_url'); ?>">Download Slidedeck</a>
  </section>

</div>
</div><!-- rude test -->

  
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

</div>
</div>
</div>

<?php get_footer(); ?>

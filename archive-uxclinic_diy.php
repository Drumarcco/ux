<?php get_header(); ?>
<div class="modal" id="modal-contact" aria-hidden="true">
  <div class="modal-dialog">
    <h2>Subscribe to Our Newsletter</h2>
    <a href="#close" class="btn-close" aria-hidden="true">×</a>
    <div class="apply-hero">


<!--       <div role="form" class="wpcf7" id="wpcf7-f878-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form name="" action="/designers-passionate-about-ux/#wpcf7-f878-o1" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="878" />
<input type="hidden" name="_wpcf7_version" value="4.2.1" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f878-o1" />
<input type="hidden" name="_wpnonce" value="301045a056" />
</div>
<p><span class="wpcf7-form-control-wrap text-284"><input type="text" name="text-284" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required lp-form-name" aria-required="true" aria-invalid="false" placeholder="Name" /></span><br />
<span class="wpcf7-form-control-wrap email803"><input type="email" name="email803" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email lp-form-email" aria-required="true" aria-invalid="false" placeholder="Email" /></span><br />
<span class="wpcf7-form-control-wrap text-969"><input type="text" name="text-969" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required lp-form-name" aria-required="true" aria-invalid="false" placeholder="Company Size" /></span><br />
<span class="wpcf7-form-control-wrap textarea-431"><textarea name="textarea-431" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required lp-form-description" aria-required="true" aria-invalid="false" placeholder="URL and description"></textarea></span><br />
<input type="submit" value="Submit!" class="wpcf7-form-control wpcf7-submit lp-form-submit" /></p>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div> -->
    <!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
  #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
  /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
     We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//nearsoft.us4.list-manage.com/subscribe/post?u=639555ce3b92a7d8f227cf256&amp;id=2a8aceec16" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="novalidate">
    <div id="mc_embed_signup_scroll">
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
  <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
  <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" aria-required="true">
</div>
<div class="mc-field-group">
  <label for="mce-FNAME">First Name </label>
  <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
  <label for="mce-LNAME">Last Name </label>
  <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
  <div id="mce-responses" class="clear">
    <div class="response" id="mce-error-response" style="display:none"></div>
    <div class="response" id="mce-success-response" style="display:none"></div>
  </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_639555ce3b92a7d8f227cf256_2a8aceec16" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script><script type="text/javascript">(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->


    </div>
  </div>
</div>

<div class="episodesindex">

<div class="cont-h1">
  <h1>Do It Yourself</h1>
</div>

<div class="the_content">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<a href="<?php the_permalink(); ?>" class="loop-single" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="bg-op diy-loop"></div>
    		<div class="thumb" style="background: url(<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true); echo $thumb_url[0]; ?>) no-repeat center center; background-size: cover;"></div>
    	<div class="excerpt">
      		<h1><?php the_title(); ?></h2>
          <div class="why-diy">
            <?php the_field('diy_hero_description') ?>
          </div>
            <div class="when-diy"><span>When to use it: </span> <?php the_field('when_to_use')?></div>
    	</div>
  	</a>

<?php endwhile; endif; ?>
  </div>
</div>


  <section class="submit">
    <h2>Join Our Biweekly UX Newsletter</h2>
    <p>We are all about UX. Team up with the UX Clinic to learn the best UX practices.</p>
      <a class="button" href="#modal-contact">Subscribe</a>
  </section>

<?php get_footer(); ?>

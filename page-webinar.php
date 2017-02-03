<?php
/*
Template Name: WEBINAR
*/
?>

<?php get_header( 'webinar-redirect' ) ?>


<section class="e-hero uxworkshop" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/content-structure.png)!important;">
  <div class="uxworkshop-label">UX WORKSHOP</div>
  <h1>How to Structure Your App's Content to Lower Abandonment Rate</h1>
  <a href="#int-des" class="boleto-submit">Save your spot!</a>
<!--
  <div class="soldout">
<img src="http://ux.nearsoft.com/wp/wp-content/uploads/2016/04/sold-out-1.png">
  </div>
-->
  <div class="date"><span>Date:</span>September 1st, 2016 - 11:00am to 12:00pm PDT<span>Online Webinar<!-- :</span> Nomad-A-What - 639 Clay St, San Francisco , California --></div>
</section>


<section class="e-can uxcontent">
  <h2>Are You Building a Software Product?</h2>
  
  <p>In this webinar you will learn how to improve the Content Strategy of your app to lower the abandonment rate and boost up your business. We will discuss some of the techniques to structure and validate the content, navigation, and visual architecture of your app.</p>


<!--
<ul>
	<li>You'll create a positive user experience, that will help you maintain an active growth and loyalty of your clients.</li>
	<li>You'll analyse your company and learn to detect the key points of your processes and how these affect your clients experience.</li>
	<li>You'll have the right tools to design new processes focused on reaching your business goals and improve your user experience.</li>
</ul>
-->
</section>
<!--
<section class="e-can uxcontent">
  <h2>Program Objectives</h2>
<ul>
<li>Making the interaction points of your clients with your product visible.</li>
<li>Detect improvement opportunities on your process.</li>
<li>Make brainstorming in teams and iterate before implementing changes.</li>
<li>Interpret results of your research with design arguments.</li>
<li>Align business objectives with your users experience.</li>
</ul>
</section>
-->

<section class=" e-can experts">
  <h2>Speakers</h2>
<div class="ux-expert-card">
    <div class="ux-expert-card-picture">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ui-designer-axel.png" />
    </div>
      <div class="content-container">
        <h3>Axel Valdez</h3>
        <h4>UI - Front End Designer</h4>
        <p>Axel has been a designgineer for two decades. His main focus has been UI with an interest for UX. He speaks HTML, CSS and JavaScript.</p>
        <div class="social-box">
          <a href="https://www.linkedin.com/in/axelvaldez" target="_blank"><div class="social-link linkedin"></div></a>
          <a href="https://twitter.com/axel" target="_blank"><div class="social-link twitter"></div></a>
        </div>
      </div>
  </div>

 <div class="ux-expert-card">
  <div class="ux-expert-card-picture">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ux-researcher-misael.png" />
  </div>
    <div class="content-container">
      <h3>Misael Leon</h3>
      <h4>UX Researcher</h4>
      <p>Misael enjoys turning complex systems into simple experiences by throwing users into the mix. He does it through Design Thinking and User Research.</p>
      <div class="social-box">
        <a href="https://www.linkedin.com/in/misaelleon/en" target="_blank"><div class="social-link linkedin"></div></a>
        <a href="https://twitter.com/misaello" target="_blank"><div class="social-link twitter"></div></a>
      </div>
    </div>
  </div>

</section>

<div class="footer-padding-div"></div>

<div class="remodal" data-remodal-id="int-des" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
  
  <div class="minilogo"></div>
  
  <h2>Join our UX Team next Sep 1st, to learn How to Structure Your App's Content to Lower Abandonment Rate.</h2>
  
<!--
  <form id="contactrequest" action="<?php echo get_stylesheet_directory_uri(); ?>/send-webinar.php" method="post">
			
      <p class="error"></p>
      <div><input type="text" id="name" class="contactform-name" name="name" placeholder="Name"></div>
      <div><input type="text" id="email" class="contactform-description" name="email" placeholder="Email:"></input></div>
      <input type="hidden" name="path" id="path" value="<?php echo $_COOKIE['pathcookie']; ?>">
      <div class="center"><input type="button" value="Register" onclick="requestSubmit()" class="contactform-submit"></div>
    </form>
-->
  
<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="//nearsoft.us4.list-manage.com/subscribe/post?u=639555ce3b92a7d8f227cf256&amp;id=2fe8339891" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="First Name">
</div>
<div class="mc-field-group">
	<input type="text" value="" name="LNAME" class="" id="mce-LNAME" placeholder="Last Name">
</div>
<div class="mc-field-group">
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address">
</div>
<div class="mc-field-group size1of2">
	<input type="text" name="MMERGE3" class="" value="" id="mce-MMERGE3" placeholder="Phone Number">
</div>
<div class="mc-field-group">
	<input type="text" value="" name="MMERGE4" class="" id="mce-MMERGE4" placeholder="Company">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_639555ce3b92a7d8f227cf256_f72a55078e" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->

<!--End mc_embed_signup-->

</div>



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



<?php get_footer(); ?>
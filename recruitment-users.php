<?php
/*
Template Name: USER RECRUITMENT
*/
?>
<?php get_header(); ?>
<section class="recruitment-page">
  <div class="recruitment-company-logo">
    <img src="<?php the_field('logo-company'); ?>">
    <div class="uxlcinic-recruitment-logo"></div>
  </div>
<h1>Help Us Improve Lotame’s User Experience</h1>
<h2>Join a quick feedback call</h2>
<a href="#" id="link-anchor" class="arrow-down"></a>
</section>
<section class="howitworks">
    <h2>How Can I Participate?</h2>
    <ol>
            <li>
        <img src="<?php the_field('submit_email');?>" alt="Submit Your Email" />
        <h3>Submit Your Email</h3>
        <p>Lotame users may register their email to participate in the research.</p>
      </li>
            <li>
        <img src="<?php the_field('ux_session');?>" alt="UX Session" />
        <h3>20min Session </h3>
        <p>A Hang Out will be scheduled at your convenience between September 2nd-4th.</p>
      </li>
            <!-- <li>
        <img src="<?php the_field('reward');?>" alt="User Reward" />
        <h3>Enjoy Your Reward!</h3>
        <p>You will receive a free month trial access to Lotame. Thanks for your time!</p>
      </li> -->
          </ol>
  </section>
  <a name="link-anchor"></a>
 <section class="submit recruitment-form">
    <h2>I Want to Participate</h2>
   <p>We will contact you to improve Lotame’s User Experience.</p>
<div class="contact-overlay">
  <div class="form">
    <form id="contactrequest" action="http://theuxclinic.com/wp/wp-content/themes/uxclinic/send-users-recruitment.php" method="post">
      <p class="error"></p>
      <p><input type="text" id="name" class="contactform-name" name="name" placeholder="Name:"></p>
      <p><input type="text" id="email" class="contactform-email" name="email" placeholder="E-mail:"></p>
      <p class="center"><input type="button" value="Submit" onclick="requestSubmit()" class="contactform-submit"></p>
    </form>
  </div>
</div>
  </section>


<?php get_footer(); ?>

<script>
  function scrollToAnchor(aid){
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}

$("#link-anchor").click(function() {
   scrollToAnchor('link-anchor');
});
</script>

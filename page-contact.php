<?php
/*
Template Name: CONTACT PAGE
*/
?>
<?php get_header(); ?>

<section class="home-hero">
  <div class="white-block">
    <h1>Want to know more? <span class="purple">Let's Talk!</span></h1>
  </div>
</section>

<div class="talktosandra hidden-on-desktop">
  <h4>Talk to our <span class="purple">business developer</span> Sandra Vazquez</h4>
  <div class="sandra-details">
    <div class="contact-copy">
      <a class="button orange" href="tel:408-890-2114">(408) 890-2114</a>
      <h3><a href="mailto:svazquez@nearsoft.com">svazquez@nearsoft.com</a></h3>
    </div>
  </div>
</div>

<div class="margin-container">
  <section class="cp-form">
    <h2>Let us contact you</h2>
    <p>And we'll call you right away. All information is kept <span class="purple">private</span></p>
    <form id="contactrequest" action="http://ux.nearsoft.com/wp/wp-content/themes/uxclinic/send.php" method="post">
      <div class="input-holder input-holder-name"><input type="text" class="name" id="name" name="name" placeholder="Name"></div>
      <div class="input-holder input-holder-mail"><input type="text" class="email" id="email" name="email" placeholder="E-mail"></div>
       <div class="input-holder input-holder-mail"><input type="text" class="telephone" id="telephone" name="telephone" placeholder="Phone (optional) [xxx-xxx-xxxx]"></div>
      <input type="hidden" name="path" id="path" value="<?php echo $_COOKIE['pathcookie']; ?>">
      <p class="error"></p>
      <p class="center"><input type="button" value="Send" class="button form-button" onclick="requestSubmit()" style="-webkit-appearance: none; font-family: Poppins;"><a href="#" class="close"><i class="icon-remove"></i></a></p>
      <input type="hidden" id="company" name="company" value="nearsoft">
    </form>
  </section>
</div>

<div class="talktosandra hidden-on-mobile">
  <h4>Talk to our <span class="purple">business developer</span> Sandra Vazquez</h4>
  <div class="sandra-details">
    <div class="sandra"></div>
    <div class="contact-copy">
      <h2>(408) 890-2114</h2>
      <h3>svazquez@nearsoft.com</h3>
    </div>
  </div>
</div>




<?php get_footer(); ?>

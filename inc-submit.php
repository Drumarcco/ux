<section class="submit">
  <a name="myAnchor" id="myAnchor"></a>
  <h2>Want to Know More. Contact Us.</h2>
  <p style="margin-bottom: 0;">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sandra-img.png"> Talk to Sandra at<strong> (408) 890-2115</strong>
  </p>
  <div class="contact-overlay">
  <div class="form">
    <form id="contactrequest" action="<?php echo get_stylesheet_directory_uri(); ?>/send.php" method="post">

      <p class="error"></p>
      <div><input type="text" id="name" class="contactform-name" name="name" placeholder="Name"></div>
      <div><input type="text" id="email" class="contactform-description" name="email" placeholder="Email:"></input></div>
      <div><input type="text" id="telephone" class="contactform-email" name="telephone" placeholder="Phone [xxx-xxx-xxxx]:"></div>
      <input type="hidden" name="path" id="path" value="<?php echo $_COOKIE['pathcookie']; ?>">
      <div class="center"><input type="button" value="Let's Talk" onclick="requestSubmit()" class="contactform-submit"></div>

    </form>
  </div>
  </div>
</section>

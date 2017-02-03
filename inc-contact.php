<section class="contact" style="margin-top: 0;">
  <div class="sandra"></div>
  <div class="contact-copy">
    <h2>Want to know more? Let’s Talk!</h2>
    <h3>Call us at (408) 890-2114</h3>
  </div>
  <a class="button orange arrow-button" href="#open">Or let us call you</a>
</section>


<!-- modal window -->
<div class="remodal" data-remodal-id="open" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
    
    <h2>Want to Know More. Let’s Talk.</h2>
    <div class="sandra"></div>
    <div class="contact-copy">
      <h3>Call us at (408) 890-2114</h3>
    </div>
    
  
    <form id="contactrequest" action="<?php echo get_stylesheet_directory_uri(); ?>/send.php" method="post">

      <p class="error"></p>
      <input type="text" id="name" class="contactform-name" name="name" placeholder="Name">
      <input type="text" id="email" class="contactform-description" name="email" placeholder="Email:"></input>
      <input type="text" id="telephone" class="contactform-email" name="telephone" placeholder="Phone [xxx-xxx-xxxx]:">
      <input type="hidden" name="path" id="path" value="<?php echo $_COOKIE['pathcookie']; ?>">
<!--       <div class="center"><input type="button" value="Let's Talk" onclick="requestSubmit()" class="button orange send-button"></div> -->
      <div class="center"><button type="button" onclick="requestSubmit()" class="button orange send-button">Let's Talk!</button></div>
<!--       <div class="center"><a href="javascript:{}" onclick="document.getElementById('contactrequest').submit();" class="button orange send-button">Let's Talk!</a></div> -->

    </form>

</div>


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
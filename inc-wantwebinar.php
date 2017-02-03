<section class="webinar-request">
  <h2>Would You Like to Bring This Workshop to Your Organization?</h2>
	<a href="#reg" class="button green-btn" style="padding-left: 50px; padding-right: 50px;">Request</a>
</section>

<div class="remodal" data-remodal-id="reg" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
  
 	<style>
	 	.remodal #mc_embed_signup .mc-field-group {
		 	display: block;
		 	width: 100%;
		 	overflow: hidden;
	 	}
	 	
	 	.remodal #mc_embed_signup .mc-field-group label {
		 	display: inline-block;
		 	width: 30%;
		 	float: left;
	 	}
	 	
	 	.remodal #mc_embed_signup .mc-field-group input {
		 	display: inline-block;
		 	width: 90%;
		 	margin: 0 auto;
		 	padding: 10px;
		 	border-radius: 3px;
		 	font-size: 14px;
		 	font-weight: 100;
	 	}
	</style>
	 	<p class="request-instructions">Let us know how to contact you and we'll call you right away.<br/>All information is kept private</p>
	 
  	<form id="contactrequest" action="<?php echo get_stylesheet_directory_uri(); ?>/send.php" method="post">

      <p class="error"></p>
      <input type="text" id="name" class="name" name="name" placeholder="Name">
      <input type="text" id="email" class="email" name="email" placeholder="Email:"></input>
      <input type="text" id="telephone" class="telephone" name="telephone" placeholder="Phone [xxx-xxx-xxxx]:">
      <input type="hidden" name="path" id="path" value="<?php echo $_COOKIE['pathcookie']; ?>">
      <input type="button" value="Request Webinar" onclick="requestSubmit()">

    </form>
  
  
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"><\/script>')</script>
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

  //  The second way to initialize:
  $('[data-remodal-id=modal2]').remodal({
    modifier: 'with-red-theme'
  });
</script>
<?php
/*
Template Name: WEBINAR EVENT VERIFY
*/
?>

<?php get_header(); ?>

<!-- header ends here -->

<style>
  
	.webinar-event-header {
		background: url(http://ux.nearsoft.com/wp/wp-content/themes/uxclinic/img/ux-lab-background.gif);
		background: #FFF;
		text-align: left;
		overflow: hidden;
		padding: 30px calc(50% - 500px) 100px calc(50% - 500px);
	}
	
	.youtube-embed {
		float: left;
		width: 670px;
		background: #000;
	}
	
	.chat-embed {
		width: 298px;
		float: right;
		background: #FFF;
		border: 1px solid #d5d5d5;
	}
	
	.message-input:focus {
    background-color: rgba(0,0,0,0);
    border-color:  #ed9a35!important;
    box-shadow: none;
	}
	
	textarea:focus {
    outline: blue!important;
	}
	
	#disqus_thread {
		width: 280px!important;
		padding: 10px!important;
	}
	
	#layout>section {
		padding: 10px!important;
	}
	
	.chat-embed #footer {
		display: none!important;
	}
	
	#disqus_thread .tab-community {
		display: none!important;
	}
	
	.verify-center {
  	width: 1000px;
  	margin: 0 auto;
  	padding-top: 110px;
  	padding-bottom: 100px;
  	margin-top: 50px;
  	text-align: left;
	}
	
	.verify-center h2 {
  	font-size: 60px;
  	color: #FFF;
	}
	
	.verify-center #contactrequest input[type='text'] {
  	border: 1px solid #c9c9c9;
  	font-weight: 400;
  	width: 100%;
	}
	
	.blog-background {
/*   	background-image: url(http://ux.nearsoft.com/wp/wp-content/themes/ux/img/travel.jpg); */
background: transparent;
  	background-size: cover;
  	min-height: 100%;
	}
	
	.verify-center #contactrequest input[type='button'] {
  	padding: 15px 50px;
  	width: 100%;
	}
	
	footer {
  	display: none;
	}
	
	h2.centered {
  	text-align: center;
	}
  
  @media (max-width: 400px) {
    .post-card {
      padding: 30px 15px;
    }
    
    .uxworkshop {
      padding: 15px 0 30px 0;
    }
  }
  
  body {
    background-image: url(http://ux.nearsoft.com/wp/wp-content/themes/ux/img/webinar-background.png);
    background-size: cover;
    background-position: center center;
  }
  
   #contactrequest {
    display: block;
    overflow: hidden;
  }
  
  .verify-center #contactrequest input[type='text'],
  .verify-center #contactrequest input[type='button'] {
    width: 260px;
    display: inline-block;
    float: left;
    margin-right: 30px;
  }
  
  @media (max-width: 1000px) {
    .verify-center {
      width: 100%;
      padding: 80px 30px 100px 30px;
    }
  }
  
  @media (max-width: 700px) {
    .verify-center {
      width: 100%;
      padding: 30px 30px 30px 30px;
    }
    
    .verify-center h2 {
    	font-size: 48px;
    	color: #FFF;
  	}

  }
  
  @media (max-width: 400px) {
    .verify-center {
      width: 100%;
      padding: 10px 20px 10px 20px;
    }
    
    .verify-center h2 {
    	font-size: 40px;
    	color: #FFF;
  	}

  }

  .countdown {
      color: #FFF;
      margin: 0 auto;
      font-size: 30px;
      display: inline-block;
      font-family: poppins;
    }
    
    .startsin {
      color: #FFF;
      margin: 0 auto;
      font-size: 30px;
      display: inline-block;
      margin-right: 10px;
      font-weight: bold;
      font-family: poppins;
    }
      
 
	
</style>

<div class="blog-background">

<div class="verify-center">
  <h2>Webinar: How to Do User Research in Agile Teams</h2>
<!--
  <form id="contactrequest" action="<?php echo get_stylesheet_directory_uri(); ?>/send-webinar-verify.php" method="post">
  
    <p class="error"></p>
    <input type="text" id="email" class="contactform-description" name="email" placeholder="Email:"></input>
    <input type="hidden" name="path" id="path" value="<?php echo $_COOKIE['pathcookie']; ?>">
    <div class="center"><input type="button" value="Watch Live Streaming" onclick="requestSubmit()" class="contactform-submit button orange"></div>
  
  </form>
-->

<script>
var end = new Date('01/19/2017 03:00 PM GMT-0800');

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('countdown').innerHTML = 'EXPIRED!';

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        document.getElementById('countdown').innerHTML = days + ' days ';
        document.getElementById('countdown').innerHTML += hours + 'hrs ';
        document.getElementById('countdown').innerHTML += minutes + 'mins ';
        document.getElementById('countdown').innerHTML += seconds + 'secs';
    }

    timer = setInterval(showRemaining, 1000);
</script>
<span class="startsin">Starts In:</span><div id="countdown" class="countdown"></div>

</div>

</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"><\/script>')</script>

<?php get_footer(); ?>
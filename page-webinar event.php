<?php
/*
Template Name: WEBINAR EVENT
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
	
	@media (max-width: 1080px) {
    .chat-embed {
      width: calc(100% - 700px);
    }
  }
	
	@media (max-width: 1020px) {
    .youtube-embed {
      width: 600px;
      overflow: hidden;
    }
    
    .chat-embed {
      width: calc(100% - 630px);
    }
  }
	
	@media (max-width: 1000px) {
    .uxworkshop {
      padding: 30px 30px 100px 30px;
    }
  }
	
	@media (max-width: 970px) {
    .chat-embed {
      width: 100%!important;
      margin-top: 30px;
    }
    
    .youtube-embed {
      width: 100%;
      position: relative;
    }
    
    .youtube-embed iframe {
      width: 100%;
    }
    
    .webinar-event-header {
      padding-top: 30px;
    }
  }
  
  @media (max-width: 600px) {
    .uxworkshop {
      padding-left: 0px;
      padding-right: 0px; 
    }
  }
  
  @media (max-width: 400px) {
    .post-card {
      padding: 30px 15px;
    }
    
    .uxworkshop {
      padding: 15px 0 30px 0;
    }
  }
	
</style>

<div class="blog-background">
<div class="post-card">

<section class="uxworkshop webinar-event-header">
	<div class="youtube-embed">
  	<iframe width="670" height="400" src="https://www.youtube.com/embed/3FHkf_h6-No?autoplay=1" frameborder="0" allowfullscreen></iframe>
	</div>
	
	<div class="chat-embed">
		<div id="tlkio" data-channel="nearsoft" data-custom-css="http://ux.nearsoft.com/wp/wp-content/themes/uxclinic/css/custom.css" style="width:100%;height:400px;"></div><script async src="http://tlk.io/embed.js" type="text/javascript"></script>
	</div>
	
</section>

</div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"><\/script>')</script>

<?php get_footer(); ?>
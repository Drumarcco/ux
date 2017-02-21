$(document).ready(function(){

    $('.toggle').on('click', function(e) {
      $('body').toggleClass("mobile");
      e.preventDefault();
    });
    
    $('.close-webinar').on('click', function(e) {
      $('body').toggleClass("hide-webinar");
      e.preventDefault();
    });
    
    $('.wa-class-toggle').on('click', function(e) {
      $('.wa-gallery-selector').toggleClass("display-wa-toggle");
      e.preventDefault();
    });
    
    $('.close-mobile-wa-menu').on('click', function(e) {
      $('.wa-gallery-selector').toggleClass("display-wa-toggle");
      e.preventDefault();
    });
    
    $('.display-wa-01').on('click', function(e) {
      $('.mobile-wa-gallery').addClass("display-wa-gallery-01"); //you can list several class names 
      $('.mobile-wa-gallery').removeClass("display-wa-gallery-02 display-wa-gallery-03 display-wa-gallery-04 display-wa-gallery-05");
      e.preventDefault();
    });
    
    $('.display-wa-02').on('click', function(e) {
      $('.mobile-wa-gallery').addClass("display-wa-gallery-02"); //you can list several class names 
      $('.mobile-wa-gallery').removeClass("display-wa-gallery-01 display-wa-gallery-03 display-wa-gallery-04 display-wa-gallery-05");
      e.preventDefault();
    });
    
    $('.display-wa-03').on('click', function(e) {
      $('.mobile-wa-gallery').addClass("display-wa-gallery-03"); //you can list several class names 
      $('.mobile-wa-gallery').removeClass("display-wa-gallery-01 display-wa-gallery-02 display-wa-gallery-04 display-wa-gallery-05");
      e.preventDefault();
    });
    
    $('.display-wa-04').on('click', function(e) {
      $('.mobile-wa-gallery').addClass("display-wa-gallery-04"); //you can list several class names 
      $('.mobile-wa-gallery').removeClass("display-wa-gallery-01 display-wa-gallery-02 display-wa-gallery-03 display-wa-gallery-05");
      e.preventDefault();
    });
    
    $('.display-wa-05').on('click', function(e) {
      $('.mobile-wa-gallery').addClass("display-wa-gallery-05"); //you can list several class names 
      $('.mobile-wa-gallery').removeClass("display-wa-gallery-01 display-wa-gallery-02 display-wa-gallery-03 display-wa-gallery-04");
      e.preventDefault();
    });

    function evaluate(){
    var item = $(this);
    var relatedItem = $("#" + item.attr("data-related-item")).parent();

    if(item.is(":checked")){
        relatedItem.fadeIn();
    }else{
        relatedItem.fadeOut();
    }
}

$('input[type="checkbox"]').click(evaluate).each(evaluate);

// $('.previouspost a , .nexpost a').html(function (i, html) {
//     return html.replace(/(\w+\s\w+)/, '<span>$1</span><br/>')
// });

})

$('#contactrequest input').on('focus', function(){
    $(this).removeClass('field-error');
});

function validateEmail(addr) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if( !emailReg.test( addr ) ) {
        return false;
    } else {
        return true;
    }
}

/*
function validatePhone(inputphone)  {
    var phoneno = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
    if(phoneno.test(inputphone)) {
        return true;
    } else {
        return false;
    }
}
*/

function requestSubmit(){
    var error = "<span>* Please fill at least one of the selected inputs</span>",
        send = true;

    
    if ( $('#email').val() == '' || !validateEmail($('#email').val()) ){
				error;
				$('.input-holder-mail').addClass("field-error").val('');;
				send = false;
		}
    if ( $('#company').val() == '' ){
        error += '<div class="error-tags">Company Name</div>';
        $('.input-holder-company').addClass("field-error");
        send = false;
    }
    if ( $('#jobtitle').val() == '' ){
        error += '<div class="error-tags">Job Title</div>';
        $('.input-holder-job').addClass("field-error");
        send = false;
    }
    if(send){
        $('#contactrequest').submit();
    }
    else{
        $('p.error').html(error);
        return false;
    }
}

$(".send-button").after("");

$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

function titleKeywords(titleSelector, keywords) {
    keywords = keywords.split(' ');
    var titleDOMText = $(titleSelector).text();

    keywords.forEach(function highlight(keyword) {
        var regExp = new RegExp(keyword, "i");
        titleDOMText = titleDOMText.replace(regExp, '<span class="purple">' + keyword + '</span>');
    });

    $(titleSelector).html(titleDOMText);
};


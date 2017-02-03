

function validateEmail(addr) {
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	if( !emailReg.test( addr ) ) {
		return false;
	} else {
		return true;
	}
}

function validatePhone(inputphone)  {
	var phoneno = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
	if(phoneno.test(inputphone)) {
		return true;
	} else {
		return false;
	}
}

function requestSubmit(){
	var error = "Please enter:<br>",
		send = true;

	if ( $('#name').val() == '' ){
		error += 'your name<br>';
		$('#name').addClass("field-error");
		send = false;
	}
	if ( $('#email').val() == '' || !validateEmail($('#email').val()) ){
		error += 'a valid email address<br>';
		$('#email').addClass("field-error").val('');;
		send = false;
	}
	if ( $('#telephone').val() != '' && !validatePhone($('#telephone').val()) ){
		error += 'a valid telephone number<br>';
		$('#telephone').addClass("field-error").val('');
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

//COUNTDOWN LAYOUT
$(function () {
$('#countdown').countdown({until: secondsStr, compact: true, 
    layout: '<div class="days"><div class="image{d100} centos"></div><div class="image{d10}"></div><div class="image{d1}"></div></div>' +
			'<div class="hours"><div class="image{h10}"></div><div class="image{h1}"></div></div>' +
			'<div class="minutes"><div class="image{m10}"></div><div class="image{m1}"></div></div><div class="seconds"><div class="image{s10}"></div>' +
			'<div class="image{s1}"></div></div>'});
});


//CONTACT US FORM
$(document).ready(function(){

   //submittimg contact us form
  $('.contactUsForm').submit( function(){

		//validating the form
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var email = document.getElementById('e-mail');
		if (!filter.test(email.value)) {
			$('.email-missing').show();
		} else {$('.email-missing').hide();}
		if (document.cform.name.value == "") {
			$('.name-missing').show();
		} else {$('.name-missing').hide();}	
		if (document.cform.message.value == "") {
			$('.message-missing').show();
		} else {$('.message-missing').hide();}		
		if ((document.cform.name.value == "") || (!filter.test(email.value)) || (document.cform.message.value == "")){
			return false;
		} 
		
		if ((document.cform.name.value != "") && (filter.test(email.value)) && (document.cform.message.value != "")) {

			//hide form fields
			$('.contactUsForm').hide();
		
			//show the loader
			$('.loader').append($('.bar'));
			$('.bar').css({display:'block'});
		
			//send ajax request
			$.post('contactus.php',{name:$('#name').val(),
							  email:$('#e-mail').val(),
							  message:$('#message').val()},
		
			//return data
			function(data){
			  //hide the graphic
			  $('.bar').css({display:'none'});
			  $('.loader').append(data);
			});
			
			//waits 2000, then closes the form and fades out
			setTimeout('parent.$.fn.colorbox.close()', 2500);
			
			//stay on the page
			return false;
		} 
  });


});



//NEWSLETTER SIGNUP FORM
$(document).ready(function(){

   //submittimg contact us form
  $('#signupform').submit( function(){

		//validating the form
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var email = document.getElementById('email');

		if (!filter.test(email.value)) {
			$('.signup_error').show();
		} else {$('.signup_error').hide();}

		if ( (!filter.test(email.value)) ){
			return false;
		} 
		
		if ( (filter.test(email.value)) ) {

			//show the loader
			$('.signuploader').append($('.signupbar'));
			$('.signupbar').css({display:'block'});

			//send ajax request
			$.post('signup.php',{email:$('#email').val(), signo:$('#signo').val()},
		
			//return data
			function(data){
			  //hide the graphic
			  $('.signupbar').css({display:'none'});
			  $('.signuploader').append(data);

				document.getElementById("submit").disabled = true;
				document.getElementById("email").disabled = true;

			});

			//stay on the page
			return false;
		} 
  });


});



//CHANGING EMAIL INPUT FIELD
$(document).ready(function() {
    $('input[type="text"]').addClass("idleField");
	$('input[type="text"]').focus(function() {
		$(this).removeClass("idleField").addClass("focusField");
        if(this.value != this.defaultValue){
	    	this.select();
        }
    });
    $('input[type="text"]').blur(function() {
    	$(this).removeClass("focusField").addClass("idleField");
        if(this.value != ''){
	    	$(this).removeClass("idleField").addClass("focusField");
        }
    });
});
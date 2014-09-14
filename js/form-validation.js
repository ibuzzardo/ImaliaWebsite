var $body;

$(function() {
	
	$body = $("body");
	
	if($body.find("form").length > 0) {
		validateForms();
	}

})

function validateForms() {
	var forms = $body.find("form"),
		contact = $body.find('#contact-form'),
		news = $body.find('#news-form'),
		inp = contact.add(news).find("input, select, button, textarea");
	contact.add(news).resetForm();
	inp.prop("disabled", false);
	
	$(document).ajaxStart(function() {
		inp.prop("disabled", true);
		//loader.removeClass('hidden');
	}).ajaxStop(function() {
		//inp.prop("disabled", false);
		//loader.addClass('hidden');
	}).ajaxError(function(a, b, e) {
		throw e;
	});
	
	
	forms.each(function(index, element) {
		$(this).validate({
			highlight: function(element, errorClass, validClass) {
				//Add error class to container of custom-form-elements.js elements
				var con = $(element).parent().parent();
				if(con.hasClass("radioBtn") || con.hasClass("checkBox")) {
					con.addClass(errorClass);
					return;
				}
				$(element).addClass(errorClass);
			},
			unhighlight: function(element, errorClass, validClass) {
				//Remove error class to container of custom-form-elements.js elements
				var con = $(element).parent().parent();
				if(con.hasClass("radioBtn") || con.hasClass("checkBox")) {
					con.removeClass(errorClass);
					return;
				}
				$(element).removeClass(errorClass);
			}
		});
	});
	
	var opts = { 
        success:       rSuccess  // post-submit callback 
    }; 
	// ajax submit
	contact.add(news).ajaxForm(opts);
	// success method
	function rSuccess(responseText, statusText, xhr, $form) {	
		console.log(responseText, statusText, $form);
		inp.prop("disabled", false);
		$($form).css('display', 'none');
		contact.add(news).resetForm();
		$($form).parent().find('#success').fadeIn(500);
	}
}
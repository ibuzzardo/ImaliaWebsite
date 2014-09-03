var $body;

$(function() {
	
	$body = $("body");
	
	if($body.find("form").length > 0) {
		validateForms();
	}

})

function validateForms() {
	var forms = $body.find("form");
	
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
}
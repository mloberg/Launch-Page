var sent = false,
	emailRegex = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;

function validateEmail() {
	var valid = !!$("#email").val().match(emailRegex);
	if (!valid) {
		$("#email-group").addClass("error");
		$("#email-help").text("Please enter a valid email.");
	}
	return valid;
}

$(document).ready(function() {
	$("#email").blur(validateEmail);
	$("#email").focus(function() {
		$("#email-group").removeClass("error");
		$("#email-help").text("");
	});
	$("#signup-form").submit(validateEmail);
});

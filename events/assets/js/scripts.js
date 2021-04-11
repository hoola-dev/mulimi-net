$( document ).ready(function() {
    $("#error_holder").hide();
});

function checkForm(form)
{
	var phone_number = $.trim($("#phone_number").val());
	var organization_number = $.trim($("#organization_number").val());
	
	if(phone_number.length > 15) {
		$("#error_holder").html("Please enter valid phone number");                    
	  	$("#error_holder").show();
	  	return false;
	}

	if(organization_number.length > 15) {
		$("#error_holder").html("Please enter valid organization phone number");                    
	  	$("#error_holder").show();
	  	return false;
	}

	if(!form.terms.checked) {
		$("#error_holder").html("Please indicate that you accept the Terms and Conditions");                    
	  	$("#error_holder").show();
	  	return false;
	}
	return true;
}
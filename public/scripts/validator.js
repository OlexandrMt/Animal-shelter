import {validationRules} from "./validationRules.js";
import {validationMessages} from "./validationMessages.js";

export function clearServerMsg(){
	$(".authContainer").find(".serverError").remove();
}

export function createValidator(formName){
	
	if(formName === "login"){
		return (
			$("form[name=login]").validate({
				onfocusout: false,
				rules: validationRules.login,
				messages: validationMessages.login,
				submitHandler: submitHandler
			})
		)
	} 

	if(formName === "register"){
		return (
			$("form[name=register]").validate({
				rules: validationRules.register,
				messages: validationMessages.register,
				submitHandler: submitHandler
			})
		)
	}
	
	return null;
}
	
let showErrors = function(errors, form){
	let msg;
	
	if(errors.general){
		msg = "<div class='error serverError general centerText'>" + errors.general + "</div>";
		$(form).before(msg);
		return;
	}
	
	let formInputs = $(form).find(":input");
	formInputs.each(function(input){
		let fieldErrors = errors[$(this).attr("name")];
		if(fieldErrors){
			msg = "<div class='error serverError'>" + fieldErrors[0] + "</div>";
			$(this).after(msg);
		}
	});
}

let getData = function(form){
	let data = {};
	let formInputs = $(form).find(":input");
	formInputs = formInputs.not(":input[type=submit], :input[type=hidden]");
	
	formInputs.each(function(){	
		let name = $(this).attr("name");
		let value = $(this).val();
		data[name] = value;
		
	});
	
	return data;
}

let submitHandler = function(form){	
	$(form).submit((e) => {
		e.preventDefault();
	});
	
	clearServerMsg();
	
	let msg = $("<div class='error serverError general centerText'></div>");
	$(form).find(":input[type=submit]").attr("disabled", "true");
	$.ajax({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		method: $(form).attr("method"),
		url: $(form).attr("action"),					
		data: getData(form)
	}).done((data, status)=>{
			if(data.intendedUrl){
				window.location.replace(data.intendedUrl);
			} else {
				window.location.replace("/");
			}					
	}).fail((xhr)=>{
		if(xhr.status == 422){
			try{							
				let response = JSON.parse(xhr.responseText);							
				if(response.errors) showErrors(response.errors, form);							
			} catch(e) {
				msg.text("Cannot read server response");
				$(form).before(msg);	
			}			
		} else {
			msg.text("Something went wrong on the server. Try to reload the page");
			$(form).before(msg);
		}
		$(form).find(":input[type=submit]").removeAttr("disabled");		
	});
}
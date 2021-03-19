import {createValidator} from "./validator.js";

let resetSubmitBtn = function(form){
	$(".contactContainer input[type=submit]").attr("disabled", "true");
}

let attachEventListeners = function(){
	$(".contactContainer textarea.disabled").on("click",function(e){
		if($(this).hasClass("disabled")){
			sessionStorage.setItem("intendedUrl", window.location.href);
			window.location.replace("/login");	
		}	
	});

	$(".contactContainer textarea").on("keyup", function(){
		if($(this).val().trim()) {
			$(".contactContainer input[type=submit]").removeAttr("disabled");
		} else {
			$(".contactContainer input[type=submit]").attr("disabled", "true");
		}
	});
	
	$(".messageStatus .closeBtn").on("click", function(){
		$(".messageStatus").animate({height:0},400);
		$(".messageStatus .closeBtn").css("display", "none");
	});
}
	
export function turnOnContact(){
	createValidator("contact");
	attachEventListeners();
	resetSubmitBtn($(".contactContainer form"));
}
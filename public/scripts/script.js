import {createValidator, clearServerMsg} from "./validator.js";

let showAuthForm = function(e){
	$(".authContainer").removeAttr("hidden");
	const reflow = $(".authContainer").outerHeight();
	$(".authContainer").addClass("open");
	$(".showLogin").addClass("active");
	$("form[name=login]").addClass("active");
	$(".shim").show();
}

let resetAuthForm = function(){
	$("form[name=login]").get(0).reset();
	$("form[name=register]").get(0).reset();
	$("form[name=login]").validate().resetForm();
	$("form[name=register]").validate().resetForm();
	clearServerMsg();
}

let hideAuthForm = function(e){
	if($(e.target).hasClass("closeBtn") || $(e.target).parents(".closeBtn").length){
		$(".showRegister").removeClass("active");
		$(".showLogin").addClass("active");
		$("form[name=login]").removeClass("active");
		$("form[name=register]").removeClass("active");
		$(".authContainer").on("transitionend", transitionedListener);
		$(".authContainer").removeClass("open");
		$(".shim").hide();
		resetAuthForm();
	}
}

let switchAuthFrom = function(e){
	let target = $(e.target);
	resetAuthForm();

	if(!target.hasClass("active")){

		if(target.hasClass("showLogin")){
			$(".showRegister").removeClass("active");
			$("form[name=register]").removeClass("active");
			$("form[name=login]").addClass("active");
		}

		if(target.hasClass("showRegister")){
			$(".showLogin").removeClass("active");
			$("form[name=login]").removeClass("active");
			$("form[name=register]").addClass("active");
		}

		$(target).addClass("active");
	}
}

let hideOpened = function(){
	if($(".menuItems").hasClass("open")){
		$(".menuItems").removeClass("open");
		return 1;
	}
	if($(".userOptions").hasClass("open")){
		$(".userOptions").removeClass("open");
		return 1;
	}

	return 0;
}

let handleMobileMenu= function(e){
	if($(e.target).hasClass("menuBtn") || $(e.target).parents(".menuBtn").length){
		$(".menuItems").addClass("open");
		return;
	}

	if($(e.target).hasClass("menuCloseBtn") || $(e.target).parents(".menuCloseBtn").length){
		$(".menuItems").removeClass("open");
		return;
	}
}

let handleUserOptions = function(e){
	if($(e.target).hasClass("optionsBtn") || $(e.target).parents(".optionsBtn").length){
		$(".userOptions").toggleClass("open");
	}
}

let transitionedListener = function(){
	$(".authContainer").attr("hidden", "true");
	$(".authContainer").off("transitionend", transitionedListener);
}

let attachEventListeners = function(){
	$(".login").on("click", showAuthForm);

	$(".logout").on("click", function(){
		window.location.replace("/logout");
	});

	$(".showLogin, .showRegister").on("click", switchAuthFrom);

	$("body").on("click", function(e){
		if(hideOpened()) return;
		handleMobileMenu(e);
		handleUserOptions(e);
		hideAuthForm(e);
	});

	$("form[name=login] :input, form[name=register] :input").on("keyup", ()=>{
		clearServerMsg();
	});

	$(window).on("resize", function(e){
		if($(window).width() > 768 && $(".menuItems").hasClass("open")){
			$(".menuItems").removeClass("open")
		}
	});
}

$(document).ready(function(){
	createValidator("login");
	createValidator("register");
	attachEventListeners();
});

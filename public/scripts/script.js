import {turnOnAuth} from "./auth.js";
import {turnOnContact} from "./contact.js";

$(document).ready(function(){
	turnOnAuth();
	turnOnContact();
});

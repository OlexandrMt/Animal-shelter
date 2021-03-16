export function contactAnimalHandler(){
	$(".contactAnimal textarea").on("click",()=>{
		if($(this).attr("disabled")){
			window.location.replace("/login");
		}
	})
}

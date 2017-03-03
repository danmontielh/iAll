var nameEntry;

// Función para ocultar div
var hideDiv = function (selectorDiv) {
	$(selectorDiv).hide();
};

var showDiv = function (selectorDiv2){
	$(selectorDiv2).show();
};

hideDiv("#logo");
hideDiv("#logot");
hideDiv("#input-job");
hideDiv("#add");

// Función para recibir nombre
var funct = function() {
	$("h1").on("click", function(){
	nameEntry = $("#name-entry").val();
	hideDiv(".preload");
	$("#logo").show();
	$("#logot").show()
			   .append("<h1 class='text-right intro-name'>Bienvenido: "+nameEntry+"</h1>");
	$("#input-job").show();
	$("#add").show();
})
}

funct();

//Función para agregar tareas.
$("#input-t").on("click", function(){

	var nameTwo = $("#name-entry2").val();
if(nameTwo != "") {
	$(".ula").append("<li class='list text-center'>"+nameTwo+"</li>");
}
})
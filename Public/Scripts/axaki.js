//$().ready(function() {
	
//});

window.onload = function(){
	footer_fix();
}

function footer_fix() {
	var altura_janela = $(window).height(),
	altura_container = $(".container").height();
	
	/* A soma da aultura do FOOTER e HEADER = 140px
	 * Se (altura_container + 140) < altura_janela
	 * add uma classe no #footer para fixa-lo no bottom
	*/
	if ( (altura_container + 140) < altura_janela ) {
		$("#footer").addClass("footer-fixed");
	} else {
		$("#footer").removeClass("#footer-fixed");
	} 
}

function confirmacao(){ 
	if(confirm("Você deseja comprar esse item?"))
		return true;
	else
		return false;
}
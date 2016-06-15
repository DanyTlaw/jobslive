// Wenn auf ein Angebot geklickt wird sollten die Farben scharf werden
$(".angebot").click(function(){



	// Es muss überprüft werden ob schon eines markiert ist
	$(document).find(".angebot").each(function(){
			$(this).attr("markiert", "0");
			$(this).find(".angebot-header").css('background-color', '#7aa3cc');
			$(this).find(".angebot-price").css('background-color', '#6b99e5');
		

	});

	// Wechselt das attribut markiert je nach dem ob es auch ausgewählt wurde
	if($(this).attr("markiert")=="1"){
		$(this).attr("markiert", "0");
	}
	else if($(this).attr("markiert")=="0"){
		$(this).attr("markiert", "1");
	}

	// Setzt alle 
	if($(this).attr("markiert")=="1"){
		console.log("ist markiert");
		$(this).find(".angebot-header").css('background-color', '#99ccff');
		$(this).find(".angebot-price").css('background-color', '#77aaff');
	}
});

function angeboteColor(){

}

$(document).ready(function(){

	// Macht bei den Conditionen eines ausgewählt
	$(".angebot").each(function(){
		if($(this).attr("markiert")=="0"){
			
			$(this).find(".angebot-header").css('background-color', '#7aa3cc');
			$(this).find(".angebot-price").css('background-color', '#6b99e5');
		}

	});
	
});
// Hamburger Menu

$(".hamburger-menu").click(function(){
		$(this).parent().toggleClass("activated");
	});


// Accordion created by Fifi Law

$(".accordion").click(function(){
	$(this).toggleClass("accordion-active");
	
	if($(this).hasClass("accordion-active")){
		$(this).find(".accordion-icon").text("-");
	}else{
		$(this).find(".accordion-icon").text("+");
	}

	
})
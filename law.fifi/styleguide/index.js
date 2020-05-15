// Hamburger Menu
$(()=>{
$(".hamburger-menu").click(function(){
		$(this).parent().toggleClass("activated");
	});

$(".nav-item").click(function(){
		$(this).parents(".hamburger-nav").removeClass("activated");
	});


// Accordion created by Fifi Law

$(".accordion").click(function(){
	$(this).toggleClass("accordion-active");
	
	if($(this).hasClass("accordion-active")){
		$(this).find(".accordion-icon").text("-");
	}else{
		$(this).find(".accordion-icon").text("+");
	}

	
});

$(".hotdog-icon2").click(function(){

	$(this).prev().toggleClass("hotdog2-active");
});


$(".hotdog-icon3").click(function(){

	$(this).prev().toggleClass("hotdog3-active");
});


$(".thumbstrip img").click(function(){
	console.log("true");
	
	let newscr = $(this).attr("src");

	$(this).closest(".image-picker").find(".main-image img").attr({src:newscr});
})

// var width = $(window).width();
// $(window).resize(function(){
// 	console.log(width);
// 	if(width <= 600){
// 		$('nav-center').addClass('dropdown');
// 	}
// });

$(".ham-icon").click(function(){
	$(this).parent().toggleClass("active");
})
})
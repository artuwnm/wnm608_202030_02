





$(".gallery-item").on("click",function(){
	let src = $(this).find("img").attr("src");

	$("body").append(`<div class='lightbox'><img src='${src}'></div>`);
});

$("body").on("click",".lightbox",function(){
	$(this).remove();
})


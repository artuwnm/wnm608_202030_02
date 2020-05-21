$(()=>{
	$(".thumbstrip img").on("mouseenter",function(e){
		$(".main-image img")
			.attr("src",$(this).attr("src"));
	})
})
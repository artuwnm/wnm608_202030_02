$(()=>{
	$(".product-thumbs img").on("mouseenter",function(e){
		$(".product-main img")
			.attr("src",$(this).attr("src"));
	})
})
© 2020 GitHub, Inc.
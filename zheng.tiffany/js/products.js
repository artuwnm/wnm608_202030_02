

$(()=>{
	$(".product-thumbs img").on("click",function(e){
		$(".product-main img").attr("src",$(this).attr("src"));
	})
})


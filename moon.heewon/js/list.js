
const showResults = (d) =>{
	if(d.error) throw d.error;
	$(".productlist").html(
		d.result.length==0 ? "<div class='col-xs-12'><div class='card'>No Results</div></div>" :
		makeProductList(d.result)
	);
}


getData({type:'product_all'}).then(showResults);


$(()=>{

	$("#product-search").on("submit",function(e){
		console.log("honk")
		e.preventDefault();
		getData({
			type:'product_search',
			search:$("#product-search>input").val()
		}).then(showResults)
	})


	$(".js-filter").on("click",function(e){
		getData({
			type:'product_filter',
			column:$(this).data("column"),
			value:$(this).data("value")
		}).then(showResults);
	})


});
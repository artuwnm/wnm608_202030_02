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
	});


	$(".js-filter").on("click",function(e){
		getData(
			$(this).data("value")==""?{
				type:'product_all'
			}:{
				type:'product_filter',
				column:$(this).data("column"),
				value:$(this).data("value")
			}
		).then(showResults);
	});


	$(".js-sort").on("change",function(e){
		getData(
			this.value==1 ?
				{type:'product_sort',column:'year_bought',dir:'DESC'} :
			this.value==2 ?
				{type:'product_sort',column:'year_bought',dir:'ASC'} :
			this.value==3 ?
				{type:'product_sort',column:'price',dir:'DESC'} :
			this.value==4 ?
				{type:'product_sort',column:'price',dir:'ASC'} :
			{type:'product_all'}
		).then(showResults);
	});


});
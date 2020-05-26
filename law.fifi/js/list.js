
const showResults = (d)=>{
	if(d.error) throw d.error;

	$(".productlist").html(
		d.result.length==0?"<div class='col-xs-9 card transparent text-align-center'>Oops! No Results</div>":makeProductList(d.result)
	);
}


getData({type:'products_all'}).then(showResults);


$(()=>{

	$("#product-search").on("submit",function(e){
		e.preventDefault();
		getData({
			type:'product_search',
			search:$("#product-search>input").val()
		}).then(showResults);
	})

	$(".products_filter").on("click",function(e){
		getData(

			$(this).data("value")==""?{
				type:"products_all"
			}:{
				type:"products_filter",
				value:$(this).data("value"),
				column:$(this).data("column")
			}).then(showResults);
	})

	$(".products_sort").on("click",function(e){
		getData(
			$(this).data("value")==1?{type:'products_sort',column:'price',dir:'DESC'}:
			$(this).data("value")==2?{type:'products_sort',column:'price',dir:'ASC'}:
			$(this).data("value")==3?{type:'products_sort',column:'date_created',dir:'DESC'}:
			$(this).data("value")==4?{type:'products_sort',column:'date_created',dir:'ASC'}:
			{type:"products_all"}
			).then(showResults);
	})


});
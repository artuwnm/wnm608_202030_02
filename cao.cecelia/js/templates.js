// javascript backtick templates
const makeProductList = templater(o=>{
return `
<div class="col-xs-6 col-md-4">
	<a href="product_item.php?id=${o.id}" class="display-block">
		<figure class="product-figure">
			<div class="product-image">

				<img src="${o.thumbnail}" alt="">
			</div>
			
				
					<h4 class="name">${o.name}</h4>
				
					<h4 class="price">&dollar;${o.price.toFixed(2)}</h4>
				
			
			
		</figure>
	</a>
</div>
`;
})
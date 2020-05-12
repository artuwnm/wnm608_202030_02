// javascript backtick templates
const makeProductList = templater(o=>{
return `
<div class="col-xs-6 col-md-4">
	<a href="product_item.php?id=${o.id}" class="display-block">
		<figure class="product-figure">
			<div class="product-image">

				<img src="${o.thumbnail}" alt="">
			</div>
			<div class="form-control display-flex">
				<div class="flex-none">
					<h4>${o.name}</h4>
				</div>
				<div class="flex-stretch"></div>
				<div class="flex-none">
					<h4>&dollar;${o.price.toFixed(2)}</h4>
				</div>
			</div>
			
		</figure>
	</a>
</div>
`;
})
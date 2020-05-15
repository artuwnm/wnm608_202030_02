// javascript backtick templates
const makeProductList = templater(o=>{
return `
<div class="col-3">
<a href="product_item.php?id=${o.id}" class="display-block">
				
	<div class="img-change">
		<img src="images/sm/${o.thumbnail_a}" alt="">
		<img class="img-change-after" img src="images/sm/${o.thumbnail_b}">
	</div>
	<figcaption class="product-caption">
		<div class="caption-name">${o.product_name}</div>
		<div class="caption-price">&dollar;${o.price}</div>
	</figcaption>
</a>
</div>
`;
})

//javascript backtick templates
const makeProductList = templater(o=>{
	return `
<figure class="product-figure col-md-4 col-sm-6">
	<a href="product_item.php?id=${o.id}">
	<img src="images/${o.thumbnail}" alt="">
				
	<figcaption>
		<h5>${o.productName}</h5>
		<p>&dollar;${o.price}</p>
	</figcaption>
	</a>
</figure>

	`;
})
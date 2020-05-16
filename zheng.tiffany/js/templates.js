


const makeProductList = templater(o=>{
	return `
		<div class="col-xs-6 col-md-4">
			<a href="item_details.php?id=${o.id}" class="display-block">
				<figure class="product-figure card">
					<button><h3>See Details</h3></button>
					<div class="product-image">
						<img src="${o.thumbnail}" alt="">
					</div>
					<figcaption class="product-description">
						<div class="product-name bold">${o.name}</div>
						<div class="product-price">&dollar;${o.price}</div>
					</figcaption>
				</figure>
			</a>
		</div>
	`;
})
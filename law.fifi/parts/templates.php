<?php 


function productListTemplate($r, $o){

return $r.<<<HTML

<figure class="product-figure col-md-4">
	<a href="product_item.php?id=$o->id">
	<img src="images/$o->thumbnail" alt="">
				
	<figcaption>
		<h5>$o->productName</h5>
		<p>&dollar;$o->price</p>
	</figcaption>
	</a>
</figure>

HTML;
}

function RelatedProductsListTemplate($r, $o){

return $r.<<<HTML

<a href='product_item.php?id='>
	<div class='card transparent col-md-4'>
						 
		<div><img src='images/.png'></div>
					
		<h4>$o</h4>
						 
	</div>
</a>

HTML;
}

function cartListTemplate($r, $o){

$color = rand(0,1)?"color: Yellow":"";
$qty = rand(1,5);

return $r.<<<HTML

	<div class="display-flex">
		
			<div class="image flex-none cart-img"><img src="images/$o->thumbnail" alt=""></div>
			<div class="flex-stretch">
				<div class="display-flex">
					<div class="flex-stretch">
						<h4>$o->productName</h4>
						<div>$color</div>
						<div>Qty:$qty</div>
					</div>
					<div class="flex-none">
						<h5>&dollar; $o->price</h5>
					</div>
				</div>
			
		</div>
	</div>

HTML;
}


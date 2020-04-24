<?php 

function productListTemplate($r,$o) {
return $r.<<<HTML
<div class="col-xs-6 col-md-4">
	<a href="item_details.php?id=$o->id" class="display-block">
		<figure class="product-figure soft">
			<div class="product-image">
				<img src="$o->thumbnail" alt="">
			</div>
			<figcaption class="product-description">
				<div class="product-name">$o->name</div>
				<div class="product-price">&dollar;$o->price</div>
			</figcaption>
		</figure>
	</a>
</div>
HTML;
}

function cartListTemplate($r,$o) {
return $r.<<<HTML
<div class="display-flex">
	<div class="flex-none product-thumbs">
		<img src="$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<div class="display-flex">
			<div class="flex-stretch">
				<strong>$o->name</strong>
				<div>Delete</div>
			</div>
			<div class="flex-none">
				&dollar;$o->total
			</div>
		</div>
	</div>
</div>
HTML;
}


function cartTotals() {
$cart = getCart();

$cartprice = array_reduce($cart,function($r,$o){return $r + ($o->amount*$o->price);},0);

$pricefixed = number_format($cartprice,2,'.','');
$taxfixed = number_format($cartprice*0.0725,2,'.','');
$taxedfixed = number_format($cartprice*1.0725,2,'.','');

return <<<HTML
<div class="card-section">
	<h2>Totals</h2>
	<div class="display-flex">
		<div class="flex-stretch">
			<strong>Sub Total</strong>
		</div>
		<div class="flex-none">
			<span>&dollar;$pricefixed</span>
		</div>
	</div>
	<div class="display-flex">
		<div class="flex-stretch">
			<strong>Tax</strong>
		</div>
		<div class="flex-none">
			<span>&dollar;$taxfixed</span>
		</div>
	</div>
</div>
<div class="card-section">
	<div class="display-flex">
		<div class="flex-stretch">
			<strong>Total</strong>
		</div>
		<div class="flex-none">
			<span>&dollar;$taxedfixed</span>
		</div>
	</div>
</div>
HTML;
}



















 ?>
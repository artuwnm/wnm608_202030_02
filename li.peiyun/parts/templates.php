<?php

function productListTemplate($r,$o) {
return $r.<<<HTML

<div class="col-3">
<a href="product_item.php?id=$o->id" class="display-block">
				
	<div class="img-change">
		<img src="images/sm/$o->thumbnail_a" alt="">
		<img class="img-change-after" img src="images/sm/$o->thumbnail_b">
	</div>
	<figcaption class="product-caption">
		<div class="caption-name">$o->product_name</div>
		<div class="caption-price">&dollar;$o->price</div>
	</figcaption>
</a>
</div>


HTML;
}

function cartListTemplate($r,$o) {
// $hascase = rand(0,1) ? "case: big" : "";
// $amount = rand(1,5);
$pricefixed = number_format($o->total,2,'.','');
$selectAmount = selectAmount($o->amount);
return $r.<<<HTML
<div class="display-flex cart-section">
	<div class="flex-none cart-thumbs">
		<img src="images/sm/$o->thumbnail_a">
	</div>
	<div class="cart-caption">
		<div class="display-flex">
			<div class="flex-stretch">
				<strong>$o->product_name ($o->amount)</strong>
			</div>
			<div class="flex-none">
				&dollar;$pricefixed
			</div>
		</div>

		<div class="display-flex">
		<div class="flex-stretch"></div>
		<form class="flex-none" method="get" action="data/form_actions.php" onchange="this.submit()">
				<input type="hidden" name="action" value="update-cart-amount">
				<input type="hidden" name="id" value="$o->id">
				$selectAmount
			</form>
		</div>

		<div class="display-flex">	
			<form class="flex-none" method="get" action="data/form_actions.php">
				<input type="hidden" name="action" value="delete-cart-item">
				<input type="hidden" name="id" value="$o->id">
				<button type="submit" class="delete-btn">
				
				<svg height='100px' width='100px'  fill="#db8787" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision;text-rendering:geometricPrecision;image-rendering:optimizeQuality;" viewBox="0 0 128 187" x="0px" y="0px" fill-rule="evenodd" clip-rule="evenodd"><defs><style type="text/css">
  				</style></defs><g><path class="trashcan" d="M20 45l89 0c10,0 19,9 19,20l0 102c0,11 -9,20 -19,20l-89 0c-11,0 -20,-9 -20,-20l0 -102c0,-11 9,-20 20,-20zm27 -45l35 0c11,0 10,11 10,19l26 0c6,0 10,5 10,11 0,6 -4,10 -10,10l-107 0c-6,0 -11,-4 -11,-10 0,-6 5,-11 11,-11l25 0c0,-8 -1,-19 11,-19zm31 19c-1,-3 -4,-6 -7,-6l-13 0c-4,0 -7,3 -8,6l28 0zm-48 47c4,0 6,3 6,6l0 91c0,3 -2,6 -6,6 -3,0 -5,-3 -5,-6l0 -91c0,-3 2,-6 5,-6zm34 0c3,0 6,3 6,6l0 91c0,3 -3,6 -6,6 -3,0 -6,-3 -6,-6l0 -91c0,-3 3,-6 6,-6zm34 0c3,0 6,3 6,6l0 91c0,3 -3,6 -6,6 -3,0 -6,-3 -6,-6l0 -91c0,-3 3,-6 6,-6z"></path></g>
  				</svg>

  				</button>
			</form>

			<div class="flex-stretch"></div>

		</div>
	</div>
</div>
HTML;
}



function selectAmount($amount=1,$total=10) {
	$output = "<select name='amount' class='form-btn-sm'>";
	for($i=1;$i<=$total;$i++) {
		$output .= "<option ".($i==$amount?"selected":"").">$i</option>";
	}
	$output .= "</select>";
	return $output;
}





function cartTotals() {
$cart = getCart();

$cartprice = array_reduce($cart,function($r,$o){return $r + ($o->amount*$o->price);},0);

$pricefixed = number_format($cartprice,2,'.','');
$taxfixed = number_format($cartprice*0.0725,2,'.','');
$taxedfixed = number_format($cartprice*1.0725,2,'.','');

return <<<HTML
<div class="card-light">

	<h4>Totals</h4>

	<div class="cart-subtotal">
	<div class="display-flex">
		<div class="flex-stretch">
			Sub Total
		</div>
		<div class="flex-none">
			<strong><span>&dollar;$pricefixed</span></strong>
		</div>
	</div>
	<div class="display-flex">
		<div class="flex-stretch">
			Tax
		</div>
		<div class="flex-none">
			<strong><span>&dollar;$taxfixed</span></strong>
		</div>
	</div>
</div>
<div class="cart-total">
	<div class="display-flex">
		<div class="flex-stretch">
			<strong>Total</strong>
		</div>
		<div class="flex-none">
			<strong><span>&dollar;$taxedfixed</span></strong>
		</div>
	</div>
</div>
<div>
	<a href="product_checkout.php" class="btn-color">Checkout</a>
</div>
</div>
HTML;
}




function makeCartBadge() {
	if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
		return "";
	} else return "(".array_reduce($_SESSION['cart'],function($r,$o){ return $r + $o->amount; },0).")";
}
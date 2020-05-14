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
// $hascase = rand(0,1) ? "case: big" : "";
// $amount = rand(1,5);
$pricefixed = number_format($o->total,2,'.','');
$selectAmount = selectAmount($o->amount);
return $r.<<<HTML

<div class="bag-item">
	<ul class="display-flex">
		<li class="product-thumbs"><img src="$o->thumbnail"></li>
		<li class="bag-item-info">$o->name</li>
		<li class="bag-item-quantity">
			<form method="get" action="data/form_actions.php" onchange="this.submit()">
				<input type="hidden" name="action" value="update-cart-amount">
				<input type="hidden" name="id" value="$o->id">
				$selectAmount
			</form>
		</li>
		<li class="bag-item-price bold">&dollar;$pricefixed</li>
		<li class="bag-item-delete">
			<form method="get" action="data/form_actions.php">
				<input type="hidden" name="action" value="delete-cart-item">
				<input type="hidden" name="id" value="$o->id">
				<button type="submit">
					<img src="images/delete.svg" width="20px" height="20px" alt="Delete Item">
				</button>
			</form>
		</li>
	</ul>
</div>
HTML;
}

// <div class="display-flex card-section">
// 	<div class="flex-none product-thumbs">
// 		<img src="$o->thumbnail">
// 	</div>
// 	<div class="flex-stretch">
// 		<div class="display-flex">
// 			<div class="flex-stretch">
// 				<strong>$o->name ($o->amount)</strong>
// 			</div>
// 			<div class="flex-none">
// 				&dollar;$pricefixed
// 			</div>
// 		</div>
// 		<div class="display-flex" style="font-size:0.8em">
// 			<form class="flex-none" method="get" action="data/form_actions.php">
// 				<input type="hidden" name="action" value="delete-cart-item">
// 				<input type="hidden" name="id" value="$o->id">
// 				<button type="submit" class="form-button">Delete</button>
// 			</form>
// 			<div class="flex-stretch"></div>
// 			<form class="flex-none" method="get" action="data/form_actions.php" onchange="this.submit()">
// 				<input type="hidden" name="action" value="update-cart-amount">
// 				<input type="hidden" name="id" value="$o->id">
// 				$selectAmount
// 			</form>
// 		</div>
// 	</div>
// </div>


function selectAmount($amount=1,$total=10) {
	$output = "<select name='amount' class='select-button bag'>";
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

<div class="bag-totals">
	<table class="bag-item-totals-table">
		<tbody>
			<tr>
				<td>Subtotal</td>
				<td class="bold">&dollar;$pricefixed</td>
			</tr>
			<tr>
				<td>Tax</td>
				<td class="bold">&dollar;$taxfixed</td>
			</tr>
			<tr>
				<td style="font-size: 1em">Total</td>
				<td class="bold">&dollar;$taxedfixed</td>
			</tr>
		</tbody>
	</table>
</div>
HTML;
}

// <div class="bag-totals">

// 	<div class="display-flex">
// 		<div class="flex-stretch">
// 			<strong>Sub Total</strong>
// 		</div>
// 		<div class="flex-none">
// 			<span>&dollar;$pricefixed</span>
// 		</div>
// 	</div>
// 	<div class="display-flex">
// 		<div class="flex-stretch">
// 			<strong>Tax</strong>
// 		</div>
// 		<div class="flex-none">
// 			<span>&dollar;$taxfixed</span>
// 		</div>
// 	</div>
// </div>
// <div class="card-section">
// 	<div class="display-flex">
// 		<div class="flex-stretch">
// 			<strong>Total</strong>
// 		</div>
// 		<div class="flex-none">
// 			<span>&dollar;$taxedfixed</span>
// 		</div>
// 	</div>
// </div>


function makeCartBadge() {
	if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
		return "";
	} else return "(".array_reduce($_SESSION['cart'],function($r,$o){ return $r + $o->amount; },0).")";
}


function makeListItemTemplate($r,$o) {
return $r.<<<HTML
<div class="itemlist-item display-flex">
	<div class="flex-none">
		<div class="image">
			<img src="$o->thumbnail">
		</div>
	</div>
	<div class="flex-stretch info">
		<h5>$o->name</h5>
		<h6>$o->category</h6>
	</div>
	<div class="flex-none display-flex admin-edit">
		<div><a href="admin/?id=$o->id">Edit</a></div>
		<div><a href="item_details.php?id=$o->id">See Item</a></div>
	</div>
</div>
HTML;
}



function checkoutListTemplate($r,$o) {
// $hascase = rand(0,1) ? "case: big" : "";
// $amount = rand(1,5);
$pricefixed = number_format($o->total,2,'.','');
$selectAmount = selectAmount($o->amount);
return $r.<<<HTML
<div class="checkout-bag-item">
	<ul class="display-flex relative">
		<li class="product-thumbs"><img src="$o->thumbnail"></li>
		<li class="bag-item-info relative">
			<h5>$o->name</h5>
			<table class="bag-item-info-table absolute">
				<tbody>
					<tr>
						<td>Size</td>
						<td class="bold">NA</td>
					</tr>
					<tr>
						<td>Quantity</td>
						<td class="bold">$o->amount</td>
					</tr>
				</tbody>
			</table>
		</li>
		<li class="bag-item-price absolute"><h3>&dollar;$pricefixed</h3></li>
	</ul>
</div>
HTML;
}



function checkoutTotals() {
$cart = getCart();

$cartprice = array_reduce($cart,function($r,$o){return $r + ($o->amount*$o->price);},0);

$pricefixed = number_format($cartprice,2,'.','');
$taxfixed = number_format($cartprice*0.0725,2,'.','');
$taxedfixed = number_format($cartprice*1.0725,2,'.','');

return <<<HTML

<table class="bag-subtotal-table">
	<tbody>
		<tr>
			<td>Subtotal</td>
			<td>&dollar;$pricefixed</td>
		</tr>
		<tr>
			<td>Tax</td>
			<td>&dollar;$taxfixed</td>
		</tr>
		<tr>
			<td>Total</td>
			<td><h3>&dollar;$taxedfixed</h3></td>
		</tr>
	</tbody>
</table>
HTML;
}




















 ?>
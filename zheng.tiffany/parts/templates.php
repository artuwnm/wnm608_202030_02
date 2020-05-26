<?php 

function featuredListTemplate($r,$o) {
return $r.<<<HTML
<div class="col-xs-12 col-md-6 col-lg-4">
	<a href="item_details.php?id=$o->id">
		<div class="product-figure card">
			<button><h3>Shop</h3></button>
			<img src="$o->thumbnail" alt="$o->name">
		</div>
	</a>
</div>
HTML;
}


function productList($rows) {
	$products = array_reduce($rows,'featuredListTemplate');
	echo "$products";
}

function recommendedCategory($cat,$limit=3) {
	$sql = "SELECT * FROM `products` WHERE `category`='$cat' ORDER BY `featured` DESC LIMIT $limit";
	productList(getRows(makeConn(),$sql));
}




function cartListTemplate($r,$o) {
// $hascase = rand(0,1) ? "case: big" : "";
// $amount = rand(1,5);
$pricefixed = number_format($o->total,2,'.','');
$selectAmount = selectAmount($o->amount);
return $r.<<<HTML

<div class="bag-item row">
	<div class="product-thumbs flex-none">
		<img src="$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<ul class="display-flex">
			<li class="bag-item-info">$o->name</li>
			<li class="bag-item-size">$o->size</li>
			<li class="bag-item-quantity">
				<form method="get" action="data/form_actions.php" onchange="this.submit()">
					<input type="hidden" name="action" value="update-cart-amount">
					<input type="hidden" name="id" value="$o->id">
					$selectAmount
				</form>
			</li>
			<li class="bag-item-price bold">&dollar;$pricefixed</li>
		</ul>
	</div>
	<div class="bag-item-delete flex-none">
		<form method="get" action="data/form_actions.php">
			<input type="hidden" name="action" value="delete-cart-item">
			<input type="hidden" name="id" value="$o->id">
			<button type="submit" class="hover">
				<img src="images/delete.svg" width="20px" height="20px" alt="Delete Item">
			</button>
		</form>
	</div>
</div>
HTML;
}


function selectAmount($amount=1,$total=10) {
	$output = "<select name='amount' class='select-button'>";
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

<div class="bag-totals display-flex">
	<div class="flex-stretch"></div>
	<div class="flex-none">
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
</div>
HTML;
}


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
		<a href="admin/?id=$o->id">Edit</a>
		<a href="item_details.php?id=$o->id">View Item</a>
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
	<ul class="display-flex">
		<li class="product-thumbs flex-none">
			<img src="$o->thumbnail">
		</li>
		<li class="bag-item-info flex-stretch">
			<h5>$o->name</h5>
			<table class="bag-item-info-table">
				<tbody>
					<tr>
						<td>Size</td>
						<td class="bold">$o->size</td>
					</tr>
					<tr>
						<td>Quantity</td>
						<td class="bold">$o->amount</td>
					</tr>
				</tbody>
			</table>
		</li>
		<li class="bag-item-price flex-none"><h3>&dollar;$pricefixed</h3></li>
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
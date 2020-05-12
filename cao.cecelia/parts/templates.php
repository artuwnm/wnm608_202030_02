<?php


function productListTemplate($r,$o) {
return $r.<<<HTML
<div class="col-xs-6 col-md-4">
	<a href="product_item.php?id=$o->id" class="display-block">
		<figure class="product-figure">
			<div class="product-image">

				<img src="$o->thumbnail" alt="">
			</div>
			<div class="form-control display-flex">
				<div class="flex-none">
					<h4>$o->name</h4>
				</div>
				<div class="flex-stretch"></div>
				<div class="flex-none">
					<h4>&dollar;$o->price</h4>
				</div>
			</div>
			
		</figure>
	</a>
</div>
HTML;

}


function cartListTemplate($r,$o) {
$pricefixed = number_format($o->total,2,'.','');
$selectAmount = selectAmount($o->amount);
return $r.<<<HTML
<div class="display-flex">
	<div class="flex-none product-thumbs">
		<img src="$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<div class="display-flex">
			<div class="flex-stretch">
				<strong>$o->name</strong>
			</div>
			<div class="flex-none">
			
				&dollar;$o->price
			</div>
		</div>
		<div class="display-flex" style="font-size:0.8em">
			<form class="flex-none" method="get" action="data/form_actions.php">
				<input type="hidden" name="action" value="delete-cart-item">
				<input type="hidden" name="id" value="$o->id">
				<button type="submit" class="form-button">Delete</button>
			</form>
			<div class="flex-stretch"></div>
			<form class="flex-none" method="get" action="data/form_actions.php" onchange="this.submit()">
				<input type="hidden" name="action" value="update-cart-amount">
				<input type="hidden" name="id" value="$o->id">
				$selectAmount
			</form>
		</div>
	</div>
</div>
<hr align="center" width="100%" color="grey" size="1">
HTML;
}

function addCartTemplate($r,$o) {
$pricefixed = number_format($o->total,2,'.','');
$selectAmount = selectAmount($o->amount);
return $r.<<<HTML
<div class="display-flex">
	<div class="flex-none product-thumbs">
		<img src="$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<div class="display-flex">
			<div class="flex-stretch">
				<strong>$o->name</strong>
			</div>
			<div class="flex-none">
				&dollar;$o->price
			</div>
		</div>
	</div>
</div>
HTML;
}



function selectAmount($amount=1,$total=10) {
	$output = "<select name='amount' class='form-button'>";
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
<div class="card-section">
	<h2>Totals</h2>
	<div class="display-flex">
		<div class="flex-stretch">
			<p style="font-size: 16px">Sub Total</p>
		</div>
		<div class="flex-none">
			<span><p style="font-size: 16px">&dollar;$pricefixed</p></span>
		</div>
	</div>
	<div class="display-flex">
		<div class="flex-stretch">
			<p style="font-size: 16px">Tax</p>
		</div>
		<div class="flex-none">
			<span><p style="font-size: 16px">&dollar;$taxfixed</p></span>
		</div>
	</div>
</div>
<hr align="center" width="100%" color="grey" size="1">
<div class="card-section">
	<div class="display-flex">
		<div class="flex-stretch">
			<strong><h3>Total</h3></strong>
		</div>
		<div class="flex-none">
			<span><h3>&dollar;$taxedfixed<h3></span>
		</div>
	</div>
</div>

HTML;
}




function makeCartBadge() {
	if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
		return "";
	} else return array_reduce($_SESSION['cart'],function($r,$o){ return $r + $o->amount; },0);
}




function makeListItemTemplate($r,$o) {
return $r.<<<HTML
<div class="itemlist-item display-flex">
	<div class="flex-none">
		<div class="product-thumbs">
			<img src="$o->thumbnail">
		</div>
	</div>
	<div class="flex-stretch">
		<div><strong>$o->name</strong></div>
		<div><span>$o->category</span></div>
	</div>
	<div class="flex-none display-flex">
		<div><a href="admin/?id=$o->id" class="form-button">Edit</a></div>
		<div><a href="product_item.php?id=$o->id" class="form-button">Details</a></div>
	</div>
</div>
HTML;
}





function productList($rows) {
	$product = array_reduce($rows,'productListTemplate');
	echo "<div class='grid gap productlist'>$product</div>
		
	";
}

function recommendedCategory($cat,$limit=2) {
	$sql = "SELECT * FROM `product` WHERE `category`='$cat' ORDER BY `date_create` DESC LIMIT $limit";
	productList(getRows(makeConn(),$sql));
}

function recommendedProducts($cat,$id=0,$limit=2) {
	$sql = "SELECT * FROM `product` WHERE `category`='$cat' AND `id`<>$id ORDER BY rand() DESC LIMIT $limit";
	productList(getRows(makeConn(),$sql));
}

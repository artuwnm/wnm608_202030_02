<?php 


function productListTemplate($r, $o){

return $r.<<<HTML

<figure class="product-figure col-md-4 col-sm-6">
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

// $color = rand(0,1)?"color: Yellow":"";
// $qty = rand(1,5);
$pricefixed = number_format($o->total,2,'.','');
$selectAmount = selectAmount($o->amount);

// print_p([$_SESSION]);

return $r.<<<HTML
<div class="display-flex product-list-page">
	<div class="cart-img flex-none">
		<img  src="images/$o->thumbnail" alt="">
	</div>
	<div class="flex-stretch">
		<div class="display-flex flex-direction-column cartList">
			<div class="flex-stretch product-name">
				<h3 class="medium-color">$o->productName ($o->amount)</h3>
				<h5 class="medium-color" style="font-size: 0.8em;">Color: $o->color </h5>

				<form method="get" action="data/form_actions.php" class="inline-block form-delete">
					<input type="hidden" name="action" value="delete-cart-item">
					<input type="hidden" name="id" value="$o->id">
					<button type="submit" class="btn delete">Delete</button>
				</form>
			</div>
			<div class="flex-none" >
				<h5 class="inline-flex" >&dollar; $pricefixed</h5>
				<div class="select-amount inline-flex">
					<form  method="get" action="data/form_actions.php" onchange="this.submit()">
						<input type="hidden" name="action" value="update-cart-amount">
						<input type="hidden" name="id" value="$o->id">
						$selectAmount
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


HTML;
}

function selectAmount($amount=1,$total=10) {
	$output = "<select name='amount' class='form-select'>";
	for($i=1;$i<=$total;$i++) {
		$output .= "<option ".($i==$amount?"selected":"").">$i</option>";
	}
	$output .= "</select>";
	return $output;
}


function cartTotal(){

	$cart = getCart();
	$cartprice = array_reduce($cart, function($r,$o){return $r +($o->amount*$o->price);},0);

	$pricefixed = number_format($cartprice,2,'.','');
	$taxfixed = number_format($cartprice*0.0725,2,'.','');
	$total = number_format($cartprice*1.0725,2,'.','');

return<<<HTML

<div class="color-dark">
	<p>Subtotal: &dollar; $cartprice</p>
</div>
<div class="color-dark"><p>Tax: &dollar; $taxfixed</p>	</div>				
<div class="color-dark">
	<p>Total: &dollar; $total</p>
</div>
HTML;
}


function makeCartBadge(){
	if(!isset($_SESSION['cart'])||empty($_SESSION['cart'])){
		return"";
	}else return "(".array_reduce($_SESSION['cart'],function($r,$o){return $r+$o->amount;},0).")";
		
}

function popularItems($r,$o){

return $r.<<<HTML
<div class="col-md-4 col-sm-12">
	<figure class="product-figure overlay">
		<a href="product_item.php?id=$o->id">
			<img src="images/$o->thumbnail" alt="">
			<figcaption>
				<h4 class="popular-item-title">$o->productName</h4>
				<p class="popular-item-title text-align-center">&dollar; $o->price</p>
			</figcaption>
		</a>
	</figure>
</div>

HTML;
}

function makeListItemTemplate($r,$o) {
return $r.<<<HTML


<div class="display-flex product-list-page">
	<div class="cart-img flex-none">
		<img  src="images/$o->thumbnail" alt="">
	</div>
	<div class="flex-stretch">
		<div class="display-flex">
			<div class="flex-stretch product-name">
				<h3 class="medium-color">$o->productName</h3>
				<h5 class="medium-color">$o->category</h5>
			</div>
			<div class="flex-none" >
				<a href="admin/?id=$o->id" class="btn dark">Edit</a>
		
				<a href="product_item.php?id=$o->id" class="btn light">Visit</a>
			</div>
		</div>
	</div>
</div>
HTML;
}
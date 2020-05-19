<?php


function productListTemplate($r,$o) {
return $r.<<<HTML
<div class="col-xs-6 col-md-4">
	<a href="product_item.php?id=$o->id" class="display-block">
		<figure class="product-figure">
			<div class="product-image">

				<img src="$o->thumbnail" alt="">
			</div>
			
				
					<h4 class="name">$o->name</h4>
				
					<h4 class="price">&dollar;$o->price</h4>
				
			
			
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
			
			<form class="flex-none" method="get" action="data/form_actions.php">
				<input type="hidden" name="action" value="delete-cart-item">
				<input type="hidden" name="id" value="$o->id">
				<button type="submit" class="closeicon" style="font-weight: bold;">X</button>
			</form>	
			</div>
		
		<div class="display-flex" style="margin-top: 2em;">
		<div class="quantity">
		<label style="font-size: 14px; color: light grey;">Qty</label>
			<form class="flex-none" method="get" action="data/form_actions.php" onchange="this.submit()">
				<input type="hidden" name="action" value="update-cart-amount">
				<input type="hidden" name="id" value="$o->id" >
				$selectAmount
			</form>
			 <div class="amount-icon">
    	<svg  width="24" height="24" viewBox="0 0 20 45" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" class="icon">
    	<path d="M23.245 4l-11.245 14.374-11.219-14.374-.781.619 12 15.381 12-15.391-.755-.609z"/>
    	</svg>
     </div>
		</div>
			<div class="flex-stretch"></div>
			<div class="flex-none" style="margin-top: 1em; font-size: 16px;">
			&dollar;$o->price
			</div>	
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
<div class="display-flex grid gap">

	<div class="flex-none product-thumbs col-xs-12 col-xl-3">
		<img src="$o->thumbnail">
	</div>

	<div class="col-xs-12 col-xl-1"></div>
	
	<div class="flex-stretch col-xs-12 col-xl-8">
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

function addCartListTemplate($r,$o) {
$pricefixed = number_format($o->total,2,'.','');
$selectAmount = selectAmount($o->amount);
return $r.<<<HTML
<div class="display-flex flex-justify-center">
          <div class="product-admin"><img src="$o->thumbnail"></div>
          
          <div class="cartdetailbox">
          <strong><h4 style="margin:0;">$o->name</h4></strong>
          <span><h6>$o->category</h6></span>
         
          </div>
				
         
        </div>

HTML;
}

function checKoutTemplate($r,$o) {
$pricefixed = number_format($o->total,2,'.','');
$selectAmount = selectAmount($o->amount);
return $r.<<<HTML
<div class="card-section">
<h4>Enjoy complimentary shipping and returns.</h4>
<div class="display-flex grid gap">

	<div class="flex-none product-thumbs col-xs-12 col-xl-3">
		<img src="$o->thumbnail">
	</div>

	<div class="col-xs-12 col-xl-1"></div>
	
	<div class="flex-stretch col-xs-12 col-xl-8">
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
</div>
HTML;
}


function selectAmount($amount=1,$total=10) {
	$output = "<select name='amount' class='amountselect'>";
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
	<h3>Order Summary</h3>
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

<div class="itemlist-item display-flex card soft">
	<div class="flex-none product-admin">
		<img src="$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<div class="display-flex">
			<div class="flex-stretch">
				<div><strong><h4 style="margin:0;">$o->name</h4></strong></div>
				<div><span><h6>$o->category</h6></span></div>
				
				
			</div>
			<div class="flex-none">
			
				
			</div>
		</div>
		<div class="form-control display-flex" style="font-size:0.8em">
		<div class="flex-none">
		<a href="admin/?id=$o->id" style="text-decoration: underline;">Edit</a>
		</div>
		<div class="flex-stretch"></div>
		<div class="flex-none">
		<a href="product_item.php?id=$o->id" style="text-decoration: underline;">Details</a>
		</div>
		</div>
		
	</div>
</div>
HTML;
}





function productList($rows) {
	$product = array_reduce($rows,'productListTemplate');
	echo "$product
		
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

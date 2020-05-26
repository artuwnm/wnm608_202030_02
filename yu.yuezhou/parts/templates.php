<?php

//List templete
function productListTemp($r,$o) {
    return $r.<<<HTML
            <li>
                <a href="product_item.php?id=$o->id">
                    <p class="img-p"><img src="img/$o->thumb" /></p>
                    <p class="good-name">$o->name</p>
                    <p class="good-price">&dollar;$o->price</p>
                </a>
            </li>
HTML;
}
//list data
function getProductList($keywords=''){
    $sql = "SELECT * FROM products WHERE status = 1";
    if($keywords != ""){
        $sql .= " and name like '%".$keywords."%' ";
    }
    $sql .= " order by id asc ";
    $rows = getRows(makeConn(),$sql);
    $products = array_reduce($rows,'productListTemp');
    echo $products;
}

//Cart templist
function cartListTemp($r,$o){
    return $r.<<<HTML
            <li class="clearfix">
                <div class="cart-img">
                    <img src="./img/$o->thumb"/>
                </div>
                <div class="cart-good-info">
                    <p class="cart-good-name">$o->name</p>
                    <p class="cart-good-attr"><label>Color:</label><span>$o->color</span></p>
                </div>
                <div class="cart-price-num-info">
			        <form class="flex-none" method="get" id="delete-cart-form" action="data/form_actions.php">
                    <p class="cart-price">&dollar;$o->amount</p>
                    <p class="cart-number">$o->quantity</p>
                    <p class="cart-delete">
                        <input type="hidden" name="action" value="delete-cart-item">
                        <input type="hidden" name="id" value="$o->id">
				        <button type="submit" class="form-button">Delete</button>
<!--                        <a href="javascript:;" class="J-delete-cart" data-id="$o->id">Delete</a>-->
                    </p>
                    </form>
                </div>
            </li>
HTML;
}




function cartTotals() {
    $cart = getCart();
    $cartprice = array_reduce($cart,function($r,$o){return $r + ($o->amount);},0);

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

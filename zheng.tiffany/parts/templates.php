<?php 

function productListTemplate($r,$o) {
return $r.<<<HTML
<div class="col-xs-6 col-md-4">
	<a href="item_details.php?id=$o->id" class="display-block">
		<figure class="product-figure soft">
			<div class="product-image">
				<img src="/images/$o->thumbnail" alt="">
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
		<img src="images/$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<div class="display-flex">
			<div class="flex-stretch">
				<strong>$o->name</strong>
				<div>Delete</div>
			</div>
			<div class="flex-none">
				&dollar;$o->price
			</div>
		</div>
	</div>
</div>
HTML;
}

 ?>
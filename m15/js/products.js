

// LIST CODE
function showProductList(arr){
	var output = "";
	for(let i in arr) {
		output += `
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="productlist-image">
				<img src="${arr[i].image}" alt="">
				</div>
				<div class="flex-parent linecenter" style="padding-top: .5em">
				<div class="flex-child">${arr[i].name}</div>
				<div class="flex-child">Price:${arr[i].price}</div>
				</div>
				<div class="flex-parent button_product_list paddingbottomsmall">
				<a href="product_item.php?id=${arr[i].id}" class=" flex-child linecenter">Check it Out</a>
				</div>
			</div>
		`;
	}
	$(".product-list").html(`
			<div class="container">
			<div class="grid">
				<div class="row gutters-large paddingtopsmall">
		${output}
				</div>
			</div>
			</div>
	`);
}



function getProductList(str,fn) {
	$.ajax({
		url:"data_feed.php?"+str,
		dataType:"json"
	})
	.done(fn)
}
// .fail()
// .always()






// CART CODE
function getCart(){
	return sessionStorage.cart ?
		JSON.parse(sessionStorage.cart) :
		[];
}
function setCart(arr){
	sessionStorage.cart = 
		JSON.stringify(arr);
}
function setCartBadge(){
	$(".cart-amount").html(getCart().length||'')
}

function getCartItems(){
	return getCart().reduce((r,o,i,a)=>{
		if(r!="") r+=",";
		return r+=o.id;
	},'');
}

function getCartList(){
	let cartitems = getCartItems();
	if(cartitems) {
		getProductList(
			'where=id&in='+cartitems
			,showCartList);
	} else {
		$(".cart-list").html(`
			<div class="linecenter paddingtop paddingbottommiddle">
				<h3 class="paddingbottomsmall">No items in the cart</h3>
				<div class="button_product_cart linecenter">
				<a href=product_list.php class=" flex-child linecenter" style="padding: 1em 4em;">Start to Shop</a>
				</div>
			</div>
				`);
	}
}
function showCartList(arr){
	let output = "";
	let totaltotal = 0;
	let cart = getCart();
	for(let i in arr) {

		let total = cart[i].amt * arr[i].price;
		totaltotal += total;
		output += `
				<div class="card grid">
				<div class="row gutters">
					<div class="col-sm-2 col-md-2 col-lg-2" ><img src="${arr[i].image}" class="media-image"></div>
					<div class="col-sm-10 col-md-10 col-lg-10">
						<div class="grid">
						<div class="row gutters">
							<div class="col-sm-3 col-md-6 col-lg-12">${arr[i].name}</div>
							<div class="col-sm-2 col-md-6 col-lg-4">Qty: ${cart[i].amt}</div>
							<div class="col-sm-2 col-md-6 col-lg-4 cell-number">Price: \$${arr[i].price}</div>
							<div class="col-sm-2 col-md-5 col-lg-3 cell-number">Total: \$${total}</div>
							<div class="col-sm-1 col-md-1 col-lg-1 js-deletecartitem" data-id="${arr[i].id}">&times;</div>
						</div>
						</div>
					</div>
				</div>
				</div>
			
		`;
	}
	$(".cart-list").html(`
		<div class="paddingbottomsmall">
			<div class="grid">
			<div class="row gutters">
				<div class="col-sm-12 col-md-12 col-lg-8">
					<!-- Looped Content -->
					${output}
					<!-- EndLooped Content -->
				</div>
				<div class="col-sm-12 col-md-1"></div>
					<div class="col-sm-12 col-md-12 col-lg-3 linecenter">
						<h2>Subtotal: \$${totaltotal}</h2>
						<div class="button_product_cart paddingbottommiddle"><a href=# class=" flex-child linecenter" style="padding: 1em 4em;">Place your Order</a></div>
					</div>
				</div>
			</div>
			</div>
		</div>


	
	`);
}




$(function(){ // document ready

	setCartBadge();

	$("#main-search").on("submit",function(e){
		e.preventDefault();
		if($("#main-search .form-search").val().length<3) return;
		getProductList(
			`where=name,description,category&like=${$("#main-search .form-search").val()}`,
			showProductList
		)
	})

	$(".js-filter").on("click",function(e){
		e.preventDefault();

		if($(this).data("value")=="") {
			getProductList('',showProductList);
			return;
		}

		getProductList(
			`where=${$(this).data("filter")}&what=${$(this).data("value")}`,
			showProductList
		)
	})

	$(".js-orderby").on("click",function(e){
		e.preventDefault();

		getProductList(
			`orderby=${$(this).data("orderby")}&direction=${$(this).data("direction")}`,
			showProductList
		)
	})








	$(".product-thumb").on("mouseenter",function(e){
		$(".product-mainimage img").attr("src",this.src)
	})


	$(".js-addtocart").on("click",function(e){
		let amt = +$("#cart-amount").val();
		if(!amt) return;

		let id = $(this).data("id");

		let cart = getCart();
		let ci = cart.find(o=>o.id==id);
		if(ci) {
			ci.amt += amt;
		} else {
			cart.push({
				amt:amt,
				id:id
			})
		}
		setCart(cart);
		setCartBadge();
	})
	$(document).on("click",".js-deletecartitem",function(e){
		let cart = getCart().filter(o=>
			o.id!=$(this).data("id"));
		
		setCart(cart);

		setCartBadge();

		getCartList();
	})
})


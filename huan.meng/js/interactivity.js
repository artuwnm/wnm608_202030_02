// Document ready
$(function(){
  $("#js-increase-cart").on("click",function(e){
    let cart_amount = $(".cart-amount").html();
    $(".cart-amount").html(++cart_amount);
  });

})

function navIconClick() {
  const x = document.getElementById("nav-bar");
  if (x.className === "nav nav-pills flex-parent-row flex-center-row") {
    x.className += " responsive";
  } else {
    x.className = "nav nav-pills flex-parent-row flex-center-row";
  }
}

$("[class*='nav'] a").on("click",function(e){
    e.preventDefault();
    $(this).parent().addClass("active")
        .siblings().removeClass("active")
})

$(".accordion dt").on("click",function(){

    let id = $(this).index(".accordion dt");

    let nextSibling = $(".accordion dd").eq(id);
    
    if(nextSibling.is(":visible")) {
      nextSibling.slideUp();
    } else {
      nextSibling.slideDown()
        .siblings("dd").slideUp();
    }
  })
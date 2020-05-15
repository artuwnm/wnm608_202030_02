 $(".complicated dt").on("click",function(){
      // get the index of this dt in the list of dts
      let id = $(this).index(".complicated dt");
      // use that index to select the next dd
      let nextSibling = $(".complicated dd").eq(id);
      // that was all stupid and complicated
      
      if(nextSibling.is(":visible")) {
        nextSibling.slideUp();
      } else {
        nextSibling.slideDown()
          .siblings("dd").slideUp();
      }
    })


var slideIndex = 0;
  showSlides();

  function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active1", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active1";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
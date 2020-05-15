window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("logo").style.height = "30px";
   
  } else {
    document.getElementById("logo").style.height = "50px";

  }
}

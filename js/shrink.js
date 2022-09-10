window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("shrink").style.display = "flex";
  	} 
  	else {
    	document.getElementById("shrink").style.display = "none";
  	}
}
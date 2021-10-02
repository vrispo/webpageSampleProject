var slidePosition = -1;
var timer;
SlideShow();

//  images controls
function currentSlide(n) {
  slidePosition = n-1;
  clearTimeout(timer);
  SlideShow();
}

function SlideShow() {
    var i;
    var slides = document.getElementsByClassName("Containers");
    var circles = document.getElementsByClassName("dots");
  
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < circles.length; i++) {
        circles[i].className = circles[i].className.replace(" enable", "");
    }
    
    slidePosition++;
    if (slidePosition > slides.length) {slidePosition = 1}

    slides[slidePosition-1].style.display = "block";
    circles[slidePosition-1].className += " enable";

    timer = setTimeout(SlideShow, 5000); // Change image every 5 seconds
} 
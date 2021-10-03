var slidePosition = -1;
var timer;
SlideShow();

//  images controls
function currentSlide(n) {
    slidePosition = n-1;
    clearTimeout(timer);
    SlideShow();
}

function unfade() {
    var op = 0.1;  // initial opacity
    var slides = document.getElementsByClassName("Containers");
    var circles = document.getElementsByClassName("dots");
    
    slides[slidePosition-1].style.opacity = op;
    slides[slidePosition-1].style.display = 'block';
    circles[slidePosition-1].className += " enable";
    var timer_unfade = setInterval(function () {
        if (op >= 1){
            clearInterval(timer_unfade);
        }
        slides[slidePosition-1].style.opacity = op;
        slides[slidePosition-1].style.filter = 'alpha(opacity=' + op * 100 + ")";
        op += op * 0.1;
    }, 50);
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

    unfade();
    
    timer = setTimeout(SlideShow, 5000); // Change image every 5 seconds
} 
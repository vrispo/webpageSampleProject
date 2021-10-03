var slidePosition = -1;
var timer;
var init = 0;
SlideShow();

//  images controls
function currentSlide(n) {
    slidePosition = n-1;
    clearTimeout(timer);
    SlideShow();
}

function unfade() {
    var op;  // initial opacity
    var slides = document.getElementsByClassName("Containers");
    var circles = document.getElementsByClassName("dots");
    
    slidePosition++;
    if (slidePosition > slides.length) {slidePosition = 1}
    
    op = 0.1;
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

function fade() {
    var op = 1;  // initial opacity
    var element = document.getElementsByClassName("Containers");
    
    if(init === 0){
        unfade();
        init = 1;
    }
    else{
        element[slidePosition-1].style.display = 'block';
        element[slidePosition-1].style.opacity = op;
        var timer_fade = setInterval(function () {
            if (op <= 0.1){
                clearInterval(timer_fade);
                element[slidePosition-1].style.display = 'none';
                unfade();
            }
            element[slidePosition-1].style.opacity = op;
            element[slidePosition-1].style.filter = 'alpha(opacity=' + op * 100 + ")";
            op -= op * 0.1;
        }, 50);
    }
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
    
    fade();
    
    timer = setTimeout(SlideShow, 5000); // Change image every 5 seconds
} 
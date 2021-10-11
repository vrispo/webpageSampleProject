function switchTabInIframe(e, c){
    var iframe_element = document.querySelector('.cities-frame');
    
    const navigation_elements = document.querySelectorAll("div#navigation li div");
    navigation_elements.forEach(function(navItem) {
      navItem.style.border = "none";
    });
    
    e.target.style.borderBottom = "2px solid #163235";
    
    switch(c){
        case 0:
            iframe_element.src ="./asia.php";
            break;
        case 1:
            iframe_element.src ="./asia.php";
            break;
        case 2:
            iframe_element.src ="./asia.php";
            break; 
        case 3:
            iframe_element.src ="./asia.php";
            break; 
        case 4:
            iframe_element.src ="./asia.php";
            break; 
        default:
            iframe_element.src ="./asia.php";
    }   
}

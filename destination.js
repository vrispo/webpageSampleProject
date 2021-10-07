function switchTabInIframe(e){
    var cities_element = document.querySelector('.cities');
    var numCity = 5;
    cities_element.innerHTML = '';
    
    const navigation_elements = document.querySelectorAll("div#navigation li div");
    navigation_elements.forEach(function(navItem) {
      navItem.style.border = "none";
    });
    
    e.target.style.borderBottom = "2px solid #163235";
    
    for(var i = 0 ; i < numCity ; i++){
        const city_element = document.createElement('div');
        city_element.classList.add('city');
        
        const image_element = document.createElement('div');
        image_element.classList.add('image');
        city_element.appendChild(image_element);
        
        const name_element = document.createElement('div');
        name_element.classList.add('name');
        name_element.textContent = "Singapore";
        city_element.appendChild(name_element);
        
        const description_element = document.createElement('div');
        description_element.classList.add('description');
        description_element.textContent = "Singapore, officially the Republic of Singapore, is a sovereign island city-state in maritime Southeast.";
        city_element.appendChild(description_element);
        
        const info1_element = document.createElement('div');
        info1_element.classList.add('info1');
        city_element.appendChild(info1_element);
        
        const servizi_element = document.createElement('div');
        servizi_element.classList.add('servizi');
        const servizio_element1 = document.createElement('img');
        servizio_element1.src = "./Images/Raggruppa 19.png";
        servizi_element.appendChild(servizio_element1);
        const servizio_element2 = document.createElement('img');
        servizio_element2.src = "./Images/Raggruppa 18.png";
        servizi_element.appendChild(servizio_element2);
        const servizio_element3 = document.createElement('img');
        servizio_element3.src = "./Images/Raggruppa 17.png";
        servizi_element.appendChild(servizio_element3);
        info1_element.appendChild(servizi_element);
        
        const costo_element = document.createElement('div');
        costo_element.classList.add('costo');
        costo_element.textContent = "10000"+"\u20AC";
        info1_element.appendChild(costo_element);
        
        const info2_element = document.createElement('div');
        info2_element.classList.add('info2');
        city_element.appendChild(info2_element);
        
        const dist_element = document.createElement('div');
        dist_element.classList.add('dist');
        dist_element.textContent = "1000 Kms";
        info2_element.appendChild(dist_element);
        
        const tempo_element = document.createElement('div');
        tempo_element.classList.add('tempo');
        tempo_element.textContent = "Approx 2 nights trip";
        info2_element.appendChild(tempo_element);   
        
        cities_element.appendChild(city_element);
    }
}

function initTab(){
    var cities_element = document.querySelector('.cities');
    var numCity = 5;
    cities_element.innerHTML = '';
    
    const navigation_element = document.querySelector("div#navigation li div"); 
    navigation_element.style.borderBottom = "2px solid #163235";
    
    for(var i = 0 ; i < numCity ; i++){
        const city_element = document.createElement('div');
        city_element.classList.add('city');
        
        const image_element = document.createElement('div');
        image_element.classList.add('image');
        city_element.appendChild(image_element);
        
        const name_element = document.createElement('div');
        name_element.classList.add('name');
        name_element.textContent = "Singapore";
        city_element.appendChild(name_element);
        
        const description_element = document.createElement('div');
        description_element.classList.add('description');
        description_element.textContent = "Singapore, officially the Republic of Singapore, is a sovereign island city-state in maritime Southeast.";
        city_element.appendChild(description_element);
        
        const info1_element = document.createElement('div');
        info1_element.classList.add('info1');
        city_element.appendChild(info1_element);
        
        const servizi_element = document.createElement('div');
        servizi_element.classList.add('servizi');
        const servizio_element1 = document.createElement('img');
        servizio_element1.src = "./Images/Raggruppa 19.png";
        servizi_element.appendChild(servizio_element1);
        const servizio_element2 = document.createElement('img');
        servizio_element2.src = "./Images/Raggruppa 18.png";
        servizi_element.appendChild(servizio_element2);
        const servizio_element3 = document.createElement('img');
        servizio_element3.src = "./Images/Raggruppa 17.png";
        servizi_element.appendChild(servizio_element3);
        info1_element.appendChild(servizi_element);
        
        const costo_element = document.createElement('div');
        costo_element.classList.add('costo');
        costo_element.textContent = "10000"+"\u20AC";
        info1_element.appendChild(costo_element);
        
        const info2_element = document.createElement('div');
        info2_element.classList.add('info2');
        city_element.appendChild(info2_element);
        
        const dist_element = document.createElement('div');
        dist_element.classList.add('dist');
        dist_element.textContent = "1000 Kms";
        info2_element.appendChild(dist_element);
        
        const tempo_element = document.createElement('div');
        tempo_element.classList.add('tempo');
        tempo_element.textContent = "Approx 2 nights trip";
        info2_element.appendChild(tempo_element);    
        
        cities_element.appendChild(city_element);
    }
}

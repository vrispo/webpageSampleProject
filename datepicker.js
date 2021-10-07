const months = ['January','February','March','April','May','June','July','August','September','October','November','December'];

var date = new Date();
var day = date.getDate();
var month = date.getMonth();
var year = date.getFullYear();

var selectedDate = date;
var selectedDay = day;
var selectedMonth = month;
var selectedYear = year;

var active = 0;

//FUNCTIONS
function toggleDatePicker(e, picker){ 
    var dates_element = document.querySelector('.'+picker+' .dates');
    var mth_element = document.querySelector('.'+picker+' .dates .month .mth');    
    if(active == 0){
        active = 1;
        dates_element.style.display="block";
        month = date.getMonth();
        year = date.getFullYear();
        mth_element.textContent = months[month] + ' ' + year;
        populateDates(picker);
    }else{
        for(var i = 0; i<e.path.length ; i++){
            if(e.path[i].classList && e.path[i].classList.contains('dates')){
                return;
            }
        }
        active = 0;
        dates_element.style.display="none";  
    }
}

function goToNextMonth(e, picker){
    var mth_element = document.querySelector('.'+picker+' .dates .month .mth');
    month++;
    if(month > 11){
        month = 0;
        year++;
    }
    mth_element.textContent = months[month] + ' ' + year;
    populateDates(picker);
}

function goToPrevMonth(e, picker){
    var mth_element = document.querySelector('.'+picker+' .dates .month .mth');
    month--;
    if(month < 0){
        month = 11;
        year--;
    }
    mth_element.textContent = months[month] + ' ' + year;
    populateDates(picker);
}

//non funziona (on click esterno nasconde il calendario)
window.onclick = function(event) {
    var dates_element = document.querySelector('.datein-picker .dates');
    if (event.target === dates_element) {
        dates_element.style.display = "none";
    }
};

function daysInMonth (m, y) {
    return new Date(y, m, 0).getDate();
}

function populateDates(picker){
   var dates_element = document.querySelector('.'+picker+' .dates');
   var days_element = document.querySelector('.'+picker+' .dates .days');
   var selected_date_element = document.querySelector('.'+picker+' .selected-date');
   days_element.innerHTML = '';
   
   var amount_days = daysInMonth ((month+1), year);
   
   for(var i = 0 ; i < amount_days ; i++){
       const day_element = document.createElement('div');
       day_element.classList.add('day');
       day_element.textContent = i + 1;
       
       //NON FUNZIONA quando cambio il selected day(cambia colore di sfondo al selected day)
       if((selectedDay === (i+1)) && (selectedYear === year) && (selectedMonth === month)){
           day_element.style.backgroundColor = "#00ca85";
       } 
       
       day_element.addEventListener('click',function(e){          
            selectedDate = new Date(year,month,e.target.textContent);
            selectedDay = e.target.textContent;
            selectedMount = month;
            selectedYear = year;
            selected_date_element.textContent = selectedDay + '/' + (selectedMount+1) + '/' + selectedYear;
            selected_date_element.dataset.value = selectedDate;
            populateDates(picker); 
            //NON FUNZIONA (on click nasconde il calendario)
            active = 0;
            dates_element.style.display="none";  
       });
       
       days_element.appendChild(day_element);
   }
}

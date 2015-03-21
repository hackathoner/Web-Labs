var button1 = document.getElementById("a");
var button2 = document.getElementById("b");

var dropdown = document.getElementById("dropdown1");
var dropdown2 = document.getElementById("ok");
var volvo = ["S80", "V60", "XC90", "S60"];
var mercedes = ["ML320", "GL450", "SLSAmg", "CLK GTR"];
var ferrari = ["Enzo", "California", "FXX", "F50"];
var toyota = ["Camry", "Prius", "Corrola", "Highlander"];
button1.addEventListener("click", function () {
    'use strict';
    dropdown.size = 4;
    dropdown2.size = 4;
    
});

button2.addEventListener("click", function () {
    'use strict';
    dropdown.size = 1;
    dropdown2.size = 1;
    
});

dropdown.onchange = function () {
    'use strict';
    console.log(dropdown.value);
    if(dropdown.value == "volvo") {
        document.getElementById("5").textContent = volvo[0];  
        document.getElementById("6").textContent =  volvo[1];  
        document.getElementById("7").textContent =  volvo[2];  
        document.getElementById("8").textContent =  volvo[3];  
    };
    if(dropdown.value == "mercedes") {
        document.getElementById("5").textContent =  mercedes[0];  
        document.getElementById("6").textContent =  mercedes[1];  
        document.getElementById("7").textContent =  mercedes[2];  
        document.getElementById("8").textContent =  mercedes[3];  
    };
    if(dropdown.value == "ferrari") {
        document.getElementById("5").textContent =  ferrari[0];  
        document.getElementById("6").textContent =  ferrari[1];  
        document.getElementById("7").textContent =  ferrari[2];  
        document.getElementById("8").textContent =  ferrari[3];  
    };
    if(dropdown.value == "toyota") {
        document.getElementById("5").textContent = toyota[0];  
        document.getElementById("6").textContent =  toyota[1];  
        document.getElementById("7").textContent =  toyota[2];  
        document.getElementById("8").textContent =  toyota[3];  
    };
};
//dropdown.addEventListener("click", function () {
//    'use strict';
//    console.log(dropdown.value);
//});
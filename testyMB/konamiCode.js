




//Tablica do inputów
var array = [
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
]   

//Wzór
var arrayKonami = [
    "up",
    "up",
    "down",
    "down",
    "left",
    "right",
    "left",
    "right",
    "B",
    "A"
]  


    // Listener klawiatury - Dodaje wartość na początku oraz usuwa ostatni indeks tablicy
    //PRRRRROSTE

function KonamiCode(){
    document.addEventListener('keydown', function (event) {
        switch (event.key) {
            case "ArrowUp":
                array.push("up");
                array.shift();
                // console.log(array);
                isKonami();
                break;

            case "ArrowUp":
                array.push("up");
                array.shift();
                // console.log(array);
                isKonami();
                break;

            case "ArrowDown":
                array.push("down");
                array.shift();
                // console.log(array);
                isKonami();
                break;

            case "ArrowDown":
                array.push("down");
                array.shift();
                // console.log(array);
                isKonami();
                break;

            case "ArrowLeft":
                array.push("left");
                array.shift();
                // console.log(array);
                isKonami();
                break;

            case "ArrowRight":
                array.push("right");
                array.shift();
                // console.log(array);
                isKonami();
                break;

            case "ArrowLeft":
                array.push("left");
                array.shift();
                // console.log(array);
                isKonami();
                break;

            case "ArrowRight":
                array.push("right");
                array.shift();
                // console.log(array);
                isKonami();
                break;

            case "b":
                array.push("B");
                array.shift();
                // console.log(array);
                isKonami();
                break;

            case "a":
                array.push("A");
                array.shift();
                // console.log(array);
                isKonami();
                break;
        }
    });
};


//Porównuje tablice ze wzorem i wykonuje zadanie
function isKonami(){    
    var isEqual = array.toString() === arrayKonami.toString();
    if (isEqual === true) stefHoga();
}

//Wykonuje funkcje gdy isKonami == true
function stefHoga(){
    document.getElementById("blockID").style = "background-color: red";
}

KonamiCode();


  
  
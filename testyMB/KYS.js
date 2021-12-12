




//Tablica do inputów
var array = [
    "",
    "",
    "",
    ""
]   

//Wzór
var hate = [
    "H",
    "A",
    "T",
    "E"
] 

var love = [
    "L",
    "O",
    "V",
    "E"
]  


    // Listener klawiatury - Dodaje wartość na początku oraz usuwa ostatni indeks tablicy
    //PRRRRROSTE

function KonamiCode(){
    document.addEventListener('keydown', function (event) {
        switch (event.key) {
            case "h":
                array.push("H");
                array.shift();
                console.log(array);
                isKonami();
                break;

            case "a":
                array.push("A");
                array.shift();
                console.log(array);
                isKonami();
                break;

            case "t":
                array.push("T");
                array.shift();
                console.log(array);
                isKonami();
                break;

            case "e":
                array.push("E");
                array.shift();
                console.log(array);
                isKonami();
                break;

            case "l":
                array.push("L");
                array.shift();
                console.log(array);
                isKonami();
                break;

            case "o":
                array.push("O");
                array.shift();
                console.log(array);
                isKonami();
                break;

            case "v":
                array.push("V");
                array.shift();
                console.log(array);
                isKonami();
                break;
        }
    });
};


//Porównuje tablice ze wzorem i wykonuje zadanie
function isKonami(){    
    var isEqual = array.toString() === love.toString();
    if (isEqual === true) stefHoga1();

    var isEqual = array.toString() === hate.toString();
    if (isEqual === true) stefHoga();
}

//Wykonuje funkcje gdy isKonami == true
function stefHoga(){
    document.body.style = "background-image: url('hatress.png')";
}

function stefHoga1(){
    document.body.style = "background-image: url('love.png')";
}

KonamiCode();



                ///SPAGHETTI BOLOGNESE
//2 pounds lean ground beef

// 1 large white onion, diced

// 1 large portobello mushroom, diced, or more to taste

// 2 (14.5 ounce) cans petite diced tomatoes

// 3 (10 ounce) cans condensed tomato soup

// ½ cup Worcestershire sauce

// 1 ½ tablespoons garlic and herb seasoning blend (such as Mrs. Dash®)

// 1 tablespoon lemon juice

// 1 tablespoon minced garlic

// ¼ cup chili powder (Optional)

// 3 tablespoons Cajun seasoning (Optional)

// ½ teaspoon dried basil

// ¼ teaspoon vanilla extract

// ¼ teaspoon black pepper

// ½ teaspoon salt

// 1 (16 ounce) package spaghetti

// 1 ½ tablespoons extra-virgin olive oil
// ADD ALL INGREDIENTS TO SHOPPING LIST 
// DirectionsInstructions Checklist
// Step 1
// Cook the ground beef in a large pot over high heat, stirring quickly and constantly until completely browned 7 to 10 minutes. Stir the onion into the beef; cook and stir until the onion begins to turn translucent, about 5 minutes more. Drain excess grease from meat mixture. Add the mushroom to the mixture; allow to cook until it begins to soften, 1 to 2 minutes. Pour the diced tomatoes and tomato soup into the pot, stir, reduce heat to medium, and bring the mixture to a simmer.

// Step 2
// Add the Worcestershire sauce, garlic and herb seasoning blend, lemon juice, garlic, chili powder, Cajun seasoning, basil, vanilla extract, black pepper, and salt to the mixture, stirring each into the mixture before adding the next. Reduce heat to low and allow the mixture to simmer for 30 minutes.

// Step 3
// Bring a large pot of lightly salted water to a rolling boil. Add the spaghetti and olive oil to the pot and cook the pasta at a boil until cooked through yet firm to the bite, about 12 minutes. Drain. Top with the Bolognese sauce to serve.
  
  
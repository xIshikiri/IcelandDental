


function kolor(){
    document.body.style.backgroundColor = "var(--varColor)";
    document.title = " _ _ _ 🚓 _ _ _ ";
}

function kolor1(){
    document.body.style = "background-color: var(--varColor1)";
    document.title = " _ _ 🚓💨 _ _ ";
}



function police(){

    var check = document
    switch (document.getElementsByName("policeSpeed").values){
        case 200:
            speed = "500";
            break;
    }

    function startColor(){
        console.log("red");
        kolor();
        setTimeout(startColor1, speed);
    }

    function startColor1(){
        console.log("blue");
        kolor1();
        setTimeout(startColor, speed);
    }

    startColor();
}


//jebac to
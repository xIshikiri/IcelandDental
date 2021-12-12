


function kolor(){
    document.body.style.backgroundColor = "var(--varColor)";
    document.title = " _ _ _ 🚓 _ _ _ ";
}

function kolor1(){
    document.body.style = "background-color: var(--varColor1)";
    document.title = " _ _ 🚓💨 _ _ ";
}

function getSpeed(){
    var speed = document.querySelector('#speed').value;
    console.log(speed);
}

function getChecked() {
    const checkBox = document.getElementById('check1').checked;
    if (checkBox === true) {
      console.log(true);
      } else {
        console.log(false);
    }
  }


function startColor(){
    console.log("red");
    kolor();
    console.log(speed);
    setTimeout(startColor1, speed);
}

function startColor1(){
    console.log("blue");
    kolor1();
    setTimeout(startColor, speed);
}

startColor();

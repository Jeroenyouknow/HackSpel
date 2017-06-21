function toMainframe(){
    setTimeout(startHack, 3000);
    changeColors();
}


function startHack() {
    window.location.href = "mainframe/index.php";
}

function changeColors() {
    x = 1;
    for(var i = 0; i < 10; i++){
        var interval = Math.floor(Math.random() * 350 + 500);
        setInterval(change, interval);
    }
}

function change() {
    if (x === 1) {
        color = "black";
        document.getElementById("Message").style.color = "lime";
        document.getElementById("Form").style.color = "lime";

        buttons = document.getElementsByClassName("Button");
        fields = document.getElementsByClassName("TextField");
        for (var i = 0; i < 2; i++) {
            buttons[i].style.backgroundColor= color;
            fields[i].style.backgroundColor= color;
        }
        x = 2;
    } else {
        color = "green";
        document.getElementById("Message").style.color = "black";
        document.getElementById("Form").style.color = "black";

        buttons = document.getElementsByClassName("Button");
        fields = document.getElementsByClassName("TextField");
        for (var k = 0; k < 2; k++) {
            buttons[k].style.backgroundColor= color;
            fields[k].style.backgroundColor= color;
        }
        x = 1;
    }
    document.body.style.background = color;
}

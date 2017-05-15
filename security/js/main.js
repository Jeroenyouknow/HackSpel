//Load the window and the start function welcomeGerard
window.addEventListener('load', startGame);

function startGame() {
    document.getElementById('camera1_Off').style.visibility = 'hidden';
    timer();

}

function welcomeGerard() {
    console.log("Het programma is succevol gestart en geladen");
}

function timer() {
    //Get the current Time
    var now = new Date().getTime();
//Add to the current time 32000 seconds from the start
    var setDate = (now + 32000);


// Set the date we're counting down to
    var countDownDate = new Date(setDate).getTime();

// Update the count down every 1 second
    var x = setInterval(function () {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

// Time calculations for days, hours, minutes and seconds
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

// Display the result in the element with id="Tijd over"
        document.getElementById("Tijd Over").innerHTML = "Je wordt over: " + minutes + " minuten en " + seconds + " seconden" + " weer uitgelogd voor veiligheidsredenen";

// If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            Timedone();
        }
    }, 1000);


    function Timedone() {
        alert("Voor veiligheidsoverwegingen ben je nu uitgelogd!");
        window.location.href = "../index.php";
    }

    welcomeGerard();

}

function cameraUitgeschakeld() {
    // alert("De camera is succesvol uitgeschakeld");
    document.getElementById('camera1_On').style.visibility = 'hidden';
    document.getElementById('camera1_Off').style.visibility = 'visible';
    document.getElementById('Foto').src = 'afbeeldingen/static.gif';
    console.log("De camera is uitgezet");
}

function cameraIngeschakeld() {
    // alert("De camera is succesvol ingeschakeld");
    document.getElementById('camera1_Off').style.visibility = 'hidden';
    document.getElementById('camera1_On').style.visibility = 'visible';
    document.getElementById('Foto').src = 'afbeeldingen/kamer.JPG';
    console.log("TDe camera is weer aangezet");
}


//Load the window and the start function welcomeGerard
window.addEventListener('load', welcomeGerard);

function welcomeGerard() {
    alert("Welkom Gerard, bij het Antikraak Security Systeem (ASS). Boven staat een timer met de tijd voordat je wordt uitgelogd!");
    document.getElementById('camera1_Off').style.visibility = 'hidden';
    timer();
}

function timer() {
    //Get the current Time
    var now = new Date().getTime();
//Add to the current time 32000 seconds from the start
    var setDate = (now + 3200000);


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
        document.getElementById("Tijd Over").innerHTML = "Je wordt over: " + minutes + "m " + seconds + "s" + " weer uitgelogd voor veiligheidsredenen";

// If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            Timedone();
        }
    }, 1000);


    function Timedone() {
        document.getElementById("Tijd Over").innerHTML = "Je bent uitgelogd!";
        window.location.href = "../index.php";
    }

}

function cameraUitgeschakeld() {
    alert("De camera is succesvol uitgeschakeld");
    document.getElementById('camera1_On').style.visibility = 'hidden';
    document.getElementById('camera1_Off').style.visibility = 'visible';
}

function cameraIngeschakeld() {
    alert("De camera is succesvol ingeschakeld");
    document.getElementById('camera1_Off').style.visibility = 'hidden';
    document.getElementById('camera1_On').style.visibility = 'visible';
}
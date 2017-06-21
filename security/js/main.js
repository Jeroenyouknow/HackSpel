//Load the window and the start function welcomeGerard
window.addEventListener('load', startGame);


function startGame() {

    if (localStorage.getItem('toggle') === '1') {
        document.getElementById('Foto').src = 'afbeeldingen/kamer.JPG';
    } else {
        document.getElementById('Foto').src = 'afbeeldingen/static.gif';
    }

    var button = document.getElementById("cameraButton");
    button.addEventListener("click", function () {
        toggleCamera();
    });

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

function toggleCamera() {

    var currentToggle = localStorage.getItem('toggle');

    window.status = currentToggle;

    console.log(currentToggle);

    console.log("toggle status is " + window.status);

    window.status *= -1;

    console.log("de status is nu " + window.status);

    if (window.status == 1) {
        document.getElementById('Foto').src = 'afbeeldingen/kamer.JPG';
        localStorage.setItem('toggle', '1');
    } else {
        document.getElementById('Foto').src = 'afbeeldingen/static.gif';
        localStorage.setItem('toggle', '-1');
    }
}

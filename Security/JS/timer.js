//Get the current Time
var now = new Date().getTime();
//Add to the current time 5 minutes from the start
var setDate = (now + 32000);


// Set the date we're counting down to
var countDownDate = new Date(setDate).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

// Time calculations for days, hours, minutes and seconds
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

// Display the result in the element with id="demo"
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
}/**
 * Created by jeroenyouknow on 08/05/2017.
 */

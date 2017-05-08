<?php
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="Afbeeldingen/logo.jpg" type="image/x-icon">
        <title>Antikraak B.V Voor uw beveiliging</title>
    </head>

<body>
   <div id = "Timer">
    <script src="JS/timer.js"></script>
    <!-- Display the countdown timer in an element -->
    <p id="Tijd Over"></p>
</div>

    <div id = "Message">
        <p id="Bericht">
            Welkom bij het infrastructuur systeem van Antikraak B.V.<br>
            Het beste beveilingssystem van de Benelux!<br><br>

            Vul Hieronder uw gegevens in:
        </p>
    </div>

   <div id = "form" >
       <form action="check.php" method = "post">
           Naam:<br>
           <input type="text" name="naam" value="">
           <br>
           Code:<br>
           <input type="text" name="code" value="">
           <br><br>
           <input type="submit" value="Login op het Systeem">
       </form>

   </div>

    <div id = "Hack">

    <button onclick="setTimeout(startHack, 3000);">Go into the Mainframe</button>
    <script src="JS/game_2.js"></script>
        <script>console.log(code)</script>

</div>

</body>
</html>

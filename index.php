<?php
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="Afbeeldingen/logo.jpg" type="image/x-icon">
        <link rel="stylesheet" href="CSS/main.css" type="text/css">
        <title>Antikraak B.V Voor uw beveiliging</title>
    </head>

<body>

<div id="Wrapper">
    <div id="Message">
        <p>
            Welkom bij het infrastructuur systeem van Antikraak B.V.<br>
            Het beste beveilingssystem van de Benelux!<br><br>

            Vul hieronder uw gegevens in:
        </p>
    </div>

    <div id="Form" >
        <form action="check.php" method="post">
           <input class="TextField" type="text" name="naam" value="" placeholder="Naam">
           <input class="TextField" type="text" name="code" value="" placeholder="Code">
           <br><br>
           <input type="submit" value="Login op het Systeem" class="Button">
        </form>

        <button class="Button" onclick="toMainframe();">Go into the Mainframe</button>
        <script src="JS/main.js"></script>
        <script>console.log(code)</script>
    </div>
</div>

</body>
</html>

<?php
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="afbeeldingen/logo.jpg" type="image/x-icon">
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <head><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script></head>
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

        <script src="js/main.js"></script>
        <script src="checkFile.js"></script>
        <script type="text/javascript">
            window.setInterval(function(){
                checkFile();
            }, 50);
        </script>
    </div>
</div>

</body>
</html>

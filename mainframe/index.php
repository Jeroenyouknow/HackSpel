<?php

session_start();

if(!isset($_SESSION['timesCorrect'])){
    $_SESSION['timesCorrect'] = 0;
}

if(isset($_POST['answer'])){
    if($_POST['answer'] == $_POST['correctAnswer']){
        if(!($_SESSION['timesCorrect'] >= 4)){
            $_SESSION['timesCorrect']++;
        }
    }
}

$timesCorrect = $_SESSION['timesCorrect'];

include("functions/showCode.php");
include("functions/puzzles.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pyramid Test</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>

        <script>
            window.addEventListener('load', function(e){
                document.addEventListener('contextmenu', event => event.preventDefault());
            })
        </script>

        <div id="code">

        <?php

        puzzle($timesCorrect);

        ?>

    </body>
</html>

<?php
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
<script src="js/main.js"></script>

<div id="menu">
    <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="#camera.php">Support</a></li>
        <li><a href="#Support">Support</a></li>
        <li style="float:right"><a href="../index.php">Log-uit</a></li>
    </ul>
</div>

<div id="WelcomeMessage">
    <!-- Display the countdown timer in an element -->
    <h1>Welkom, Gerard</h1>
    <p id="Tijd Over"></p>
</div>

<div id="CameraSystem">
    <div id="CameraButton">

        <div id="camera1_On">
            <button id="camera1_On" class="button" style="vertical-align:middle" onclick="cameraUitgeschakeld()" ;>
                <span>Camera Uitschakelen </span>
        </div>

        <div id="camera1_Off">
            <button id="camera1_Off" class="button" style="vertical-align:middle" onclick="cameraIngeschakeld()" ;>
                <span>Camera Inschakelen </span>
        </div>

    </div>

    <div id="CameraBeeld">
        <img id="Foto" src="afbeeldingen/kamer.JPG">

    </div>
</div>

</body>

</html>

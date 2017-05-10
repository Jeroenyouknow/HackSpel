<?php
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/main.css">
</head>

<body>
<script src="JS/main.js"></script>

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

<div id="cameraSystem">

    <div id="camera1_On">
        <button id="camera1_On" onclick="cameraUitgeschakeld();">Camera 1</button>
    </div>

    <div id="camera1_Off">
        <button id="camera1_Off" onclick="cameraIngeschakeld();" style="hidden">Camera 1(uitgeschakeld)</button>
    </div>

</div>


</body>

</html>


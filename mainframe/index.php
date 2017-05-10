<?php

session_start();

if(!isset($_SESSION['timesCorrect'])){
    $_SESSION['timesCorrect'] = 0;
}


//Creating and adding the pyramid/puzzle numbers
//bottom row
for($i = 1; $i < 5; $i++){
    ${"ran" . $i} = rand(10,30);
}

//2nd row from below
$num21 = $ran1 + $ran2;
$num22 = $ran2 + $ran3;
$num23 = $ran3 + $ran4;

//3th row from below
$num31 = $num21 + $num22;
$num32 = $num22 + $num23;

//top row
$num41 = $num31 + $num32;

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

        <!-- Starts with * * * *, numbers put in as puzzle progresses -->
        <div id="code">

        <?php

        if(isset($_POST['answer'])){
            if($_POST['answer'] == $_POST['correctAnswer']){
                if(!($_SESSION['timesCorrect'] >= 4)){
                    $_SESSION['timesCorrect']++;
                }
            }else{
                ?>

                    <script>
                        //Wrong answer makes the code flash
                        $('#code').fadeOut(200).fadeIn(200).fadeOut(200).fadeIn(200).fadeOut(200).fadeIn(200);
                    </script>

                <?php
            }
        }

        //* * * * fills in after each correct answer
        if(isset($_SESSION['timesCorrect'])){
            $timesCorrect = $_SESSION['timesCorrect'];
            if($timesCorrect == 0){
                echo "<h2>* * * *</h2></div>";
            }elseif($timesCorrect == 1){
                echo "<h2>7 * * *</h2></div>";
            }elseif($timesCorrect == 2){
                echo "<h2>7 3 * *</h2></div>";
            }elseif($timesCorrect == 3){
                echo "<h2>7 3 6 *</h2></div>";
            }elseif($timesCorrect == 4){
                $code = "7 3 6 9";
                ?>

                </div>
                <div id="codeComplete">
                    <h2>CODE</h2><br><br><br>
                    <h3><?= $code ?></h3>
                    <button id="backToLogin" onclick='location.href="../index.php";'>Terug naar login</button>
                </div>

                <?php
                die;
            }
        } //closes if(isset....)

        ?>


    <form class="" action="" method="post">
        <table id="pyramid" border="1px solid lime">
            <tr>
                <td colspan="12" style="text-align: center;">
                    <input type="text" id="answerField" name="answer" value="" placeholder="antwoord" autofocus>
                    <input type="hidden" name="correctAnswer" value="<?= $num41 ?>">
                </td>
            </tr>
            <tr>
                <td colspan="6" style="text-align: center;"><?= $num31 ?></td>
                <td colspan="6" style="text-align: center;"><?= $num32 ?></td>
            </tr>
            <tr>
                <td colspan="4" style="text-align: center;"><?= $num21 ?></td>
                <td colspan="4" style="text-align: center;"><?= $num22 ?></td>
                <td colspan="4" style="text-align: center;"><?= $num23 ?></td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: center;"><?= $ran1 ?></td>
                <td colspan="3" style="text-align: center;"><?= $ran2 ?></td>
                <td colspan="3" style="text-align: center;"><?= $ran3 ?></td>
                <td colspan="3" style="text-align: center;"><?= $ran4 ?></td>
            </tr>
        </table>
    </form>

    </body>
</html>

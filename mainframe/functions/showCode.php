<?php

function showCode(){

    if(isset($_POST['answer'])){
        if($_POST['answer'] != $_POST['correctAnswer']){
            ?>

            <script>
                //Wrong answer makes the code flash
                $('#code').fadeOut(200).fadeIn(200).fadeOut(200).fadeIn(200).fadeOut(200).fadeIn(200);
            </script>

            <?php
        }
    }


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
    }
}

?>

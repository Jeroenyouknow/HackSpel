<?php

//Variables from index.php
$naam = $_POST['naam'];
$code = $_POST['code'];
$Henk = false;
$Gerard = false;

//Henk Credentials name: Henk Code: 1234
if ($naam === 'Henk' & $code === '1234'){
   $Henk = true;
}



//Gerard Credentials name: Gerard Code: 7369
 else if ($naam === 'Gerard' & $code === '7369'){
    $Gerard = true;
}



//Not Henk or Gerard credentials are logged in
else {
    header('Refresh: 5; url=index.php');
    echo 'Code is fout je wordt weer doorgestuurd';
}

if ($Henk === true){?>
     <html>
        <script>codeCorrectHenk()</script>
     </html>
<?php}
?>

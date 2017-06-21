<?php

//Status
$logged_in = false;

//Variables from index.php
$naam = $_POST['naam'];
$code = $_POST['code'];

//Henk Credentials name: Henk Code: 1234
if ($naam === 'Henk' & $code === '1234'){
    header("Refresh:0; url=Test/index.php");
}



//Gerard Credentials name: Gerard Code: 7369
 else if ($naam === 'Gerard' && $code === '7369'){
     header("Refresh:0; url=security/index.php");
}

 else if ($naam === 'gerard' && $code === '7369'){
     header("Refresh:0; url=security/index.php");
 }

 else if ($naam === 'Bart' && $code === 'laser'){
     header("Refresh:0; url=security/buisje.php");
 }

 else if ($naam === 'bart' && $code === 'laser'){
     header("Refresh:0; url=security/buisje.php");
 }



//Not Henk or Gerard credentials are logged in
else {
    header('Refresh: 5; url=index.php');
    echo 'Code is fout je wordt weer doorgestuurd. Je hebt toch wel eerst geprobeerd het mainframe binnen te gaan!';

}

?>

<?php
    $nomeHost = "localhost";
    $nomeUtente = "root";
    $password = "";
    $nomeDB = "mydb";
    
    //connessione con il mysql server
    $connessione = mysqli_connect($nomeHost, $nomeUtente, $password, $nomeDB) 
            or die("Impossibile connettersi all'host  $nomeHost");
?>


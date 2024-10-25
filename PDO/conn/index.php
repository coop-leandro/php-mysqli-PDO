<?php

    $host = "localhost"; 
    $user = "coop-leandro"; 
    $pass = "viveocampo"; 
    $db = "cursophp";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    
     if($conn){
        echo "Conectado";
    }
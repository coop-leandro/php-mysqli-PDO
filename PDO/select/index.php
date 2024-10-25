<?php

    $host = "localhost"; 
    $user = "coop-leandro"; 
    $pass = "viveocampo"; 
    $db = "cursophp";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    
     if($conn){
        echo "Conectado";
    }

    $id = 7;

    $stmt = $conn->prepare("SELECT * FROM products WHERE id > :id");
    $stmt->bindParam(":id", $id);

    $stmt->execute();
    $data = $stmt->fetchAll();

    print_r($data);
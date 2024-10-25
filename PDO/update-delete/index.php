<?php

    $host = "localhost"; 
    $user = "coop-leandro"; 
    $pass = "viveocampo"; 
    $db = "cursophp";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    
     if($conn){
        echo "Conectado";
    }

    $id = 5;
    $nome = "novo nome";
    $descricao = "apenas testando updates";

    $stmt = $conn->prepare("UPDATE products SET nome = :nome, descricao = :descricao WHERE id = :id");

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);
    $stmt->bindParam(":id", $id);

    $stmt->execute();




<?php

    $host = "localhost"; 
    $user = "coop-leandro"; 
    $pass = "viveocampo"; 
    $db = "cursophp";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    

    $stmt = $conn->prepare("INSERT INTO products (nome, descricao, price) VALUES (:nome, :descricao, :price)");
    
    $nome = "Melancia";
    $descricao = "Fruta comercial";
    $price = 10;

    $stmt->bindParam(":nome",$nome);
    $stmt->bindParam(":descricao", $descricao);
    $stmt->bindParam(":price", $price);

    $stmt->execute();
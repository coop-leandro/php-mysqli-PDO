<?php

    $host = "localhost"; 
    $user = "coop-leandro"; 
    $pass = "viveocampo"; 
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    $sql = "INSERT INTO `products` (`name`, `description`, `price`) VALUES
    ('Produto A', 'Descrição do Produto A', 29.99),
    ('Produto B', 'Descrição do Produto B', 49.99),
    ('Produto C', 'Descrição do Produto C', 19.99),
    ('Produto D', 'Descrição do Produto D', 99.99),
    ('Produto E', 'Descrição do Produto E', 59.99)";

    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . $conn->error;  
    }

    $conn->close();
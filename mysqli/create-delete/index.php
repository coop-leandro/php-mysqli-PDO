<?php

    $host = "localhost"; 
    $user = "coop-leandro"; 
    $pass = "viveocampo"; 
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    // $q = "CREATE TABLE `products` (
    // `id` INT NOT NULL AUTO_INCREMENT,
    // `name` VARCHAR(100) NOT NULL,
    // `description` TEXT NOT NULL,
    // `price` DECIMAL(10, 2) NOT NULL,
    // PRIMARY KEY (`id`)
    // )";
    
    // $conn->query($q);

    $q = "SELECT * FROM `products`";
    $result = $conn->query($q);

    print_r($result);

    $conn->close();

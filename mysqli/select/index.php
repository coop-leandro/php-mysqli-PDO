<?php

    $host = "localhost"; 
    $user = "coop-leandro"; 
    $pass = "viveocampo"; 
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    $sql = "SELECT * FROM products";

    $result = $conn->query($sql);

    $conn->close();

    $item = $result->fetch_assoc();
    print_r($item) . "<br>";

    $itens = $result->fetch_all();
    // print_r($itens);
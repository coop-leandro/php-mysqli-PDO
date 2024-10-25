<?php

    $host = "localhost"; 
    $user = "coop-leandro"; 
    $pass = "viveocampo"; 
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    $sql = "SELECT * FROM users";

    $result = $conn->query($sql);

    print_r($result);

    $conn->close();
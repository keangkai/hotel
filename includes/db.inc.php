<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "hotel";

    try {
        $con = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    } catch (PDOException $e) {
        echo "Connection failed: ".$e->getMessage();
    }
<?php

$host = "localhost";
$dbname = "user"; // nom de ta base
$username = "root";
$password = "";

// Connexion

try {

    $conn = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $username,
        $password
    );

    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

}

catch (PDOException $e) {

    echo "Erreur connexion : " . $e->getMessage();

}

?>
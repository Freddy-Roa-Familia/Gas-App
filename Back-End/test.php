<?php

$servername = "database";
$database = "test";
$username = "test";
$password = "test";

try {
    $connection = new PDO("mysql:host=$servername;$database",$username,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connection Successful";
}
catch (PDOException $e) {
    echo "Connection Failed:" . $e->getMessage();
}

$connection = null; // Closes the connection automatically when the script ends
<?php
// establish a database connection using PDO
try {
    // PDO instance with the specified host, dbname, username, and password
    $conn = new PDO('mysql:host=172.31.22.43;dbname=Rakith200505619', 'Rakith200505619', '6ytcd1fPFf');

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // if a PDO exception occurs (connection failure) display an error message
    echo "Connection failed: " . $e->getMessage();
}
?>
<?php
// dbconfig.php: This file sets up the connection to the MySQL database using PDO

// Database connection details
$host = 'localhost';  // your database host (usually localhost)
$db = 'hospital_db';  // the name of your database
$user = 'root';       // your database username
$pass = '';           // your database password

try {
    // Create a new PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
} catch (PDOException $e) {
    // Handle connection error
    echo "Connection failed: " . $e->getMessage();
}
?>

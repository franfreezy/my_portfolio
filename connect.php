<?php
// Database configuration
$host = 'localhost'; // Hostname
$dbname = 'your_database_name'; // Database name
$username = 'your_username'; // Database username
$password = 'your_password'; // Database password

// Attempt to connect to the database
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Print a success message if connected successfully
    echo "Connected successfully";
} catch(PDOException $e) {
    // Print an error message if unable to connect
    echo "Connection failed: " . $e->getMessage();
}
?>
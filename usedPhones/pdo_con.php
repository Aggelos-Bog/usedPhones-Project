<?php
// Database connection parameters
$host = 'localhost';         // Change this to your database host (usually 'localhost' for local development)
$dbname = 'usedphones';    // Change this to your database name
$username = 'usedPhonesUser'; // Change this to your database username
$password = '123';            // Change this to your database password

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set PDO to throw exceptions on errors
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Additional PDO configurations if needed
    // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Your code to interact with the database goes here

} catch (PDOException $e) {
    // Handle connection errors
    echo "Connection failed: " . $e->getMessage();
}
?>

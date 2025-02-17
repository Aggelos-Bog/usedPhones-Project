<?php
// Start the session
session_start();

// Include the database connection file
include 'pdo_con.php';

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the ad's ID from the form data
    $id = $_POST["id"];

    // Prepare an SQL statement
    $stmt = $pdo->prepare("DELETE FROM phones WHERE id = :id AND username = :username");

    // Bind parameters
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':username', $_SESSION['username']);

    // Execute the statement
    $stmt->execute();

    // Redirect to Buy_page
    header("Location: Buy_page.php");
    exit;
}
?>

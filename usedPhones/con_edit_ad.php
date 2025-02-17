<?php
// Start the session
session_start();

// Include the database connection file
include 'pdo_con.php';

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $id = $_POST["id"];
    $brand = $_POST["brand"];
    $model = $_POST["model"];
    $releaseDate = $_POST["releaseDate"];
    $nodes = $_POST["nodes"];
    $RAM = $_POST["RAM"];
    $OS = $_POST["OS"];
    $storageSize = $_POST["storageSize"];
    $colour = $_POST["colour"];
    $price = $_POST["price"];
    $adRelease = $_POST["adRelease"];
    $description = $_POST["description"];

    // Prepare an SQL statement
    $stmt = $pdo->prepare("UPDATE phones SET brand = :brand, model = :model, releaseDate = :releaseDate, nodes = :nodes, RAM = :RAM, OS = :OS, storageSize = :storageSize,
                           colour = :colour, price = :price, adRelease = :adRelease, description = :description WHERE id = :id AND username = :username");

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':brand', $brand);
    $stmt->bindParam(':model', $model);
    $stmt->bindParam(':releaseDate', $releaseDate);
    $stmt->bindParam(':nodes', $nodes);
    $stmt->bindParam(':RAM', $RAM);
    $stmt->bindParam(':OS', $OS);
    $stmt->bindParam(':storageSize', $storageSize);
    $stmt->bindParam(':colour', $colour);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':adRelease', $adRelease);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':username', $_SESSION['username']);

    // Execute the statement
    $stmt->execute();

    // Redirect to Buy_page
    header("Location: Buy_page.php");
    exit;
}
?>

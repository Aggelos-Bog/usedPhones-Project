<?php
// Start the session
session_start();
include 'pdo_con.php';
// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
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
    // Get the username from the session
    $username = $_SESSION["username"];

    if (empty($brand) || empty($model) || empty($releaseDate) || empty($nodes) || empty($RAM) || empty($OS) || empty($storageSize) || empty($colour) || empty($price) || empty($adRelease)) {
        header("Location: Sell_page.php?msg=Πρέπει να συμπληρωθούν όλα τα κενά!");
        exit();
      }
    // Validation
    $errors = [];

    // Add your validation rules here...

    if (empty($errors)) {
        // Prepare an SQL statement
        $stmt = $pdo->prepare("INSERT INTO phones (username, brand, model, releaseDate, nodes, RAM, OS, storageSize, colour, price, adRelease, description) 
        VALUES (:username, :brand, :model, :releaseDate, :nodes, :RAM, :OS, :storageSize, :colour, :price, :adRelease, :description)");

        $stmt->bindParam(':username', $username);
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
        // Execute the statement
        $stmt->execute();

        // Close the statement 
        //$stmt->close();

        // Redirect to Sell_page
        header("Location: Buy_page.php");
        exit;
    } else {
        // Display errors
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
    }
}
?>

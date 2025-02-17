<?php
// Include the database connection file
include 'pdo_con.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you have a form with fields for username, password, and email
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    try {
        // Check if the username already exists
        $stmtCheckUsername = $pdo->prepare("SELECT username FROM users WHERE username = '$username'");
        $stmtCheckUsername->execute();
        $resultCheckUsername = $stmtCheckUsername->fetch(PDO::FETCH_ASSOC);

        if ($resultCheckUsername) {
            header("Location: register.php?msg=Αυτό το username υπάρχει ήδη!");
        } else {
            // Generate a random 5-digit code
            $verificationCode = rand(10000, 99999);

            $_SESSION['verificationCode'] = $verificationCode;
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['email'] = $email;

            // Redirect to wait.php without exposing data in the URL
            header("Location: wait_page.php?msg='$verificationCode'");
            exit();
        }

    } catch (PDOException $e) {
        // Handle connection or query errors
        echo "Error: " . $e->getMessage();
    }
}
?>

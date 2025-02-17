<?php
include 'pdo_con.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you have a form field for verification code
    $enteredCode = $_POST['verification_code'];
    
    // Retrieve the expected verification code from the session
  if (isset($_SESSION['verificationCode'])) {
    $expectedCode = $_SESSION['verificationCode'];
    // Check if the entered code matches the expected code
    if ($enteredCode == $expectedCode) {
        // Verification successful, retrieve data from the session
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        $email = $_SESSION['email'];

        // Insert user data into the database
        try {
            $stmtInsertUser = $pdo->prepare("INSERT INTO users (username, password, email) VALUES (:username, :password, :email)");
            $stmtInsertUser->execute([':username' => $username, ':password' => $password, ':email' => $email]);

            header("Location: index.php");
            exit();
        } catch (PDOException $e) {
            // Handle connection or query errors
            echo "Error: " . $e->getMessage();
        }

    } else {
        // Incorrect verification code, display an error message
        echo "Incorrect verification code. Please try again.";
    }
  }else{
    echo "Session data not found. Please go back and start the registration process again.";
  }
}
?>

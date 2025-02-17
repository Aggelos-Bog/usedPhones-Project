<?php

include 'pdo_con.php';


if ( !isset($_SESSION['username']) && isset($_POST['username'], $_POST['password']) ) {

  
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username) || empty($password)) {
    header("Location: log-in.php?msg=Αποτυχημένη διαπίστευση χρήστη!");
    exit();
  }
  
  $authorised=false;



  $stmt = $pdo->prepare("SELECT username FROM users WHERE username = :username");
  $stmt->execute([':username' => $username]);
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  
  if ($result) {
    $dbusername = $result['username'];
    // Your code to process the single value goes here
  } else {
    // Handle the case where no rows were found
    echo "No matching records found.";
  }

  $stmt2 = $pdo->prepare("SELECT password FROM users WHERE username = '$username'");
  $stmt2->execute();
  $result2 = $stmt2->fetch(PDO::FETCH_ASSOC);
  
  if ($result2) {
    $dbpassword = $result2['password'];
    // Your code to process the single value goes here
  } else {
    // Handle the case where no rows were found
    echo "No matching records found.";
  }

  if ( $username==$dbusername && $password==$dbpassword) {   //ΕΠΙΤΥΧΗΣ ΕΛΕΓΧΟΣ 
        $authorised= true;  // ο χρήστης διαπιστεύτηκε
	      session_start();    // ξεκινάμε session 
	    $_SESSION['username']= $username;  //βαζουμε χρήστη στο session
  }

  if ($authorised==true) {  
    
    header('Location: index.php');
    exit();
  } else {   
      header("Location: log-in.php?msg=Αποτυχημένη διαπίστευση χρήστη!");
      exit();
  }


} else { 

  session_start();    
  session_destroy();  
  header("Location: log-in.php?msg=Πρόβλημα - Δοκίμασε ξανά!");
  exit();  

}

?>
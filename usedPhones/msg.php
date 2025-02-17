<?php


function echo_msg() {
  if (isset($_SESSION['msg'])) { 
    echo '<p style="color:red;">'.$_SESSION['msg'].'</p>';
    unset($_SESSION['msg']);
  } elseif (isset($_GET['msg'])) {
    $encodedMsg= htmlspecialchars($_GET['msg']);
    echo '<p style="color:red;">'.$encodedMsg.'</p>';
  }    
}


?>
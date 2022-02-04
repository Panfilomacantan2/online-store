<?php 
  session_start();

 
  if ($_SESSION['user_status'] == 'invalid' || empty($_SESSION['user_status'])) {
    /* Set status to invalid */
    $_SESSION['user_status'] = 'invalid';

    /* Unset user data */
    unset($_SESSION['username']);
    unset($_SESSION['first_name']);
    unset($_SESSION['last_name']);

    /* Redirect to login page */
    header('location: ./login.php');
  }
?>
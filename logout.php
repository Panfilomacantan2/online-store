<?php
    session_start();


    $_SESSION['user_status'] == 'invalid';
    
    unset($_SESSION['username']);
    unset($_SESSION['last_name']);
    unset($_SESSION['first_name']);

    header('location: ./login.php');

?>
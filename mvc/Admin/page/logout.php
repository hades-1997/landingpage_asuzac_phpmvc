<?php
    session_start();
    if(!isset($_SESSION['username'])):
        header('location: login.php');
    else :
        unset($_SESSION["username"]);
        session_destroy();
        header("location: login.php");
    endif;
?>
<?php

    session_start();

    if (!isset($_SESSION['user']) || $_SESSION['user']['user_type'] != 'User') {
        header("Location: ../index.php");
    } 

?>
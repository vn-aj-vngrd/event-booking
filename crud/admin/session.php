<?php

session_start();

if (!isset($_SESSION['user']) || $_SESSION['user']['user_type'] != 'Admin') {
    header("Location: ../index.php");
}

?>
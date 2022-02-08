<?php
    session_start();
    include_once '../connection.php';

    $id = $_GET['id'];
    // echo $id;

    $sql = "DELETE FROM `events` 
                WHERE `event_id` = '$id'";
    
    if (mysqli_query($conn, $sql)) 
        $_SESSION['message'] = "The event has been deleted.";
    else 
        $_SESSION['message'] = "Failed to delete event.";

    header("Location: ../../admin/home.php");
?>
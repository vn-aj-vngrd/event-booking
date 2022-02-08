<?php
    session_start();    
    include_once '../connection.php';

    $event_id = $_GET['event_id'];
    $user_id = $_GET['user_id'];

    $sql = "DELETE FROM `bookings` WHERE event_id = $event_id AND user_id = $user_id";

    if (mysqli_query($conn, $sql)) 
        $_SESSION['message'] = "The event has been cancelled.";
    else 
        $_SESSION['message'] = "Failed to cancel event.";

    header('Location: ../../user/event.php');
 
?>
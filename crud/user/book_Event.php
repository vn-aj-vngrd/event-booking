<?php
    session_start();
    include_once '../connection.php';

    $event_id = $_GET['event_id'];
    $user_id = $_GET['user_id'];

    $sql = "INSERT INTO `bookings` (`event_id`, `user_id`) VALUES ('$event_id', '$user_id')";

    if (mysqli_query($conn, $sql)) 
        $_SESSION['message'] = "The event has been booked.";
    else 
        $_SESSION['message'] = "Failed to book event.";

    header('Location: ../../user/home.php');
 
?>
<?php
    include_once '../crud/connection.php';
    $user_id = $_SESSION['user']['user_id'];
    
    $sql = "SELECT 
                e.`event_id`, e.`event_name`, e.`event_image`
            FROM
                `bookings` b,
                `events` e,
                `users_detail` u
            WHERE 
                b.`user_id` = u.`user_id` AND
                b.`event_id` = e.`event_id` AND
                b.`user_id` = $user_id 
            ORDER BY b.`booking_id` DESC";
    
    $result = mysqli_query($conn, $sql);

    if (!$result)
        $_SESSION['error'] = "There is a problem communicating with the database server, please try again later.";
?>
<?php
    include_once '../crud/connection.php';
    $user_id = $_SESSION['user']['user_id'];
    
    $sql = "SELECT *
            FROM `events` e
            WHERE e.`event_id` NOT IN (
                    SELECT b.`event_id`
                    FROM `bookings` b
                    JOIN `users_detail` u
                    ON b.`user_id` = u.`user_id`
                    WHERE b.`user_id` = $user_id
                )
            ORDER BY e.`event_id` DESC";
            

    $result = mysqli_query($conn, $sql);

    if (!$result)
        $_SESSION['error'] = "There is a problem communicating with the database server, please try again later.";
               
?>
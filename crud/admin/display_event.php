<?php

    include_once '../crud/connection.php';

    $sql = "SELECT * 
                FROM `events`
            ORDER BY 
                `event_id` DESC";
                
    $result = mysqli_query($conn, $sql);

    if (!$result)
        $_SESSION['error'] = "There is a problem communicating with the database server, please try again later.";
?>
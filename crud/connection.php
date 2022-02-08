<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "event_booking";

    if ($conn = mysqli_connect($host, $user, $pass, $db)) {
        // echo "Connection established";
    } else {
        $_SESSION['message'] = "Error: Database Connection failed<br> " . mysqli_connect_error();
    }

?>
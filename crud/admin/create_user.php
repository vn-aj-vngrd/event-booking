<?php

    include_once '../crud/connection.php';

    if (isset($_POST['submit'])) {
        if (!empty($_POST['username']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])){
            $username = $_POST['username'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pass = $_POST['password'];
    
            $sql = "INSERT INTO `users_detail` (`username`, `password`, `name`, `email`, `user_type`) 
                    VALUES ('$username', '$pass', '$name', '$email', 'User')";
    
            if (mysqli_query($conn, $sql)) {
                echo '<script>alert("User entry is created successfully.");</script>';
            } else {
                echo '<script>alert("Failed to create an user entry.");</script>';
            }
        } else {
            echo '<script>alert("Incomplete or empty entry, please try again.");</script>';
        }
    }
?>
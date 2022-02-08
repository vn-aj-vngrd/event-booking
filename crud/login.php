<?php
    session_start();
    include_once 'connection.php';
    $user;
    $_SESSION['message'] = "";

    if (isset($_POST['submit'])) {
        if (!empty($_POST['user']) && !empty($_POST['pass'])) {
            $username = $_POST['user'];
            $pass = $_POST['pass'];

            $sql = "SELECT * FROM `users_detail` WHERE `username` = '$username' AND `password` = '$pass'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result ) > 0) {
                $row = mysqli_fetch_assoc($result);
                $user = array (
                    "user_id" => $row['user_id'],
                    "username" => $row['username'],
                    "password" => $row['password'],
                    "name" => $row['name'],
                    "email" => $row['email'],
                    "user_type" => $row['user_type'],
                );

                $_SESSION['user'] = $user;

                if ($row['user_type'] == 'Admin') {
                    header("Location: ../admin/home.php");
                } else {
                    header("Location: ../user/home.php");
                }
            } else {
                $_SESSION['message'] = "Invalid username or password.";
                header("Location: ../index.php");
            }
        } else {
            $_SESSION['message'] = "Username or Password is empty.";
            header("Location: ../index.php");
        }
    }


?>

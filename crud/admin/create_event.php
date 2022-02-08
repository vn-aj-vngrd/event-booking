<?php
    include_once '../crud/connection.php';

    if(isset($_POST['submit'])) {
        if (!empty($_FILES['event_img']['name'] && !empty($_POST['event_name']))) {
            $targetDir = "../uploads/";
            $fileName = basename($_FILES['event_img']['name']);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

            $allowedTypes = array("png","jpeg","gif", "jpg" ,"svg");
            $eventName = $_POST['event_name'];

            if (in_array($fileType, $allowedTypes)) {
                if(move_uploaded_file($_FILES['event_img']['tmp_name'], $targetFilePath)) {

                    $sql = "INSERT INTO `events` (`event_name`, `event_image`) VALUES ('$eventName', '$fileName')";

                        if (mysqli_query($conn, $sql)) {
                            echo '<script>alert("The event is successfully created.")</script>';
                        } else {
                            echo '<script>alert("The event is not created successfully, please try again.")</script>';
                        }

                } else {
                    echo '<script>alert("Sorry, there was an error uploading your file, please try again.")</script>';
                } 
            } else {
                echo '<script>alert("Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to be uploaded, please try again.")</script>';
            }
        } else {
            echo '<script>alert("Incomplete or empty entry, please try again.")</script>';
        }
    }

?>
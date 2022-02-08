<?php
    include_once '../crud/connection.php';

    if (isset($_POST['submit'])) {
        if (empty($_POST['event_name']) && empty($_FILES['event_img']['name'])) {
            echo '<script>alert("Incomplete or empty entry, please try again.")</script>';
        } else {
            $bool = 0;
            $id = $_POST['event_id'];
    
            if (!empty($_POST['event_name'])) {
                $event_name = $_POST['event_name'];
                
                $sql = "UPDATE `events` 
                SET `event_name` = '$event_name'
                WHERE `event_id` = $id";

                if (mysqli_query($conn, $sql)) 
                    $bool = 1;
            }

            if (!empty($_FILES['event_img']['name'])) {

                $targetDir = "../uploads/";
                $fileName = basename($_FILES['event_img']['name']);
                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

                $allowedTypes = array("png","jpeg","gif", "jpg" ,"svg");

                if (in_array($fileType, $allowedTypes)) {
                    if(move_uploaded_file($_FILES['event_img']['tmp_name'], $targetFilePath)) {

                        $sql = "UPDATE `events` 
                                SET `event_image` = '$fileName'
                                WHERE `event_id` = '$id'";

                            if (mysqli_query($conn, $sql)) 
                                $bool = 1;

                    } else {
                    echo '<script>alert("Sorry, there was an error uploading your file, please try again.")</script>';
                    } 
                } else {
                    echo '<script>alert("Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to be uploaded, please try again.")</script>';
                }
            }
            
            if ($bool == 1) 
                echo '<script>alert("The event is successfully updated.")</script>';
            else 
                echo '<script>alert("Failed to upate event, please try again later.")</script>';
        }
    }

?>


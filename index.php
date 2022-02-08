<?php
session_start();

if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['user_type'] == 'Admin')
        header("Location: admin/home.php");
    else
        header("Location: user/home.php");
}

include_once 'crud/connection.php';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Event Booking - Log In</title>

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="icon" href="favicon/favicon.ico" type="image/ico">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6a128389df.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/login.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/load.css?v=<?php echo time(); ?>">

</head>

<body>

    <!-- <div class="bg-image"></div> -->

    <div class="d-flex justify-content-center">
        <div class="border">

            <form method="POST" action="crud/login.php">

                <div class="header">
                    <img class="logo-pic" src="favicon/logo.png" width="50" height="50" alt="Logo">
                    <h1 class="logo">Event<span> Booking</span></h1>
                </div>

                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="user" placeholder="Username" id="user" required>
                </div>

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="pass" placeholder="Password" id="pass" required>
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="Log in">

                <?php
                if (isset($_SESSION['message'])) { ?>
                    <div class="alert text-danger">
                        <?php echo $_SESSION['message'] ?>
                    </div>
                <?php }
                unset($_SESSION['message']); ?>

                    <div class="name">
                        <p> Created by: Van AJ Vanguardia</p> 
                    </div>

            </form>

        </div>
    </div>


    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets/js/load.js"></script>

</body>

</html>
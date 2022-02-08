<?php

include '../crud/admin/session.php';
include '../crud/admin/create_event.php';

?>

<html lang="en">

<head>
    <title>Create Event</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/site.webmanifest">
    <link rel="icon" href="../favicon/favicon.ico" type="image/ico">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6a128389df.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../assets/css/form.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../assets/css/load.css?v=<?php echo time(); ?>">

</head>

<body>

    <?php include 'sections/navbar.php' ?>

    <div class="h-100 row align-items-center">

        <div class="container">
            <div class="section-title text-center">
                <h3>Create <span>Event</span></h3>
                <p>Fill out the form below to create an event.</p>
            </div>

            <div class="wrapper">
                <form method="post" enctype="multipart/form-data">

                    <div class="py-2">
                        <div class="row"">
                                <div class=" col">
                            <label for="name"> </label>
                            <input type="text" name="event_name" class="bg-light form-control" placeholder="Event Name" required>
                        </div>
                    </div>
            </div>

            <div class="row py-2"">
                            <div class=" col">
                <label for="image"> </label>
                <input type="file" name="event_img" class="bg-light form-control" required>
            </div>
        </div>

        <div class="py-3 pb-4 border-bottom text-center">
            <button class="btn btn-primary" name="submit">
                Create an Event
            </button>
        </div>

        </form>
    </div>

    </div>

    </div>

    <?php include 'sections/load.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
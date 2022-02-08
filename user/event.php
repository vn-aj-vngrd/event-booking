<?php

include '../crud/user/session.php';
include '../crud/msg.php';
include '../crud/user/display_bookedEvent.php';

?>

<html lang="en">

<head>

    <title>Booked Events</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/site.webmanifest">
    <link rel="icon" href="../favicon/favicon.ico" type="image/ico">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6a128389df.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/form.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../assets/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../assets/css/load.css?v=<?php echo time(); ?>">

</head>

<body>

    <?php include 'sections/navbar.php' ?>
    <?php include 'sections/scroll-btn.php' ?>

    <div class="text-center">
        <div class="container">

            <div class="section-title">
                <h3>Booked<span> Events</span></h3>

                <?php

                if ($result) {
                    if (mysqli_num_rows($result) > 0) { ?>
                        <p>View or cancel your booked events down below.</p>
            </div>

            <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                <div class="card">

                    <div class="item-zoom">
                        <?php $imgURL = '../uploads/' . $row["event_image"] ?>
                        <img src="<?php echo $imgURL ?>" class="card-img-top" alt="No Image Available">
                    </div>

                    <div class="card-body">
                        <h6 class="card-title">Event Name: <?php echo $row['event_name'] ?> </h6>


                        <input type="hidden" name="event_id" value="<?php echo $row['event_id'] ?>">
                        <a onclick="return confirm('Are you sure you want to cancel the event?')" href="../crud/user/cancel_Event.php?event_id=<?php echo $row['event_id'] ?>&user_id=<?php echo $_SESSION['user']['user_id'] ?>" type="button" class="btn btn-danger">Cancel</a>

                    </div>

                </div>

            <?php } ?>
        </div>
    </div>

<?php  } else { ?>

    <div class="container-empty">

        <div class="section-title">
            <p>Currently, you don't have any booked events.</p>
        </div>

        <div class="btn-empty">
            <a href="home.php#" type="button" class="btn btn-primary">View Events Feed</a>
        </div>

    </div>

<?php } ?>
<?php } else { ?>

    <div class="container-empty">

        <div class="section-title">
            <p> <?php echo $_SESSION['error'] ?></p>
        </div>

        <div class="btn-empty">
            <a href="home.php#" type="button" class="btn btn-primary">View Events Events</a>
        </div>

    </div>

<?php }
                unset($_SESSION['error']); ?>

<?php include 'sections/load.php' ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
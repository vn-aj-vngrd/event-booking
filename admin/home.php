<?php

include '../crud/admin/session.php';
include '../crud/admin/update_event.php';
include '../crud/admin/display_event.php';

?>

<html lang="en">

<head>
    <title>Home</title>
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
                <h3>Events<span> Feed</span></h3>


                <?php

                $i = 1;
                if ($result) {
                    if (mysqli_num_rows($result) > 0) { ?>
                        <p>View, update, or delete events down below.</p>
            </div>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                <div class="card">

                    <div class="item-zoom">
                        <?php $imgURL = '../uploads/' . $row["event_image"] ?>
                        <img src="<?php echo $imgURL ?>" class="card-img-top" alt="No Image Available">
                    </div>

                    <div class="card-body">
                        <h6 class="card-title">Event Name: <?php echo $row['event_name'] ?> </h6>
                        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateBox-<?php echo $i ?>">Update</a>
                        <a onclick="return confirm('Are you sure you want to delete the event?')" href="../crud/admin/delete_event.php?id=<?php echo $row['event_id'] ?>" type="button" class="btn btn-danger">Delete</a>
                    </div>

                </div>

                <div class="modal fade" id="updateBox-<?php echo $i ?>">
                    <div class="modal-dialog modal-fullscreen-sm-down modal-dialog-centered">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h4 class="modal-title">Update Event Information</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body">
                                <div class="wrapper">

                                    <form method="post" enctype="multipart/form-data">

                                        <div class="py-2">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="name"> </label>
                                                    <input type="text" name="event_name" class="bg-light form-control" placeholder="Event Name">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row py-2">
                                            <div class="col">
                                                <label for="image"> </label>
                                                <input type="file" name="event_img" class="bg-light form-control">
                                            </div>
                                        </div>

                                </div>
                            </div>

                            <input type="hidden" name="event_id" value="<?php echo $row['event_id'] ?>">

                            <div class="modal-footer">
                                <button onclick="return confirm('Are you sure you want to save changes?')" class="btn btn-success" name="submit" formmethod="post">
                                    Save Changes
                                </button>
                            </div>

                            </form>

                        </div>
                    </div>
                </div>
            <?php $i++;
                        } ?>
        </div>
    </div>

<?php  } else { ?>

    <div class="container-empty">

        <div class="section-title text-danger">
            <p>Events feed is currently empty.</p>
        </div>

        <div class="btn-empty">
            <a href="event.php#" type="button" class="btn btn-primary">Create Event</a>
        </div>
    </div>

<?php } ?>
<?php  } else { ?>
    <div class="container-empty">

        <div class="section-title text-danger">
            <p><?php echo $_SESSION['error'] ?></p>
        </div>

        <div class="btn-empty">
            <a href="event.php#" type="button" class="btn btn-primary">Create Event</a>
        </div>
    </div>
<?php unset($_SESSION['error']);
                } ?>

<?php include 'sections/load.php' ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
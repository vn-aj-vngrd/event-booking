
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php#">
            <img src="../favicon/logo.png" width="30" height="30" alt="Logo">  
            Event<span> Booking</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home.php#">Events Feed</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="event.php#">Booked Events</a>
                    </li>
                </ul>

                <div class="nav-item ">
                    <a class="nav-link disabled" style="color: #106eea" href="#"><?php echo $_SESSION['user']['name'] ?></a>
                </div>

                <div class="d-flex">
                    <a href="../crud/logout.php" class="btn btn-danger" onclick="return confirm('Are you sure you want to log out?')">Log Out</a>
                </div>

            </div>
        </div>
    </nav>

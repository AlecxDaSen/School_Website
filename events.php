<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events | HRCC</title>
    <link rel="icon" href="images/hrccbadgeicon.png">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">


</head>

<body class="evtbody">
    <?php include("loadingScreen.php"); ?>
    <?php include("header.php"); ?>

    <div class="col-12" >
        <div class="col-12" >

            <!-- Main Content -->
            <div class="container fade-in2" style="margin-bottom: 25px;">
                <div class="row" >
                    <!-- Welcome Text -->
                    <div class="col-md-6 mb-4" style="margin-top: 100px;">
                        <h2 class="fw-bold text-primary">Welcome to Our Events</h2>
                        <p class="text-muted">
                            Stay up to date with our latest community events. 
                        </p>
                        <a href="#" class="btn btn-outline-primary mt-3">Learn More</a>
                    </div>

                    <!-- Latest Events -->
                    <div class="col-md-6" style="margin-top: 100px;">
                        <h2 class="fw-bold mb-4">Latest Events</h2>
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action mb-2 rounded">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Sectiom match</h5>
                                    <small>30 August</small>
                                </div>
                                <p class="mb-1">An epic matches between classes in section.</p>
                                <small>Click to view details</small>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action mb-2 rounded">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Sciense Day</h5>
                                    <small>26 August</small>
                                </div>
                                <p class="mb-1">Sciense exhibition fron sciense section</p>
                                <small>Click to view details</small>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Featured Party Section -->
                <div class="row mt-5 align-items-center">
                    <div class="col-md-5">
                        <img src="images/gallery1.jpg" alt="Upcoming Event" class="img-fluid rounded shadow">
                    </div>
                    <div class="col-md-7">
                        <h3 class="fw-bold">Scout camp</h3>
                        <p class="text-muted">
                            Don’t miss our exclusive night with.
                        </p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-music-note-beamed me-2"></i> Live DJ Performance</li>
                            <li><i class="bi bi-people-fill me-2"></i> 500+ Guests Expected</li>
                            <li><i class="bi bi-lightning-fill me-2"></i> Neon Dance Floor</li>
                        </ul>
                        <a href="#" class="btn btn-primary mt-3">View Full Details</a>
                    </div>
                </div>

                <div class="row mt-5 align-items-center">
                    <div class="col-md-5">
                        <img src="images//gallery6.jpg" alt="Upcoming Event" class="img-fluid rounded shadow">
                    </div>
                    <div class="col-md-7">
                        <h3 class="fw-bold">Sport Meat</h3>
                        <p class="text-muted">
                            Don’t miss our exclusive night with Europe’s top RNB artists and DJs.
                        </p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-music-note-beamed me-2"></i> Live DJ Performance</li>
                            <li><i class="bi bi-people-fill me-2"></i> 500+ Guests Expected</li>
                            <li><i class="bi bi-lightning-fill me-2"></i> Neon Dance Floor</li>
                        </ul>
                        <a href="#" class="btn btn-primary mt-3">View Full Details</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include("footer.php"); ?>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</body>

</html>

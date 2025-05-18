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

    <style>
        .hover-effect {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-effect:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        section {
            scroll-margin-top: 100px;
        }

        .card-title {
            font-size: 1.25rem;
        }

        .badge {
            font-size: 0.9rem;
            padding: 0.5em 0.75em;
        }

    </style>

</head>

<body class="evtbody"  style="background-color: #eff2f1;">
    <?php include("loadingScreen.php"); ?>

    <?php include("header.php"); ?>

    <div class="col-12 fade-in2">
        <div class="col-12" >

            <!-- Hero Section -->
            <section class="position-relative text-white" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('images/gallery6.jpg') center/cover no-repeat; height: 70vh; ">
                <div class="container h-100 d-flex flex-column justify-content-center align-items-start text-start">
                    <h1 class="display-4 fw-bold text-warning">Explore Our Events</h1>
                    <p class="lead">Stay in the loop with exciting community and school activities.</p>
                    <a href="#" class="btn btn-warning px-4 py-2 mt-3 rounded-pill">See What's Coming</a>
                </div>
            </section>

            <!-- Latest Events Section -->
            <section class="py-5">
                <div class="container ">
                    <h2 class="fw-bold text-center text-warning mb-5">Latest Highlights</h2>
                    <div class="row g-4">

                        <!-- Event Card -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card shadow-sm h-100 border-0 hover-effect rounded-4">
                                <img src="images/gallery1.jpg" class="card-img-top rounded-top-4" alt="Section Match">
                                <div class="card-body">
                                    <h5 class="card-title fw-semibold" >Section Match</h5>
                                    <p class="card-text text-muted">An epic match between classes in the section.</p>
                                    <span class="badge bg-warning text-dark mb-2">30 August</span><br>
                                    <a href="#" class="text-primary fw-semibold">View Details</a>
                                </div>
                            </div>
                        </div>

                        <!-- Event Card -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card shadow-sm h-100 border-0 hover-effect rounded-4">
                                <img src="images/gallery6.jpg" class="card-img-top rounded-top-4" alt="Science Day">
                                <div class="card-body">
                                    <h5 class="card-title fw-semibold">Science Day</h5>
                                    <p class="card-text text-muted">Science exhibition from the Science section.</p>
                                    <span class="badge bg-warning text-dark mb-2">26 August</span><br>
                                    <a href="#" class="text-primary fw-semibold">View Details</a>
                                </div>
                            </div>
                        </div>

                        

                        <!-- Add more cards as needed -->
                    </div>
                </div>
            </section>

            <!-- Featured Events Section -->
            <section class="bg-light py-5 text-white">
                <div class="container">
                    <h2 class="fw-bold text-center text-warning mb-5">Featured Events</h2>
                    <div class="row g-4 align-items-center">

                        <!-- Scout Camp -->
                        <div class="col-md-6">
                            <img src="images/gallery1.jpg" class="img-fluid rounded-4 shadow" alt="Scout Camp">
                        </div>
                        <div class="col-md-6">
                            <h3 class="fw-bold">Scout Camp</h3>
                            <p class="text-warning">Join us for a thrilling adventure night full of fun and friendship.</p>
                            <ul class="list-unstyled">
                                <li class="text-primary"><i class="bi bi-music-note-beamed text-warning me-2"></i> Live DJ Performance</li>
                                <li class="text-primary"><i class="bi bi-people-fill text-warning me-2"></i> 500+ Guests Expected</li>
                                <li class="text-primary"><i class="bi bi-lightning-fill text-warning me-2"></i> Neon Dance Floor</li>
                            </ul>
                        </div>

                        <!-- Sport Meet -->
                        <div class="col-md-6 order-md-2">
                            <img src="images/gallery6.jpg" class="img-fluid rounded-4 shadow" alt="Sport Meet">
                        </div>
                        <div class="col-md-6 order-md-1">
                            <h3 class="fw-bold">Sport Meet</h3>
                            <p class="text-warning">Experience energy, spirit, and sportsmanship in one grand event.</p>
                            <ul class="list-unstyled">
                                <li class="text-primary"><i class="bi bi-award text-warning me-2"></i> Athletic Competitions</li>
                                <li class="text-primary"><i class="bi bi-people text-warning me-2"></i> Cheering Crowds</li>
                                <li class="text-primary"><i class="bi bi-trophy text-warning me-2"></i> Award Ceremonies</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
    <?php include("footer.php"); ?>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</body>

</html>

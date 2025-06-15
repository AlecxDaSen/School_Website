<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/hrccbadgeicon.png">
    <title>Clubs & Societies</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .swiper-slide img {
            height: 280px;
            object-fit: cover;
            border-radius: 12px;
            transition: transform 0.3s ease;
        }

        .swiper-slide img:hover {
            transform: scale(1.05);
        }

        .card-body h4 {
            font-size: 1.2rem;
        }

        iframe {
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .clubIconSingleview {
            max-width: 120px;
        }

        .breadcrumb {
            background-color: transparent;
            justify-content: center;
        }

        .card-img-overlay {
            background: rgba(0, 0, 0, 0.6);
            border-radius: 12px;
        }

        .card {
            border: none;
            overflow: hidden;
        }

        h2.section-title {
            font-weight: 700;
            color: #000;
            border-left: 5px solid #ffc107;
            padding-left: 15px;
        }
    </style>
</head>

<body style="background-color: #f8f9fa;">
    <div class="container-fluid px-0">
        <header class="text-white text-center py-5" style="background: url(images/clubsbg4.jpeg) center/cover no-repeat;">
            <div class="container">
                <img src="images/cadets.png" class="clubIconSingleview mb-3" alt="Cadets">
                <h1 class="fw-bold text-warning display-5">Cadet Club</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mt-3">
                        <li class="breadcrumb-item"><a href="index.php"><i class="bi bi-house"></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="clubs.php">Clubs & Societies</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
        </header>

        <section class="container my-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner rounded shadow">
                            <div class="carousel-item active">
                                <img src="images/gallery1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/gallery2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/gallery4.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="text-warning fw-bold">Know Something About Us!</h2>
                    <p class="text-muted">
                        School Cadet Society is a disciplined and structured organization that instills leadership,
                        teamwork, and a sense of responsibility in students. It provides training in basic military
                        drills, physical fitness, and survival skills while promoting patriotism and community service.
                    </p>
                </div>
            </div>
        </section>

        <section class="container my-5">
            <h2 class="section-title mb-4">Achievements</h2>
            <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="30"
                slides-per-view="1" breakpoints='{"800":{"slidesPerView": 2}}'>
                <?php for ($i = 0; $i < 6; $i++) { ?>
                    <swiper-slide class="rounded mb-5">
                        <div class="card text-white shadow">
                            <img src="images/cadets.jpg" class="card-img" alt="...">
                            <div class="card-img-overlay d-flex flex-column justify-content-end p-4">
                                <h5 class="fs-4 text-white">Camping 2025</h5>
                                <p class="text-white">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="text-white-50"><i class="bi bi-clock me-2"></i>12th March 2025</p>
                                <a href="#" class="text-warning text-decoration-underline">View Gallery</a>
                            </div>
                        </div>
                    </swiper-slide>
                <?php } ?>
            </swiper-container>
        </section>
        

        <?php include("footer.php"); ?>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </div>
</body>

</html>

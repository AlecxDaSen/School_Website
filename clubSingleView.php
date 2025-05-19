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
            border-radius: 10px;
        }

        .card-body h4 {
            font-size: 1.2rem;
        }

        .message-box {
            background-color: #fff3cd;
            border-left: 6px solid #ffc107;
            padding: 20px;
            border-radius: 10px;
        }

        iframe {
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        swiper-container.mySwiper {
            display: block !important;
            padding: 0 !important;
            margin: 0 auto !important;
            height: auto !important;
        }

        swiper-slide {
            height: auto !important;
            margin-bottom: 0 !important;
        }

        swiper-container::part(container) {
            margin-bottom: 0 !important;
        }

        .mySwiper>div[part="container"] {
            margin-bottom: 0 !important;
        }
    </style>


</head>

<body style="background-color: #eff2f1;">
    <div class="container-fluid">

        <div class="row text-center" style="background-image:url(images/clubsbg4.jpeg);background-repeat: no-repeat;background-size: cover;">

            <div class="col-lg-2 col-sm-12 offset-lg-4 offset-sm-0 text-lg-end text-sm-center my-auto ">
                <img src="images/cadets.png" class="clubIconSingleview">

            </div>
            <div class="col-lg-5 col-sm-12 text-lg-start  text-sm-center my-auto">
                <h1 class="fw-bold text-warning">Cadet Club</h1>
            </div>
            <div class="col-12 text-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mt-3 ">
                        <li class="breadcrumb-item "><a href="index.php"><i class="bi bi-house fs-6 fw-bold"></i>&nbsp;Home</a></li>
                        <li class="breadcrumb-item "><a href="clubs.php">Clubs & Societies</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="col-12">
            <div class="row mt-4 mb-4">
                <div class="col-lg-6 col-sm-12">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
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
                <div class="col-lg-6 col-sm-12">
                    <div class="col-12 text-start">
                        <h2 class="text-warning mt-0 mb-3">Know Something about us !</h2>
                        <p class="text-dark">
                            School Cadet Society is a disciplined and structured organization that instills leadership,
                            teamwork, and a sense of responsibility in students. It provides training in basic military
                            drills, physical fitness, and survival skills while promoting patriotism and community service.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 ">
            <h2 class=" fw-bold text-start border-5 border-warning border-start border-top-0 border-bottom-0 border-end-0 " style="color: #000;">Acheivments</h2>

            <div class="col-10 offset-1 mt-3">

                <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="30"
                    slides-per-view="1" breakpoints='{
     
        "800":{
        "slidesPerView": 2

        }

    }'>
                    <?php for ($i = 0; $i < 6; $i++) { ?>
                        <swiper-slide class="rounded mb-5">
                            <div class="card text-bg-dark ">
                                <img src="images/cadets.jpg" class="car-img" style="height: 20rem;">
                                <div class="card-img-overlay card_content">
                                    <h5 class="fs-4 text-white ">Camping 2025</h5>
                                    <p class="text-white fw-bold">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="text-white-50 fs-6"><i class="bi bi-clock fs-5 "> 12th March 2025</i></p>
                                    <a href="#" class="link-warning text-decoration-underline">View Gallery</a>
                                </div>
                            </div>
                        </swiper-slide>
                    <?php } ?>
                </swiper-container>



            </div>


        </div>


        <?php include("footer.php"); ?>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

</body>

</html>
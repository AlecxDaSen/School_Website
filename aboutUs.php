<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | HRCC</title>
    <link rel="icon" href="images/hrccbadgeicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            background: #f9f9f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url('images/history.jpg') center/cover no-repeat;
            height: 75vh;
            color: white;
            display: flex;
            align-items: center;
            justify-content: start;
            padding-left: 5%;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: 700;
        }

        .section-title {
            color: #333;
            font-size: 2rem;
            font-weight: 600;
            border-left: 5px solid #ffc107;
            padding-left: 10px;
            margin-bottom: 20px;
        }

        .info-box {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 25px;
            margin-bottom: 30px;
        }

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

<body>
    <?php include("loadingScreen.php"); ?>
    <?php include("header.php"); ?>

    <div class="fade-in2">
        <!-- HERO SECTION -->
        <section class="hero-section">
            <div>
                <h1 class="text-warning">About Our School</h1>
                <p class="lead">A Journey of Excellence in Education Since 1886</p>
                <a href="#about" class="btn btn-warning rounded-pill mt-3 px-4 py-2">Learn More</a>
            </div>
        </section>

        <div class="container my-5" id="about">
            <!-- MOTTO, VISION, MISSION -->
            <div class="row">
                <div class="col-md-4">
                    <div class="info-box text-center">
                        <h5 class="text-dark fw-bold">Our Motto</h5>
                        <p class="text-muted">"With Faith and Strength"</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box text-center">
                        <h5 class="text-dark fw-bold">Vision</h5>
                        <p class="text-muted">To nurture responsible citizens who are equipped with knowledge, creativity, and strong moral values.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box text-center">
                        <h5 class="text-dark fw-bold">Mission</h5>
                        <p class="text-muted">To deliver quality education that fosters academic excellence, discipline, and holistic development of every child.</p>
                    </div>
                </div>
            </div>

            <!-- PRINCIPAL'S MESSAGE -->
            <div class="row mt-5">
                <div class="col-lg-4">
                    <img src="images/principle2.jpg" class="img-fluid rounded shadow" alt="Principal Image">
                </div>
                <div class="col-lg-8">
                    <div class="message-box" id="Pmsg">
                        <h5 class="fw-bold">Principal's Message</h5>
                        <p>Welcome to Hanwella Rajasinghe Central College. Our school is more than an institution; it is a place where generations have been shaped with knowledge, culture, and discipline. We strive to empower each student to become a leader in their chosen field. Together, let's build a future where education leads the way.</p>
                        <p class="mb-0 text-end fw-bold">Mr. Jagath Priyashanth Soorasena</p>
                    </div>
                </div>
            </div>

            <!-- SCHOOL HISTORY -->
            <div class="row mt-5" id="history">
                <div class="col-12">
                    <h2 class="section-title">Our School History</h2>
                    <div class="row align-items-start g-4">
                        <div class="col-lg-6">
                            <img src="images/botree.jpg" class="img-fluid shadow rounded" style="max-height: 400px; object-fit: cover;" alt="Bo tree image">
                        </div>
                        <div class="col-lg-6">
                            <div class="bg-light p-4 rounded shadow-sm">
                                <h5 class="fw-bold text-warning">The Beginning</h5>
                                <p class="mb-2">Founded in 1886 as Hanwella Bilingual School, the institution was later renamed Hanwella Madhya Maha Vidyalaya with the introduction of free education by Dr. C.W.W. Kannangara. Our motto, <strong>"With Faith and Strength"</strong>, reflects our commitment to nurturing capable, moral citizens. The school belongs to the Seethawaka division in the Homagama zone of the Western province.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 bg-white p-4 shadow-sm rounded">
                        <p>
                            This college was initially located at the present Divisional Education Office by the Kelani river bank. Under Dr. Kannangara's Central College concept, it evolved into Hanwella Rajasinghe Central College, becoming one of the 54 Central Schools aimed at accessible education for all.
                        </p>
                        <p>
                            The first principal, Mr. Evan Ediriweera, oversaw 500 students. The school’s relocation to Lancia Meru Godella was possible due to land acquired by the PTA, led by Mr. D.P.R. Gunawardhana. A Rs. 12,000 fund was paid to Mrs. Wimala Wijewardhana, and the land was handed over to the government.
                        </p>
                        <p>
                            The new building’s foundation was laid in 1952 by Capt. D.S. Gunasekara and officially opened by Prime Minister Hon. Dudley Senanayake in 1953, with MP Kusuma Gunawardhana playing a key role.
                        </p>
                        <p>
                            Under principal Mr. Bogoda Premaratne in 1954 and later Mr. H.R. Perera in 1957, the PTA was revived, and new infrastructure such as a 40x20 building enabled single-session schooling.
                        </p>
                        <p>
                            Today, the school has grown to over 2,500 students and 100 teachers, offering subjects in Science, Arts, and Commerce. Facilities include Mechanical, Fine Arts, Computer, and Sports sections.
                        </p>
                        <p>
                            Notably, Rajasinghe College is among only three Colombo District schools with a Sports Center. It remains a cornerstone of Seethawaka City, now known as <strong>Hanwella Rajasinghe Madya Vidyalaya</strong>.
                        </p>
                    </div>
                </div>
            </div>


            <!-- PRINCIPALS SLIDER -->
            <div class="col-12 mt-5">
                <h2 class="section-title">Our Principals</h2>
                <p class="text-muted">Those who guided the legacy of excellence through the years.</p>
                <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="30"
                    slides-per-view="1" breakpoints='{
                    "1024": {
                        "slidesPerView": 3
                        },
                        "800":{
                            "slidesPerView": 2
                            
                            }
                            
                            }'
                    slides-per-view="1">
                    <?php for ($i = 0; $i < 6; $i++) { ?>
                        <swiper-slide class="rounded mb-5">
                            <div class="text-center shadow p-3 bg-white rounded">
                                <img src="images/principle2.jpg" class="card-img-top mb-2">
                                <div class="card-body">
                                    <h4 class="text-dark">Mr. Jagath Priyashanth Soorasena</h4>
                                    <p class="text-muted"><i class="bi bi-clock"></i> Since 2005.06.04</p>
                                </div>
                            </div>
                        </swiper-slide>
                    <?php } ?>
                </swiper-container>
            </div>

            <!-- PRINCIPALS SLIDER -->
            <!-- VIDEO -->
            <div class="col-12 mt-5 mb-5">
                <h2 class="section-title">Watch Our History</h2>
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/RcsTPizm7eA?si=f1H-UTP3psqYsDJa" title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</body>

</html>
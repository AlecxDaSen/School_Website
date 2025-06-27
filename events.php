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

<body class="evtbody" style="background-color: #eff2f1;">



    <?php

    include("loadingScreen.php");
    include("header.php");

    require "connection.php";
    ?>

    <div class="col-12 fade-in2">
        <div class="col-12">

            <!-- Hero Section -->
            <section class="position-relative text-white" style="background: linear-gradient(rgba(0,0,0,0.6),
             rgba(0,0,0,0.6)), url('images/gallery6.jpg') center/cover no-repeat; height: 70vh; ">

                <div class="container h-100 d-flex flex-column justify-content-center align-items-start text-start">
                    <h1 class="display-4 fw-bold text-warning">Explore Our Events</h1>
                    <p class="lead">Stay in the loop with exciting community and school activities.</p>
                    <a href="#content" class="btn btn-warning px-4 py-2 mt-3 rounded-pill">See What's Coming</a>
                </div>
            </section>

            <!-- Latest Events Section -->
            <section class="py-5">
                <div class="container ">
                    <h2 class="fw-bold text-center text-warning mb-5">Latest Highlights</h2>
                    <div class="row g-4" id="content">


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
                            <?php


                            $evtHighlights = Database::search("SELECT * FROM `events` WHERE `evt_state` = '1' ORDER BY `date` DESC LIMIT 6 ");

                            function limitWords($desc, $limit)
                            {
                                $words = explode(" ", $desc);

                                if (count($words) <= $limit) {
                                    return $desc;
                                }
                                return implode(' ', array_slice($words, 0, $limit)) . "...";
                            }


                            for ($i = 0; $i < $evtHighlights->num_rows; $i++) {

                                $evtHighlightsData = $evtHighlights->fetch_assoc();

                                $newevtDescription = limitWords($evtHighlightsData["description"], 10);
                                $newTitle = limitWords($evtHighlightsData['title'], 6);

                                $dateObj = new DateTime($evtHighlightsData["date"]);

                                $newDate = $dateObj->format("Y M d");

                                $evtImg = Database::search("SELECT `eimg_path` FROM  `event_images` 
                            WHERE `events_evt_id`='" . $evtHighlightsData["evt_id"] . "' ORDER BY `eimg_id` DESC LIMIT 1");

                                $imgData = $evtImg->fetch_assoc();


                            ?>
                                <swiper-slide class="rounded mb-5">

                                    <!-- Event Card -->
                                    <div class="col-12 pb-5">
                                        <div class=" shadow-sm h-100 border-0 hover-effect rounded-4">
                                            <img src="<?php echo ($imgData['eimg_path']) ?>" class="card-img-top rounded-top-4" alt="Events">
                                            <div class="card-body">
                                                <h5 class="card-title fw-semibold"><?php echo ($newTitle) ?></h5>
                                                <p class="card-text text-muted"><?php echo ($newevtDescription) ?></p>
                                                <span class="badge bg-warning text-dark mb-2"><?php echo ($newDate) ?></span><br>
                                                <a href="#" onclick="sendEvtId(<?php echo ($evtHighlightsData['evt_id']) ?>);" class="text-primary fw-semibold">View Details</a>
                                            </div>
                                        </div>
                                    </div>

                                </swiper-slide>
                            <?php } ?>
                        </swiper-container>





                        <!-- Add more cards as needed -->
                    </div>
                </div>
            </section>

            <!-- Featured Events Section -->

            <?php



            ?>



            <section class="bg-light py-5 text-white">
                <div class="container">
                    <h2 class="fw-bold text-center text-warning mb-5">All Events</h2>
                    <div id="eventContainer"></div>
                </div>
            </section>
            <div class="col-12 text-center mt-5 ">
                <button class="btn btn-danger col-lg-2  p-3 rounded-pill" id="showMoreBtn">Show More</button>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>


    <!-- Scripts -->
    <script>
        let offset = 0;
        const limit = 6;

        function loadMoreEvents() {
            const xhr = new XMLHttpRequest();
            xhr.onload = function() {
                if (xhr.status === 200) {
                    const result = xhr.responseText;

                    // alert(result);

                    if (result.trim() === "") {
                        document.getElementById("showMoreBtn").style.display = "none";
                    } else {
                        document.getElementById("eventContainer").insertAdjacentHTML('beforeend', result);
                        offset += limit;
                    }
                }
            };
            
            xhr.open("GET", `load_events.php?offset=${offset}&limit=${limit}`, true);
            xhr.send();
        }

        // Load first batch on page load
        document.addEventListener("DOMContentLoaded", () => {
            loadMoreEvents();
        });

        document.getElementById("showMoreBtn").addEventListener("click", loadMoreEvents);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</body>

</html>
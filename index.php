<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajasinghe Central College </title>
    <link rel="icon" href="images/hrccbadgeicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>

<?php

require "connection.php";

$countData = json_decode(file_get_contents('homepageData.json'), true);


?>

<body class="main-body" style="background-color: #eff2f1;">
    <style>
        .section-title {
            font-size: 2.2rem;
            font-weight: 600;
            border-bottom: 3px solid #ffc107;

            display: inline-block;
            padding-bottom: 5px;
        }

        .news-card,
        .event-card {
            flex: 0 0 auto;
            scroll-snap-align: start;
            width: 240px;
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }



        .news-card {
            background-color: #fff;
            color: #000;
            flex: 0 0 auto;
            width: 250px;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            scroll-snap-align: start;
            transition: transform 0.3s;
        }

        .event-card {
            background-color: #151d30;
            color: #fff;
            border: 1px solid #ffc107;
            box-shadow: 0 0 15px rgba(255, 193, 7, 0.3);
        }

        .news-img,
        .event-img {
            height: 140px;
            width: 100%;
            object-fit: cover;
        }

        .card-body-custom {
            padding: 0.75rem 1rem;
        }

        .card-body-custom h6 {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 0.3rem;
        }

        .card-body-custom p {
            font-size: 0.85rem;
            margin-bottom: 0.3rem;
        }

        .bg-news-events {
            background: linear-gradient(rgba(0, 0, 0, 0.85), rgba(0, 0, 0, 0.85)), url('images/gallery3.jpg') center/cover no-repeat;
            padding: 100px 0;
        }


        .scroll-cards.active {
            cursor: grabbing;
        }

        .scroll-cards {
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
            gap: 1rem;
            padding-bottom: 1rem;
            cursor: grab;
            scroll-snap-type: x mandatory;
        }

        .scroll-cards::-webkit-scrollbar {
            display: none;
        }

        @media (max-width: 768px) {
            .news-card {
                width: 200px;
            }
        }

        .news-card {
            user-select: none;
            /* Prevents text selection */
            -webkit-user-drag: none;
            /* Prevents image dragging in Safari/Chrome */
            cursor: grab;
            /* Visual feedback for drag */
        }

        .event-card {
            user-select: none;
            /* Prevents text selection */
            -webkit-user-drag: none;
            /* Prevents image dragging in Safari/Chrome */
            cursor: grab;
            /* Visual feedback for drag */
        }

        .news-card img {
            user-select: none;
            /* Prevent selecting the image */
            -webkit-user-drag: none;
            /* Prevent dragging in Safari/Chrome */
            pointer-events: none;
            /* Optional: Disable any mouse interactions (clicks, drags) */
        }

        .event-card img {
            user-select: none;
            /* Prevent selecting the image */
            -webkit-user-drag: none;
            /* Prevent dragging in Safari/Chrome */
            pointer-events: none;
            /* Optional: Disable any mouse interactions (clicks, drags) */
        }

        .news-card:active {
            cursor: grabbing;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.65);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .glass-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .section-bg {
            background: linear-gradient(135deg, #f8f9fa, #ffffff);
            padding: 60px 0;
        }

        .icon-box {
            width: 60px;
            height: 60px;
            display: grid;
            place-items: center;
            font-size: 1.75rem;
            border-radius: 50%;
        }
    </style>

    <?php include("loadingScreen.php"); ?>


    <div class="background">
        <video autoplay muted loop playsinline class="background-video">
            <source src="images/course-video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="overlay"></div> <!-- Darkening Overlay -->
        <div class="col-12 text-center pt-lg-5 content">
            <h1 class="text-uppercase text-white welcome-text" style="margin-top: 100px;">Welcome to </h1>
            <img src="images/hrccbadge.png" class="hrccbadge">
            <h1 class="text-uppercase fw-bold text-white college-name">Rajasinghe Central College</h1>
            <!-- <h3 class="text-uppercase text-white college-name">With Faith & Strength</h3> -->
        </div>
    </div>

    <?php include("header.php"); ?>


    <div class="container-fluid">

        <section class="section-bg shadow-lg rounded-2 mt-5">
        <div class="container text-center mb-5">
            <h2 class="fw-bold text-uppercase text-dark mb-3">Vision & Mission</h2>
            <p class="text-muted fs-5">Our guiding principles that shape the future of Rajasinghe Central College.</p>
        </div>

            <div class="container">
                <div class="row g-4">

                    <!-- Vision Card -->
                    <div class="col-md-6">
                        <div class="p-4 rounded-4 glass-card h-100 text-start">
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box bg-secondary-subtle text-secondary me-3">
                                    <i class="bi bi-eye-fill"></i>
                                </div>
                                <h4 class="text-uppercase fw-bold mb-0 text-secondary">Our Vision</h4>
                            </div>
                            <p class="fs-5 text-dark mt-2">
                                To produce excellent, virtuous, and knowledgeable sons and daughters of Mother Rajasinghe.
                            </p>
                        </div>
                    </div>

                    <!-- Mission Card -->
                    <div class="col-md-6">
                        <div class="p-4 rounded-4 glass-card h-100 text-start">
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon-box bg-danger-subtle text-danger me-3">
                                    <i class="bi bi-bullseye"></i>
                                </div>
                                <h4 class="text-uppercase fw-bold mb-0 text-danger">Mission</h4>
                            </div>
                            <p class="fs-5 text-dark mt-2">
                                Aiming to create individuals with a creative and balanced personality, nourished with competencies based on self-esteem and identity, and capable of involving in sustainable development.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>

    <section class="position-relative text-white bg-news-events mt-5">
        <div class="container">

            <!-- News Section -->
            <div class="mb-5">
                <div class="text-center mb-4">
                    <h2 class="section-title text-warning">Latest News</h2>
                    <p class="text-light">HRCC News and Updates</p>
                </div>

                <div class="scroll-cards">
                    <!-- Repeat as needed -->

                    <?php

                    $newsSearch = Database::search("SELECT * FROM `news`
 INNER JOIN `news_images` ON `news`.`news_id`=`news_images`.`news_news_id` 
 WHERE `status_sid`='1' ORDER BY `datetime` DESC LIMIT 8");



                    function limitWords($desc, $limit)
                    {
                        $words = explode(" ", $desc);

                        if (count($words) <= $limit) {
                            return $desc;
                        }
                        return implode(' ', array_slice($words, 0, $limit)) . "...";
                    }


                    if ($newsSearch->num_rows != 0) {
                        for ($e = 0; $e < $newsSearch->num_rows; $e++) {
                            $newsData = $newsSearch->fetch_assoc();



                            $newDescription = limitWords($newsData["description"], 12);

                            $dateObj = new DateTime($newsData["datetime"]);

                            $formatted = $dateObj->format("Y F d");


                    ?>
                            <div class="news-card" onclick="sendNewsId(<?php echo($newsData['news_id'])?>);">
                                <img src="<?php echo ($newsData["nimg_path"]) ?>" class="news-img" alt="News Image">
                                <div class="card-body-custom">
                                    <h6><?php echo ($newsData["title"]) ?></h6>
                                    <p><small><?php echo ($formatted) ?></small></p>
                                    <p><?php echo ($newDescription) ?></p>
                                </div>
                            </div>
                        <?php

                        }
                    } else {
                        ?>
                        <div class="news-card">
                            <img src="images/cadetsimg" class="news-img" alt="News Image">
                            <div class="card-body-custom">
                                <h6>NaN</h6>
                                <p><small>**** **, 20**</small></p>
                                <p>NaN</p>
                            </div>
                        </div>
                    <?php
                    }



                    ?>




                    <div class="news-card">
                        <img src="images/gallery2.jpg" class="news-img" alt="News Image">
                        <div class="card-body-custom">
                            <h6>Junior Steward Post</h6>
                            <p><small>March 27th, 2025</small></p>
                            <p>Applications are open for the post of Junior Steward 2025...</p>
                        </div>
                    </div>

                    <div class="news-card">
                        <img src="images/cadetsimg" class="news-img" alt="News Image">
                        <div class="card-body-custom">
                            <h6>Principal Appointed</h6>
                            <p><small>April 3rd, 2025</small></p>
                            <p>Mr. Athula Wijewardena was appointed principal of Royal College...</p>
                        </div>
                    </div>

                    <div class="news-card">
                        <img src="images/gallery2.jpg" class="news-img" alt="News Image">
                        <div class="card-body-custom">
                            <h6>Junior Steward Post</h6>
                            <p><small>March 27th, 2025</small></p>
                            <p>Applications are open for the post of Junior Steward 2025...</p>
                        </div>
                    </div>

                    <div class="news-card">
                        <img src="images/cadetsimg" class="news-img" alt="News Image">
                        <div class="card-body-custom">
                            <h6>Principal Appointed</h6>
                            <p><small>April 3rd, 2025</small></p>
                            <p>Mr. Athula Wijewardena was appointed principal of Royal College...</p>
                        </div>
                    </div>

                    <div class="news-card">
                        <img src="images/gallery2.jpg" class="news-img" alt="News Image">
                        <div class="card-body-custom">
                            <h6>Junior Steward Post</h6>
                            <p><small>March 27th, 2025</small></p>
                            <p>Applications are open for the post of Junior Steward 2025...</p>
                        </div>
                    </div>

                    <div class="news-card">
                        <img src="images/cadetsimg" class="news-img" alt="News Image">
                        <div class="card-body-custom">
                            <h6>Principal Appointed</h6>
                            <p><small>April 3rd, 2025</small></p>
                            <p>Mr. Athula Wijewardena was appointed principal of Royal College...</p>
                        </div>
                    </div>

                    <div class="news-card">
                        <img src="images/gallery2.jpg" class="news-img" alt="News Image">
                        <div class="card-body-custom">
                            <h6>Junior Steward Post</h6>
                            <p><small>March 27th, 2025</small></p>
                            <p>Applications are open for the post of Junior Steward 2025...</p>
                        </div>
                    </div>

                    <!-- Add more news cards -->
                </div>
            </div>

            <!-- Events Section -->
            <div>
                <div class="text-center mb-4">
                    <h2 class="section-title text-warning">Latest Events</h2>
                    <p class="text-light">What’s happening soon at HRCC</p>
                </div>

                <div class="scroll-cards">
                    <!-- Repeat as needed -->

                    <?php
                    $evtSearch = Database::search("SELECT * FROM `events` WHERE `evt_state`='0' ORDER BY `date` DESC LIMIT 8 ");


                    if ($evtSearch->num_rows != 0) {
                        for ($e = 0; $e < $evtSearch->num_rows; $e++) {

                            $evtData = $evtSearch->fetch_assoc();

                            $newevtDescription = limitWords($evtData["description"], 12);

                            $dateObj2 = new DateTime($evtData["date"]);

                            $newDate = $dateObj->format("Y M d");

                            $evtImg = Database::search("SELECT `eimg_path` FROM  `event_images` 
                            WHERE `events_evt_id`='" . $evtData["evt_id"] . "' ORDER BY `eimg_id` DESC LIMIT 1");

                            $imgData = $evtImg->fetch_assoc();

                    ?>
                            <div class="event-card" onclick="sendEvtIdUpcoming(<?php echo($evtData['evt_id'])?>);">
                                <img src="<?php echo($imgData['eimg_path'])?>" class="event-img" alt="Event Image">
                                <div class="card-body-custom">
                                    <h6><?php echo($evtData['title'])?></h6>
                                    <p><small><?php echo($newDate)?></small></p>
                                    <p><?php echo($newevtDescription)?></p>
                                </div>
                            </div>


                        <?php



                        }
                    } else {
                        ?>
                        <div class="event-card">
                            <img src="images/gallery5.jpg" class="event-img" alt="Event Image">
                            <div class="card-body-custom">
                                <h6>NAN</h6>
                                <p><small>**** **, ****</small></p>
                                <p>Nan</p>
                            </div>
                        </div>
                    <?php
                    }


                    ?>



                    <div class="event-card">
                        <img src="images/gallery2.jpg" class="event-img" alt="Event Image">
                        <div class="card-body-custom">
                            <h6>Founder’s Day</h6>
                            <p><small>July 1, 2025</small></p>
                            <p>Special ceremony to honor the foundation of HRCC.</p>
                        </div>
                    </div>

                    <div class="event-card">
                        <img src="images/gallery5.jpg" class="event-img" alt="Event Image">
                        <div class="card-body-custom">
                            <h6>Science Exhibition</h6>
                            <p><small>June 15, 2025</small></p>
                            <p>Annual science fair where students showcase their innovations.</p>
                        </div>
                    </div>

                    <div class="event-card">
                        <img src="images/gallery2.jpg" class="event-img" alt="Event Image">
                        <div class="card-body-custom">
                            <h6>Founder’s Day</h6>
                            <p><small>July 1, 2025</small></p>
                            <p>Special ceremony to honor the foundation of HRCC.</p>
                        </div>
                    </div>

                    <div class="event-card">
                        <img src="images/gallery5.jpg" class="event-img" alt="Event Image">
                        <div class="card-body-custom">
                            <h6>Science Exhibition</h6>
                            <p><small>June 15, 2025</small></p>
                            <p>Annual science fair where students showcase their innovations.</p>
                        </div>
                    </div>

                    <div class="event-card">
                        <img src="images/gallery2.jpg" class="event-img" alt="Event Image">
                        <div class="card-body-custom">
                            <h6>Founder’s Day</h6>
                            <p><small>July 1, 2025</small></p>
                            <p>Special ceremony to honor the foundation of HRCC.</p>
                        </div>
                    </div>

                    <div class="event-card">
                        <img src="images/gallery5.jpg" class="event-img" alt="Event Image">
                        <div class="card-body-custom">
                            <h6>Science Exhibition</h6>
                            <p><small>June 15, 2025</small></p>
                            <p>Annual science fair where students showcase their innovations.</p>
                        </div>
                    </div>

                    <div class="event-card">
                        <img src="images/gallery2.jpg" class="event-img" alt="Event Image">
                        <div class="card-body-custom">
                            <h6>Founder’s Day</h6>
                            <p><small>July 1, 2025</small></p>
                            <p>Special ceremony to honor the foundation of HRCC.</p>
                        </div>
                    </div>

                    <!-- Add more event cards -->
                </div>
            </div>

        </div>
    </section>

    <div class="container-fluid">
        <div class="col-lg-12 mt-5">


            <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 bg-white shadow-lg p-5 text-center" style="border-radius: 15px;">

                <h2 class="text-danger fw-semibold text-uppercase border-bottom pb-3 mb-4">
                    History
                </h2>

                <p class="fs-5 text-dark">
                    The school was established in 1886 and was initially named Hanwella Bilingual School. It was later renamed Hanwella Madhya Maha Vidyalaya when free education was introduced from primary level to university by Dr. C.W.W. Kannangara.
                </p>

                <p class="fs-5 text-dark d-none d-md-block">
                    The school motto, <strong>“With Faith and Strength,”</strong> reflects its commitment to producing knowledgeable and virtuous individuals. Rajasinghe Central College is part of the Seethawaka division and the Homagama zone in the Western Province. The school’s vision is to produce excellent, dignified, virtuous, and knowledgeable sons and daughters of Mother Rajasinghe.
                </p>

                <div class="mt-4">
                    <a href="aboutUs.php#history" class="btn btn-outline-danger fw-semibold rounded-pill px-4 py-2">
                    Read More...
                    </a>
                </div>

                </div>
            </div>
            </div>

        </div>

        <div class="col-lg-10 offset-lg-1 mt-5 counter">
            <div class="col-12">
                <section class="stats row">

                    <div class="col-lg-3 col-sm-6 gap-1 mb-3 ">
                        <div class="stat-box bg-body">
                            <h2 data-target="<?php echo ($countData['student_count']) ?>">0</h2>
                            <div class="label">
                                <p class="text">Students</p>
                            </div>
                            <p class="description">Currently enrolled at Rajasinghe Central College.</p>
                        </div>
                    </div>



                    <div class="col-lg-3 col-sm-6 gap-1 mb-3 ">
                        <div class="stat-box bg-body">
                            <h2 data-target="<?php echo ($countData['teacher_count']) ?>">0</h2>
                            <div class="label">
                                <p class="text">Teachers</p>
                            </div>
                            <p class="description">Currently worked at Rajasinghe Central College.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 gap-1 mb-3 ">
                        <div class="stat-box bg-body">
                            <h2 data-target="<?php echo ($countData['OL_count']) ?>">0</span></h2>
                            <div class="label">
                                <p class="text">Odinary Level Exam Results &percnt;</p>
                            </div>
                            <p class="description">According to <br>the latest exam results.</p>
                        </div>
                    </div>


                    <div class="col-lg-3 col-sm-6 gap-1 mb-3 ">
                        <div class="stat-box bg-body">
                            <h2 data-target="<?php echo ($countData['UNI_count']) ?>">0</h2>
                            <div class="label">
                                <p class="text">Univercity Selected Students</p>
                            </div>
                            <p class="description">According to <br>the latest exam results.</p>
                        </div>
                    </div>

                </section>
            </div>
        </div>


        <!-- latest news -->

        <div class="col-lg-12 mt-5 mb-5">

            <div class="col-12 text-center mb-3" style="margin-top: 100px;">
                <h2 class="text-secondary text-uppercase">Latest News</h2>
                <p class="fs-5">Recently updated news and Regular activities.</p>
            </div>


            <!-- Slider main container -->
            <div class="swiper col-lg-12 col-sm-10">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="title">
                            <span>Sport News</span>
                        </div>
                        <img src="images/slide_1.jpg" alt="">
                    </div>

                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="title">
                            <span>Sport News</span>
                        </div>
                        <img src="images/slide_1.jpg" alt="">
                    </div>

                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="title">
                            <span>Ongoing Activity </span>
                        </div>
                        <img src="images/slide_2.jpg" alt="">
                    </div>

                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="title">
                            <span>Event News</span>
                        </div>
                        <img src="images/slide_3.jpg" alt="">
                    </div>

                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="title">
                            <span>Event News</span>
                        </div>
                        <img src="images/slide_3.jpg" alt="">
                    </div>

                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="title">
                            <span>Daily News</span>
                        </div>
                        <img src="images/slide_4.jpg" alt="">
                    </div>


                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="title">
                            <span>Daily News</span>
                        </div>
                        <img src="images/slide_4.jpg" alt="">
                    </div>


                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>



            </div>
            <div class="col-12 text-center">
                <a href="#" class="btn btn-outline-warning mt-3 rounded-pill px-4">See More</a>
            </div>


        </div>

    </div>

    <!-- principle's message -->
    <section class="position-relative text-white" style="background: linear-gradient(rgba(0,0,0,0.75), rgba(0,0,0,0.75)), url('images/hrccbg1.jpeg') center/cover no-repeat; padding: 100px 0;">
        <div class="container d-flex flex-column flex-md-row align-items-center gap-5">
            <div class="col-md-5 text-center">
                <img src="images/principle2.jpg" alt="Principal" class="img-fluid rounded-circle shadow-lg" style="max-width: 250px;">
                <h4 class="mt-3 text-warning">Mr. Jagath Priyashantha Soorasena</h4>
                <p class="text-light mb-0">Principal, HRCC</p>
            </div>
            <div class="col-md-7">
                <h2 class="fw-bold text-warning mb-3">Principal's Message</h2>
                <p class="lead text-light">
                    <?php echo ($countData['principle_message']) ?>
                </p>
                <a href="aboutUs.php#Pmsg" class="btn btn-outline-warning mt-3 rounded-pill px-4">Read More</a>
            </div>
        </div>
    </section>


    <div class="container-fluid">

        <div class="col-12 mt-5">

            <!-- school Leader Info -->


            <!-- clubs & societies -->

            <div class="col-lg-12 text-center mt-5 mb-5">
                <h2 class="text-warning fw-bold ">Clubs & Societies</h2>
                <p class="fs-5 text-black-50">Clubs & Societies that student can develop their knowledge & quality</p>


                <div class="timeline col-12 p-1">


                    <div class="timeline-container l-container">
                        <img src="images/cadets.png" class="shadow " />
                        <div class="text-center text-box">

                            <h2 class="text-warning p-0">Cadets</h2>
                            <small class="text-light fw-bold fs-5">Since - 1988</small>
                            <p class="text-white "> School Cadet Society is a disciplined and structured organization that
                                instills leadership, teamwork, and a sense of responsibility in students. It provides
                                training in basic military drills, physical fitness, and survival skills while promoting
                                patriotism and community service. </p>
                            <span class="left-container-arrow"></span>
                        </div>
                    </div>


                    <div class="timeline-container r-container">
                        <img src="images/scouts.png" class="shadow  " />
                        <div class="text-center text-box">
                            <h2 class="text-warning p-0">Scouts </h2>
                            <small class="text-light fw-bold fs-5">Since - 1988</small>
                            <p class="text-white "> School Cadet Society is a disciplined and structured organization that
                                instills leadership, teamwork, and a sense of responsibility in students. It provides
                                training in basic military drills, physical fitness, and survival skills while promoting
                                patriotism and community service. </p>
                            <span class="right-container-arrow"></span>
                        </div>
                    </div>

                    <div class="timeline-container l-container">
                        <img src="images/photography.jpeg" class="shadow  " />
                        <div class="text-center text-box">
                            <h2 class="text-warning p-0">Photography</h2>
                            <small class="text-light fw-bold fs-5">Since - 1988</small>
                            <p class="text-white "> School Cadet Society is a disciplined and structured organization that
                                instills leadership, teamwork, and a sense of responsibility in students. It provides
                                training in basic military drills, physical fitness, and survival skills while promoting
                                patriotism and community service. </p>
                            <span class="left-container-arrow"></span>
                        </div>
                    </div>

                    <div class="timeline-container r-container">
                        <img src="images/nature.jpeg" class="shadow  " />
                        <div class="text-center text-box">
                            <h2 class="text-warning p-0">Nature </h2>
                            <small class="text-light fw-bold fs-5">Since - 1988</small>
                            <p class="text-white "> School Cadet Society is a disciplined and structured organization that
                                instills leadership, teamwork, and a sense of responsibility in students. It provides
                                training in basic military drills, physical fitness, and survival skills while promoting
                                patriotism and community service. </p>
                            <span class="right-container-arrow"></span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2 col-sm-12 d-grid offset-lg-5  mt-3 mb-2 ">
                    <a href="clubs.php" class="btn btn-secondary rounded-pill text-white fw-bold p-2">View All</a>
                </div>


            </div>

            <div class="col-10 offset-1">
                <div class="cardlms">
                    <div class="cardlms1">
                        <div class="cardContent">
                            <div class="row">
                                <div class="col-md-4 cardImage">
                                    <img src="images/lms.png" alt="">
                                </div>
                                <div class="col-md-7 col-sm-12 text-center">
                                    <h1 class="mt-3" style="color: #ffb524; font-family: Verdana, Geneva, Tahoma, sans-serif;">HRCC E Learning Platform</h1>
                                    <p class="fs-6">"Our School Learning Management System (LMS) is a centralized platform designed to
                                        support and enrich the educational journey. It offers features such as online assignments, access to learning materials,
                                        progress tracking, and seamless communication between students, teachers, and parents. By embracing technology, we aim to create a collaborative and engaging
                                        environment for learning, ensuring that education remains accessible and efficient for all members of our school community."</p>

                                    <div class="col-12 d-flex flex-column align-items-center mt-3">
                                        <div class="loader col-lg-4 col-sm-12 text-center">Coming Soon</div>
                                        <section class="dots-container col-6 d-flex justify-content-center mt-3">
                                            <div class="dot"></div>
                                            <div class="dot"></div>
                                            <div class="dot"></div>
                                            <div class="dot"></div>
                                            <div class="dot"></div>
                                        </section>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">


                <section class="enrollment-section">
                    <div class="image-section">
                        <img src="images/gallery1.jpg" alt="Students enrolling at a campus">
                    </div>
                    <div class="text-section">
                        <h1>Student Applications</h1>
                        <p>
                            Take the first step toward your bright future. Join our vibrant student community, access quality education, and start shaping your tomorrow today.
                        </p>

                        <!-- Grade Selection Tabs -->
                        <div class="grade-tabs">
                            <button class="tab-btn active" onclick="showGrade('grade6')">Grade 6</button>
                            <button class="tab-btn" onclick="showGrade('AL')">Advanced Level</button>
                        </div>

                        <!-- Grade 6 Download -->
                        <div id="grade6" class="download-section active">
                            <button class="download-btn pixel-corners">
                                <div class="button-content">
                                    <div class="svg-container">
                                        <svg class="download-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M19.479 10.092c-.212-3.951-3.473-7.092-7.479-7.092-4.005 0-7.267 3.141-7.479 7.092-2.57.463-4.521 2.706-4.521 5.408 0 3.037 2.463 5.5 5.5 5.5h13c3.037 0 5.5-2.463 5.5-5.5 0-2.702-1.951-4.945-4.521-5.408zm-7.479 6.908l-4-4h3v-4h2v4h3l-4 4z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="text-container">
                                        <div class="text">Download</div>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <!-- Advanced Level Download -->
                        <div id="AL" class="download-section">
                            <button class="download-btn pixel-corners">
                                <div class="button-content">
                                    <div class="svg-container">
                                        <svg class="download-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M19.479 10.092c-.212-3.951-3.473-7.092-7.479-7.092-4.005 0-7.267 3.141-7.479 7.092-2.57.463-4.521 2.706-4.521 5.408 0 3.037 2.463 5.5 5.5 5.5h13c3.037 0 5.5-2.463 5.5-5.5 0-2.702-1.951-4.945-4.521-5.408zm-7.479 6.908l-4-4h3v-4h2v4h3l-4 4z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="text-container">
                                        <div class="text">Download</div>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                </section>

            </div>


            <div class="col-12 mt-5 text-center">
                <h3 class="text-danger text-uppercase">Visit our School </h3>
                <span class="text-black-50 fs-5 fw-bold mb-3">Here's the location of paradise all willing to be a son or daughter</span>

                <div class="col-10 offset-1 ">
                    <iframe class="shadow border-dark rounded mb-4 mt-4"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d934.6356694311858!2d80.08790474210592!3d6.908798724211914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae254a5f23fd9a9%3A0xbb14d696456a6ca1!2sHanwella%20Rajasinghe%20Central%20College!5e0!3m2!1sen!2slk!4v1743058903583!5m2!1sen!2slk"
                        width="100%"
                        height="600"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <!-- clubs & societies -->


        </div>
    </div>

    <?php include("footer.php"); ?>

    <script>
        function animateCounter(counter) {
            const target = +counter.getAttribute('data-target');
            let start = 0;
            const duration = 2000; // 2 seconds
            const stepTime = 10;
            const increment = target / (duration / stepTime);

            function updateCounter() {
                start += increment;
                if (start < target) {
                    counter.innerText = Math.ceil(start);
                    setTimeout(updateCounter, stepTime);
                } else {
                    counter.innerText = target; // Ensure it ends at target
                }
            }

            updateCounter();
        }

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target); // Stop observing after animation
                }
            });
        }, {
            threshold: 0.5
        });

        document.querySelectorAll('.stat-box h2').forEach(counter => {
            observer.observe(counter);
        });

        function showGrade(gradeId) {
            const tabs = document.querySelectorAll(".tab-btn");
            const sections = document.querySelectorAll(".download-section");

            tabs.forEach(tab => tab.classList.remove("active"));
            sections.forEach(sec => sec.classList.remove("active"));

            document.getElementById(gradeId).classList.add("active");
            document.querySelector(`[onclick="showGrade('${gradeId}')"]`).classList.add("active");
        }

        // Make scrollable containers draggable
        document.querySelectorAll('.scroll-cards').forEach(container => {
            let isDown = false;
            let startX;
            let scrollLeft;

            container.addEventListener('mousedown', (e) => {
                isDown = true;
                container.classList.add('active');
                startX = e.pageX - container.offsetLeft;
                scrollLeft = container.scrollLeft;
            });

            container.addEventListener('mouseleave', () => {
                isDown = false;
                container.classList.remove('active');
            });

            container.addEventListener('mouseup', () => {
                isDown = false;
                container.classList.remove('active');
            });

            container.addEventListener('mousemove', (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - container.offsetLeft;
                const walk = (x - startX) * 2;
                container.scrollLeft = scrollLeft - walk;
            });

            // Auto-slide every 4s
            const cards = container.querySelectorAll('.news-card');
            let currentIndex = 0;
            const maxVisible = 9;
            if (cards.length > maxVisible) {
                setInterval(() => {
                    currentIndex = (currentIndex + 1) % cards.length;
                    const cardWidth = cards[0].offsetWidth + 16; // width + gap
                    container.scrollTo({
                        left: currentIndex * cardWidth,
                        behavior: 'smooth'
                    });
                }, 2000);
            }

            // Limit to 9 cards
            cards.forEach((card, index) => {
                if (index >= maxVisible) card.style.display = 'none';
            });
        });
    </script>
</body>

</html>
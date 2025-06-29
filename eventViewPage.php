<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/hrccbadgeicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js"></script>
    <title>Events | HRCC</title>

    <style>
        .evtTitle {

            font-size: 60px;
            font-family: 'Times New Roman', Times, serif;

        }

        img {
            max-width: 100%;
            height: auto;
        }

        @media screen and (max-width:420px) {
            .evtTitle {
                font-size: 36px;
            }
        }
    </style>
</head>

<body style="background-color: #eff2f1;">

    <?php

    require "connection.php";

    if (isset($_GET["eid"])) {

        $eid = $_GET["eid"];

        $evtRs = Database::search("SELECT * FROM `events`  WHERE `evt_id`='" . $eid . "'");



        if ($evtRs->num_rows != 0) {
            $evtData = $evtRs->fetch_assoc();

            $dateObj = new DateTime($evtData['date']);

            $date = $dateObj->format("Y M d");

            $timeObj = new DateTime($evtData['time']);
            $time = $timeObj->format("h:i A");

            $imagePaths = [];

            $ImgRs =   Database::search("SELECT * FROM `event_images` WHERE `events_evt_id`='" . $eid . "'");

            while ($row = $ImgRs->fetch_assoc()) {
                $imagePaths[] = $row['eimg_path'];
            }
        }

    ?>

        <section style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('<?php echo ($imagePaths[0]) ?>') center/cover no-repeat; height: 60vh; ">
            <div class="col-lg-10 offset-lg-1 col-sm-12  text-start p-4">
                <h1 class=" mt-2 mb-1 text-warning evtTitle "><?php echo ($evtData["title"]) ?> </h1>
                <h5 class="mt-4  text-white"><i class="bi bi-calendar2-week-fill fs-5"></i>&nbsp;&nbsp;&nbsp; Events &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-calendar3 fs-5">&nbsp;&nbsp;&nbsp; <?php echo ($date) ?> </i> </h5>
                <h5 class="mt-4 text-white"> <i class="bi bi-geo-alt-fill fs-5"></i>&nbsp;&nbsp;&nbsp; <?php echo ($evtData["venue"]) ?></h5>
                <h5 class="mt-4 text-white"><i class="bi bi-stopwatch fs-5"></i>&nbsp;&nbsp;&nbsp; <?php echo ($evtData["time"]) ?></h5>
            </div>
        </section>



        <div class="col-lg-10 col-sm-12 offset-lg-1 offset-sm-0 text-start bg-body p-4">

            <div class=" col-12 ">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">


                        <div class="carousel-item text-center bg-light active">
                            <img src="<?php echo ($imagePaths[1]) ?>" class="img-fluid rounded shadow" alt="Event Images">
                        </div>

                        <div class="carousel-item text-center bg-light ">
                            <img src="<?php echo ($imagePaths[2]) ?>" class="img-fluid rounded shadow" alt="Event Images">
                        </div>

                        <div class="carousel-item text-center bg-light ">
                            <img src="<?php echo ($imagePaths[3]) ?>" class="img-fluid rounded shadow" alt="Event Images">
                        </div>



                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                        <span class="visually-hidden ">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon " aria-hidden="true"></span>
                        <span class="visually-hidden ">Next</span>
                    </button>
                </div>

            </div>


            <p class="text-dark mt-4 mb-5">
                <i class="bi bi-blockquote-left fs-2 text-warning"></i> &nbsp;&nbsp; <?php echo nl2br($evtData['description']) ?>
            </p>


            <!-- remind images -->

            <div class="col-lg-10 offset-lg-1 d-lg-block  mb-5 bg-light">
                <?php

                $length = $ImgRs->num_rows;

                if ($length >= 5) {

                    $loopCount = $length - 4;
                    for ($i = 4; $i < $length; $i++) {

                ?>
                        <img src="<?php echo ($imagePaths[$i]) ?>" class="img-fluid rounded shadow" alt="Event Images">

                <?php

                    }
                }

                ?>

            </div>


            <!-- remind images -->
        </div>




    <?php

    } else {
    ?>
        <div class=" rounded mt-5 col-lg-10 col-sm-12 offset-lg-1 offset-sm-0 bg-body text-start p-4">
            <h1 class=" mb-1 text-warning ">Event Title ***</h1>
            <h5 class="mt-4"> <i class="bi bi-calendar3 fs-5"></i> Date *** &nbsp;&nbsp;&nbsp;<i class="bi bi-calendar2-week-fill fs-5"></i> Event</h5>


            <p class="text-black-50 mt-5 mb-5">
                <i class="bi bi-blockquote-left fs-2 text-warning"></i> &nbsp;&nbsp; *** ***** ****** *****
                ***** ******
                *** ********** **** ******
            </p>
        </div>
    <?php
    }


    ?>



    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/script.js"></script>

</body>

</html>
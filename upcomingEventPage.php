<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/hrccbadgeicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Up-Coming Events | HRCC</title>
    <style>
        .newsDiv {

            position: relative;
            top: 30px;
            border-radius: 20px;
            height: auto;

        }
    </style>

</head>

<body style="background-color: #eff2f1;">

    <section   style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
    url('images/hrccbg0.jpg') center/cover no-repeat; height: 100vh;width: 100%;position: fixed;overflow-y: scroll;">


        <div class="col-lg-10 offset-lg-1 col-sm-12">
            <h1 class="mt-3 text-warning" style="font-size: 55px;font-family: 'Times New Roman',
             Times, serif;">School Up-coming Events &nbsp; <i class="bi bi-calendar2-week fs-1"></i></h1>

              <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mt-3">
                        <li class="breadcrumb-item"><a href="index.php"><i class="bi bi-house"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Up-coming Events</li>
                    </ol>
                </nav>
        </div>

        <?php

        require "connection.php";

        if (isset($_GET['eid'])) {

            $evtRs = Database::search("SELECT * FROM `events` 
            INNER JOIN `event_images` ON `events`.`evt_id`=`event_images`.`events_evt_id`
             WHERE `evt_id`= '" . $_GET['eid'] . "'");

            if ($evtRs->num_rows != 0) {

                $evtData = $evtRs->fetch_assoc();

                $dateObj = new DateTime($evtData['date']);

                $timeObj = new DateTime($evtData["time"]);

                
                $date = $dateObj->format("Y M d");
                $time = $timeObj->format("H:i A");
            }

        ?>


            <div class="newsDiv bg-light col-lg-10 col-sm-12 offset-lg-1 offset-sm-0 bg-body text-start p-4">

                    <div class="col-12">
                         <h1 class=" mb-1 text-warning "><?php echo ($evtData['title']) ?></h1>

                        <h5 class="mt-2 "> <i class="bi bi-calendar3 fs-5"></i> &nbsp;<?php echo ($date) ?>
                         &nbsp;&nbsp;&nbsp; <i class="bi bi-calendar2-week fs-5"></i> &nbsp;Events   &nbsp;&nbsp;
                         <i class="bi bi-clock fs-5"></i> &nbsp;From &nbsp;<?php echo($time)?> </h5>

                         <h5 class="mt-3"><i class="bi bi-geo-alt-fill fs-5"> &nbsp;</i> <?php echo($evtData['venue'])?>  
                         </h5>
                        <img src="<?php echo ($evtData['eimg_path']) ?>" class="rounded-top mt-4" style="width: auto;
                        height: 450px;background-repeat: no-repeat;background-size: cover;" alt="">

                    </div>
                    <div class="col-12">
                       
                      
                         <div class="col-12 ">
                            <p class="text-black-50 mt-1 mb-1">
                            <i class="bi bi-blockquote-left fs-1 text-warning"></i>
                             &nbsp;&nbsp;<?php echo nl2br($evtData['description']) ?>
                        </p> 
                        </div>

                       
                    </div>



            </div>



        <?php

        } else {

        ?>
            <div class=" rounded mt-5 col-lg-10 col-sm-12 offset-lg-1 offset-sm-0 bg-body text-start p-4">
                <h1 class=" mb-1 text-warning ">Event Title ***</h1>
                <h5 class="mt-4"> <i class="bi bi-calendar3 fs-5"></i> Date *** &nbsp;&nbsp;&nbsp;
                 <i class="bi bi-newspaper fs-5"></i> Event</h5>


                <p class="text-black-50 mt-5 mb-5">
                    <i class="bi bi-blockquote-left fs-2 text-warning"></i> &nbsp;&nbsp; *** ***** ****** *****
                    ***** ******
                    *** ********** **** ******
                </p>
            </div>

        <?php

        }


        ?>

    </section>


    <script src="js/script.js"></script>
</body>

</html>
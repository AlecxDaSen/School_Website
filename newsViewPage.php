<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/hrccbadgeicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>News | HRCC</title>
    <style>
        .newsDiv {

            position: relative;
            border-radius: 20px;
            height: auto;

        }
    </style>

</head>

<body style="background-color: #eff2f1;">

    <section style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('images/hrccbg0.jpg') center/cover no-repeat; height: 100vh;width: 100%;position: fixed;">


        <div class="col-lg-10 offset-lg-1 col-sm-12">
            <h1 class="mt-3 text-warning" style="font-size: 55px;font-family: 'Times New Roman', Times, serif;">School News &nbsp; <i class="bi bi-newspaper fs-1"></i></h1>

              <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mt-3">
                        <li class="breadcrumb-item"><a href="index.php"><i class="bi bi-house"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">News</li>
                    </ol>
                </nav>
        </div>

        <?php

        require "connection.php";

        if (isset($_GET['nid'])) {

            $newsRs = Database::search("SELECT * FROM `news` 
            INNER JOIN `news_images` ON `news`.`news_id`=`news_images`.`news_news_id`
             WHERE `news_id`= '" . $_GET['nid'] . "'");

            if ($newsRs->num_rows != 0) {

                $newsData = $newsRs->fetch_assoc();

                $dateObj = new DateTime($newsData['datetime']);

                $date = $dateObj->format("Y M d");
            }

        ?>


            <div class="newsDiv bg-light col-lg-10 col-sm-12 offset-lg-1 offset-sm-0 bg-body text-start p-4">

                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img src="<?php echo ($newsData['nimg_path']) ?>" style="width: 100%;height:450px;background-repeat: no-repeat;background-size: contain;" alt="">
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <h1 class=" mb-1 text-warning "><?php echo ($newsData['title']) ?></h1>
                        <h5 class="mt-4 "> <i class="bi bi-calendar3 fs-5"></i> <?php echo ($date) ?> &nbsp;&nbsp;&nbsp; <i class="bi bi-newspaper fs-5"></i> News</h5>


                        <p class="text-black-50 mt-1 mb-1">
                            <i class="bi bi-blockquote-left fs-2 text-warning"></i> &nbsp;&nbsp;<?php echo nl2br($newsData['description']) ?>
                        </p>
                    </div>

                </div>


            </div>



        <?php

        } else {

        ?>
            <div class=" rounded mt-5 col-lg-10 col-sm-12 offset-lg-1 offset-sm-0 bg-body text-start p-4">
                <h1 class=" mb-1 text-warning ">News Title ***</h1>
                <h5 class="mt-4"> <i class="bi bi-calendar3 fs-5"></i> Date *** &nbsp;&nbsp;&nbsp; <i class="bi bi-newspaper fs-5"></i> News</h5>


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
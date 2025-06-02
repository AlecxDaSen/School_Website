<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/hrccbadgeicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Clubs & Societies | HRCC</title>
</head>

<style>
    .hero-section {
    background-attachment: fixed;
    position: relative;
  }

  .club-card {
    position: relative;
    height: 100%;
    border-radius: 1.5rem;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .club-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 1.5rem 2rem rgba(0, 0, 0, 0.2);
  }

  .club-bg-img {
    position: absolute;
    top: 0; left: 0;
    height: 100%;
    width: 100%;
    object-fit: cover;
    filter: brightness(0.6);
    transition: transform 0.5s ease;
  }
  .club-card:hover .club-bg-img {
    transform: scale(1.05);
  }

  .glass-card .club-overlay {
    position: relative;
    z-index: 2;
    background: rgba(0, 0, 0, 0.5);
    border-radius: 1rem;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding-bottom: 2rem;
    text-align: center;
  }

  .club-icon-wrapper {
    width: 60px;
    height: 60px;
    margin: 0 auto;
    background: white;
    padding: 5px;
    border-radius: 50%;
  }
  .club-icon {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
  }

</style>

<body>
    <?php include("loadingScreen.php"); ?>
    <?php include("header.php"); ?>

    <div class="fade-in2">
    <div class="col-12">

        <section class="position-relative text-white" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('images/gallery1.jpg') center/cover no-repeat; height: 70vh; ">
            <div class="container h-100 d-flex flex-column justify-content-center align-items-start text-start">
                <h1 class="display-4 fw-bold text-warning">Clubs & Societies</h1>
                <p class="lead">Stay in the loop with exciting community and school activities.</p>
                <a href="#clubs" class="btn btn-warning px-4 py-2 mt-3 rounded-pill">Have a Look !</a>
            </div>

        </section>
    </div>

    <div class="container-fluid">

            <!-- begin -->
            <div class="col-10 offset-1 text-center mb-3 ">
                <h2 class="text-secondary mt-3 mb-3">Heading toward Clubs & Societies</h2>

                <p class="text-black-50 fs-6 ">Clubs and societies in a school play a vital role in students’ overall development
                    beyond academics. They provide a platform for students to explore their interests, develop new skills, and build confidence.
                    Whether it's drama, science, music, or debate, each club encourages teamwork, creativity, and leadership. These activities help
                    students discover their passions, improve communication, and learn time management. Most importantly, clubs and societies
                    create a sense of community and belonging, making school life more enjoyable and meaningful.</p>
            </div>

            <!-- begin -->



        <!-- clubs cards -->

        <section id="clubs" class="py-5 mt-3">
            <div class="container">
            <div class="row g-4 justify-content-center">

                <?php
                $clubs = [
                ['img' => 'gallery7.jpg', 'icon' => 'cadets.png', 'name' => 'Cadets', 'desc' => 'Discipline, duty, and national service.'],
                ['img' => 'gallery1.jpg', 'icon' => 'scouts.png', 'name' => 'Scouts', 'desc' => 'Adventure, leadership, and global brotherhood.'],
                ['img' => 'gallery1.jpg', 'icon' => 'photography.jpeg', 'name' => 'Photography', 'desc' => 'Storytelling through lens and light.'],
                ['img' => 'gallery1.jpg', 'icon' => 'nature.jpeg', 'name' => 'Nature Club', 'desc' => 'Eco-awareness and sustainable living.'],
                ['img' => 'gallery1.jpg', 'icon' => 'nature.jpeg', 'name' => 'Eco Society', 'desc' => 'Protect. Plant. Preserve.'],
                ];
                foreach ($clubs as $club): ?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="club-card glass-card text-white position-relative overflow-hidden shadow-lg rounded-4 h-100">
                    <img src="images/<?= $club['img'] ?>" class="club-bg-img" alt="<?= $club['name'] ?>">
                    <div class="club-overlay p-4">
                        <div class="club-icon-wrapper mb-3">
                        <img src="images/<?= $club['icon'] ?>" class="club-icon" alt="<?= $club['name'] ?> icon">
                        </div>
                        <h5 class="fw-bold"><?= $club['name'] ?></h5>
                        <p class="small"><?= $club['desc'] ?></p>
                        <a href="clubSingleView.php" class="btn btn-outline-warning btn-sm rounded-pill mt-2">Learn More</a>
                    </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
            </div>
        </section>
        <!-- clubs cards -->

        <div class=""></div>



    </div>
    </div>
    <?php include("footer.php"); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/hrccbadgeicon.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Academic | HRCC</title>

    </head>
</head>

<style>
    /* Change the active tab pill color to warning */
    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        background-color: #ffc107 !important;
        color: #212529 !important;

    }

    /* Optional: adjust hover effect for all pills */
    .nav-pills .nav-link {
        transition: all 0.3s ease;
        color: #212529;
    }

    .nav-pills .nav-link:hover {
        background-color: #ffe58f;
    }


    .glass-card {
        background: rgba(255, 255, 255, 0.75);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-scale:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.1);
    }

    .icon-wrapper {
        width: 80px;
        height: 80px;
        background-color: #ffc10720;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s ease;
    }

    .hover-scale:hover .icon-wrapper {
        background-color: #ffc10740;
    }
</style>

<body class="bg-light">
    <?php include("loadingScreen.php"); ?>
    <?php include("header.php"); ?>
    <div class="fade-in2">
        <div class="col-12">

            <section class="position-relative text-white" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('images/gallery4.jpg') center/cover no-repeat; height: 70vh; ">
                <div class="container h-100 d-flex flex-column justify-content-center align-items-start text-start">
                    <h1 class="display-3 fw-bold text-warning animate_animated animate_fadeInDown">Academic Excellence</h1>
                    <p class="lead text-light animate_animated animate_fadeInUp">Empowering the next generation through wisdom and innovation</p>
                    <a href="#academic-overview" class="btn btn-warning btn-lg rounded-pill mt-4 animate_animated animate_zoomIn">Explore More</a>
                </div>

            </section>
        </div>

        <div class="container-fluid">

            <!-- begin -->
            <!-- PRINCIPAL MESSAGE -->
            <section class="py-5 bg-light">
                <div class="container">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-5 text-center">
                            <img src="images/principle2.jpg" class="img-fluid rounded-circle shadow" style="width: 200px;">
                            <h4 class="mt-3 text-warning mb-0">Mr. Jagath Priyashantha Soorasena</h4>
                            <p class="text-muted small">Principal, HRCC</p>
                        </div>
                        <div class="col-lg-7">
                            <div class="bg-white p-4 shadow rounded-4 position-relative">
                                <i class="bi bi-quote text-warning display-4 position-absolute top-0 start-0 translate-middle"></i>
                                <p class="fs-5 mb-0">Education is not just about learning facts. It's about shaping leaders, inspiring curiosity, and changing futures. Our goal is to elevate every student with confidence and purpose.</p>
                                <div class="text-end mt-3"><a href="#" class="btn btn-outline-warning rounded-pill">Read Full Message</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Academic Overview Tabs -->
            <section class="container py-5" id="academic-overview">
                <div class="row justify-content-between align-items-center mb-4">
                    <div class="col-md-6">
                        <h2 class="text-dark fw-bold">Academic Overview</h2>
                    </div>
                    <div class="col-md-6 text-end">
                        <ul class="nav nav-pills d-inline-flex">
                            <li class="nav-item me-2">
                                <a class="nav-link active rounded-pill px-4 py-2 shadow-sm" data-bs-toggle="pill" href="#tab-all">All</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="nav-link rounded-pill px-4 py-2 shadow-sm" data-bs-toggle="pill" href="#tab-results">Results</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link rounded-pill px-4 py-2 shadow-sm" data-bs-toggle="pill" href="#tab-papers">Past Papers</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="tab-content">
                    <!-- All Tab -->
                    <div class="tab-pane fade show active" id="tab-all">
                        <div class="row justify-content-center g-4">

                            <!-- Subject Card -->
                            <div class="col-sm-6 col-md-3">
                                <div class="glass-card text-center p-4 h-100 rounded-4 shadow-sm hover-scale">
                                    <div class="icon-wrapper mx-auto mb-3">
                                        <img src="images/function.png" alt="Mathematics" class="img-fluid" style="width: 60px;">
                                    </div>
                                    <h5 class="fw-bold text-dark">Mathematics</h5>
                                </div>
                            </div>

                            <!-- Subject Card -->
                            <div class="col-sm-6 col-md-3">
                                <div class="glass-card text-center p-4 h-100 rounded-4 shadow-sm hover-scale">
                                    <div class="icon-wrapper mx-auto mb-3">
                                        <img src="images/connection.png" alt="Technology" class="img-fluid" style="width: 60px;">
                                    </div>
                                    <h5 class="fw-bold text-dark">Technology</h5>
                                </div>
                            </div>

                            <!-- Subject Card -->
                            <div class="col-sm-6 col-md-3">
                                <div class="glass-card text-center p-4 h-100 rounded-4 shadow-sm hover-scale">
                                    <div class="icon-wrapper mx-auto mb-3">
                                        <img src="images/presentation.png" alt="Commerce" class="img-fluid" style="width: 60px;">
                                    </div>
                                    <h5 class="fw-bold text-dark">Commerce</h5>
                                </div>
                            </div>

                            <!-- Subject Card -->
                            <div class="col-sm-6 col-md-3">
                                <div class="glass-card text-center p-4 h-100 rounded-4 shadow-sm hover-scale">
                                    <div class="icon-wrapper mx-auto mb-3">
                                        <img src="images/creativity.png" alt="Art" class="img-fluid" style="width: 60px;">
                                    </div>
                                    <h5 class="fw-bold text-dark">Art</h5>
                                </div>
                            </div>

                        </div>

                        <div class="col-12 text-start px-2">
                            <h2 class=" mt-5 mb-3 fw-normal text-secondary">Educational Programmes</h2>
                            <div class="col-10 offset-1 text-center">

                                <p>Educational TV programs conducted by school teachers play a crucial role in extending
                                    learning beyond the classroom. These programs make quality education accessible to a wider audience,
                                    especially students in remote or under-resourced areas. By using simple explanations, engaging visuals,
                                    and real-life examples, teachers can make complex topics easier to understand. Such programs also help
                                    reinforce classroom lessons, support self-paced learning, and keep students connected to their studies
                                    during school breaks or emergencies. They showcase the dedication of teachers and highlight the importance
                                    of continuous learning through modern, inclusive methods.
                                </p>
                            </div>
                        </div>

                        <section class="py-5">
                            <div class="container">
                                <div class="row g-4 justify-content-center">

                                    <?php
                                    $programs = [
                                        ['img' => 'jathikapa2.jpeg', 'title' => 'Jathika Pasala', 'desc' => 'Island-wide educational programme.'],
                                        ['img' => 'jathikapasla.jpeg', 'title' => 'Jathika Pasala', 'desc' => 'Technology basics for A/L students.'],
                                        ['img' => 'nenasa.jpeg', 'title' => 'Nenasa', 'desc' => 'ICT programme for O/L.'],
                                        ['img' => 'nenasa.jpeg', 'title' => 'Nenasa', 'desc' => 'ICT programme for O/L.']
                                    ];

                                    foreach ($programs as $p): ?>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="card video-card border-0 shadow-sm  rounded-4 overflow-hidden">
                                                <div class="video-img-wrapper">
                                                    <img src="images/<?= $p['img'] ?>" class="card-img-top img-fluid" alt="<?= $p['title'] ?>">
                                                </div>
                                                <div class="card-body text-center">
                                                    <h5 class="text-warning fw-bold"><?= $p['title'] ?></h5>
                                                    <p class="text-muted"><?= $p['desc'] ?></p>
                                                    <a href="#" class="btn btn-danger rounded-pill btn-sm px-4 fw-semibold">
                                                        <i class="bi bi-youtube me-1"></i> Watch
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>
                        </section>



                        <div class="col-12 mt-2 mb-2">
                            <div class="col-12 text-center">
                                <h2 class="text-black-50  fw-normal">Educational Events</h2>
                                <div class="col-6 offset-3">
                                    <p>Special Works that children can share there knowledge with diffrent funny and enjoyble activities.
                                        A great step that children can learn new things without sitting inside of the class room. </p>

                                </div>
                            </div>

                            <div class="col-lg-10 offset-lg-1 col-sm-12 offset-sm-0 mb-3">

                                <!-- event card -->
                                <div class="row g-0 rounded shadow mt-2 mb-2">
                                    <div class="col-md-7 ">
                                        <div id="carouselExampleFade" class="carousel slide carousel-fade rounded" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="images/mathday.jpg" class="d-block w-100 academCaroImg" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="images/mathsday2.jpg" class="d-block w-100 academCaroImg" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="images/mathsday3.jpg" class="d-block w-100 academCaroImg" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="images/mathsday4.jpg" class="d-block w-100 academCaroImg" alt="...">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="card-body my-auto">
                                            <h4 class="text-danger mt-1">📊🖌 MATH - O - MANIA 📐📏 </h4>
                                            <p class="text-dark mt-3">This is a great work of grade 8 and 9 section students
                                                with the help of valuable teachers. A day with full of Experience that give a smile to children face.</p>

                                            <p class="fs-5"><small class="text-body-secondary">Held on : <b>2024 September 27</b></small></p>

                                            <a href="https://web.facebook.com/share/p/1DdCnaHWuZ/"
                                                class="btn btn-outline-warning rounded-pill mt-2 fw-bold">View Full Albem &nbsp;
                                                <i class=" bi bi-facebook fs-6"></i></a>

                                        </div>
                                    </div>
                                </div>


                                <!-- event card -->
                            </div>
                        </div>





                    </div>




                    <!-- Results Tab -->
                    <div class="tab-pane fade" id="tab-results">
                        <div class="text-center py-5">
                            <div class="col-10 offset-1 ">
                                <div class="row mt-2 mb-3">
                                    <!-- RESULTS SECTION -->
                                    <section class="py-5 bg-dark text-white" style="border-radius: 20px;">
                                        <div class="container">
                                            <div class="text-center mb-4">
                                                <h2 class="fw-bold text-warning">Check Your Results</h2>
                                                <p class="text-light">Use your exam number to view results instantly</p>
                                            </div>
                                            <div class="row justify-content-center g-3">
                                                <div class="col-md-3">
                                                    <select class="form-select rounded-pill">
                                                        <option>A/L 2024</option>
                                                        <option>O/L 2023</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control rounded-pill ps-4" placeholder="Enter Index No.">
                                                </div>
                                                <div class="col-md-2 d-grid">
                                                    <button class="btn btn-warning rounded-pill fw-bold"><i class="bi bi-search me-1"></i>Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <div class="col-12 text-center mt-3 mb-3">
                                    <h2 class="text-black-50 ">Exam results of past years </h2>
                                    <div class="col-12 text-start">
                                        <h4 class=" ">O/L Results 2023 </h4>
                                        <div class="col-10 offset-1  mt-2 mb-2 ">
                                            <div class=" bg-light">
                                                <img src="images/techrs.jpg" class="rs_img">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 text-start mt-5 mb-2">
                                        <h4 class="">A/L Results 2024 </h4>
                                        <p class="text-black-50">Click & View</p>
                                        <div class="row text-center gap-4 justify-content-around">

                                            <!-- carousel -->
                                            <div id="carouselExampleFade" class="carousel slide carousel-fade">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="images/mathsrs.jpg" class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="images/techrs.jpg" class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="images/techrs.jpg" class="d-block w-100" alt="...">
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

                                            <!-- carousel -->

                                            <div class="col-sm-6 col-md-3">
                                                <div class="glass-card text-center p-4 rounded-4 shadow-sm hover-scale"
                                                    type="button" data-bs-toggle="modal" data-bs-target="#resultsModal" data-section="maths">
                                                    <div class="icon-wrapper mx-auto mb-3">
                                                        <img src="images/function.png" alt="Mathematics" class="img-fluid" style="width: 60px;">
                                                    </div>
                                                    <h5 class="fw-bold text-dark">Mathematics</h5>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-3">
                                                <div class="glass-card text-center p-4 rounded-4 shadow-sm hover-scale"
                                                    type="button" data-bs-toggle="modal" data-bs-target="#resultsModal" data-section="tech">
                                                    <div class="icon-wrapper mx-auto mb-3">
                                                        <img src="images/connection.png" alt="Technology" class="img-fluid" style="width: 60px;">
                                                    </div>
                                                    <h5 class="fw-bold text-dark">Technology</h5>
                                                </div>
                                            </div>


                                            <div class="col-sm-6 col-md-3">
                                                <div class="glass-card text-center p-4  rounded-4 shadow-sm hover-scale"
                                                    type="button" data-bs-toggle="modal" data-bs-target="#resultsModal" data-section="commerce">
                                                    <div class="icon-wrapper mx-auto mb-3">
                                                        <img src="images/presentation.png" alt="Commerce" class="img-fluid" style="width: 60px;">
                                                    </div>
                                                    <h5 class="fw-bold text-dark">Commerce</h5>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-3">
                                                <div class="glass-card text-center p-4 h-100 rounded-4 shadow-sm hover-scale"
                                                    type="button" data-bs-toggle="modal" data-bs-target="#resultsModal" data-section="art">
                                                    <div class="icon-wrapper mx-auto mb-3">
                                                        <img src="images/creativity.png" alt="Art" class="img-fluid" style="width: 60px;">
                                                    </div>
                                                    <h5 class="fw-bold text-dark">Art</h5>
                                                </div>
                                            </div>

                                        </div>

                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Past Papers Tab -->
                    <div class="tab-pane fade" id="tab-papers">

                        <div class="text-center py-5 bg-dark text-white" style="border-radius: 20px;">
                            <h3 class="text-warning">Search Past Papers</h3>
                            <p>Select a grade and term to search for downloadable past papers</p>
                            <div class="row justify-content-center">
                                <div class="col-md-3">
                                    <select class="form-select rounded-pill mb-2">
                                        <option>A/L</option>
                                        <option>O/L</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select rounded-pill mb-2">
                                        <option>1st Term</option>
                                        <option>2nd Term</option>
                                        <option>3rd Term</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control rounded-pill mb-2" placeholder="Search by subject">
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-warning rounded-pill w-100 fw-bold"><i class="bi bi-search me-1"></i>Search</i></button>
                                </div>
                            </div>

                        </div>
                        <!-- Sample Cards -->
                        <div class="row g-4 justify-content-center">
                            <?php for ($i = 0; $i < 4; $i++) { ?>
                                <div class="col-md-3 mb-4">
                                    <div class="card text-center border-0 shadow-lg h-70 rounded-4">
                                        <div class="bg-dark rounded-top-4 p-4">
                                            <img src="icons/pdf.png" class="img-fluid" alt="PDF Icon" style="max-height: 100px;">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title text-warning fw-bold mb-2">A/L Past Paper <?= $i + 1 ?></h5>
                                            <p class="text-muted mb-3">1st Term - 2024</p>
                                            <a href="#" class="btn btn-danger btn-sm rounded-pill px-4 fw-semibold">
                                                <i class="bi bi-download me-1"></i> Download
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- begin -->

                <div class="tab-content ">
                    <div id="tab-1" class="tab-pane fade show p-0 active">




                    </div>
                </div>

        </div>
    </div>


    <div class="modal fade" id="resultsModal" tabindex="-1" aria-labelledby="resultsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title text-dark" id="resultsModalLabel">Results Section</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Content will be injected here dynamically -->
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-outline-danger rounded-pill fs-6 px-4 py-2">
                        View All <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        const resultsData = {
            maths: {
                title: "Results of Maths Section",
                imgSrc: "images/mathsrs.jpg",
                viewAllLink: "#maths-view-all"
            },
            tech: {
                title: "Results of Tech Section",
                imgSrc: "images/techrs.jpg",
                viewAllLink: "#tech-view-all"
            },
            commerce: {
                title: "Results of Commerce Section",
                imgSrc: "images/techrs.jpg",
                viewAllLink: "#commerce-view-all"
            },
            art: {
                title: "Results of Art Section",
                imgSrc: "images/techrs.jpg",
                viewAllLink: "#art-view-all"
            }
        };

        const resultsModal = document.getElementById('resultsModal');
        const modalTitle = resultsModal.querySelector('.modal-title');
        const modalBody = resultsModal.querySelector('.modal-body');
        const modalFooterLink = resultsModal.querySelector('.modal-footer a');

        resultsModal.addEventListener('show.bs.modal', event => {
            const trigger = event.relatedTarget; // element that triggered the modal
            const section = trigger.getAttribute('data-section');

            if (section && resultsData[section]) {
                const data = resultsData[section];
                modalTitle.textContent = data.title;
                modalBody.innerHTML = < img src = "${data.imgSrc}"
                alt = "${data.title}"
                class = "img-fluid rounded" > ;
                modalFooterLink.href = data.viewAllLink;
            }
        });
    </script>
    <?php include("footer.php"); ?>
</body>

</html>
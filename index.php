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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>


<body class="main-body">

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
        </div>
    </div>

    <?php include("header.php"); ?>


    <div class="container-fluid">

        <div class="col-lg-12 text-center mt-5  ">

            <div class="col-10 offset-1  rounded shadow-lg p-5 ">

                <div class="row my-auto ">
                    <div class="col-lg-6 col-sm-12 text-center">
                        <h2 class="fw-bold text-secondary pt-5 pb-3 text-uppercase">School Motto</h2>

                        <span class="fs-4 text-dark ">With Faith and Strength</span>
                    </div>
                    <div class="col-lg-6 text-center">

                        <h2 class="fw-bold text-secondary pt-5 pb-3 text-uppercase">Our Vision</h2>

                        <span class="fs-4 text-dark ">To produce excellent, virtuous, and knowledgeable sons and
                            daughters of Mother Rajasinghe</span>
                    </div>
                </div>


                <h2 class="fw-bold text-secondary pt-5 pb-3 text-uppercase">Mission</h2>

                <span class="fs-4 text-dark">Aiming to create individuals with a creative and balanced
                    personality, nourished with
                    competencies based on self-esteem and identity, and capable of involving in sustainable
                    development.
                </span>

            </div>

        </div>

        <div class="col-lg-12 mt-5">

            <div class="col-10 offset-1 rounded shadow-lg p-5 pb-2 text-center">

                <div class="col-12 d-flex flex-column justify-content-end">

                    <h2 class="text-danger fw-bold text-uppercase pb-3">History</h2>
                    <span class="fs-5 text-dark">The school was established in 1886 and was initially
                        named Hanwella Bilingual School.It was later renamed Hanwella Madhya Maha
                        Vidyalaya when free education was introduced from primary level to university by
                        Dr. C.W.W. Kannangara.The school motto, "With Faith and Strength," reflects its
                        commitment to producing knowledgeable and virtuous individuals . Rajasinghe Central College is
                        part of the Seethawaka division and the Homagama zone in the Western province.
                        The school's vision is to produce excellent, dignified, virtuous, and knowledgeable
                        sons and daughters of Mother Rajasinghe.
                    </span>

                    <div class="col-lg-2 offset-lg-5 d-grid mt-5 mb-1 ">
                        <a href="#" class="btn btn-outline-danger fw-bold rounded-pill">Read More...</a>
                    </div>

                </div>


            </div>

        </div>

        <div class="col-lg-10 offset-lg-1 mt-5 counter">
            <div class="col-12">
                <section class="stats row">

                    <div class="col-lg-3 col-sm-6 gap-1 mb-3">
                        <div class="stat-box">
                            <h2 data-target="3000">0</h2>
                            <div class="label">
                                <p class="text">Students</p>
                            </div>
                            <p class="description">Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 gap-1 mb-3">
                        <div class="stat-box">
                            <h2 data-target="2500">0</h2>
                            <div class="label">
                                <p class="text">Teachers</p>
                            </div>
                            <p class="description">Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 gap-1 mb-3">
                        <div class="stat-box">
                            <h2 data-target="1800">0</h2>
                            <div class="label">
                                <p class="text">Graduates</p>
                            </div>
                            <p class="description">Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 gap-1 mb-3">
                        <div class="stat-box">
                            <h2 data-target="1800">0</h2>
                            <div class="label">
                                <p class="text">Graduates</p>
                            </div>
                            <p class="description">Quisque porttitor eros quis leo pulvinar, at hendrerit sapien iaculis.</p>
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


        </div>

        <!-- latest news -->




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
                    Welcome to HRCC — where we nurture minds and shape the future. As principal, I'm proud to lead a community grounded in integrity, creativity, and excellence. 
                    Join us as we build a vibrant environment where every student can shine.
                </p>
                <a href="#" class="btn btn-outline-warning mt-3 rounded-pill px-4">Read More</a>
            </div>
        </div>
    </section>

    
    <div class="container-fluid">

        <div class="col-12 mt-5">
            <!-- <div class="col-12 text-center">
                <h1 class="text-secondary " style="text-shadow: 2px 2px 15px rgba(233, 168, 30, 0.74);">School
                    Navigators</h1>
            </div>
            <div class="row ">

                <div class="col-lg-4 offset-lg-1 col-sm-10 offset-sm-1 text-center shadow-lg p-2 mb-3 mt-3 rounded mycard">
                    <h3 class="text-black-50 ">Our Principal</h3>
                    <img src="images/principle.jpg" class="person-img" alt="">
                    <h2 class="text-black-50 mb-2">Mr. Jagath Surasena</h2>
                    <span>Our respected principal has led our school with dedication and wisdom for 15 years, shaping it
                        into a place of excellence. His commitment to education, discipline,
                        and student growth has inspired countless young minds. With his strong leadership and kindness,
                        he has created a nurturing environment for both students and teachers.
                    </span>

                </div>

                <div class="col-lg-4 offset-lg-2 col-sm-10  offset-sm-1 text-center shadow-lg p-2 mb-3 mt-3 rounded mycard">
                    <h3 class="text-black-50 ">Wise Principal</h3>
                    <img src="images/wiseprinciple.png" class="person-img" alt="">
                    <h2 class="text-black-50 mb-2">Mr.Ananda </h2>
                    <span>Our respected principal has led our school with dedication and wisdom for 2 years, shaping it
                        into a place of excellence. His commitment to education, discipline,
                        and student growth has inspired countless young minds. With his strong leadership and kindness,
                        he has created a nurturing environment for both students and teachers.
                    </span>

                </div>
            </div>

            <div class="col-lg-2 col-sm-12 d-grid offset-lg-5  mt-3 mb-2 ">
                <a href="#" class="btn btn-outline-danger rounded-pill fw-bold">View All</a>
            </div>

        </div> -->





        <!-- school Leader Info -->


        <!-- clubs & societies -->

        <div class="col-lg-12 text-center mt-5 mb-5">
            <h2 class="text-secondary fw-bold ">Clubs & Societies</h2>
            <p class="fs-5 text-black-50">Clubs & Societies that student can develop their knowledge & quality</p>


            <div class="timeline col-12 p-2">


                <div class="timeline-container l-container">
                    <img src="images/hrccbadgeicon.png" class="shadow" />
                    <div class="text-center text-box">
                        <div class="row">
                            <div class="col-lg-4 col-sm-12">
                                <img src="images/cadets.png" alt="">
                            </div>
                            <div class="col-lg-8 col-sm-12">
                                <h2 class="text-secondary p-0">Cadets</h2>
                            </div>
                        </div>
                        <small class="text-light fw-bold fs-5">Since - 1988</small>
                        <p class="text-white "> School Cadet Society is a disciplined and structured organization that
                            instills leadership, teamwork, and a sense of responsibility in students. It provides
                            training in basic military drills, physical fitness, and survival skills while promoting
                            patriotism and community service. </p>
                        <span class="left-container-arrow"></span>
                    </div>
                </div>


                <div class="timeline-container r-container">
                    <img src="images/hrccbadgeicon.png" class="shadow " />
                    <div class="text-center text-box">
                        <h2 class="text-secondary p-0">Scouts </h2>
                        <small class="text-light fw-bold fs-5">Since - 1988</small>
                        <p class="text-white "> School Cadet Society is a disciplined and structured organization that
                            instills leadership, teamwork, and a sense of responsibility in students. It provides
                            training in basic military drills, physical fitness, and survival skills while promoting
                            patriotism and community service. </p>
                        <span class="right-container-arrow"></span>
                    </div>
                </div>

                <div class="timeline-container l-container">
                    <img src="images/hrccbadgeicon.png" class="shadow " />
                    <div class="text-center text-box">
                        <h2 class="text-secondary p-0">Photography</h2>
                        <small class="text-light fw-bold fs-5">Since - 1988</small>
                        <p class="text-white "> School Cadet Society is a disciplined and structured organization that
                            instills leadership, teamwork, and a sense of responsibility in students. It provides
                            training in basic military drills, physical fitness, and survival skills while promoting
                            patriotism and community service. </p>
                        <span class="left-container-arrow"></span>
                    </div>
                </div>

                <div class="timeline-container r-container">
                    <img src="images/hrccbadgeicon.png" class="shadow " />
                    <div class="text-center text-box">
                        <h2 class="text-secondary p-0">Nature </h2>
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
                <a href="#" class="btn btn-secondary rounded-pill text-white fw-bold p-2">View All</a>
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


    </script>

</body>

</html>
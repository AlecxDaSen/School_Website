<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History | HRCC</title>
    <link rel="icon" href="images/hrccbadgeicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        swiper-container {
            width: 100%;
            height: 75vh;
        }

        swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body  style="background-color: #eff2f1;">
    <?php include("header.php");    ?>
    <div class="col-12">

        <section class="position-relative text-white" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('images/history.jpg') center/cover no-repeat; height: 70vh; ">
            <div class="container h-100 d-flex flex-column justify-content-center align-items-start text-start">
                <h1 class="display-4 fw-bold text-warning">School History</h1>
                <p class="lead">Over 50 Years of Excellence in Education and Character Building.</p>
                <a href="#history" class="btn btn-warning px-4 py-2 mt-3 rounded-pill">See Our History !</a>
            </div>

        </section>
    </div>

    <div class="container-fluid">
        <div class="col-10 offset-1 text-start">
            <div class="row mt-4 mb-4">
                <div class="col-8" id="history">

                    <img src="images/botree.jpg" class="shadow" style="height: 400px;width: auto;border-radius: 10px;" alt="">
                </div>
                <div class="col-4">
                    <span class="fs-6 fw-bold">
                        The school was established in 1886 and was initially named Hanwella Bilingual School.
                        It was later renamed Hanwella Madhya Maha Vidyalaya when free education was introduced
                        from primary level to university by Dr. C.W.W. Kannangara.The school motto, "With Faith
                        and Strength," reflects its commitment to producing knowledgeable and virtuous individuals.
                        Rajasinghe Central College is part of the Seethawaka division and the Homagama zone in the
                        Western province. <br>


                    </span>
                </div>
                <div class="col-12 mt-4 mb-3">
                    <span class="fs-6 fw-bold">

                        This college was established as a bilingual school in 1886 in the premises where the present Divisional
                        Education Office is situated on the Kelani river bank. Later, under Dr. C.W\.W. Kannangara's Central College
                        concept, it became the Hanwella Rajasinghe Central College. This was one of the 54 central schools established
                        under the theme of providing educational opportunities to all. The first principal of the school, which had 500
                        students, was Mr. Evan Ediriweera. <br>

                        The president of the Parent Teachers Association (PTA), formed for the development of the school, was Mr. D.P.R.
                        Gunawardhana, the father of Mr. Philip Gunawardhana, who was known as the "Boralugoda Lion." As the land on the
                        river bank was not spacious enough, school buildings were constructed on land known as Lancia Meru Godella, and
                        the school was relocated to that area. This land, comprising 13 acres, was acquired thanks to the great efforts
                        and commitment of the PTA. <br>

                        A sum of Rs. 12,000, collected with much effort by the PTA, was paid to Mrs. Wimala Wijewardhana, and the land
                        was later transferred to the government. The principal Mr. Evan Ediriweera was appointed the president of the
                        PTA, with Mr. D.S. Kasturi Arachchi as the secretary and Mr. D.L. Welikala Appuhamy as the treasurer. <br>

                        The foundation for the new building was laid by Capt. D.S. Gunasekara in 1952, and the two-storied building was
                        officially opened by the then Prime Minister, Hon. Dudley Senanayake, in May 1953. It is well known that Mrs.
                        Kusuma Gunawardhana, the Member of Parliament for Avissawella, made significant contributions to the success
                        of this project.<br>

                        Later, all classes from the 6th standard upwards were shifted to the new building at Lancia Meru Godella from
                        the old premises near the Kelani river bank. As the school continued to develop, Mr. Bogoda Premaratne was
                        appointed principal in 1954. The services of the late Mr. Somaweera Gunasekara, Attorney-at-Law, should also
                        be remembered for their importance.<br>

                        In 1957, with the appointment of Mr. H.R. Perera as principal, the previously inactive PTA was revived with
                        a new set of office bearers. Art teacher Mr. Dhanapala Welikala was appointed secretary, Mr. Welikala Appuhamy
                        became treasurer, and 21 committee members were selected. Through their dedication, another 40x20 building was
                        constructed and handed over to the school. This allowed for the abolishment of two-session classes and the
                        introduction of single-session schooling.<br>

                        The school that began with just 500 students now serves over 2,500 students. There are about 100 teachers
                        guiding students on the right path. Currently, the school offers subjects in Science, Arts, and Commerce
                        streams. The Mechanical and Fine Arts sections, along with the Computer Section and Sports Center, are all
                        functioning successfully and are well respected.<br>

                        Notably, Rajasinghe College is one of only three schools in the Colombo District to be granted a Sports
                        Center. Today, this Central School is considered the heart of Seethawaka City and has been renamed Hanwella
                        Rajasinghe Madya Vidyalaya.<br>
                    </span>
                </div>
            </div>

        </div>

        <!-- all principals -->
        <div class="col-12 text-center bg-light">
            <h2 class="text-secondary fw-semibold mt-3 mb-3"> Principals of our School</h2>
            <p class="text-dark ">All principals that navigate the school to a great path since the birth of our mother home. </p>
            <div class="col-10 offset-1">
                <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="30"
                    slides-per-view="3">
                    <?php for ($i = 0; $i < 6; $i++) {
                    ?>
                        <swiper-slide class="rounded ">
                            <div class="text-center" style="width: 19rem;">
                                <img src="images/principle2.jpg" class="card-img-top" style="height: 280px;">
                                <div class="card-body">
                                    <h4 class="text-dark"> Mr.Jagath Priyashanth Soorasena.</h4>
                                    <p class="card-text"><i class="bi bi-clock"></i>&nbsp; 2010.06.04 <b>From </b> &nbsp;Present</p>
                                </div>
                            </div>

                        </swiper-slide>
                    <?php

                    } ?>

                </swiper-container>
            </div>

        </div>
        <!-- all principals -->

        <div class="col-12 text-start mt-5 mb-5">
            <h2 class="text-dark">Video about our School History</h2>

            <div class="col-10 offset-1 mt-5 mb-5" style="height: 80vh;">
                <iframe width="100%" height="100%" 
                src="https://www.youtube.com/embed/RcsTPizm7eA?si=f1H-UTP3psqYsDJa" 
                title="YouTube video player" frameborder="0" allow="accelerometer; 
                autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; 
                web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

</body>

</html>
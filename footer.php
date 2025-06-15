<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/hrccbadgeicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container-fluid" style="margin-top: 100px;">

        <!-- footer -->
        <div class="row bg-dark">
            <div class="col-12 p-2" style="background-color: #ffb524;"></div>
            <div class="col-12 p-1" style="background-color: #bb2d3b;"></div>

            <div class="col-10 offset-1 mt-3">
                <div class="row">
                    <div class="col-lg-1 text-center">
                        <img src="images/hrccbadge.png" style="height: 80px;width: auto;margin-top: 8px;" >
                    </div>
                    <div class="col-lg-4 col-sm-12 text-lg-start text-center">
                        <span class="fs-4 text-secondary">Rajasinghe Central College</span><br>
                        <p class="text-white ">Paradise of brave students...</p>

                        <div class="">
                            <div class="text-center text-md-start">

                                <h5 class="text-uppercase text-light fw-bold mt-2 mb-2">Follow us on</h5>

                                <ul class="list-unstyled list-inline">

                                    <li class="list-inline-item">
                                        <a href="https://web.facebook.com/hrcc.edu.lk" target="_blank" rel="noopener noreferrer" class="form-floating text-white">
                                            <img src="images/socialmedia/facebook.png" width="35px" height="35px" />
                                        </a>
                                    </li>

                                

                                    <li class="list-inline-item">
                                        <a href="https://www.youtube.com/@RajasingheCentral" target="_blank" rel="noopener noreferrer" class="form-floating text-white">
                                            <img src="images/socialmedia/youtube.png" width="35px" height="35px" />
                                        </a>
                                    </li>

                                    <li class="list-inline-item">
                                        <a href="https://www.instagram.com/hrcc.official/" target="_blank" rel="noopener noreferrer" class="form-floating text-white">
                                            <img src="images/socialmedia/instergram.png" width="35px" height="35px" />
                                        </a>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-lg-5 col-sm-12 ">

                                
                            </div> -->

                    <div class="col-lg-4 offset-lg-3 col-sm-12 offset-sm-0 mb-3">
                        <h5 class="text-light">Feedback</h5>
                        <form>
                            <input type="email" placeholder="Your email" class="form-control mb-2">
                            <textarea placeholder="Your message" class="form-control mb-2"></textarea>
                            <button class="btn btn-danger fw-bold w-100">Submit</button>
                        </form>
                    </div>
                </div>

            </div>

            <hr class="bg-secondary mt-2 mb-2">
            <div class="col-10  offset-1">
                <div class="row mb-3 footerd2">
                    <div class="col-lg-3">
                        <h4 class="text-white mt-4  ">About !</h4>
                        <span class="text-white-50">The paradise of most excellent and proud people are born and step
                            to the Society with high quality abilities. <br> Navigators of past and presant are move our school day by day to the victory.
                        </span>
                    </div>

                    <div class="col-lg-3 ">
                        <h4 class="text-white mt-4  ">Site Info</h4>
                        <a href="gallery.php">Gallery</a><br>
                        <a href="events.php">Events</a><br>
                        <a href="#">Academic</a><br>
                        <a href="clubs.php">Clubs & Socities</a><br>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Donations</a>
                    </div>

                    <div class="col-lg-3">
                        <h4 class="text-white mt-4  ">Account</h4>
                        <a href="#">Profile</a><br>
                        <a href="#">Exam Result Search</a><br>
                        <a href="#">Feedbacks</a><br>
                        <a href="#">Ticket Booking</a><br>
                        <a href="#">Other</a><br>
                    </div>

                    <div class="col-lg-3 ">
                        <h4 class="text-white mt-4  ">Contact</h4>
                        <a href="">Email us : <u>rajians@gmail.com</u></a><br>
                        <a href="">Contacts : +(94) 77 0231 221</a><br>
                        <a href="">Address us : Rajasinghe Central College, Hanwella.</a><br>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-3 col-lg-3 mx-auto text-center text-sm-center fw-bold text-body">
                <p class="ecrint" onclick="ecrintWeb()">&copy; ECRINT 2025 | All Rights Reserved</p>
            </div>

            <div class="p-1" style="background-color: #bb2d3b;"></div>
        </div>


        <?php include("donation.php"); ?>
        <!-- footer -->
         
    </div>

    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/hrccbadgeicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Admin Sign In | HRCC</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/adminSingIn.css" />

    <!-- Toastify CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- Toastify JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="images/adminImg.png"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form>
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead mb-0 fw-bold me-3 text-primary">Hanwella Rajasinghe Central Collage</p>
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Admin Sign In</p>
                        </div>
                        <?php

                        $email = "";
                        $password = "";

                        if (isset($_COOKIE["email"])) {
                            $email = $_COOKIE["email"];
                        }
                        if (isset($_COOKIE["password"])) {
                            $password = $_COOKIE["password"];
                        }


                        ?>
                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="email" id="email" class="form-control form-control-lg" value="<?php echo ($email) ?>"
                                placeholder="Enter a valid email address" />
                            <label class="form-label" for="email">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-3">
                            <input type="password" id="password" class="form-control form-control-lg" value="<?php echo ($password) ?>"
                                placeholder="Enter password" />
                            <label class="form-label" for="password">Password</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="check" />
                                <label class="form-check-label" for="check">
                                    Remember me
                                </label>
                            </div>
                            <a href="#" class="text-body" onclick="sendAdminMailCode();" >Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;" onclick="adminLogin();">Login</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>



        <!-- Modal -->
        <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-success" id="exampleModalLabel">Forgot Password Reset </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="newPw" placeholder="name@example.com">
                            <label for="newPw"><i class="bi bi-shield-lock-fill"></i> New Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="otp" placeholder="name@example.com">
                            <label for="otp"><i class="bi bi-key-fill"></i> Verification Code</label>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger rounded-pill text-white" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary w-25 rounded-pill text-white" onclick="updateAdminPassword()">Update</button>
                    </div>
                </div>
            </div>
        </div>


        <div
            class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <!-- Copyright -->
            <div class="text-white">
                Copyright &copy; ECRINT 2025 | All Rights Reserved
            </div>
            <!-- Copyright -->
        </div>
    </section>

    <script src="js/script.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
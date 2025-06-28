<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajasinghe Central college</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/hrccbadgeicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
    <!-- Toastify CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- Toastify JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

</head>

<body>

    <style>
        /* Glass form and donate button (reuse from main style.css) */
        .glass-form {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .donation-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px);
            border-radius: 20px;
            overflow: hidden;
            width: 100%;
        }

        .donate-btn {
            background: linear-gradient(45deg, rgb(77, 255, 124), rgb(209, 255, 139));
            color: white;
            font-weight: bold;
            padding: 12px;
            border-radius: 12px;
            border: none;
            transition: all 0.3s ease;
        }

        .donate-btn:hover {
            background: linear-gradient(45deg, rgb(77, 255, 124), rgb(209, 255, 139));
            transform: scale(1.05);
        }
    </style>


    <!-- Payment Modal -->
    <div class=" modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content bg-transparent border-0">
                <div class="row donation-card mx-0 shadow-lg">
                    <div class="col-md-12 glass-form p-4">
                        <h3 class="text-center mb-3 text-white">Make a Donation </h3>

                        <form id="donationForm">
                            <div class="col-12 mt-1 mb-2">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="firstName" placeholder="Sahan">
                                            <label for="firstName"><i class="bi bi-pen"></i> First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="lastName" placeholder="Kumara">
                                            <label for="lastName"><i class="bi bi-pen"></i> Last Name</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                                    <label for="email"><i class="bi bi-envelope-at-fill"></i> Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="tel" class="form-control" id="mobile" placeholder="0** *** ****">
                                    <label for="mobile"><i class="bi bi-phone"></i> Mobile</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" oninput="this.value = Math.abs(this.value)" class="form-control" id="amount" placeholder="0** *** ****">
                                    <label for="amount"><i class="bi bi-dollar"></i> Amount</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="message"></textarea>
                                    <label for="message"> <i class="bi bi-chat-left-text-fill"></i> Message</label>
                                </div>

                            </div>

                        </form>

                        <button type="button" class="btn btn-success text-white w-100 rounded-pill" id="payhere-payment" onclick="payNow();">Pay Now</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/donations.js"></script>
    <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>

</body>

</html>
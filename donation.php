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
    background: linear-gradient(45deg,rgb(77, 255, 124),rgb(209, 255, 139));
    color: white;
    font-weight: bold;
    padding: 12px;
    border-radius: 12px;
    border: none;
    transition: all 0.3s ease;
    }

    .donate-btn:hover {
    background: linear-gradient(45deg,rgb(77, 255, 124),rgb(209, 255, 139));
    transform: scale(1.05);
    }

    </style>


    <!-- Payment Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent border-0">
        <div class="row donation-card mx-0 shadow-lg">
            <div class="col-md-12 glass-form p-4">
            <h3 class="text-center mb-3 text-white">Make a Donation</h3>
            <form id="donationFormModal">
                <div class="mb-3">
                <input type="text" class="form-control" placeholder="Full Name" id="name" />
                </div>
                <div class="mb-3">
                <input type="email" class="form-control" placeholder="Email Address" id="email" />
                </div>
                <div class="mb-3">
                <!-- <select class="form-select" required>
                    <option disabled selected>Select Donation Purpose</option>
                    <option>School Supplies</option>
                    <option>Student Scholarships</option>
                    <option>Library Upgrade</option>
                    <option>Sports Equipment</option>
                </select> -->
                </div>
                <div class="mb-3">
                <input type="number" class="form-control" placeholder="Amount (LKR)" id="amount" />
                </div>
                <div class="mb-3">
                <textarea class="form-control" rows="3" placeholder="Leave a message" id="msg"></textarea>
                </div>
                <button type="button" id="payhere-payment" class="btn donate-btn w-100" onclick="payNow();">Donate Now</button>
                
                <!-- <button type="submit" id="payhere-payment" >PayHere Pay</button> -->
                
            </form>
            </div>
        </div>
        </div>
    </div>
    </div>
    
    <script src="js/donations.js"></script>
    <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>

</body>

</html>
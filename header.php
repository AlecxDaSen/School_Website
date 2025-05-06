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
</head>

<body>


    <!-- navigator -->

    <div class="navbar">
        <div class="logo">

            <img src="images/hrccbadge.png" alt="Hrcc Badge">
            <h5 class="mainTitle">Rajasinghe Central College</h5>
        </div>

        <div class="nav-links ">
            <a href="index.php" class="nav-hide">Home</a>
<<<<<<< HEAD
            <a href="gallery.php" class="nav-hide">Gallery</a>
            <a href="#" class="nav-hide">Events</a>
            <a href="academic.php" class="nav-hide">Academic</a>
            <a href="clubs.php" class="nav-hide">Clubs & Societies</a>
            <a href="#" class="nav-hide">Others</a>
            <a href="#" class="nav-hide">About Us</a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="menu-toggle" onclick="openSidebar();">
            <i class="bi bi-list"></i>
=======
            <a href="gallery.php"class="nav-hide">Gallery</a>
                <a href="events.php"class="nav-hide">Events</a>
                <a href="#"class="nav-hide">Academic</a>
                <a href="clubs.php"class="nav-hide">Clubs & Societies</a>
                <a href="#"class="nav-hide">Others</a>
                <a href="#"class="nav-hide">About Us</a>
            </div>
        
            <!-- Mobile Menu Button -->
            <div class="menu-toggle" onclick="openSidebar();">
                <i class="bi bi-list"></i>
            </div>
        </div>
        
        <!-- Sidebar (Mobile Navigation) -->
        <div class="sidebar" id="sidebar">
            <span class="close-btn" onclick="closeSidebar();">&times;</span>
            <a href="index.php">Home</a>
            <a href="gallery.php">Gallery</a>
            <a href="events.php">Events</a>
            <a href="#">Academic</a>
            <a href="clubs.php">Clubs & Societies</a>
            <a href="#">Others</a>
            <a href="#">About Us</a>
>>>>>>> f83688fec7d2e478d3452a8d5a9929683536f848
        </div>
    </div>

    <!-- Sidebar (Mobile Navigation) -->
    <div class="sidebar" id="sidebar">
        <span class="close-btn" onclick="closeSidebar();">&times;</span>
        <a href="index.php">Home</a>
        <a href="gallery.php">Gallery</a>
        <a href="#">Events</a>
        <a href="academic.php">Academic</a>
        <a href="clubs.php">Clubs & Societies</a>
        <a href="#">Others</a>
        <a href="#">About Us</a>
    </div>

    <div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar();"></div>


    <!-- navigator -->

    <script>
        //navbar hide on scroll codes

        {

            const navbar = document.querySelector(".navbar");
            let lastScroll = window.scrollY;

            window.addEventListener("scroll", () => {
                if (lastScroll < window.scrollY) {
                    // console.log("we are going down");
                    navbar.classList.add("navbar_hide");
                    
                } else {
                    // console.log("we are going up");
                    navbar.classList.remove("navbar_hide");

                }

                lastScroll = window.scrollY;

            });

        }



        //nav bar hide on scroll codes
    </script>

</body>

</html>
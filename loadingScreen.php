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

    <div id="page-loader">
        <img src="images/hrccbadge.png" alt="Company Logo" id="loader-logo">
        <div id="lottie-logo"></div>
    </div>



    <script>
            document.addEventListener("DOMContentLoaded", function() {
            const timelineContainers = document.querySelectorAll(".timeline-container");

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("show");
                    }
                });
            }, {
                threshold: 0.4
            }); // Trigger when 40% is visible

            timelineContainers.forEach(container => observer.observe(container));
        });
    </script>

    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>
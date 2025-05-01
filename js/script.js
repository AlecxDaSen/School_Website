

// slide_!

var swiper = new Swiper(".swiper", {

    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    initialSlide: 4,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    loop: true,
    speed: 600,
    preventclicks: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 0,
        stretch: 80,
        depth: 350,
        modifier: 1,
        slideShadows: true,
    },
    on:{
        click(event){
            swiper.slideTo(event.clickedIndex);

        },
    },
    pagination: {
        el: ".swiper-pagination",
    },
    


});

// Wait for the entire page to load
window.addEventListener('load', () => {
    // Select the loader
    const loader = document.getElementById('page-loader');
    
    // Ensure the loader exists in the DOM
    if (loader) {
        // Fade out the loader
        loader.style.opacity = '0';
        
        // Wait for the fade-out animation to complete before hiding
        setTimeout(() => {
            loader.style.display = 'none';
        }, 500); // Match this duration to the CSS transition time
    } else {
        console.error('Loader element not found.');
    }

    // Initialize the Lottie animation
    const lottieLogo = document.getElementById('lottie-logo');
    if (lottieLogo) {
        lottie.loadAnimation({
            container: lottieLogo, // Container for the animation
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: 'path-to-lottie-file.json', // Replace with the actual path to your Lottie JSON
        });
    } else {
        console.error('Lottie logo container not found.');
    }
});





  // Open Sidebar and hide nav links on mobile
  function openSidebar() {
      document.getElementById("sidebar").classList.add("open");
      document.querySelector(".nav-links").classList.add("hide-nav-links");
  }

  // Close Sidebar and show nav links again
  function closeSidebar() {
      document.getElementById("sidebar").classList.remove("open");
      document.querySelector(".nav-links").classList.remove("hide-nav-links");
  }

  // Toggle nav links visibility when hamburger is clicked
  document.querySelector(".menu-toggle").addEventListener("click", function() {
      document.querySelector(".nav-links").classList.add("hide-nav-links");
  });
  

// gallery page codes

$('#toggle').click(function() {
    $(this).toggleClass('active');
    $('#overlay').toggleClass('open');
   });

// gallery page codes
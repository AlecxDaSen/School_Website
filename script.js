// side_bar

function showSideBar() {

    var sidebar = document.querySelector('.sidebar');
    sidebar.style.display = 'flex';

    var show = document.getElementById('show');
    show.style.display = 'none';
}

function closeSideBar() {

    var sidebar = document.querySelector('.sidebar');
    sidebar.style.display = 'none';

    var show = document.getElementById('show');
    show.style.display = 'flex';
}
// side_bar

// slide_!

var swiper = new Swiper(".swiper", {

    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    initialSlide: 2,
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

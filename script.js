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

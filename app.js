var swiper = new Swiper(".swiper", {

    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    initialSlide: 2,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    mousewheel: {
        invert:true,
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

particlesJS("particles-js", {
    "particles": {
      "number": {
        "value": 160,
        "density": {
          "enable": true,
          "value_area": 800
        }
      },
      "color": {
        "value": ["#ffffff","#192bce" , "08a86b"],
      },
      "shape": {
        "type": "circle",
        "stroke": {
          "width": 0,
          "color": "#000000"
        },
        "polygon": {
          "nb_sides": 5
        },
        "image": {
          "src": "img/github.svg",
          "width": 100,
          "height": 100
        }
      },
      "opacity": {
        "value": 0.6,
        "random": false,
        "anim": {
          "enable": false,
          "speed": 1,
          "opacity_min": 0.1,
          "sync": false
        }
      },
      "size": {
        "value": 5,
        "random": true,
        "anim": {
          "enable": false,
          "speed": 4,
          "size_min": 0.1,
          "sync": false
        }
      },
      "line_linked": {
        "enable": false,
       
      },
      "move": {
        "enable": true,
        "speed": 1,
        "direction": "none",
        "random": true,
        "straight": false,
        "out_mode": "none",
        "bounce": false,
        "attract": {
          "enable": false,
          "rotateX": 600,
          "rotateY": 1200
        }
      }
    },


    "retina_detect": true
  });
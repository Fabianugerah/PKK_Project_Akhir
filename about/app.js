var swiper = new Swiper(".swiper", {
    grabCursor: true,
    initialSlide: 4,
    centeredSlides: true,
    slidesPerView: "auto",
    spaceBetween: 10,
    speed: 1000,
    freeMode: false,
    mousewheel: {
      thresholdDelta: 30,
    },
    pagination: {
      el: ".swiper-pagination",
    },
    on: {
      click(event) {
        swiper.slideTo(this.clickedIndex);
      },
    },
  });

  
  particlesJS("particles-js", {
    particles: {
      number: {
        value: 180,
        density: {
          enable: true,
          value_area: 800,
        },
      },
      color: {
        value: "#fff",
      },
      shape: {
        type: "circle",
      },
      opacity: {
        value: 0.3,
        random: false,
        anim: {
          enable: false,
          speed: 4,
          opacity_min: 0.1,
          sync: false,
        },
      },
      size: {
        value: 4,
        random: true,
        anim: {
          enable: true,
          speed: 2,
          size_min: 0.1,
          sync: false,
        },
      },
      line_linked: {
        enable: false,
      },
      move: {
        enable: true,
        speed: 0.4,
        direction: "right",
        random: true,
        straight: false,
        out_mode: "none",
        bounce: false,
        attract: {
          enable: false,
          rotateX: 600,
          rotateY: 1200,
        },
      },
    },
    retina_detect: true,
  });
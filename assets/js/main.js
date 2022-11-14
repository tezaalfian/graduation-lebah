(function () {
  "use strict";
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  new Swiper('.ucapan-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

  const x = document.getElementById("myAudio");
  const btn = document.getElementById("btn-play");
  btn.addEventListener("click", function () {
    const play = btn.dataset.play;
    if (play == 0) {
      x.play();
      btn.dataset.play = 1;
      btn.innerHTML = `<i class='bx bx-volume-full'></i>`;
    }
    if (play == 1) {
      x.pause();
      btn.dataset.play = 0;
      btn.innerHTML = `<i class='bx bx-volume-mute'></i>`;
    }
  });
})()
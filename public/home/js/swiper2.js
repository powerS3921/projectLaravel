var przerwa = 0;
var swiper2 = new Swiper("div.swiper", {
    
    slidesPerView: 1,
    przerwa: 0,
    loop: true,
         autoplay: {
           delay: 3500,
         },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  
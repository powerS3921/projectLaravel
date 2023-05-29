var swiper1 = new Swiper("section.mySwiper", {
  spaceBetween: 20,
  loop: true,
  autoplay: {
    delay: 2500,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    0: {
        slidesPerView: .52,
  }, 389: {
    slidesPerView: 0.68,
  }, 640:{
    slidesPerView: 1
  },
  1025:{
    slidesPerView: 2
  },1351:{
    slidesPerView: 3
  }, 1800:{
    slidesPerView:4
  }
  
}});


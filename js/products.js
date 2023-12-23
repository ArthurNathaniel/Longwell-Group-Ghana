
 var swiper = new Swiper(".mySwiper2", {
   slidesPerView: 1,
   spaceBetween: 10,
   loop: true,
   autoplay: {
     delay: 5500,
     disableOnInteraction: false,
   },
   pagination: {
     el: ".swiper-pagination",
     clickable: true,
   },
   breakpoints: {
     640: {
       slidesPerView: 1,
       spaceBetween: 20,
     },
     1010: {
       slidesPerView: 2,
       spaceBetween: 20,
     },
     1054: {
       slidesPerView: 3,
       spaceBetween: 20,
     },
   },
 });
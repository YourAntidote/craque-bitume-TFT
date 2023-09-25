/* ----------------- SECTION NAV -------------------------------- */


/* ----------------- SECTION PAGE ACCUEIL ----------------------- */

const swiper = new Swiper(".swiper-screenshots", {
  direction: "horizontal",
  loop: true,
  centeredSlides: true,
  

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  grabCursor: true,
  slidesPerView: 1,
  spaceBetween: 25,
  watchSlidesVisibility: true,
  
  breakpoints: {
    1200: {
      slidesPerView: 3,
    },
  },

  

});

/* ----------------- SECTION PAGE NOUVELLE ---------------------- */

/* ----------------- SECTION PAGE SERVICE ----------------------- */

/* ----------------- SECTION PAGE EQUIPE ------------------------ */

/* ----------------- SECTION PAGE HISTOIRE ---------------------- */

/* ----------------- SECTION PAGE PROPOS ------------------------ */

/* ----------------- SECTION PAGE 404 --------------------------- */
let btn_return = document.getElementById("return-btn");
btn_return.addEventListener("click", function () {
  window.location.href = "index.html";
});

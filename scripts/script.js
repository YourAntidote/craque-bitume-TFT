/* ----------------- SECTION BANNER X -------------------------------- */
document.querySelector(".banner__close").addEventListener("click", function() {
  this.closest(".banner").style.display = "none";
});

/* ----------------- SECTION NAV -------------------------------- */

/* ----------------- SECTION PAGE ACCUEIL ----------------------- */

document.addEventListener("DOMContentLoaded", function () {
  const swiper = new Swiper(".swiper-container", {
    direction: "horizontal",
    loop: true,
    centeredSlides: true,

    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    grabCursor: true,
    slidesPerView: 1,
    spaceBetween: 25,
    watchSlidesVisibility: true,
    
  });
});

/* ----------------- SECTION PAGE NOUVELLE ---------------------- */

/* ----------------- SECTION PAGE SERVICE ----------------------- */

/* ----------------- SECTION PAGE EQUIPE ------------------------ */

/* ----------------- SECTION PAGE HISTOIRE ---------------------- */

/* ----------------- SECTION PAGE PROPOS ------------------------ */

/* ----------------- SECTION PAGE 404 --------------------------- */


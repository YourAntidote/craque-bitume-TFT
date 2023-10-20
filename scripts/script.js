/* ----------------- SECTION BANNER X -------------------------------- */
const isbanner = document.querySelector(".banner");

localStorage.setItem("isbanner");

document.querySelector(".banner__close").addEventListener("click", function() {
  this.closest(".banner").style.display = "none";
 /* localStorage.clear("isbanner");*/
});


/*if (localStorage.clear("isbanner") == true)  {
  delete("isbanner");
} Je ne suis pas sure de ce code. Je ne suis pas sure que ca peut faire en sorte que le banner X sera enlever toujours dans la meme session utilisateur*/



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
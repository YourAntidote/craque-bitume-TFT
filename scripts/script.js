/* ----------------- SECTION BANNER X -------------------------------- */
const isbanner = document.querySelector(".banner");

/*localStorage.setItem("isbanner");*/

let isbannerdata = sessionStorage.getItem("isbanner");



document.querySelector(".banner__close").addEventListener("click", function() {
  this.closest(".banner").style.display = "none";
 /*localStorage.removeItem("isbanner");*/
  sessionStorage.removeItem("isbanner");
  console.log("etape1 clear");
});

if (sessionStorage.removeItem("isbanner") == true)  {
  delete isbanner;
  /*delete isbannerdata;*/
  console.log("etape2 clear");
}



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

document.addEventListener("DOMContentLoaded", function() {
  var voirPlusButton = document.getElementById("voirPlusButton");
  var elementsAReveler = document.querySelectorAll(".nouvelle__carte.none");
  var x = 0;

  voirPlusButton.addEventListener("click", function() {
    for (var i = 0; i < 3; i++) {
      if (x < elementsAReveler.length) {
        elementsAReveler[x].classList.remove("none");
        x++;
      }
    }

    if (x >= elementsAReveler.length) {
      voirPlusButton.innerHTML = "Fin de la liste";
      voirPlusButton.classList.add("disabled");
      voirPlusButton.disabled = true; // Optionnel : désactiver le bouton après la fin de la liste
    }
  });
});
/* ----------------- SECTION PAGE SERVICE ----------------------- */

/* ----------------- SECTION PAGE EQUIPE ------------------------ */

/* ----------------- SECTION PAGE HISTOIRE ---------------------- */

/* ----------------- SECTION PAGE PROPOS ------------------------ */

/* ----------------- SECTION PAGE 404 --------------------------- */


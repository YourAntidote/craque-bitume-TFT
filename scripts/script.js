/* ----------------- SECTION BANNER X -------------------------------- */
const banner = document.querySelector(".banner");
const xCloseBtn = document.querySelector(".banner__close");

let bannerIsActive = localStorage.getItem("banner");

xCloseBtn.addEventListener('click', function (){
  banner.classList.add("none");
  localStorage.setItem("banner", false)
})

function loadLocalStorage (){

  console.log("Bonjour! Ça va?")

  if (bannerIsActive == 'false') {

    console.log("Banner is closed");
    banner.classList.add("none");

  } else if (bannerIsActive == 'null'){

    console.log("Banner was null, now's on");
    localStorage.setItem("banner", 'true');
    bannerIsActive = loadLocalStorage.getItem("banner");

  } else {

    console.log("Banner was maybe null, now's on");
    localStorage.setItem("banner", 'true');
    bannerIsActive = loadLocalStorage.getItem("banner");

  }
}







loadLocalStorage();
/* ----------------- SECTION NAV -------------------------------- */

const nav_hamburger = gsap.timeline({
	defaults: {
		ease: "expo.inOut",
		stagger: 0.12,
		duration: 3,
	},
	repeat: -1,
})

nav_hamburger.to("span.navbar-toggler-icon", { rotateY: 360 }, 0)
nav_hamburger.from(".span.navbar-toggler-icon", {filter: "contrast(100%)" }, 0)




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


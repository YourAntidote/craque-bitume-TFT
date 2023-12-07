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


  }
}




loadLocalStorage();


/* ----------------- SECTION NAV -------------------------------- */
let hamburger = document.querySelector(".navbar-toggler.menu");

let animation = gsap.to(".navbar-toggler.menu", {
  paused: true,
  duration:1,
  borderRadius:"70% 70%", 
  scale:1.1,
  rotation: 360,
  color:"#F5EDD8",
});

hamburger.addEventListener("mouseenter", () => animation.play());
hamburger.addEventListener("mouseleave", () => animation.reverse());



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

const tl = gsap.timeline({
	defaults: {
		ease: "expo.inOut",
		stagger: 0.12,
		duration: 3,
	},
	repeat: -1,
})

tl.to(".donation__h2", { rotateY: 360 }, 0)
tl.from(".donation__h2 .donation__h2__text_front", {filter: "contrast(100%)" }, 0)

/* ----------------- SECTION PAGE HISTOIRE ---------------------- */

gsap.registerPlugin(ScrollTrigger);

const timeline = gsap.timeline({
    scrollTrigger: {
        trigger: ".timeline",
        start: "top center",
        end: "bottom center",
        scrub: true,
    },
});

const events = document.querySelectorAll(".event");

events.forEach((event, index) => {
    timeline.to(event, {
        opacity:1,
        duration: 0.1,
        scrollTrigger: {
            trigger: event,
            start: "top center",
            end: "center center",
            scrub: true,
        },
    });
});

gsap.to(".line", {
    height: "50vh",
    scrollTrigger: {
        trigger: ".events",
        start: "top center", 
        end: "bottom center", 
        scrub: true,   
    },
});

/* ----------------- SECTION PAGE NOUVELLE ---------------------- */

document.addEventListener("DOMContentLoaded", function() {
  var voirPlusButton = document.getElementById("voirPlusButton");
  var elementsAReveler = document.querySelectorAll(".nouvelle__carte.none");
  var x = 0;

  voirPlusButton.addEventListener("click", function(){
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


/* ----------------- SECTION PAGE PROPOS ------------------------ */

/* ----------------- SECTION PAGE 404 --------------------------- */

gsap.timeline({})
    .to('#feuilleun', { y: '30vh',  ease: "bounce.out",duration:4})
    .to('#feuilledeux', { y: '30vh',  ease: "bounce.out",duration:2 },'-=0.5')
    .to('#feeuilletrois', { y: '30vh',  ease: "bounce.out",duration:2},'-=0.5')
    .to('#feuilleequatre', { y: '20vh',  ease: "bounce.out",duration:2 }, '-=0.5')
    .to('#feuillecinq', { y: '30vh',  ease: "bounce.out",duration:2},'-=0.5')
    .to('#feuillesix', { y: '40vh',  ease: "bounce.out",duration:2 }, '-=0.5')
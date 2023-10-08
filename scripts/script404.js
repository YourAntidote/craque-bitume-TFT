let fleche = gsap.timeline({paused:true})
    .from('.fleche.jaune', { y: '100vh',  ease: "slow(1.5, 1.5, false)"})
    .from('.fleche.vert', { y: '100vh',  ease: "slow(1.5, 1.5, false)" })
    .from('.fleche.rouge', { y: '100vh',  ease: "slow(1.5, 1.5, false)" })
;

document.addEventListener("DOMContentLoaded", () => fleche.play(0));
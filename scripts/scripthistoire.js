gsap.registerPlugin(ScrollTrigger);

const timeline = gsap.timeline();

timeline.to(".line", {
    opacity: 1,
    duration: 1,
    scrollTrigger: {
        trigger: ".timeline",
        start: "top center",
        end: "center center",
        scrub: true,
    },
});

const events = document.querySelectorAll(".event");

events.forEach((event, index) => {
    timeline.to(event, {
        opacity: 1,
        duration: 1,
        scrollTrigger: {
            trigger: event,
            start: "top 50%", // Ajustez au besoin
            end: "center 50%", // Ajustez au besoin
            scrub: 1,
        },
    });
});







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













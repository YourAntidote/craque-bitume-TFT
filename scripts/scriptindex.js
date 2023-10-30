
const tl = gsap.timeline({
	defaults: {
		ease: "expo.inOut",
		stagger: 0.12,
		duration: 2,
	},
	repeat: -1,
})

tl.to(".donation__h2", { rotateY: 360 }, 0)
tl.from(".donation__h2 .donation__h2__text_front", {filter: "contrast(100%)" }, 0)


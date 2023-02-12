import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger)

const cards = gsap.utils.toArray('.product-card')
if (cards.length) {
    gsap.to(".product-card", {
        scrollTrigger: {
            trigger: ".category-list-component",
            markers: false,
            scrub: 1,
            start: "top 150",
            end: () => "+=" + (document.querySelector('.category-list-component') as HTMLElement).offsetWidth,
            pin: true,
            toggleActions: "play pause reverse pause",
            snap: 1 / (cards.length - 1)
        },
        ease: "power1.out",
        xPercent: -100 * (cards.length  )
    });
}



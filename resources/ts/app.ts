import './bootstrap';
import "vanilla-headless"
import "./components/ContactForm"
import "./components/ImageSwap"
import "./components/ToggleShow"
import "./components/SideScroll"

// import "./gsap"
// import "./flare.js"


/**
 * Clear out errors and success message notifications
 */
const messages = document.querySelectorAll('.session-state')
messages.forEach( (mess) => {
    setTimeout(() => {
        (mess as HTMLElement).style.display = 'none'
    }, 3000)
})


const variantsTriggers = document.querySelectorAll('[data-variant-trigger]')

variantsTriggers.forEach(trigger => trigger.addEventListener('mouseover', function () {
    const target = document.querySelector(`[data-variant-target=${(trigger as HTMLElement).dataset.variantTrigger}]`)
    target.classList.add('bg-gray-100')
}))

variantsTriggers.forEach(trigger => trigger.addEventListener('mouseleave', function () {
    const target = document.querySelector(`[data-variant-target=${(trigger as HTMLElement).dataset.variantTrigger}]`)
    target.classList.remove('bg-gray-100')
}))



import Drag from '@mystroken/drag';

// Elements to listen/move.
const slidable = document.querySelector('.product-card');
const container = document.querySelector('.category-list-component');

// Where to store the drag position.
let currentX = 0;
let currentY = 0;

// Initialize the library.
const options = {
  listener: container,
  multiplier: 2
};
const drag = new Drag(options);

// Store the cursor position on move.
drag.on(event => {
  currentX = event.X;
  currentY = event.Y;
});

// Use the cursor position to slide the slidable element.
requestAnimationFrame(move);
function move() {
  slidable.style.transform = `translate3d(${currentX}px, ${currentY}px, 0px)`;
  requestAnimationFrame(move);
}

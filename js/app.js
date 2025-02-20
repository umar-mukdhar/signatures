// hamburger

function menuClose() {
  document.getElementById("hamburger").classList.toggle("active");
  document.getElementById("header-menu").classList.toggle("active");
}

const footer = document.querySelector(".footer");
const mask = document.querySelector(".footer .mask");
const maskInner = document.querySelector(".mask-inner");
let isHelloClicked = false;
let isExpanding = false;
let animationFrame;
let isFirstHover = true; // Track if this is the first time the mouse enters the footer

// Function to move mask-inner smoothly
function moveMask(x, y) {
  maskInner.style.transform = `translate(${x}px, ${y}px)`;
  maskInner.style.transition =
    "opacity 0.3s ease, transform 0.4s ease-out, width 0.4s ease-out, border-radius 0.4s ease-out";
  maskInner.style.top = "0";
  maskInner.style.left = "0";
  maskInner.style.opacity = "1";
}

// Function to expand mask from "Say Hello" to full screen
function expandMask() {
  if (isExpanding) return;
  isExpanding = true;
  // const transformValue = maskInner.style.transform;
  // console.log(transformValue)
  maskInner.style.transition =
    "opacity 0.3s ease, transform 0.6s ease-in-out, width 0.6s ease-in-out, left 0.6s ease-in-out, top 0.6s ease-in-out";
  maskInner.style.cursor = "pointer";
  maskInner.style.opacity = "0";
  maskInner.style.width = "10000px";
  maskInner.style.top = "-5000px";
  maskInner.style.left = "-5000px";
}

// Function to reset mask to initial size
function resetMask() {
  isExpanding = false;
  // const transformValue = maskInner.style.transform;
  maskInner.style.transition =
    "opacity 0.4s ease, transform 0.8s ease-out, width 0.8s ease-out, left 0.8s ease-in-out, top 0.8s ease-in-out";
  maskInner.style.fontSize = "36px";
  maskInner.style.width = "180px";
  maskInner.style.display = "flex";
  maskInner.style.opacity = "1";
  maskInner.style.top = "0px";
  maskInner.style.left = "0px";
}

// Set initial position of the mask to match "Say Hello"
function setInitialPosition() {
  const rect = maskInner.getBoundingClientRect();
  maskInner.style.transform = `translate(0, 0) scale(1)`;
}

// Ensure mask is positioned correctly when page loads
window.addEventListener("load", setInitialPosition);

// Mouse move event inside footer
footer.addEventListener("mousemove", (event) => {
  if (isExpanding) return;

  const rect = footer.getBoundingClientRect();
  const x = event.clientX - rect.left - maskInner.offsetWidth / 2;
  const y = event.clientY - rect.top - maskInner.offsetHeight / 2;

  if (isFirstHover) {
    // On the first hover, prevent sudden jumping by locking the mask in place
    setInitialPosition();
    isFirstHover = false;
    return;
  }

  cancelAnimationFrame(animationFrame);
  animationFrame = requestAnimationFrame(() => moveMask(x, y));

  maskInner.style.display = "flex";
});

// load the footer animation on load 

window.onload= function(){
  removeExistingCanvases();
  viewonwhenclickedsayhello();
}

// Mouse leave event to reset mask position
// footer.addEventListener("mouseleave", () => {
//   cancelAnimationFrame(animationFrame);
//   resetMask();
//   setTimeout(() => {
//     footer.classList.remove("expanded");
//     mask.classList.remove("hidden");
//   }, 500);
// });

// Click event to expand mask
mask.addEventListener("click", function () {
  if (!footer.classList.contains("expanded")) {
    footer.classList.add("expanded");
    expandMask();
    setTimeout(() => {
      //   if (!isHelloClicked) {
      removeExistingCanvases();
      viewonwhenclickedsayhello();
      // isHelloClicked = true;
      //   }
    }, 600);
  } else {
    footer.classList.remove("expanded");
    resetMask();
  }
});

// Function to remove all canvas elements inside the container
// Function to remove all existing elements and event listeners
function removeExistingCanvases() {
  var container = document.getElementById("container-social");

  // Remove all canvas elements inside the container
  var existingCanvases = container.querySelectorAll("canvas");
  existingCanvases.forEach(function (canvas) {
    container.removeChild(canvas);
  });

  // Remove all event listeners to prevent duplication
  container.replaceWith(container.cloneNode(true)); // This removes all event listeners

  // Clear previous Matter.js world if exists
  if (window.solver) {
    Matter.World.clear(window.solver.world, true); // Remove all bodies
    Matter.Engine.clear(window.solver); // Clear the engine
    window.solver = null; // Reset the reference
  }
}

// function removeExistingCanvases() {
//     var container = document.getElementById("container-social");
  
//     // Check if a canvas exists
//     var existingCanvas = container.querySelector("canvas");
  
//     if (existingCanvas) {
//       // Get the context and clear the canvas
//       var ctx = existingCanvas.getContext("2d");
//       ctx.clearRect(0, 0, existingCanvas.width, existingCanvas.height);
  
//       // Reset Matter.js world (assuming `solver` is defined globally)
//       if (typeof solver !== "undefined") {
//         Matter.World.clear(solver.world);
//         Matter.Engine.clear(solver);
//       }
  
//       // Remove existing entities (logos)
//       entities = [];
  
//       // Re-trigger the function to re-add elements
//       var existingCanvases = container.querySelectorAll("canvas");
//   existingCanvases.forEach(function (canvas) {
//     container.removeChild(canvas);
//   });
//     }
//   }
  

let SocialAnimations = false; // Declare outside to persist state

document.addEventListener("scroll", () => {
  const section = footer;
  const sectionTop = section.getBoundingClientRect().top;
  if (window.innerWidth <= 1024) {
    console.log(sectionTop);
    if (sectionTop < 100 && !SocialAnimations) {
      removeExistingCanvases();
      viewonwhenclickedsayhello();
      SocialAnimations = true; // Ensure it runs only once
    }
  } else if (window.innerWidth <= 900) {
    if (sectionTop <= 0 && !SocialAnimations) {
      removeExistingCanvases();
      viewonwhenclickedsayhello();
      SocialAnimations = true; // Ensure it runs only once
    }
  }
});

// light and dark mode css switch

document.addEventListener("DOMContentLoaded", () => {
  if (!localStorage.getItem("theme")) {
    localStorage.setItem("theme", "dark");
  }

  // Check if a theme is stored in localStorage, otherwise default to dark mode
  let isDarkTheme = localStorage.getItem("theme") === "dark";

  const themeToggle = document.getElementById("themeToggle");
  const themeSwitch = document.getElementById("themeSwitch");

  // Apply theme based on localStorage or default to dark
  if (isDarkTheme) {
    themeSwitch.setAttribute("href", "css/color-switch1.css");
    themeToggle.classList.remove("active");
  } else {
    themeSwitch.setAttribute("href", "css/color-switch2.css");
    themeToggle.classList.add("active");
    // document.documentElement.classList.add('light-mode'); // Set dark mode initially
  }

  // Toggle theme on click
  themeToggle.addEventListener("click", () => {
    
    isDarkTheme = !isDarkTheme;

    const theme = isDarkTheme
      ? "css/color-switch1.css"
      : "css/color-switch2.css";

    themeSwitch.setAttribute("href", theme);
    themeToggle.classList.toggle("active"); // Toggle class

    document.documentElement.classList.toggle("light-mode");
    // Store the theme preference in localStorage
    localStorage.setItem("theme", isDarkTheme ? "dark" : "light");

    removeExistingCanvases();
    viewonwhenclickedsayhello();
  });
});

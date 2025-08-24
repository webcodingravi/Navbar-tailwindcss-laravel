const navbar=document.getElementById("navbar");
const logo=document.getElementById("logo");
const menuBtn=document.getElementById("menuBtn");
const closeMenu=document.getElementById("closeMenu");
const mobileMenu=document.getElementById("mobileMenu");

// Scroll effect
window.addEventListener("scroll", () => {
    if (window.scrollY>10) {
        navbar.classList.add("scrolled", "py-3", "md:py-4");
        // logo.classList.add("invert", "opacity-80");
    } else {
        navbar.classList.remove("scrolled", "py-3", "md:py-4");
        logo.classList.remove("invert", "opacity-80");
    }
});

// Mobile menu toggle
menuBtn.addEventListener("click", () => {
    mobileMenu.classList.remove("-translate-x-full");
});
closeMenu.addEventListener("click", () => {
    mobileMenu.classList.add("-translate-x-full");
});


const menu = document.querySelector("#menu");
const navLinks = document.querySelector("#nav-links");
const menuIcon = document.querySelector("#menu-icon");
const main = document.querySelector("#main");
var navLogo = document.querySelector('#nav-logo');

function toggleMenu() {
  navLinks.classList.toggle("show");
  
  menuIcon.src = navLinks.classList.contains("show") ? "images/icon-menu-close.svg" : "images/icon-menu.svg";
  
  main.classList.toggle("opacity", navLinks.classList.contains("show"));
  navLogo.classList.toggle("opacity", navLinks.classList.contains("show"));
}

menuIcon.addEventListener("click", toggleMenu);
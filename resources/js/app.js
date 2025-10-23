import './bootstrap';


// Simple JS for nav highlight active state and small interactions
document.addEventListener('DOMContentLoaded', () => {
const links = document.querySelectorAll('.nav-link');
const current = window.location.pathname;
links.forEach(l => {
if (l.getAttribute('href') === current) l.classList.add('text-accent');
});
});
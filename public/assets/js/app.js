/*----------------------------------------*/
/* My SCRIPTS JS
/*----------------------------------------*/

/*--------------------*/
/* SCROLL-BAR
/*--------------------*/
window.addEventListener("scroll", function () {
    const nav = document.querySelector("header");
    nav.classList.toggle("scrolled", window.scrollY > 0);
  });
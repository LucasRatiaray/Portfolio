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

/*--------------------*/
/* NAVBAR ACTIVE
/*--------------------*/
// we select all the sections
const sections = document.querySelectorAll("section");
// we select all the navbar items
const navLi = document.querySelectorAll(".navbar_item");
// then we add an event listener to the scroll event
window.addEventListener("scroll", () => {
  let current = "";
  sections.forEach((section) => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.clientHeight;
    if (scrollY >= sectionTop - sectionHeight / 3) {
      current = section.getAttribute("id");
    }
  });
  navLi.forEach((li) => {
    li.classList.remove("active");
    if (li.classList.contains(current)) {
      li.classList.add("active");
    }
  });
});

/*--------------------*/
/* SHOW PASSWORD
/*--------------------*/
const passwordInput = document.getElementById('password');
const showPasswordCheckbox = document.getElementById('show-password');

showPasswordCheckbox.addEventListener('change', function() {
  if (showPasswordCheckbox.checked) {
    passwordInput.type = 'text';
  } else {
    passwordInput.type = 'password';
  }
});

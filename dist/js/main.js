let header = document.querySelector(".header");
let about = document.getElementById("about_menu");
let resume = document.getElementById("resume_menu");
let portfolio = document.getElementById("portfolio_menu");
let contact = document.getElementById("contact_menu");
let home = document.getElementById("Home_menu");
let sect = document.querySelectorAll(".sect");

home.addEventListener("click", () => {
  header.classList.remove("header-top");
  sect[0].classList.remove("section-show");
  sect[1].classList.remove("section-show");
  sect[2].classList.remove("section-show");
  sect[3].classList.remove("section-show");
});


about.addEventListener("click", () => {
  header.classList.add("header-top");
  sect[0].classList.add("section-show");
});

resume.addEventListener("click", () => {
  header.classList.add("header-top");
  sect[0].classList.remove("section-show");
  sect[1].classList.add("section-show");
});

portfolio.addEventListener("click", () => {
  header.classList.add("header-top");
  sect[1].classList.remove("section-show");
  sect[2].classList.add("section-show");
});

contact.addEventListener("click", () => {
  header.classList.add("header-top");
  sect[2].classList.remove("section-show");
  sect[3].classList.add("section-show");
});
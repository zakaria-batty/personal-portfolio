let header = document.querySelector(".header");
let about = document.getElementById("about_menu");
let resume = document.getElementById("resume_menu");
let portfolio = document.getElementById("portfolio_menu");
let contact = document.getElementById("contact_menu");
let home = document.getElementById("Home_menu");
let sect = document.querySelectorAll(".sect");


function Evnt(X) {
  if (X == 'Home') {
    header.classList.remove("header-top");
    sect[0].classList.remove("section-show");
    sect[1].classList.remove("section-show");
    sect[2].classList.remove("section-show");
    sect[3].classList.remove("section-show");
  } else if (X == 'About') {
    header.classList.add("header-top");
    sect[0].classList.add("section-show");
    sect[1].classList.remove("section-show");
    sect[2].classList.remove("section-show");
    sect[3].classList.remove("section-show");

  } else if (X == 'Resume') {
    header.classList.add("header-top");
    sect[0].classList.remove("section-show");
    sect[1].classList.add("section-show");
    sect[2].classList.remove("section-show");
    sect[3].classList.remove("section-show");

  } else if (X == 'Portfolio') {
    header.classList.add("header-top");
    sect[1].classList.remove("section-show");
    sect[2].classList.add("section-show");
    sect[3].classList.remove("section-show");
    sect[0].classList.remove("section-show");


  } else if (X == 'Contact') {
    header.classList.add("header-top");
    sect[0].classList.remove("section-show");
    sect[1].classList.remove("section-show");
    sect[2].classList.remove("section-show");
    sect[3].classList.add("section-show");
  } else {

  }
  return
}


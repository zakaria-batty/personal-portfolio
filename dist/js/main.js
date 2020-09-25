let header = document.querySelector(".header");
let about = document.getElementById("about_menu");
let resume = document.getElementById("resume_menu");
let portfolio = document.getElementById("portfolio_menu");
let contact = document.getElementById("contact_menu");
let home = document.getElementById("Home_menu");
let sect = document.querySelectorAll(".sect");
const menu = document.querySelector('.icofont-navigation-menu');
const closeicon = document.querySelector('.icofont-close');

//function for show nav-mobile
menu.addEventListener('click', () => {
  menu.classList.remove('icofont-menuigation-menu');
  menu.classList.add('icofont-close');
  document.querySelector('.mobile-nav').style.display = 'block';
  document.querySelector('.mobile-nav-overly').style.display = 'block';

  // e.preventDefault();
});

//function for nav-bar
function Evnt(X) {
  if (X == 'Home') {

    header.classList.remove("header-top");
    sect[0].classList.remove("section-show");
    sect[1].classList.remove("section-show");
    sect[2].classList.remove("section-show");
    sect[3].classList.remove("section-show");
    document.querySelector('.mobile-nav').style.display = 'none';
    document.querySelector('.mobile-nav-overly').style.display = 'none';
    
  } else if (X == 'About') {

    header.classList.add("header-top");
    sect[0].classList.add("section-show");
    sect[1].classList.remove("section-show");
    sect[2].classList.remove("section-show");
    sect[3].classList.remove("section-show");
    document.querySelector('.mobile-nav').style.display = 'none';
    document.querySelector('.mobile-nav-overly').style.display = 'none';
  

  } else if (X == 'Resume') {

    header.classList.add("header-top");
    sect[0].classList.remove("section-show");
    sect[1].classList.add("section-show");
    sect[2].classList.remove("section-show");
    sect[3].classList.remove("section-show");
    document.querySelector('.mobile-nav').style.display = 'none';
    document.querySelector('.mobile-nav-overly').style.display = 'none';

  } else if (X == 'Portfolio') {

    header.classList.add("header-top");
    sect[1].classList.remove("section-show");
    sect[2].classList.add("section-show");
    sect[3].classList.remove("section-show");
    sect[0].classList.remove("section-show");
    document.querySelector('.mobile-nav').style.display = 'none';
    document.querySelector('.mobile-nav-overly').style.display = 'none';
  

  } else if (X == 'Contact') {

    header.classList.add("header-top");
    sect[0].classList.remove("section-show");
    sect[1].classList.remove("section-show");
    sect[2].classList.remove("section-show");
    sect[3].classList.add("section-show");
    document.querySelector('.mobile-nav').style.display = 'none';
    document.querySelector('.mobile-nav-overly').style.display = 'none';
  
  } else {

  }
  return
}


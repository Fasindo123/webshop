// Login Animation
const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');

registerLink.addEventListener('click', ()=> {
    wrapper.classList.add('active');
});

loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
});

btnPopup.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');
});

iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');
});

// Back to top Button
window.onscroll = function() { scrollFunction() };

function scrollFunction() {
  var button = document.getElementById("backToTopBtn");

  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    button.style.display = "block";
  } else {
    button.style.display = "none";
  }
};

function scrollToTop() {
  scrollToTopAnimated();
}

function scrollToTopAnimated() {
  var currentPosition = document.documentElement.scrollTop || document.body.scrollTop;

  if (currentPosition > 0) {
    window.requestAnimationFrame(scrollToTopAnimated);
    window.scrollTo(0, currentPosition - 20);
  }
};
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

// Contact
function formatPhoneNumber(input) {
  var phoneNumber = input.value.replace(/\D/g, ''); // Eltávolítja az összes nem-számszerű karaktert
  var originalCursorPosition = input.selectionStart; // Az eredeti kurzor pozíciója

  if (phoneNumber.length > 11) {
    phoneNumber = phoneNumber.slice(0, 11);
  }

  var formattedPhoneNumber = '+36 ';

  var cursorOffset = 1; // Alapértelmezett kurzor eltolás

  if (originalCursorPosition <= 3) {
    cursorOffset = 4;
  }

  for (var i = 2; i < phoneNumber.length; i++) {
    if (i === 4 || i === 7) {
      formattedPhoneNumber += ' ';
      if (i < cursorOffset) {
        cursorOffset++;
      }
    }

    formattedPhoneNumber += phoneNumber.charAt(i);

      if (i === originalCursorPosition - 2) {
    cursorOffset--;
    }
  }

  // Visszaállítjuk az input mező tartalmát
  input.value = formattedPhoneNumber;

  // Beállítjuk a kurzort az új pozícióba
  var newCursorPosition = originalCursorPosition + cursorOffset;
  input.setSelectionRange(newCursorPosition, newCursorPosition);
}

  function sendForm() {
  // Minden mező kitöltöttségének ellenőrzése
  const elements = document.querySelectorAll('.form-control');
  for (let i = 0; i < elements.length - 1; i++) {
    if (elements[i].value === "") {
      alert('Minden mezőt ki kell tölteni!');
      return false; // Ha van hiányzó mező, visszaadunk false értéket
    }
  }

  // Email ellenőrzése
  const email = document.getElementById("email").value;
  const emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
  if (!emailRegex.test(email)) {
    alert('Hibás email cím formátum!');
    return false; // Ha hibás email cím, visszaadunk false értéket
  }

  // Név ellenőrzése
  const name = document.getElementById("name").value;
  if (!/^[A-ZÁÉÍÓÖŐÚÜŰ][a-záéíóöőúüű]+(\s[A-ZÁÉÍÓÖŐÚÜŰ][a-záéíóöőúüű]+)+$/.test(name)) {
    alert('Hibás név formátum!');
    return false; // Ha hibás név, visszaadunk false értéket
  }

  // Üzenet ellenőrzése
  const message = document.querySelector('textarea.form-control').value;
  if (message.trim() === "") {
    alert('Az üzenet mezőt ki kell tölteni!');
    return false; // Ha üres az üzenet mező, visszaadunk false értéket
  }

  return true; // Ha minden ellenőrzés sikeres, visszaadunk true értéket
}
<!DOCTYPE html>
<html lang="hu">
    <title>Kapcsolat - TechTrendStore</title>
<?php require_once('components/head.php'); ?>
<body>
  <?php require_once('components/header.php'); ?>

  <br><br><br>

            <div class="screen-body container">
              <div class="screen-body-item left">
                <div class="app-title">
                  <span>Kapcsolat</span>
                </div>
                <div class="app-contact">Kapcsolat telefonszám: <br> <a href="tel:06300922911"> 06 30 092 2911</a></div>
                <div class="app-contact">Kapcsolat e-mail: <br> <a href="mailto:levike.pinter@gmail.com">levike.pinter@gmail.com</a></div>
              </div>
              <div class="screen-body-item">
                <div class="app-form">
                  <div class="app-form-group">
                    <input class="app-form-control" placeholder="Név" id="nev">
                  </div>
                  <div class="app-form-group">
                    <input class="app-form-control" placeholder="E-mail" id="email">
                  </div>
                  <div class="app-form-group">
                    <input class="app-form-control" placeholder="Telefonszám" id="phone-number" oninput="formatPhoneNumber(this)">
                  </div>
                  <div class="app-form-group message">
                    <input class="app-form-control" placeholder="Üzenet">
                  </div>
                  <div>
                    <button class="kuldes" id="submit" onclick="sendForm()">Küldés</button>
                  </div>
                </div>
              </div>
            </div>

  <?php require_once('components/footer.php'); ?>
</body>
</html>

<script>
  function formatPhoneNumber(input) {
  var phoneNumber = input.value.replace(/\D/g, ''); // Eltávolítja az összes nem-számszerű karaktert
  var originalCursorPosition = input.selectionStart; // Az eredeti kurzor pozíciója

  if (phoneNumber.length > 11) {
    phoneNumber = phoneNumber.slice(0, 11);
  }

  var formattedPhoneNumber = '(+36) ';

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
    const elements = document.querySelectorAll('.app-form-control');
    let hasErrors = false; // Flag to check if there are errors
    const errorMessages = [];

    // Remove red border from all input fields
    elements.forEach(element => {
      element.style.border = '';
    });

    for (let i = 0; i < elements.length; i++) {
      if (elements[i].value === "") {
        errorMessages.push('Minden mezőt ki kell tölteni!');
        // Add red border to the input field with an error
        elements[i].style.border = '1px solid red';
        hasErrors = true; // Set the flag to true if there is an error
      }
    }

    const email = document.getElementById("email").value;
    const emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
    if (!emailRegex.test(email)) {
      errorMessages.push('Hibás email cím formátum!');
      // Add red border to the email input field
      document.getElementById("email").style.border = '1px solid red';
      hasErrors = true; // Set the flag to true if there is an error
    }

    const name = document.getElementById("nev").value;
    if (!/^[A-ZÁÉÍÓÖŐÚÜŰ][a-záéíóöőúüű]+(\s[A-ZÁÉÍÓÖŐÚÜŰ][a-záéíóöőúüű]+)+$/.test(name)) {
      errorMessages.push('Hibás név formátum!');
      // Add red border to the name input field
      document.getElementById("nev").style.border = '1px solid red';
      hasErrors = true; // Set the flag to true if there is an error
    }

    const phoneNumber = document.getElementById("phone-number").value.replace(/\D/g, '');
    if (phoneNumber.length < 10) {
      errorMessages.push('Hibás telefonszám van megadva!');
      // Add red border to the phone number input field
      document.getElementById("phone-number").style.border = '1px solid red';
      hasErrors = true; // Set the flag to true if there is an error
    }

    const message = document.querySelector('.app-form-group.message input.app-form-control').value;
    if (message.trim() === "") {
      errorMessages.push('Az üzenet mezőt ki kell tölteni!');
      // Add red border to the message input field
      document.querySelector('.app-form-group.message input.app-form-control').style.border = '1px solid red';
      hasErrors = true; // Set the flag to true if there is an error
    }

    if (hasErrors) {
      // Ha vannak hibák, jelenítsd meg csak az első hibaüzenetet
      alert(errorMessages[0]);
      return false;
    }

    return true;
  }

</script>
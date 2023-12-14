<!DOCTYPE html>
<html lang="hu">
    <title>TechTrendStore - Kapcsolat</title>
<?php require_once('components/head.php'); ?>
<body>
  <?php require_once('components/header.php'); ?>
  <?php require_once('mail/zsotamail.php'); ?>
  <br><br><br>
    <form action="contact.php" method="post">
      <div class="screen-body container">
        <div class="screen-body-item left">
          <div class="app-title">
            <span><i class="fa-solid fa-envelopes-bulk"></i> Kapcsolatfelvétel</span>
          </div>
          <div class="app-contact"><i class="fa-solid fa-phone"></i> <a href="tel:06300922911"> 06 30 092 2911</a></div>
          <div class="app-contact"><i class="fa-solid fa-envelope"></i> <a href="mailto:levike.pinter@gmail.com">levike.pinter@gmail.com</a></div>
          <div class="app-contact"><i class="fa-solid fa-location-dot"></i> 7400 Kaposvár, Damijanich utca 17.</div>
        </div>
        
        <div class="screen-body-item">
          <div class="app-form">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Név" id="nev" name="nev" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="E-mail" id="email" name="email" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Telefonszám" id="phone-number" name="phone-number" oninput="formatPhoneNumber(this)" required>
            </div>
            <div class="app-form-group message">
              <textarea class="app-form-control" placeholder="Üzenet" name="uzenet" required></textarea>
            </div>

            <div>
              <button type="button" class="kuldes" id="Submit" name="Submit" onclick="sendForm()">Küldés <i class="fa-solid fa-paper-plane"></i></button>
            </div>
          </div>
        </div>
      </div>
      <div class="block-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2753.369275933826!2d17.7972176!3d46.362061000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47683e000240052b%3A0x3b1f6a2a20645b22!2zS2Fwb3N2w6FyaSBTWkMgRcO2dHbDtnMgTG9yw6FuZCBNxbFzemFraSBUZWNobmlrdW0gw6lzIEtvbGzDqWdpdW0!5e0!3m2!1shu!2shu!4v1698227964602!5m2!1shu!2shu" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </form>
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

let isFormSubmitted = false;

function sendForm() {
  if (isFormSubmitted) {
    alert('Az űrlapot már elküldték!');
    return false;
  }

  const elements = document.querySelectorAll('.app-form-control');
  let hasErrors = false; // Flag to check if there are errors
  const errorMessages = [];

  // Remove red border from all input fields
  elements.forEach(element => {
    element.style.border = '';
  });

  let isAnyFieldEmpty = false; // Flag to check if any field is empty

  for (let i = 0; i < elements.length; i++) {
    if (elements[i].value === "") {
      isAnyFieldEmpty = true;
      // Add red border to the input field with an error
      elements[i].style.border = '1px solid red';
    }
  }

  if (isAnyFieldEmpty) {
    errorMessages.push('Minden mezőt ki kell tölteni!');
    hasErrors = true; // Set the flag to true if there is an error
  }
  
    if (!hasErrors) {
      isFormSubmitted = true;
        const email = document.getElementById("email").value;
        const emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
        if (!emailRegex.test(email)) {
            errorMessages.push('Hibás email cím formátum! \n Pl: magyarvagyok@gmail.com');
            // Add red border to the email input field
            document.getElementById("email").style.border = '1px solid red';
            hasErrors = true; // Set the flag to true if there is an error
        }

        const name = document.getElementById("nev").value;
        if (!/^[A-ZÁÉÍÓÖŐÚÜŰ][a-záéíóöőúüű]+(\s[A-ZÁÉÍÓÖŐÚÜŰ][a-záéíóöőúüű]+)+$/.test(name)) {
            errorMessages.push('Hibás név formátum! \n Pl: Magyar Vagyok');
            // Add red border to the name input field
            document.getElementById("nev").style.border = '1px solid red';
            hasErrors = true; // Set the flag to true if there is an error
        }

        const phoneNumber = document.getElementById("phone-number").value.replace(/\D/g, '');
        if (phoneNumber.length < 10) {
            errorMessages.push('Hibás telefonszám formátum! \n Pl: (+36) 00 000 0000');
            // Add red border to the phone number input field
            document.getElementById("phone-number").style.border = '1px solid red';
            hasErrors = true; // Set the flag to true if there is an error
        }

        const message = document.querySelector('.app-form-group.message textarea.app-form-control').value;
        if (message.trim() === "") {
            errorMessages.push('Az üzenet mezőt ki kell tölteni!');
            // Add red border to the message input field
            document.querySelector('.app-form-group.message textarea.app-form-control').style.border = '1px solid red';
            hasErrors = true; // Set the flag to true if there is an error
        }
    }

    if (!hasErrors) {
    isFormSubmitted = true;

    if (hasErrors) {
        // Display all error messages
        alert(errorMessages.join('\n'));
        return false;
    }

    // Ha nincsenek hibák, akkor beküldjük az űrlapot
    document.querySelector('form').submit();
  } else {
    // Display all error messages
    alert(errorMessages.join('\n'));
    return false;
  }
}

</script>

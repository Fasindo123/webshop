<!DOCTYPE html>
<html lang="hu">
    <title>Kapcsolat - TechTrendStore</title>
<?php require_once('components/head.php'); ?>
<body>
  <?php require_once('components/header.php'); ?>

  <form action="sendContact.php" method="post">
    <div class="screen-body container custom-container">
      <div class="screen-body-item left">
        <div class="app-title">
          <span><i class="fa-solid fa-envelopes-bulk"></i> Kapcsolatfelvétel</span>
        </div>
        <div class="app-contact"><i class="fa-solid fa-phone"></i> 06 30 123 4567</div>
        <div class="app-contact"><i class="fa-solid fa-envelope"></i> techtrendstore@gmail.com</a></div>
        <div class="app-contact"><i class="fa-solid fa-location-dot"></i> 7400 Kaposvár, Szent Imre u. 2.</div>
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
            <input class="app-form-control" placeholder="Telefonszám" id="telefonszam" name="telefonszam" oninput="formatTelefonszam(this)" required>
          </div>
          <div class="app-form-group">
            <input class="app-form-control" placeholder="Tárgy" id="targy" name="targy" required></input>
          </div>
          <div class="app-form-group message">
            <textarea class="app-form-control" placeholder="Üzenet" id="uzenet" name="uzenet" oninput="uzenetdoboz(this);" required></textarea>
          </div>

          <div>
          <button class="kuldes" type="submit" name="Submit" index="Submit" onclick="return sendForm();">Küldés</button>
          </div>
        </div>
      </div>
    </div>
    <div class="block-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1376.7364371395822!2d17.79275469481946!3d46.360005288582215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476815fec4f56e7b%3A0x2465bce86ff508af!2zS2Fwb3N2w6FyaSBTWkMgTm9zemxvcHkgR8Ohc3DDoXIgS8O2emdhemRhc8OhZ2kgVGVjaG5pa3Vt!5e0!3m2!1shu!2shu!4v1702628065756!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </form>

  <?php require_once('components/footer.php'); ?>
</body>
</html>

<script>
  // Üzenet doboz folyamatosan növekedjen
  function uzenetdoboz(textarea) {
    textarea.style.height = "1px";
    textarea.style.height = (textarea.scrollHeight) + "px";
  }

  function formatTelefonszam(input) {
    var telefonszam = input.value.replace(/\D/g, ''); // Eltávolítja az összes nem-számszerű karaktert
    var originalCursorPosition = input.selectionStart; // Az eredeti kurzor pozíciója

    if (telefonszam.length > 11) {
      telefonszam = telefonszam.slice(0, 11);
    }

    var formattedtelefonszam = '(+36) ';

    var cursorOffset = 1; // Alapértelmezett kurzor eltolás

    if (originalCursorPosition <= 3) {
      cursorOffset = 4;
    }

    for (var i = 2; i < telefonszam.length; i++) {
      if (i === 4 || i === 7) {
        formattedtelefonszam += ' ';
        if (i < cursorOffset) {
          cursorOffset++;
        }
      }

      formattedtelefonszam += telefonszam.charAt(i);

        if (i === originalCursorPosition - 2) {
      cursorOffset--;
      }
    }

    // Visszaállítjuk az input mező tartalmát
    input.value = formattedtelefonszam;

    // Beállítjuk a kurzort az új pozícióba
    var newCursorPosition = originalCursorPosition + cursorOffset;
    input.setSelectionRange(newCursorPosition, newCursorPosition);
  }

  function sendForm() {
    const elements = document.querySelectorAll('.app-form-control');
    let isEmptyField = false;
    let errorMessages = '';

    for (let i = 0; i < elements.length; i++) {
      if (elements[i].value === "") {
        isEmptyField = true;
        elements[i].style.border = '1px solid red'; // Highlight the empty field
      } else {
        elements[i].style.border = ''; // Reset the border style
      }
    }

    if (isEmptyField) {
      errorMessages += 'Minden mezőt ki kell tölteni!\n';
    }

    const name = document.getElementById("nev").value;
      if (name !== "" && !/^[A-ZÁÉÍÓÖŐÚÜŰ][a-záéíóöőúüű]+(\s[A-ZÁÉÍÓÖŐÚÜŰ][a-záéíóöőúüű]+)+$/.test(name)) {
        errorMessages += 'Hibás név formátum!\n';
        document.getElementById("nev").style.border = '1px solid red'; // Highlight the name field
      }

    const email = document.getElementById("email").value;
      if (email !== "") {
        const emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
        if (!emailRegex.test(email)) {
          errorMessages += 'Hibás email cím formátum!\n';
          document.getElementById("email").style.border = '1px solid red'; // Highlight the email field
        }
      }

    const telefonszam = document.getElementById("telefonszam").value.replace(/\D/g, '');
      if (telefonszam !== "" && telefonszam.length < 11) {
        errorMessages += 'Hibás telefonszám formátum!\n';
        document.getElementById("telefonszam").style.border = '1px solid red'; // Highlight the phone number field
      }

    if (errorMessages !== '') {
      alert(errorMessages.trim());
      return false;
    }

    return true;
  }

</script>
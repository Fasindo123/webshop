<!DOCTYPE html>
<html lang="hu">
    <title>Kapcsolat - TechTrendStore</title>
<?php require_once('components/head.php'); ?>
<body>
  <?php require_once('components/header.php'); ?>
  <?php require_once('components/login.php'); ?>
      <br><br><br><br><br><br>

  <div class="background">
    <div class="contact-container">
      <div class="screen">
        <div class="screen-header">
          <div class="screen-header-left">
          </div>
          <div class="screen-header-right">
          </div>
        </div>
        <div class="screen-body">
          <div class="screen-body-item left">
            <div class="app-title">
              <span>Kapcsolat</span>
            </div>
            <div class="app-contact">Kapcsolat telefonszám: <br> 06 30 092 2911</div>
            <div class="app-contact">Kapcsolat e-mail: <br> levike.pinter@gmail.com</div>
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
                <input class="app-form-control" placeholder="Telefonszám" id="telefonszam">
              </div>
              <div class="app-form-group message">
                <input class="app-form-control" placeholder="Üzenet">
              </div>
              <div>
                <button class="loginBtn">Küldés</button>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
<br><br><br>

    <?php require_once("components/scripts.php"); ?>
    <?php require_once('components/footer.php'); ?>
  </body>
</html>
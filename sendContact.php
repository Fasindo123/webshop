<!DOCTYPE html>
<html lang="hu">
<?php require_once('components/head.php'); ?>
<body>
      <?php require_once('components/header.php'); ?>

      <h1>Email küldése folyamatban...</h1>

      <?php require_once("components/footer.php"); ?>

  </body>
</html>

<?php
require 'dashboard/helpers/Mailer.php';
use dashboard\helpers\Mailer\Mailer;

if (isset($_POST['Submit'])) {

    $mail = new Mailer();
    $recepient_emails = array('huberpetergyorgy@gmail.com', 'huberpetergyorgy@outlook.hu');
    $subject = 'ad';
    $msg = 'asdaads';
    $result = $mail->send_mail($recepient_emails, $subject, $msg);
    if ($result) {
        echo 'E-mail sikeresen elküldve!';
    } else {
        echo 'Hiba: '.$result->ErrorInfo;
    }
}
?>
<?php

global $nev, $email, $phonenumber, $uzenet;

$nev = "üres";
$email = "üres";
$phonenumber = "üres";
$uzenet = "üres";

if (isset($_POST["nev"])) {
    $nev = $_POST["nev"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phone-number"];
    $uzenet = $_POST["uzenet"];
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

$MAIL_TYPE = "null";

if (isset($_POST['Submit'])) {

    // ügyfélnek
    $mail = new PHPMailer();
    $mail->IsSMTP();                                          // SMTP-n keresztuli kuldes
    $mail->Host     = 'smtp.office365.com';                     // SMTP szerverek
    $mail->Port = 587;
    $mail->SMTPAuth = true;                                   // SMTP
    $mail->SMTPSecure = 'STARTTLS';

    $mail->Username = 'huberpetergyorgy@outlook.hu';            // SMTP felhasználo
    $mail->Password = 'Peti.2006.Mazli';                               // SMTP jelszo

    $mail->CharSet = 'UTF-8';
    $mail->From     = 'huberpetergyorgy@outlook.hu';            // Felado e-mail cime
    $mail->FromName = 'Huber Péter György';                // Felado neve
    $mail->AddAddress('huberpetergyorgy@gmail.com', 'Huber Péter György');         // Cimzett es neve
    $mail->AddAddress('huberpetergyorgy@outlook.hu', 'Huber Péter György');         // Cimzett es neve
    $mail->AddReplyTo($email); // Valaszlevel ide
    $mail->WordWrap = 80;                                     // Sortores allitasa
    $mail->IsHTML(true);                                      // Kuldes HTML-kent

    $targy = 'Visszaigazoló email';
    $data2 = 'Köszönjük szépen az email-jét!';

    $mail->Subject = $targy;                   // A level targya
    $mail->Body    = $data2;          // A level tartalma
    if ($mail->Send()) {
        echo 'Elküldve';
    } else {
        echo 'Nincs elküldve';
    }
    // magunknak
    echo '<script type="text/javascript" charset="utf-8">alert("Köszönjük szépen az üzenetét");</script>';
}

// if(isset($_POST['submitButton1'])) {
// 	$check = "SELECT email FROM `zsota_registrations` WHERE email = '".$_field_21."';";
//     $check2 = mi_sql(5, $check);

//     if (right($_field_21,2) == "ru" || right($_field_21,2) == "pl")
//     {
//         echo '<script type="text/javascript" charset="utf-8">alert("Érvénytelen email cím!");</script>';
//         echo '<META HTTP-EQUIV="refresh" CONTENT="2;url='.$_SERVER['PHP_SELF'].'?clear="'.rand(100, 999).'">';
// 	} else if (empty(trim($_field_11, " ")) ||empty(trim($_field_11, " ")) )
// 	{
// 		echo '<script type="text/javascript" charset="utf-8">alert("Kérem javítsa ki a hibákat. A csillaggal (*) jelölt mezők kötelezőek!");</script>';
// 		echo '<META HTTP-EQUIV="refresh" CONTENT="2;url='.$_SERVER['PHP_SELF'].'?clear="'.rand(100, 999).'">';
// 	} else if ($check2->num_rows > 0)
//     {
// 		echo '<script type="text/javascript" charset="utf-8">alert("Ez az email cím már regisztrálva van.'.$_field_21.'");</script>';
// 	 	//echo '<META HTTP-EQUIV="refresh" CONTENT="2;url=http://www.zsotakerekpartura.hu/index.php?clear="'.rand(100, 999).'">';
//     } else {
// 		$insert = "INSERT into `zsota_registrations` (`name`, `email`, `enabled`) VALUES ('" . $_field_11 . "','" . $_field_21 . "', 0)";
// 	    $insert2 = mi_sql(5, $insert);
// 	    if ($insert2)
// 	    {
//             $fejlecek .= 'MIME-Version: 1.0' . "\r\n";
//             $fejlecek .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
//             $fejlecek .= 'From: huberpetergyorgy@outlook.hu '. "\r\n";
// 			$data = "Regisztrációs adatok:<br /><br />Név: " . $_field_11 . "<br />Email: " . $_field_21;
// 			$data = iconv("UTF-8", "UTF-8", $data); 
// 			mail("tamas@bloch.hu","Zsota reg",$data, $fejlecek, "-f huberpetergyorgy@outlook.hu");
// 			mail("muzsizsolt@gmail.com","Zsota reg",$data, $fejlecek, "-f huberpetergyorgy@outlook.hu");
// 		 	echo '<script type="text/javascript" charset="utf-8">alert("Köszönjük a feliratkozást! Hamarosan jelentkezünk.");</script>';
// 		 	//echo '<META HTTP-EQUIV="refresh" CONTENT="2;url=http://www.zsotakerekpartura.hu/index.php?clear="'.rand(100, 999).'">';
// 	 	}
//  	}
// }
?>
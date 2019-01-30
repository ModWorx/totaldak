<?php
    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $bericht = $_POST['bericht'];

    $email_from = 'TotalDak';
    $email_bericht = 'Nieuw Bericht Van TotalDak';
    $email_body = "Naam: $naam.\n".
                  "Email: $email.\n".
                  "Bericht: $bericht.\n";
                  
    $to = "info@totaldak.be";
    $headers = "from: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to,$email-subject,$email_body,$headers);

    header("location: succes.html");
?>
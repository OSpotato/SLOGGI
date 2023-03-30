<?php
 $to = "sloggi-website@rubyonsaas.com";
 $subject = $_POST['subject'];
 $body = "From, ".$_POST['name']."\n\n"."Email, ".$_POST['email']."\n\n".$_POST['message'];
 if (mail($to, $subject, $body)) {
  $responseArray = array('class' => 'alert alert-success', 'message' => 'Wiadomość wysłano poprawnie. Dziękuję, odezwę się wkrótce!');
  } else {
$responseArray = array('class' => 'alert alert-danger', 'message' => 'Podczas wysyłania formularza wystąpił błąd. Spróbuj ponownie później.');
     
  }

    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;

 ?>
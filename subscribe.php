<?php
  $to = 'freeman@baobabcircle.com';
  $subject = "Baobab - stay up to date";
  $message = '<html><body>';
  $message .= "Email: " . $_POST['email'] . "<br/>";
  $message .= "Phone: " . $_POST['phone'];
  $message .= "</body></html>";
  // $headers = "From: $from";
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
  // Additional headers
  $headers .= "From:" . $_POST['email'] . "\r\n";

  mail($to,$subject,$message,$headers);
  die();
?>

<?php

  $body = "";

  if (isset($_POST['msg'])) {
    $body .= "<p>Message: <br/>" . $_POST['msg'] . "</p>";
  }

  $to = 'info@baobabcircle.com';
  $subject = "Baobab - contact";
  $message = "<html><body>";
  $message .= "<p>Name: ".$_POST['name']."</p>";
  $message .= "<p>Phone: ".$_POST['phone']."</p>";
  $message .= "$body";
  $message .= "</body></html>";
  // $headers = "From: $from";
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
  // Additional headers
  $headers .= "From:" . $_POST['email'] . "\r\n";
  // $headers .= "Cc: info@baobabcircle.com" . "\r\n";

  mail($to,$subject,$message,$headers);
  die();
?>

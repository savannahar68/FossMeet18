<?php
  $name = "test";
//  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  ini_set("SMTP", "smtp.gmail.com");
  ini_set("sendmail_from", "bec.coep@gmail.com");
  $to="bec.coep@gmail.com";
  $subject="Feedback:".$email." Name:".$name;
  $header="From:".$email." SessionName: ".$_SESSION['name'];
  $sentmail = mail($to,$subject,$message,$header);
  header('Location:index.html');
  exit();
?>

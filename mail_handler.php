<?php
if (isset ($_POST ['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTO = "john@johngriffin.dev";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from " .$name.".\n\n".$message;

    if (mail ($mailTO, $subject, $txt, $headers)) {
      echo "<h1>Thank you ".$name. " ". "Your message was sent successfully. I will respond as soon as I can</h1>";
    }
    else {
      echo "Something went wrong. Please check your submission and try again.";
    }
  }
?>
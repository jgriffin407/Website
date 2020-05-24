<?php
if (isset ($_POST ['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $msgSuccess = $_POST['sendmessage']
    $msgFail = $_POST['errormessage']

    $mailTO = "john@johngriffin.dev";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from " .$name.".\n\n".$message;

    if (mail ($mailTO, $subject, $txt, $headers)) {
      echo $msgSuccess;
    }
    else {
      echo $msgFail;
    }
  }
?>
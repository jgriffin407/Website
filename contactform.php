<?php
if (isset ($_POST ['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTO = "john@johngriffin.dev";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from " .$name.".\n\n".$message;

    mail ($mailTO, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}
?>

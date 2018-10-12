<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "bhajko@gmail.com";
    $subject = "Üzenete érkezett az Aurora Hungary weblapról";
    $headers = "From: ".$mailFrom;
    $txt = "Levelet kaptál tőle: ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact.php?mailsend");
}
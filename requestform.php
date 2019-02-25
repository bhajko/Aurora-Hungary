<?php

$name_error = $email_error = $file_error = $message_error = "";
$name = $email = $message = $file = $success = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["name"])) {
        $name_error = "A név mező szükséges";
    } else {
        $name = test_input($_POST["name"]);

        if(!preg_match("/^[a-zA-ZáéöŐüŰóúí ]*$/", $name)) {
            $name_error = "Csak betűk engedélyezettek";
        }
    }

    if(empty($_POST["email"])) {
        $email_error = "Az email mező szükséges";
    } else {
        $email = test_input($_POST["email"]);

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Helytelen email cím";
        }
    }

    if(empty($_POST["message"])) {
        $message_error = "Az üzenet mező szükséges";
    } else {
        $message = test_input($_POST["message"]);
    }

    if($name_error == "" and $email_error =="" and $message_error == "") {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $mailFrom = $_POST['email'];
            $message = $_POST['message'];
            $honeypot = $_POST['firstname'];

            $mailTo = "info@aurorahungary.hu";
            $subject = "Ajánlatkérés érkezett az Aurora Hungary weboldalról";
            $headers = "From: ".$mailFrom;
            $txt = "Levelet kaptál tőle: ".$name.".\n\n".$message;

            if($honeypot) {
                
            } else {
                if(mail($mailTo, $subject, $txt, $headers)) {
                    $success = "Ajánlatkérése elküldve, hamarosan felvesszük Önnel a kapcsolatot";
                    $name = $email = $message = "";
                }
            }
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
<?php

    if (isset($_POST['submit'])) {

        $name = trim($_POST['firstname']);
        $email = trim($_POST['email']);
        $subject = "City Guide Feedback";
        $message = trim($_POST['feedback']);

        $myMail = "yogeshverma28698@gmail.com";
        $header = "From: " . $name;
        $message2 = "You have received a message from " . $name . ". \n\n" . $message;

        mail($myMail, $subject, $message2, $header);
        header("Location: index.html?mailsend");

    }

?>
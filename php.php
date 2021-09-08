<?php
    $name = $_POST['name'];
    $visitor = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "belikebro1711@gmail.com";
    $email_subject = "New Form";
    $email_body = "User name : $name \n" . 
                "User Email : $visitor \n". 
                "User Message : $message \n";

    $to = "sanchit.cs22@gmail.com";
    $headers = "From : $email_from \r\n";
    $headers .="Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    header("Location : index.html");
?>
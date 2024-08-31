<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $to = "name@gmail.com"; // MY EMAIL ADDRESS 
        $subject = "New Message from Contact Form";
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "<p>Thank you for reaching out. I'll get back to you soon!</p>";
        } else {
            echo "<p>Sorry, something went wrong. Please try again later.</p>";
        }
    }
    ?>
<?php
// Check if the form has been submitted
if (isset($_POST['submit'])) {

    // Collect the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set up the email
    $to = "mebeling@usc.edu";
    $subject = "New message from $name";
    $body = "Name: $name\nEmail: $email\n\n$message";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Your message has been sent!";
    } else {
        echo "There was a problem sending your message.";
    }
}
?>

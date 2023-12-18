<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $eventDetails = $_POST['event-details'];
    
    $to = "jhintz212@gmail.com";
    $subject = "New Event Booking";
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nEvent Details: $eventDetails";
    
    $headers = "From: $email";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your booking request has been sent.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>

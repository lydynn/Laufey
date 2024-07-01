<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Here you can add code to send the form data to an email or save it to a database.
    
    echo "Thank you, $name! Your message has been received.";
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']); 
    $message = htmlspecialchars($_POST['message']);

    // Destination email
    $to = "vihaanproject5050@gmail.com"; // <-- Your email here!
    $subject = "New Message from Your portfolio-Website";

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n"; 
    $body .= "Message:\n$message\n";

    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        header("Location: thankyou.html");
        exit();
    } else {
        header("Location: error.html");
        exit();
    }
} else {
    // Method not allowed
    http_response_code(405);
    echo "405 Method Not Allowed";
}

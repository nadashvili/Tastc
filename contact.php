<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // TODO: Add code to send an email, save to a database, etc.
    // Example of sending an email (make sure to adjust the parameters):
    $to = "nadashviligio707@gmail.com";
    $subject = "განცხადება მომხმარებლიდან";
    $body = "სახელი: $name\nმეილი: $email\nციტატა:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "მესიჯი წარმატებით გაიგზავნა!";
    } else {
        echo "მოხდა შეცდომა, გთხოვთ, სცადოთ თავიდან.";
    }
}
?>
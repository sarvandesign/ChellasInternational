<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $contact = htmlspecialchars($_POST['contact']);
    $country = htmlspecialchars($_POST['country']);
    $interest = htmlspecialchars($_POST['interest']);
    $comments = htmlspecialchars($_POST['comments']);

    $to = "info@chellasinternational.com";
    $subject = "New Contact Form Submission";
    $message = "
        Name / Company: $name\n
        Email: $email\n
        Contact: $contact\n
        Country: $country\n
        Interested In: $interest\n
        Comments: $comments
    ";

    $headers = "From: $email\r\nReply-To: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>
            alert('Message sent successfully!');
            window.location.href = 'contact.html';
        </script>";
    } else {
        echo "<script>
            alert('Failed to send message. Please try again.');
            window.location.href = 'contact.html';
        </script>";
    }
}
?>


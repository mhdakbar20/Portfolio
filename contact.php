<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  // Contoh: kirim email (butuh konfigurasi server)
  $to = "mhdakbartgm@gmail.com";
  $subject = "New Message from $name";
  $body = "Email: $email\n\nMessage:\n$message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully!";
  } else {
    echo "Message failed to send.";
  }
}
?>

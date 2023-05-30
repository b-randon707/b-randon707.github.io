<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Configure your email settings
  $to = 'bdgarza707@gmail.com';
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Send the email
  if (mail($to, $subject, $message, $headers)) {
    echo "Thank you for contacting us. We will get back to you soon!";
  } else {
    echo "Oops! Something went wrong. Please try again.";
  }
}
?>

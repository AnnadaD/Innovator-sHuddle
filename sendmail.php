<?php
if(isset($_POST['submit'])) {
  $to = 'innovatorhuddle@gmail.com';
  $subject = 'New contact form submission';
  $message = 'Name: ' . $_POST['fname'] . ' ' . $_POST['lname'] . "\r\n\r\n" .
             'Email: ' . $_POST['email'] . "\r\n\r\n" .
             'Message: ' . $_POST['message'];
  $headers = 'From: ' . $_POST['email'] . "\r\n" .
             'Reply-To: ' . $_POST['email'] . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);

  echo 'Thank you for your message!';
}
?>
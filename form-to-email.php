<?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = "demoictworld@gmail.com";
  $subject ="New Form submission";
  
  $headers ="From: " . $name. "\r\n" .
  "CC: demo.eyyo@gmail.com";

  $txt = "You have received an email from" . $name."\r\nEmail: " . $email . "\r\nMessage: " . $message;

  if($email!=NULL){
    mail($to,$subject,$txt,$headers);
  }

  header('location:thanks.html')

	// $email_from = 'yourname@yourwebsite.com';

	// $email_subject = "New Form submission";

	// $email_body = "You have received a new message from the user $name.\n".
    //                         "Here is the message:\n $message".
   // $to = "demoictworld@gmail.com";

// $headers = "From: $email_from \r\n";

// $headers .= "Reply-To: $visitor_email \r\n";

// mail($to,$email_subject,$email_body,$headers);



?>

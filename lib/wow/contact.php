<?php
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['department-selection']);
  $website = htmlspecialchars($_POST['title']);
  $message = htmlspecialchars($_POST['message']);

  if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "barakahassan7@gmail.com"; //enter that email address where you want to receive all messages
      $subject = "From: $name <$email>";
      $body = "Name: $name\nEmail: $email\ndepartment-selection: $department-selection\ntitle: $title\n\nmessage:\n$message\n\nRegards,\n$name";
      $sender = "From: $email";
      if(mail($receiver, $subject, $body, $sender)){
         echo "Your message has been sent";
      }else{
         echo "Sorry, failed to send your message!";
      }
    }else{
      echo "Enter a valid email address!";
    }
  }else{
    echo "Email and message field is required!";
  }
?>

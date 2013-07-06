<?php       $name = $_POST['name'];
      $email = $_POST['email'];
      $hear_about_us = $_POST['hear_about'];
      $zip = $_POST['zip'];      $questions = $_POST['questions'];      $subscribe = $_POST['subscribe'];      
      $formcontent="From: $name \n Email: $email \n How did (s)he hear about us: $hear_about_us \n Zip: $zip \n Questions: $questions \n Subscribed: $subscribe";

      $recipient = "ENTER EMAIL";
      $subject = "Arzu Inquiry";

      $mailheader = "From: $email \r\n";

      mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

      header("Location: http://{$_SERVER['SERVER_NAME']}/index.html?thank_you=true");
      die();
      10
?>
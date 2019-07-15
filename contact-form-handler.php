<?php
  //Check if the values are sent from the HTML form to the PHP file
  if(
    isset($_POST['name']) &&
    isset($_POST['email']) &&
    isset($_POST['message'])
  )
  {
    //Set the variables
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    $number = $_POST['number'];
    $to = "info@rubenverster.com";
    $email_subject = "Website Message";

    //Email from should be from the person who
    //sent you the email from the contact form
    $email_from = $visitor_email;
 
 
    //Email body
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                      "User Number: $number.\n".
                        "User Message: $message.\n";
                       
    //These are your email headers
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email_from . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
 
    //This is to check if the email was sent.
    if(mail($to,$email_subject,$email_body,$headers))
    {
      header("Location: index.html"); //If true return back to form
    }
    else
    {
      echo "Email failed to send"; //If email is not sent, it gives you an error message
      die;
    }
  }
?>
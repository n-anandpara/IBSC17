<?php
   $to = $_POST['to']; 
   //Getting the 'to' textbox data from the form

   /* If you are using GET method ,then use $_GET[] */

   $subject = "Your Mail Subject" ;
   $message = "Your message to be sent" ;
   $headers = "From: mayankd7350@gmail.com" ;

   // If you leave the $headers from field empty,then your server mail ID will be displayed 
   and it may be moved to the spam section of the email

   mail($to,$subject,$message,$headers);

   /* Done , Your mail will be sent to the email address you want
?>
<?php
     $name = $_POST['name'];
     $visitor_email=$POST['email'];
     $message=$_POST['message'];
     $email_from = 'aatesh99@gmail.com';
     $email_subject='new contact us form submission';
     $email_body="User Name: $name.\n"."User Email:$visitor_email.\n"."User Message:$message.\n";

     $to="aateshdaphnis@gmail.com";
     $headersv="from: $email_from \r\n";
     $headers="reply-to:$visitor_email\r\n";
     mail($to,$email_subject,$email_body,$headers);
     header('Location:index.html');
       ?>

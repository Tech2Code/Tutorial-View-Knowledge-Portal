<?php

$names = $_POST['author'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$message = $_POST['message'];
$headers = 'From: '.$email.'' . "\r\n" .
    'Reply-To: '.$email.'' . "\r\n" ;
$headers .= 'Cc: schandan123@yahoo.com' . "\r\n";
            'Bcc: chandans261295@gmail.com' . "\r\n";
$message = "Dear Sir/Mam,

Following are the details of the enquiry generated via Tutorial View  - 

Name - $names
Mobile - $mobile
Email - $email
Message - $message

Thanks !!

";

mail ( "chandans261295@gmail.com" , "Enquiry from Tutorial View" , $message , $headers);

header('Location: thanks.html');
?>
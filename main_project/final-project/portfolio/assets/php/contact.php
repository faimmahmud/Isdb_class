<?php
if($_SERVER['REQUEST_METHOD']!=='POST'){header('Location: ../../index.php'); exit;}
$name=trim($_POST['name']??'');
$email=trim($_POST['email']??'');
$subject=trim($_POST['subject']??'');
$message=trim($_POST['message']??'');
if($name===''||$email===''||$subject===''||$message===''){die('Please fill in all fields.');}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){die('Invalid email address.');}
$to='hello@faim.design';
$body="Name: $name
Email: $email
Subject: $subject

Message:
$message";
$headers="From: $name <$email>
Reply-To: $email
";
if(mail($to,$subject,$body,$headers)){echo 'Thank you. Your message has been sent.';}else{echo 'Message failed to send. Check server mail configuration.';}
?>